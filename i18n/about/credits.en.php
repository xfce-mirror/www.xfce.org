<?php
include 'include/credits.php';
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
?>
<h1>Credits</h1>
<p></p>

<h2 id="lead">Project Lead</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Core Developers</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>Contributor</h3></th>
        <th width="60%" align="left"><h3>Main Project(s)</h3></th>
    </tr>
<?php
foreach ($credits['core-developers'] as $v)
{
  $color = ($color + 1) % 2;
?>
    <tr>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>>
                <?php echo $v[0]; ?> [<?php echo $v[1], at(), $v[2]; ?>]</td>
        <td width="60%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>>
                <?php echo $v[3]; ?></td>
    </tr>
<?php
}
?>
</table>

<h2 id="server">Server and website </h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Contributor</h3></th>
        <th align="left"><h3>Contribution</h3></th>
    </tr>
<?php
foreach ($credits['server-and-website'] as $v)
{
  $color = ($color + 1) % 2;
?>
    <tr>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>>
                <?php echo $v[0]; ?> [<?php echo $v[1], at(), $v[2]; ?>]</td>
        <td width="60%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>>
                <?php echo $v[3]; ?></td>
    </tr>
<?php
}
?>
</table>

<br />
<h2 id="contributors">Contributors</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>The following people are frequent contributors of patches, ideas, bug fixes and new code:</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Active Contributors</h3></th>
    </tr>
    <tr>
<?php
foreach ($credits['contributors-active'] as $v)
{
  $line = ($line + 1) % 2;
  $color = ($line) ? ($color + 1) % 2 : $color;
?>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $v[0]; ?> [<?php echo $v[1], at(), $v[2]; ?>]</td>

    <?php echo (!$line) ? '</tr>' : ''; ?>

    <?php echo (!$line) ? '<tr>' : ''; ?>
<?php
}
?>
    <?php echo ($line) ? '<td>&nbsp;</td>' : ''; ?>
    </tr>
    <tr>
        <th colspan="2"><h3>Previous Contributors</h3></th>
    </tr>
<?php
foreach ($credits['contributors-previous'] as $v)
{
  $color = ($color + 1) % 2;
?>
    <tr>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $v[0]; ?> [<?php echo $v[1], at(), $v[2]; ?>]</td>
    </tr>
<?php
}
?>
</table>

<br />
<h2 id="goodies">Goodies</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Goodies supervision</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Translators</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Translations supervision</h3></th>
    </tr>
<?php
foreach ($credits['translators-supervision'] as $v)
{
  $color = ($color + 1) % 2;
?>
    <tr>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $v[0]; ?> [<?php echo $v[1], at(), $v[2]; ?>]</td>
    </tr>
<?php
}
?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>Language</h3></th>
        <th width="80%" align="left"><h3>Contributor(s)</h3></th>
    </tr>
<?php
ob_start ();
at ();
$at = ob_get_clean ();
foreach ($credits['translators'] as $v)
{
  $color = ($color + 1) % 2;
?>
    <tr>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $v[0]; ?> [<?php echo $v[1]; ?>]</td>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>>
<?php
    $count = 0;
    foreach ($v[2] as $w)
    {
      $count++;
      $contact = (sizeof ($w) > 2) ? $w[1].$at.$w[2] : $w[1];
      echo ($count > 1) ? ", " : "";
      echo "{$w[0]} [$contact]";
    }
?>
        </td>
    </tr>
<?php
}
?>
</table>
