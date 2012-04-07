<?php $head['title'] = R_('Screenshots') ?>

<?php
function print_shots ($group, $count, $format = 'png')
{
  for ($i = 1; $i <= $count; $i++)
  {
    echo "<a href=\"http://cdn.xfce.org/about/screenshots/$group-$i.$format\">".
           "<img src=\"/images/about/screenshots/$group-$i-small.$format\" alt=\"\" width=\"200\" ".
           "height=\"150\" hspace=\"2\" vspace=\"2\" border=\"0\" />".
         "</a>";
  }
}
?>

<h1><?php echo $head['title'] ?></h1>
<p>
  <?php E_('Some screenshots of Xfce, ordered by version.') ?>
</p>

<h2>Xfce 4.8</h2>
<p>
  <?php print_shots ('4.8', 4); ?>
</p>

<h2>Xfce 4.6</h2>
<p>
  <?php print_shots ('4.6', 7); ?>
</p>

<h2>Xfce 4.4</h2>
<p>
  <?php print_shots ('4.4', 6); ?>
</p>

<h2>Xfce 4.2</h2>
<p>
  <?php print_shots ('4.2', 5, 'jpg'); ?>
</p>

<h2>Xfce 4.0</h2>
<p>
  <?php print_shots ('4.0', 2); ?>
</p>
