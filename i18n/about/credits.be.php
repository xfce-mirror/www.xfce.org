<?php
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>Падзякі</h1>
<p></p>

<h2 id="lead">Лідэр праэкту</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">Асноўныя распрацоўнікі</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>Укладальнік</h3></th>
        <th width="60%" align="left"><h3>Асноўны праект(ы)</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">Паслужнік і сайт</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Укладальнік</h3></th>
        <th align="left"><h3>Унёсак</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">Укладальнікі</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>Наступныя людзі частыя ўкладальнікі латак, ідэяў, выпраўленьняў памылак і новага коду:</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>Актыўныя ўкладальнікі</h3></th>
    </tr>
    <tr>
        <th colspan="2"><h3>Ранейшыя ўкладальнікі</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">Goodies</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Адказны за Goodies</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">Перакладальнікі</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Адказны за пераклады</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>Мова</h3></th>
        <th width="80%" align="left"><h3>Укладальнік(і)</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
