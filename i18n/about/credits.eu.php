<?php
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>Kredituak</h1>
<p></p>

<h2 id="lead">Proiektu Buru</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Muin Garatzaileak</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>Partehartzaileak</h3></th>
        <th width="60%" align="left"><h3>Proiektu Nagusia(k)</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">Zerbitzari eta webgunea </h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Partaidea</h3></th>
        <th align="left"><h3>Partehartzea</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">Laguntzaileak</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>Hurrengo pertsona hauek adabaki, ideia, arazo konponketa eta kode berriez lagundu dute:</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Laguntzaile Aktiboak</h3></th>
    </tr>
<?php credits_contributors_active ($credits['contributors-active'], $credits['contributors-active-i18n']); ?>
    <tr>
        <th colspan="2"><h3>Aurreko Laguntzaileak</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">Goodieak</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Goodie arduraduna</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Itzultzaileak</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Itzulpen Arduraduna</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>Hizkuntza</h3></th>
        <th width="80%" align="left"><h3>Itzultzailea(k)</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
