<?php
 function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>Kredite</h1>
<p></p>

<h2 id="lead">Udhëheqës i Projektit</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Bërthama Zhvilluese</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>Pjesëmarrësa</h3></th>
        <th width="60%" align="left"><h3>Projekti(et) Kryesor(e)</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">Shërbyes dhe <em>site</em> web </h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Pjesëmarrës</h3></th>
        <th align="left"><h3>Fusha</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">Pjesëmarrësa</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>Personat vijues janë pjesëmarrësa të zakonshëm me arnime, ide, ndreqje <em>bug</em>-esh dhe kod të ri:</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Pjesëmarrësa Aktivë</h3></th>
    </tr>
<?php credits_contributors_active ($credits['contributors-active'], $credits['contributors-active-i18n']); ?>
    <tr>
        <th colspan="2"><h3>Pjesëmarrësa të Dikurshëm</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">"Goodies"</></h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Mbikqyrje për "goodies"</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Përkthyesa</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Mbikqyrje përkthimesh</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>Gjuhë</h3></th>
        <th width="80%" align="left"><h3>Pjesëmarrës(a)</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
