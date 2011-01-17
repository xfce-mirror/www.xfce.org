<?php

$head['title'] = R_('Building');

$toc['anchors'] = array (
        'version' => R_('Version'),
        'source' => R_('Source'),
        'dependencies' => R_('Dependencies'),
        'building' => R_('Building'),
        'help' => R_('Help'));
?>


<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('To compile a complete Xfce desktop from source requires some information about the dependency chain and the various configure options available in each module. This page will describe this in detail, so you can compile your own Xfce desktop; both system wide as well as in your $HOME directory.') ?>
</p>

<h2 id="version"><?php E_('Version') ?></h2>
<p>
  <?php E_('First you need to decide which version of Xfce you want to compile. Version numbers are mostly build like this: 1.2.3 => major.minor.micro. If the minor version is an even number, it is a stable release, odd number are development snapshots. The micro number increases each release. Also keep the major.minor version the same for the core components (some packages don\'t follow those numbers) else you will most likely get dependency version problems during compiling.') ?>
</p>

<p>
  <?php E_('The latest releases available can be found on the <a href="/download">download page</a>. You can also build from the source repositories if you have enough experience, more about that below.') ?>
</p>

<h2 id="source"><?php E_('Source') ?></h2>
<p>
  <?php E_('If you\'ve decided which version you want to compile, there are a couple of ways to download the source code. You can choose to build official released packages or clone the source repositories. Choosing the released packages is recommended here; the source repositories could be broken and are not suitable for production environments, but on the other hand always contains the latest features, bug fixes and translations.') ?>
</p>

<p>
  <?php E_('If your not sure what to choose: easiest is to start with the latest stable fat-tarball of a collection release.') ?>
</p>

<h3><?php E_('Released packages') ?></h3>
<p>
  <?php E_('Xfce packages have two types of releases. Click the links to open the the download locations.') ?>
</p>

<ul>
  <li><a href="http://archive.xfce.org/xfce/" class="external"><?php E_('Collection releases of the core modules') ?></a>
    <p>
      <?php E_('From time to time a new collection release if Xfce is made. A collection release consists of a number of individual tarballs and a fat-tarball that contains all the individual tarballs.') ?>
    </p>

    <p>
      <?php E_('The collection releases always contain the correct versions to build the other packages in the release. If you want the latest version of each package, you can start with a collection release and then look for individual bug fix releases, explained in the item below.') ?>
    </p>
  </li>

  <li><a href="http://archive.xfce.org/src/xfce/" class="external"><?php E_('Individual releases') ?></a>
    <p>
      <?php E_('Each package in Xfce is allowed to make development and stable releases at any time, see the <a href="/about/releasemodel">release model</a> documentation for more information.') ?>
    </p>
  </li>
</ul>

<h3><?php E_('From the code repository') ?></h3>
<p>
  <?php E_('For the latest code you need to make local copies of the GIT repositories, this is the place where developers submit their code. It you decide to use GIT, try to use the same branch for all the packages to avoid dependency version problems.') ?>
</p>

<p>
  <?php E_('You first need to make clones of each GIT repository, like the command below, where <em>$category</em> is for example <em>xfce</em> and <em>$module</em> <em>xfce4-panel</em>. If you click on a module in the online <a href="http://git.xfce.org/xfce" class="external">repository list</a> the clone uri is shown at the buttom of the page.') ?>
</p>

<p>
  <code>git clone git://git.xfce.org/$category/$module</code>
</p>

<p>
  <?php E_('After the repository is cloned you need to choose which branch you want to compile. By default the <em>master</em> branch is selected, but there are also branches for stable releases like <em>xfce-4.6</em>. The stable branches contain the latest bug fixes without any major new feature, the <em>master</em> branch is the development version for the next release of Xfce. Both should not be used in a production environment.') ?>
</p>

<p>
  <?php E_('To switch to another branch (<em>git branch -a</em> lists all available branches) run the following command inside the cloned directory to switch to, for example, the <em>xfce-4.6</em> branch:') ?>
</p>

<p>
  <code>git checkout --track origin/xfce-4.6</code>
</p>

<p>
  <?php E_('After this you can update your local copy of the repository with <em>git pull</em> and switch to another branch with <em>git checkout $branchname</em>. Read the <a href="http://git-scm.com/documentation" class="external">GIT manuals</a> for more information about using GIT.') ?>
</p>

<h2 id="dependencies"><?php E_('Dependencies')?></h2>

<h3><?php E_('Build requirements')?></h3>
<p>
  <?php E_('Before you can start compiling, you need a couple of packages that are required to compile Xfce. Use your distributions package manager to install those packages. Additional packages are required too for some modules, but we\'ll get to that later.') ?>
</p>

<ul>
  <li><a href="http://en.wikipedia.org/wiki/GNU_toolchain" class="external"><?php E_('A working GNU toolchain')?></a></li>
  <li><?php E_('Gtk+ and Glib headers, in some distributions called the <em>-devel</em> packages')?>
    <ul>
      <li><?php E_('Xfce 4.8 requires Gtk+ 2.14 and Glib 2.20')?></li>
      <li><?php E_('Xfce 4.6 requires Gtk+ 2.10 and Glib 2.12')?></li>
    </ul>
  </li>
  <li>pkgconfig</li>
  <li><?php E_('Coffee') ?></li>
</ul>


<h3><?php E_('Xfce\'s dependency chain') ?></h3>
<p>
  <?php E_('The Xfce packages need to be built in a specific order. If you don\'t follow this, compile options might not be available or the configure stage will abort because of missing dependencies.') ?>
</p>

