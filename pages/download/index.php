<?php

include ('pages/versions.php');

$head['title'] = R_('Download');

?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('Most distributions ship with Xfce in their own packaging format, but if you want a newer version or you want to build Xfce from scratch, you can find the packages below. Instructions how to compile Xfce can be found <a href="https://docs.xfce.org/xfce/building" class="external">here</a>.') ?>
</p>

<h2 id="stable"><?php printf (R_('Stable release %s'), $stable_version) ?></h2>

<p>
  <?php printf (R_('Xfce %s is the most recent version of the Xfce desktop environment. You can find the changes in this release <a href="/download/changelogs/%s">here</a>.'), $stable_version, $stable_version) ?>
</p>

<ul>
  <li><a href="http://archive.xfce.org/xfce/<?php echo $stable_version ?>/">http://archive.xfce.org/xfce/<?php echo $stable_version ?>/</a></li>
</ul>

<h2 id="individual"><?php E_('Individual releases') ?></h2>
<p>
  <?php E_('Each package in Xfce can make individual stable or development releases, including the core packages (as described in the <a href="/about/releasemodel">release model</a>). You can follow the announcements of the releases on the <a href="/community/lists">Xfce users mailing list</a>, watch the <a href="http://archive.xfce.org/feeds/project/">release feeds</a> or follow the Xfce <a href="https://twitter.com/xfceofficial">Twitter account</a>.') ?>
</p>

<ul>
  <li><a href="http://archive.xfce.org/src/">http://archive.xfce.org/src/</a></li>
</ul>

<?php if ($preview_visible) { ?>
<h2 id="unstable"><?php printf (R_('Preview release %s'), $preview_version) ?></h2>
<p>
  <?php printf (R_('Xfce %s is the latest development release of the Xfce desktop environment. This release should not be used in a production environments. If you are uncertain about downloading this release, you should probably use the <a href="#stable">stable release</a> above. You can find the changes in this release <a href="/download/changelogs/%s">here</a>.'), $preview_version, $preview_version) ?>
</p>

<ul>
  <li><a href="http://archive.xfce.org/xfce/<?php echo $preview_version ?>/">http://archive.xfce.org/xfce/<?php echo $preview_version ?>/</a></li>
</ul>

<?php } ?>

<h2 id="distros"><?php E_('Distributions') ?></h2>
<p>
  <?php E_('A lot of different distributions provide Xfce packages. Popular examples built around Xfce are <a href="https://xubuntu.org/">Xubuntu</a>, the <a href="https://spins.fedoraproject.org/xfce/">Fedora Xfce Spin</a>, <a href="https://manjaro.org/get-manjaro/">Manjaro</a> or <a href="http://zenwalkgnulinux.blogspot.com/">Zenwalk</a>, but there is a good chance your favorite distro provides packages as well.') ?>
</p>
<p>
  <?php printf (R_('You can find a more complete list at <a href="https://distrowatch.com/search.php?pkg=xfdesktop&amp;pkgver=%s">DistroWatch.com</a>.'), $stable_version) ?>
</p>

<h2 id="artwork"><?php E_('Artwork') ?></h2>
<p>
  <?php printf (R_('You can download the Xfce artwork tarball <a href="%s">here</a>. It contains some high-quality logos and banners. Copying of the Xfce logo is subject to the LGPL copyright license.'),
                $static_media .'/downloads/xfce_artwork.tar.bz2') ?>
</p>
