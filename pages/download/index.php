<?php

$head['title'] = R_('Download');

include ('pages/versions.php');

$servers = array (
  array ('mocha.xfce.org', R_('Europe/Belgium'), 'http://mocha.xfce.org/archive/%s'),
  array ('p0llux.be', R_('Europe/France'), 'http://www.p0llux.be/xfce/archive/%s'),
  array ('tx-us.xfce.org', R_('United States/Texas'), 'http://www.tx-us.xfce.org/archive/%s'),
  array ('ca-us.xfce.org', R_('United States/California'), 'http://www.ca-us.xfce.org/archive/%s')
);

function print_servers($path)
{
  global $servers;
  foreach ($servers as $s)
    echo '  <li><a href="'.sprintf($s[2], $path).'">'.$s[0].' ('.$s[1].')</a></li>'."\n";
}

?>

<h1><?php echo $head['title'] ?></h1>

<h2 id="stable"><?php printf (R_('Stable release %s'), $stable_version) ?></h2>
<p>
  <?php E_('Most distributions ship with Xfce. But if you want a newer version or you want to build Xfce from scratch, you can find the packages below. You can also take a look at a list of Xfce-oriented distributions <a href="/download/distros">here</a>.') ?>
</p>

<p>
  <?php E_('All Xfce modules are available in one single tarball from several mirrors (in one single tarball <em>or</em> separate  tarballs):') ?>
</p>

<ul>
<?php print_servers ('xfce/'.$stable_version) ?>
</ul>

<?php if ($preview_visible) { ?>
<h2 id="unstable"><?php printf (R_('Preview release %s'), $preview_version) ?></h2>
<p>
  <?php E_('Below you can find download locations for the latest development/unstable release of Xfce. Note that this software almost certainly contains bugs, many of which might affect your desire to use it in a production environment. You should back up all configuration files before installing and using these releases. If you\'re uncertain about downloading this release, you should probably use the <a href="#stable">stable release</a> above.') ?>
</p>

<ul>
<?php print_servers ('xfce/'.$preview_version) ?>
</ul>
<?php } ?>

<h2 id="individual"><?php E_('Individual releases') ?></h2>
<p>
  <?php E_('Each package in Xfce can make idividual releases, also the core packages, to make development or stable releases. You can follow the announcements of the releases on the <a href="/community/lists">Xfce user mailing list</a>, watch the <a href="http://releases.xfce.org/feeds/project/">release feeds</a> or follow the Xfce <a href="http://identi.ca/xfce">ident.ca channel</a>.') ?>
</p>

<ul>
<?php print_servers ('src') ?>
</ul>
