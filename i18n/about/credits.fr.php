<?php
include 'include/credits.php';
include 'i18n/about/en.credits.php';
@include 'i18n/about/fr.credits.php';
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
?>
<h1>Crédits</h1>
<p></p>

<h2 id="lead">Direction du projet</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Développeurs principaux</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>Contributeur</h3></th>
        <th width="60%" align="left"><h3>Projet(s)</h3></th>
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
                <?php echo $credits['core-developers-i18n'][$v[1]]; ?></td>
    </tr>
<?php
}
?>
</table>

<h2 id="server">Serveurs et site Web</h2>
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
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $v[0]; ?> [<?php echo $v[1], at(), $v[2]; ?>]</td>
        <td width="60%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $credits['server-and-website-i18n'][$v[1]]; ?></td>
    </tr>
<?php
}
?>
</table>

<br />
<h2 id="contributors">Contributeurs</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>Les personnes suivantes sont des contributeurs fréquents de patchs, idées, correction de bogues et nouveau code :</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Contributeurs en activité</h3></th>
    </tr>
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
        <th colspan="2"><h3>Contributeurs précédents</h3></th>
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
        <th align="left"><h3>Supervision des Goodies</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Traducteurs</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Supervision des traductions</h3></th>
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
        <th width="20%" align="left"><h3>Langue</h3></th>
        <th width="80%" align="left"><h3>Contributeur(s)</h3></th>
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
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>><?php echo $credits['translators-i18n'][$v[0]]; ?> [<?php echo $v[0]; ?>]</td>
        <td width="40%"<?php echo ($color) ? ' bgcolor="#eeeeee"' : ''; ?>>
<?php
    $count = 0;
    foreach ($v[1] as $w)
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
