<?php $head['title'] = R_('Screenshots') ?>

<?php
function print_shots ($group, $count, $format = 'png')
{
  global $static_media;

  for ($i = 1; $i <= $count; $i++)
  {
    echo "<a href=\"$static_media/about/screenshots/$group-$i.$format\">".
           "<img src=\"$static_media/about/screenshots/$group-$i-small.jpg\" alt=\"$group-$i\" ".
           "hspace=\"2\" vspace=\"2\" align=\"top\" border=\"0\" />".
         "</a>";
  }
}
?>

<h1><?php echo $head['title'] ?></h1>
<p>
  <?php E_('Some screenshots of Xfce, ordered by version.') ?>
</p>

<h2><?php E_('Xfce 4.20') ?></h2>
<p>
  <?php print_shots ('4.20', 1); ?>
</p>

<h2><?php E_('Xfce 4.18') ?></h2>
<p>
  <?php print_shots ('4.18', 1); ?>
</p>

<h2><?php E_('Xfce 4.16') ?></h2>
<p>
  <?php print_shots ('4.16', 1); ?>
</p>

<h2><?php E_('Xfce 4.14') ?></h2>
<p>
  <?php print_shots ('4.14', 5); ?>
</p>

<h2><?php E_('Xfce 4.12') ?></h2>
<p>
  <?php print_shots ('4.12', 3); ?>
</p>

<h2><?php E_('Xfce 4.10') ?></h2>
<p>
  <?php print_shots ('4.10', 4); ?>
</p>

<h2><?php E_('Xfce 4.8') ?></h2>
<p>
  <?php print_shots ('4.8', 4); ?>
</p>

<h2><?php E_('Xfce 4.6') ?></h2>
<p>
  <?php print_shots ('4.6', 7); ?>
</p>

<h2><?php E_('Xfce 4.4') ?></h2>
<p>
  <?php print_shots ('4.4', 6); ?>
</p>

<h2><?php E_('Xfce 4.2') ?></h2>
<p>
  <?php print_shots ('4.2', 5, 'jpg'); ?>
</p>

<h2><?php E_('Xfce 4.0') ?></h2>
<p>
  <?php print_shots ('4.0', 2); ?>
</p>
