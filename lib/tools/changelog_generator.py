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

def parse_changelog(changelog):

    # Split the content into version blocks
    version_blocks = re.split(r'\n(?=\d+\.\d+\.\d+)', changelog.strip())

    changelog = []

    for block in version_blocks:
        lines = block.strip().split('\n')
        
        # Parse version and date
        version_line = lines[0]
        version_match = re.match(r'(\d+\.\d+\.\d+)\s*\((\d{4}-\d{2}-\d{2})\)', version_line)
        
        if version_match:
            version = version_match.group(1)
            date_str = version_match.group(2)
            date = datetime.strptime(date_str, '%Y-%m-%d').date()
            
            # Parse changes
            changes = [line.strip('- ') for line in lines[2:] if line.strip().startswith('-')]
            
            changelog.append({
                'version': version,
                'date': date,
                'changes': changes
            })

    return changelog

def transform_issue_numbers(package, line):
    base_url = xfce_gitlab_url + "/" + package + "/-/issues/"
    
    def replace_func(match):
        issue_number = match.group(1)
        return f'<a href="{base_url}{issue_number}">#{issue_number}</a>'
    
    pattern = r'#(\d+)'
    transformed_line = re.sub(pattern, replace_func, line)
    
    return transformed_line

def generate_html(package, package_label, changelog, start_version):

    html_lines = []

    html_lines.append (f"<h2>{package_label} <em>({package})</em></h2>")
    html_lines.append ("<ul>")

    # Find the indices of the start and end versions
    start_index = next((i for i, entry in enumerate(changelog) if entry['version'] == start_version), None)

    # Generate HTML for each line
    for entry in changelog[0:start_index+1]:
        for change in entry['changes']:
            html_line = f"   <li>{change}</li>"
            html_line = transform_issue_numbers (package, html_line)
            html_lines.append (html_line)

    html_lines.append ("</ul>")

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
    file.write(f"<p>Important: The changelogs displayed here reflect updates made since the version of the components included with Xfce {old_version_string}.</p>\n\n")
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
        changelog = download_news_file (package_name)
        parsed_changelog = parse_changelog (changelog)
        html_output = generate_html(package_name, package_label, parsed_changelog, dev_version_string)
        #print(html_output)
        file.write(html_output)

    file.close()
    print(f"\nDraft of PHP file has been written to '{output_filename}'\n")
    print(f"!! Please note that it is required to drop all irrelevant lines by hand !!")

if __name__ == "__main__":
    main()