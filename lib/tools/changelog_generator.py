import re
import requests
from datetime import datetime
import sys

xfce_gitlab_url = "https://gitlab.xfce.org/xfce"
xfce_core_packages = [
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
      ("xfwm4", "Window Manager")
]

def parse_news(news):

    # Split the content into version blocks
    version_blocks = re.split(r'\n(?=\d+\.\d+\.\d+)', news.strip())

    new_parsed = []

    for block in version_blocks:
        lines = block.strip().split('\n')
        
        # Parse version and date
        version_line = lines[0]
        version_match = re.match(r'(\d+\.\d+\.\d+)\s*\((\d{4}-\d{2}-\d{2})\)', version_line)
        
        if version_match:
            version = version_match.group(1)

            # Parse changes
            changes = [line.strip('- ') for line in lines[2:] if line.strip().startswith('-')]
            
            new_parsed.append({
                'version': version,
                'changes': changes
            })

    return new_parsed

def link_issue_and_merge_request_numbers(package, line):
    base_url = xfce_gitlab_url + "/" + package
    
    def replace_match(match):
            prefix, number = match.groups()
            if prefix == '#':
                return f'<a href="{base_url}/-/issues/{number}">#{number}</a>'
            elif prefix == '!':
                return f'<a href="{base_url}/-/merge_requests/{number}">!{number}</a>'

    pattern = r'(#|!)(\d+)'
    return re.sub(pattern, replace_match, line)

def generate_html(package, package_label, parsed_news, start_version):

    html_lines = []

    html_lines.append (f'<h2><a href="{xfce_gitlab_url}/{package}">{package_label}</a> <em>({package})</em></h2>')
    html_lines.append ("<ul>")

    # Find the indices of the start and end versions
    start_index = next((i for i, entry in enumerate(parsed_news) if entry['version'] == start_version), None)

    # Generate HTML for each line
    for version_block in parsed_news[0:start_index+1]:
        for line in version_block['changes']:

            # Skip some stuff of minor interest
            if "Translation Updates:" in line or "Update copyright year" in line:
                continue

            html_line = f"   <li>{line}</li>"
            html_line = link_issue_and_merge_request_numbers (package, html_line)
            html_lines.append (html_line)

    html_lines.append ("</ul>\n\n")

    return "\n".join(html_lines)

def download_news_file (package):

    url = xfce_gitlab_url + "/" + package + "/-/raw/master/NEWS?ref_type=heads"
    response = requests.get(url)

    if response.status_code != 200:
        url = xfce_gitlab_url + "/" + package + "/-/raw/main/NEWS?ref_type=heads" #xfce4windowing has "main"
        response = requests.get(url)

    if response.status_code != 200:
        raise Exception(f"Failed to retrieve the file. Status code: {response.status_code}")

    #print(response.text)
    return response.text; 

def print_help(name):
    print(f"\nUsage: {name} <Xfce Version>\n")

    print(f"E.g. '{name} 20' for a changelog of Xfce 4.20\n")

    print("This is a changelog generator in order to automatically generate a html changelog,")
    print("based on the NEWS files of all core-components.")
    print("Mentions of issue numbers will automatically be creates as html links")
    print("See available changelogs in 'www.xfce.org/pages/download/changelogs/'")

def main():

    if (len(sys.argv) == 1):
        print_help(sys.argv[0])
        exit(0)
    if (sys.argv[1] == "-h" or sys.argv[1] == "--help"):
        print_help(sys.argv[0])
        exit(0)
    release_version = int (sys.argv[1])

    output_filename = "output.html"
    release_version = 20

    release_version_string = f'4.{release_version}'
    dev_version_string = f'4.{release_version-1}.0'
    old_version_string = f'4.{release_version-2}'

    # Start a new file (overwrite any existing file)
    # Print the default header
    file = open(output_filename, "w")
    file.write(f"<?php $head['title'] = 'Xfce {release_version_string} Changelog'; ?>\n")
    file.write(f"<h1>Xfce {release_version_string} Changelog</h1>\n\n")

    file.write(f"<p>This changelog summary shows relevant user facing changes made since Xfce {old_version_string}.</p>\n")

    file.write(f"<p>To keep this summary changelog readable, this page provides a simplified extraction of each components' full changelog.\n")
    file.write(f"If you are interested in the full, unmodified changelog of a specific component, please follow the component link and open the according NEWS file.</p>\n\n")


    file.write("<h2>Dependency changes</h2>\n")
    file.write("<ul>\n")
    file.write("   <li>glib-2.0 &gt;= ??? - Same version for gmodule-2.0, gobject-2.0, gthread-2.0, gio-2.0 and gdbus</li>\n")
    file.write("   <li>TODO fill manually</li>\n")
    file.write("</ul>\n\n")
    file.close()

    file = open(output_filename, "a")
    for package in xfce_core_packages:
        package_name = package[0]
        package_label = package[1]
        print ("generating html for package " + package_name)

        news_lines = download_news_file (package_name)
        parsed_news = parse_news (news_lines)
        html_output = generate_html(package_name, package_label, parsed_news, dev_version_string)

        #print(html_output)
        file.write(html_output)

    file.close()
    print(f"\nDraft of PHP file has been written to '{output_filename}'\n")
    print(f"!! Please note that it is required to drop all irrelevant lines by hand !!")

if __name__ == "__main__":
    main()