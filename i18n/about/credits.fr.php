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

    <tr>
        <td bgcolor="#eeeeee">Arabe [ar]</td>
        <td bgcolor="#eeeeee">Arabeyes Team [http://wiki.arabeyes.org/Xfce]</td>
    </tr>
    <tr>
        <td>Biélorusse [be]</td>
        <td>Alexander Nyakhaychyk [nyakhaychyk<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Catalan [ca]</td>
        <td bgcolor="#eeeeee">Carles Muñoz Gorriz [carlesmu<?php at(); ?>internautas.org], Ivà Burgos [debian.public<?php at(); ?>gmail.com], Pau Rul·lan Ferragut [paurullan<?php at(); ?>bulma.net]</td>
    </tr>
    <tr>
        <td>Tchèque [cs]</td>
        <td>Michal Várady [miko.vaji<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Danois [da]</td>
        <td bgcolor="#eeeeee">Niels Rasmussen [nielsrasmus<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Allemand [de]</td>
        <td>Benedikt Meurer [benny<?php at(); ?>xfce.org], Borja Schwember [mail<?php at(); ?>borja.de], Enrico tröger [enrico.troeger<?php at(); ?>uvena.de], Fabian Nowak [timystery<?php at(); ?>arcor.de], Moritz Heiber [moe<?php at(); ?>xfce.org], Nico Schümann [nico<?php at(); ?>prog.nico22.de]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Dzongkha [dz]</td>
        <td bgcolor="#eeeeee">Tenzin Dendup [tenzin.dendup<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Grec [el]</td>
        <td>Stathis Kamperis [ekamperi<?php at(); ?>auth.gr], Stavros Giannouris [stavrosg<?php at(); ?>hellug.gr]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Anglais [en_GB]</td>
        <td bgcolor="#eeeeee">Jeff Bailes [thepizzaking<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Esperanto [eo]</td>
        <td>Antono Vasiljev [antono.vasiljev<?php at(); ?>gmail.com], Jarbas Araujo [jarbasaraujojr<?php at(); ?>yahoo.com.br], Sylvain Vedrenne [gnu_sylvain<?php at(); ?>xfce.org]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Espagnol [es]</td>
        <td bgcolor="#eeeeee">Rudy Godoy [rudy<?php at(); ?>stone-head.org]</td>
    </tr>
    <tr>
        <td>Estonien [et]</td>
        <td>Peeter Vois [Peeter.Vois<?php at(); ?>mail.ee]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Basque [eu]</td>
        <td bgcolor="#eeeeee">Piarres Beobide Egaa [pi<?php at(); ?>beobide.net]</td>
    </tr>
    <tr>
        <td>Finlandais [fi]</td>
        <td>Jari Rahkonen [jari.rahkonen<?php at(); ?>pp1.inet.fi]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Français [fr]</td>
		<td bgcolor="#eeeeee">Gérald Barré [g.barre<?php at(); ?>free.fr], Jean-François Wauthy [pollux<?php at(); ?>xfce.org], Maximilian Schleiss [maxschleiss<?php at(); ?>solnet.ch], Mike Massonnet [mmassonnet<?php at(); ?>gmail.com], Olivier Fourdan [fourdan<?php at(); ?>xfce.org]</td>
    </tr>
    <tr>
        <td>Galician [gl]</td>
        <td>Leandro Regueiro [leandro.regueiro<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Hébreu [he]</td>
        <td bgcolor="#eeeeee">Dotan Kamber [kamberd<?php at(); ?>yahoo.com], Yuval Tanny [tanai<?php at(); ?>int.gov.il]</td>
    </tr>
    <tr>
        <td>Hongrois [hu]</td>
        <td>Szerv&Atilde;&iexcl;c Attila [sas<?php at(); ?>321.hu]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Italien [it]</td>
        <td bgcolor="#eeeeee">Fabio Riga [usul<?php at(); ?>aruba.it], Roberto Pariset [r.pariset<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Japonais [ja]</td>
        <td>Daichi Kawahata [daichi<?php at(); ?>xfce.org], Hirotaka Moue [admin<?php at(); ?>mail.dayomon.net]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Georgian [ka]</td>
        <td bgcolor="#eeeeee">Dimitri Gogelia [delphi.knight<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Coréen [ko]</td>
        <td>ByungHyun Choi [byunghyun.choi<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Kurde [ku]</td>
        <td bgcolor="#eeeeee">Erdal Ronahi [erdal.ronahi<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Lituanien [lt]</td>
        <td>Mantas Zapolskas [mantaz<?php at(); ?>users.sf.net]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Néerlandais [nl]</td>
        <td bgcolor="#eeeeee">Jasper Huijsmans [jasper<?php at(); ?>xfce.org], Stephan Arts [stephan<?php at(); ?>xfce.org], Vincent Tunru [imnotb<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Punjabi [pa]</td>
        <td>Amanpreet Singh Alam [aalam<?php at(); ?>users.sf.net]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Polonais [pl]</td>
        <td bgcolor="#eeeeee">Piotr Maliński [riklaunim<?php at(); ?>gmail.com], Szymon Kałasz [szymon_maestro<?php at(); ?>gazeta.pl]</td>
    </tr>
    <tr>
        <td>Portugais [pt_BR]</td>
        <td>Adriano Winter Bess [awbess<?php at(); ?>gmail.com], Rodrigo Coacci [rcoacci<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Roumain [ro]</td>
        <td bgcolor="#eeeeee">Mişu Moldovan [dumol<?php at(); ?>gnome.ro]</td>
    </tr>
    <tr>
        <td>Russe [ru]</td>
        <td>Andrey Fedoseev [andrey.fedoseev<?php at(); ?>gmail.com], Maxim Zenin [webmechanics<?php at(); ?>gmail.com], Sergey Fedoseev [fedoseev.sergey<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Slovaque [sk]</td>
        <td bgcolor="#eeeeee">Roman Moravcik [roman.moravcik<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Albanian [sq]</td>
        <td>Besnik Bleta [besnik<?php at(); ?>programeshqip.org]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Suédois [sv]</td>
        <td bgcolor="#eeeeee">Alexander Toresson [alexander.toresson<?php at(); ?>gmail.com], Daniel Nylander [po<?php at(); ?>danielnylander.se]</td>
    </tr>
    <tr>
        <td>Turque [tr]</td>
        <td>Eren Türkay [Turkay.eren<?php at(); ?>gmail.com], Türker Sezer [turkersezer<?php at(); ?>tsdesign.info]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Ukrainien [uk]</td>
        <td bgcolor="#eeeeee">Dmitry Nikitin [luckas_fb<?php at(); ?>mail.ru], Maxim V. Dziumanenko [dziumanenko<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td>Vietnamien [vi]</td>
        <td>Phan Vĩnh Thịnh [teppi82<?php at(); ?>gmail.com]</td>
    </tr>
    <tr>
        <td bgcolor="#eeeeee">Chinois [zh_CN]</td>
        <td bgcolor="#eeeeee">Huang Huan [unicon221<?php at(); ?>gmail.com], Hui Ni [shuizhuyuanluo<?php at(); ?>126.com], Jick Nan [jick.nan<?php at(); ?>gmail.com], Shaodong Di [yhlfh<?php at(); ?>yahoo.com.cn], Wu Li [wurisky<?php at(); ?>gmail.com], Yongtao Yang [yongtao.yang<?php at(); ?>telia.com]</td>
    </tr>
    <tr>
        <td>Chinois [zh_TW]</td>
        <td>Cosmo Chene [cosmolax<?php at(); ?>gmail.com], Hydonsingore Cia [hydonsingore<?php at(); ?>mail.educities.edu.tw]</td>
    </tr>
</table>
