<?php
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>Riconoscimenti</h1>
<p></p>

<h2 id="lead">Capo progetto</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Sviluppatori</h2>
<table cellpadding="3" width="99%">
    <tr>
        <th width="40%" align="left"><h3>Collaboratori</h3></th>
        <th width="60%" align="left"><h3>Progetti principali</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">Server e sito web </h2>
<table cellpadding="3" width="99%">
    <tr>
        <th align="left"><h3>Collaboratori</h3></th>
        <th align="left"><h3>Contributo</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">Collaboratori</h2>
<table cellpadding="3" width="99%">
    <tr>
        <td colspan="2"><strong>Le seguenti persone contribuiscono frequentemente con patch, idee, bug-fix e nuovo codice:</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Collaboratori attivi</h3></th>
    </tr>
<?php credits_contributors_active ($credits['contributors-active'], $credits['contributors-active-i18n']); ?>
    <tr>
        <th colspan="2"><h3>Collaboratori precedenti</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">"Goodies"</h2>
<table cellpadding="3" width="99%">
    <tr>
        <th align="left"><h3>Supervisione dei "Goodies"</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Traduttori</h2>
<table cellpadding="3" width="99%">
    <tr>
        <th align="left"><h3>Supervisione alle traduzioni</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table cellpadding="3" width="99%">
    <tr>
        <th width="20%" align="left"><h3>Lingua</h3></th>
        <th width="80%" align="left"><h3>Collaboratori</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
