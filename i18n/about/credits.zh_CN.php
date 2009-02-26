<?php
function at(){
  echo '<img src="/layout/images/mail.png" alt="" width="10" height="10" hspace="2" border="0" />';
}
include 'i18n/about/en.credits.php';
@include 'i18n/about/'.$lang.'.credits.php';
include 'include/credits.php';
?>
<h1>致谢名单</h1>
<p></p>

<h2 id="lead">项目领导</h2>
<table width="99%">
    <tr>
        <td>Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="core">核心开发者</h2>
<table width="99%">
    <tr>
        <th width="40%" align="left"><h3>贡献者</h3></th>
        <th width="60%" align="left"><h3>主要项目</h3></th>
    </tr>
<?php credits_core_developers ($credits['core-developers'], $credits['core-developers-i18n']); ?>
</table>

<h2 id="server">服务器与网站 </h2>
<table width="99%">
    <tr>
        <th align="left"><h3>贡献者</h3></th>
        <th align="left"><h3>贡献</h3></th>
    </tr>
<?php credits_server_and_website ($credits['server-and-website'], $credits['server-and-website-i18n']); ?>
</table>

<br />
<h2 id="contributors">贡献者</h2>
<table width="99%">
    <tr>
        <td colspan="2"><strong>以下各位经常贡献补丁、想法、bug 修复以及新代码：</strong></td>
    </tr>
    <tr>
        <th colspan="2"><h3>活动贡献者</h3></th>
    </tr>
<?php credits_contributors_active ($credits['contributors-active'], $credits['contributors-active-i18n']); ?>
    <tr>
        <th colspan="2"><h3>以往贡献者</h3></th>
    </tr>
<?php credits_contributors_previous ($credits['contributors-previous'], $credits['contributors-previous-i18n']); ?>
</table>

<br />
<h2 id="goodies">Goodies</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>Goodies 监督</h3></th>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Jannis Pohlmann [jannis<?php at(); ?>xfce.org]</td>
    </tr>
</table>

<br />
<h2 id="translators">翻译者</h2>
<table width="99%">
    <tr>
        <th align="left"><h3>翻译监督</h3></th>
    </tr>
<?php credits_translators_supervision ($credits['translators-supervision'], $credits['translators-supervision-i18n']); ?>
</table>
<table width="99%">
    <tr>
        <th width="20%" align="left"><h3>语言</h3></th>
        <th width="80%" align="left"><h3>贡献者</h3></th>
    </tr>
<?php credits_translators ($credits['translators'], $credits['translators-i18n']); ?>
</table>
