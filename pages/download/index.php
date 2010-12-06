<?php

include ('pages/versions.php');

$head['title'] = R_('Download');

$toc['anchors'] = array (
        'stable' => R_('Stable release'),
        'individual' => R_('Individual releases'));

if($preview_visible) {
        $toc['anchors'] += array ('unstable' => R_('Preview release'));
}

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

<p>
  <?php E_('Most distributions ship with Xfce in their own packaging format, but if you want a newer version or you want to build Xfce from scratch, you can find the packages below. You can also take a look at the list of <a href="/download/distros">Xfce-oriented distributions</a>.') ?>
</p>

<h2 id="stable"><?php printf (R_('Stable release %s'), $stable_version) ?></h2>

<p>
  <?php printf (R_('Xfce %s is the most recent version of the Xfce desktop environment. You can find the changes in this release <a href="/download/changelogs/%s">here</a>.'), $stable_version, $stable_version) ?>
</p>

<ul>
  <?php print_servers ('xfce/'.$stable_version) ?>
</ul>

<h2 id="individual"><?php E_('Individual releases') ?></h2>
<p>
  <?php E_('Each package in Xfce can make idividual stable or development releases, including the core packages (as discribed in the <a href="/development/releasemodel">release model</a>). You can follow the announcements of the releases on the <a href="/community/lists">Xfce users mailing list</a>, watch the <a href="http://releases.xfce.org/feeds/project/">release feeds</a> or follow the Xfce <a href="http://identi.ca/xfce">ident.ca channel</a>.') ?>
</p>

<ul>
  <?php print_servers ('src') ?>
</ul>

<?php if ($preview_visible) { ?>
<h2 id="unstable"><?php printf (R_('Preview release %s'), $preview_version) ?></h2>
<p>
  <?php printf (R_('Xfce %s is the latest development release of the Xfce desktop environment. This release should not be used in a production environments. If you are uncertain about downloading this release, you should probably use the <a href="#stable">stable release</a> above. You can find the changes in this release <a href="/download/changelogs/%s">here</a>.'), $preview_version, $preview_version) ?>
</p>

<ul>
  <?php print_servers ('xfce/'.$preview_version) ?>
</ul>
<?php } ?>
