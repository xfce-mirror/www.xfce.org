<?php
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>クレジット</h1>
<p></p>

<h2 id="lead">プロジェクトリーダ</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">中心開発者</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>貢献者</h3></th>
        <th width="60%" align="left"><h3>主要なプロジェクト</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">サーバとウェブサイト</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>貢献者</h3></th>
        <th align="left"><h3>貢献</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">貢献者</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>以下の人々は、パッチ、考え、バグ修正や新しいコードをよく投げてくれる貢献者たちです:</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>今も貢献し続けている貢献者</h3></th>
    </tr>
    <tr>
<?php credits_contributors_active ($credits['contributors-active'], $credits['contributors-active-i18n']); ?>
    <tr>
        <th colspan="2"><h3>以前に貢献した方々</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">Goodies</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Goodies の総管理</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">翻訳者</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>翻訳の総管理</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>言語</h3></th>
        <th width="80%" align="left"><h3>貢献者</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