<ul>
  <li>xfce4-dev-tools (<?php E_('only required if you build from GIT') ?>)</li>
  <li>libxfce4util</li>
  <li>xfconf</li>
  <li>libxfce4ui (<?php E_('new in 4.8') ?>), libxfcegui4 (<?php E_('deprecated since 4.8') ?>), libxfce4menu (<?php E_('deprecated since 4.8') ?>), garcon (<?php E_('new in 4.8') ?>) &amp; exo</li>
  <li>xfce4-panel</li>
  <li>thunar</li>
  <li>xfce4-settings, xfce4-session, xfdesktop, xfwm4, xfce-utils, xfce4-appfinder, ...</li>
</ul>


<h3><?php E_('Package specific dependencies') ?></h3>
<p>
  <?php E_('Some core packages in Xfce have addition or optional dependencies, all are listed in the table below for the latest stable version. We only show the top package as dependency (so xfce4-panel also requires gtk+, but libxfce4ui already depends on that). Note that some of the package names may vary between distributions.') ?>
</p>

<table>
  <tr>
    <th>Package</th>
    <th>Dependency(-ies)</th>
    <th>Optional Dependency(-ies)</th>
  </tr>
    <tr>
    <td>xfce4-dev-tools</td>
    <td>autoconf, automake, intltool, pkgconfig</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4util</td>
    <td>glib</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4ui</td>
    <td>libxfce4util, gtk+</td>
    <td>xfconf, libstartup-notification, libgladeui</td>
  </tr>
   <tr>
    <td>xfconf</td>
    <td>libxfce4util, dbus-glib</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfcegui4</td>
    <td>libxfce4util, gtk+, libglade</td>
    <td>libstartup-notification, libgladeui, xfconf</td>
  </tr>
  <tr>
    <td>exo</td>
    <td>libxfce4util, gtk+, perl-uri</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-panel</td>
    <td>libxfce4ui, exo, garcon, libwnck</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>thunar</td>
    <td>libxfce4ui, exo, libpng, gtk+, glib</td>
    <td>libexif, dbus-glib, gconf, libstartup-notification, freetype, libjpeg, libxfce4panel, xfconf</td>
  </tr>
  <tr>
    <td>xfce4-settings</td>
    <td>libxfce4ui, exo, xfconf, dbus-glib, libXi, libXrandr</td>
    <td>libXcursor, libnotify</td>
  </tr>
  <tr>
    <td>xfce4-session</td>
    <td>libxfce4ui, perl-xml-parser, libwnck, dbus-glib</td>
    <td>gnome-keyring, gconf</td>
  </tr>
  <tr>
    <td>xfwm4</td>
    <td>libxfce4util, libxfcegui4, libxfconf, dbus-glib, libwnck</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>xfdesktop</td>
    <td>libxfce4ui, xfconf, libwnck</td>
    <td>exo, thunarx, garcon, libnotify</td>
  </tr>
  <tr>
    <td>xfce4-appfinder</td>
    <td>libxfce4ui, garcon</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce-utils</td>
    <td>libxfce4ui</td>
    <td>dbus-glib</td>
  </tr>
  <tr>
    <td nowrap="nowrap">gtk-xfce-engine-2</td>
    <td>gtk+</td>
    <td>&nbsp;</td>
  </tr>
</table>

<h2 id="building"><?php E_('Building') ?></h2>
<h3><?php E_('Insallation location and variables')?></h3>
<p>
  <?php E_('Now it is finally time to start compiling the Xfce desktop. Last remaining thing is to choose an installation location. Possible examples are <em>/usr</em>, <em>/usr/local</em> and <em>/opt/xfce4</em> for a system-wide installation or <em>$HOME/local</em> if you want to install in your home directory (whatever you choose, never put spaces in the name). We will referrer to this location as <em>${PREFIX}</em> in the code examples below!') ?>
</p>

<p>
  <?php E_('You need to make sure the <em>PKG_CONFIG_PATH</em> variable include the path to the *.pc files installed by the Xfce libraries:') ?>
</p>

<p>
  <code>export PKG_CONFIG_PATH=&quot;${PREFIX}/lib/pkgconfig:$PKG_CONFIG_PATH&quot;</code>
</p>

<p>
  <?php E_('You can also set some optimization flags for the compiler. This may speed up Xfce, but can also make debugging impossible on some systems. Even worse, this can also cause gcc to generate broken code, so be carefull with this. The line below should be safe for most system.') ?>
</p>

<p>
  <code>export CFLAGS=&quot;-O2 -pipe&quot;</code>
</p>

<h3><?php E_('Compiling and installing') ?></h3>
<p>
  <?php E_('Next step is compiling the various packages following the dependency chain above. If you have downloaded the tarballs, you need to unpack them before going on. Inside each package directory you should run the following command:') ?>
</p>

<p>
  <code>./configure --prefix=${PREFIX} &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>
  <?php E_('To build from GIT you need to install the xfce4-dev-tools package first, all other packages should be installed with this command:') ?>
</p>

<p>
  <code>./autogen.sh --enable-maintainer-mode --prefix=${PREFIX} &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>
  <?php E_('Specific configure options for each package can be shown with <em>./configure --help</em>. Note that most packages benefit if you pass the configure option <em>--disable-debug</em>, however if you want to provide backtraces or test new code, no <em>CFLAGS</em>, no binary stripping and <em>--enable-debug=full</em> are recommended.') ?>
</p>

<h2 id="help"><?php E_('Help') ?></h2>
<p>
  <?php E_('Hopefully everything went fine after reading this guide. If you still have problems or questions you can ask on the <a href="/community#mail">Xfce users mailing list</a>, the <a href="http://forum.xfce.org" class="external">forum</a> or ask distribution related questions on their forums and mailing lists.') ?>
</p>

<p>
  <?php E_('Have fun building Xfce!') ?>
</p>
