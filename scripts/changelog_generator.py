"""Generate a changelog markdown file from Xfce core components' NEWS files."""

import re
import sys

import requests

XFCE_GITLAB_URL = "https://gitlab.xfce.org/xfce"
XFCE_CORE_PACKAGES = [
    ("exo", "Extension Library"),
    ("garcon", "Menu Library"),
    ("libxfce4ui", "Widget Library"),
    ("libxfce4util", "Utility Library"),
    ("libxfce4windowing", "Windowing Abstraction Library"),
    ("thunar", "File Manager"),
    ("thunar-volman", "Volume Manager"),
    ("tumbler", "Thumbnail Generator"),
    ("xfce4-appfinder", "Application Finder"),
    ("xfce4-dev-tools", "Development Tools"),
    ("xfce4-panel", "Panel"),
    ("xfce4-power-manager", "Power Manager"),
    ("xfce4-session", "Session Manager"),
    ("xfce4-settings", "Settings Manager"),
    ("xfconf", "Configuration Manager"),
    ("xfdesktop", "Desktop Manager"),
    ("xfwm4", "Window Manager"),
]


def parse_news(news):
    version_blocks = re.split(r'\n(?=\d+\.\d+\.\d+)', news.strip())
    parsed = []

    for block in version_blocks:
        lines = block.strip().split('\n')
        version_match = re.match(r'(\d+\.\d+\.\d+)\s*\((\d{4}-\d{2}-\d{2})\)', lines[0])

        if version_match:
            changes = [line.strip('- ') for line in lines[2:] if line.strip().startswith('-')]
            parsed.append({
                'version': version_match.group(1),
                'changes': changes,
            })

    return parsed


def link_issues_and_mrs(package, line):
    base_url = f"{XFCE_GITLAB_URL}/{package}"

    def replace_match(match):
        prefix, number = match.groups()
        if prefix == '#':
            return f'[#{number}]({base_url}/-/issues/{number})'
        elif prefix == '!':
            return f'[!{number}]({base_url}/-/merge_requests/{number})'

    return re.sub(r'(#|!)(\d+)', replace_match, line)


def generate_markdown(package, package_label, parsed_news, start_version):
    lines = []
    lines.append(f'## [{package_label}]({XFCE_GITLAB_URL}/{package}) *({package})*\n')

    start_index = next(
        (i for i, entry in enumerate(parsed_news) if entry['version'] == start_version),
        None,
    )

    for version_block in parsed_news[0:start_index + 1]:
        for change in version_block['changes']:
            if "Translation Updates:" in change or "Update copyright year" in change:
                continue
            lines.append(f'- {link_issues_and_mrs(package, change)}')

    lines.append('')
    return '\n'.join(lines)


def download_news_file(package):
    for branch in ('master', 'main'):
        url = f"{XFCE_GITLAB_URL}/{package}/-/raw/{branch}/NEWS?ref_type=heads"
        response = requests.get(url)
        if response.status_code == 200:
            return response.text

    raise Exception(f"Failed to retrieve NEWS for {package}")


def main():
    if len(sys.argv) < 2 or sys.argv[1] in ('-h', '--help'):
        print(f"\nUsage: {sys.argv[0]} <Xfce minor version number>")
        print(f"\nE.g. '{sys.argv[0]} 22' for a changelog of Xfce 4.22\n")
        print("Generates a markdown changelog draft from NEWS files of all core components.")
        print("Output goes to content/download/changelogs/<version>.md")
        print("\n!! Please note that it is required to drop all irrelevant lines by hand !!")
        sys.exit(0)

    release_version = int(sys.argv[1])
    release_version_string = f'4.{release_version}'
    dev_version_string = f'4.{release_version - 1}.0'
    old_version_string = f'4.{release_version - 2}'

    output_filename = f'content/download/changelogs/{release_version_string}.md'

    frontmatter = f"""---
title: "Xfce {release_version_string} Changelog"
version: "{release_version_string}"
group: "{release_version_string}"
weight: 100
hasToc: true
---"""

    body = f"""{frontmatter}

This changelog summary shows relevant user facing changes made since Xfce {old_version_string}.

To keep this summary changelog readable, this page provides a simplified extraction of each components' full changelog. If you are interested in the full, unmodified changelog of a specific component, please follow the component link and open the according NEWS file.

## Dependency changes

- glib-2.0 >= ??? - Same version for gmodule-2.0, gobject-2.0, gthread-2.0, gio-2.0 and gdbus
- TODO fill manually

"""

    for package_name, package_label in XFCE_CORE_PACKAGES:
        print(f"Generating changelog for {package_name}...")
        news = download_news_file(package_name)
        parsed = parse_news(news)
        body += generate_markdown(package_name, package_label, parsed, dev_version_string)
        body += '\n'

    with open(output_filename, 'w') as f:
        f.write(body)

    print(f"\nDraft written to '{output_filename}'")
    print("!! Please note that it is required to drop all irrelevant lines by hand !!")


if __name__ == "__main__":
    main()
