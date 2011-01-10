<?php

include ('pages/versions.php');

$head['title'] = R_('Download');

$toc['anchors'] = array (
        'stable' => R_('Stable release'),
        'individual' => R_('Individual releases'));

if($preview_visible) {
        $toc['anchors'] += array ('unstable' => R_('Preview release'));
}

$mirrors = array (
  'archive.be.xfce.org' => R_('Europe/Belgium'),
  'archive.be2.xfce.org' => R_('Europe/Belgium'),
  'archive.se.xfce.org' => R_('Europe/Sweden'),
  //'archive.ca-us.xfce.org' => R_('United States/California'),
  //'archive.in-us.xfce.org' => R_('United States/Indiana'),
  //'archive.tx-us.xfce.org' => R_('United States/Texas'),
);

function print_mirrors($path, $group)
{
  global $mirrors;

  echo '  <ul>'."\n";

  if (isset($_GET['g']) && $_GET['g'] == $group)
  {
    foreach ($mirrors as $m => $l)
    {
      $url = 'http://'.$m.'/'. $path;
      echo '    <li><a href="'.$url.'">'.$m.'</a> ('.$l.')</li>'."\n";
    }
  }
  else
  {
    echo '    <li><a href="http://archive.xfce.org/'.$path.'">archive.xfce.org</a> '.
         '<a href="?g='.$group.'#'.$group.'">(', R_('mirror list') .'</a>)'."</li>\n";
  }

  echo '  </ul>'."\n";
}

?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('Most distributions ship with Xfce in their own packaging format, but if you want a newer version or you want to build Xfce from scratch, you can find the packages below. Instructions how to compile Xfce can be found <a href="/download/building">here</a>. You can also take a look at the list of <a href="/download/distros">Xfce-oriented distributions</a>.') ?>
</p>

<h2 id="stable"><?php printf (R_('Stable release %s'), $stable_version) ?></h2>

<p>
  <?php printf (R_('Xfce %s is the most recent version of the Xfce desktop environment. You can find the changes in this release <a href="/download/changelogs/%s">here</a>.'), $stable_version, $stable_version) ?>
</p>

<?php print_mirrors ('xfce/'.$stable_version, 'stable') ?>

<h2 id="individual"><?php E_('Individual releases') ?></h2>
<p>
  <?php E_('Each package in Xfce can make idividual stable or development releases, including the core packages (as discribed in the <a href="/about/releasemodel">release model</a>). You can follow the announcements of the releases on the <a href="/community/lists">Xfce users mailing list</a>, watch the <a href="http://releases.xfce.org/feeds/project/">release feeds</a> or follow the Xfce <a href="http://identi.ca/xfce">identi.ca channel</a>.') ?>
</p>

<?php print_mirrors ('src', 'individual') ?>

<?php if ($preview_visible) { ?>
<h2 id="unstable"><?php printf (R_('Preview release %s'), $preview_version) ?></h2>
<p>
  <?php printf (R_('Xfce %s is the latest development release of the Xfce desktop environment. This release should not be used in a production environments. If you are uncertain about downloading this release, you should probably use the <a href="#stable">stable release</a> above. You can find the changes in this release <a href="/download/changelogs/%s">here</a>.'), $preview_version, $preview_version) ?>
</p>

<?php print_mirrors ('xfce/'.$preview_version, 'unstable') ?>

<?php } ?>
