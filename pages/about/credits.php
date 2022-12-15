<?php

define ('ATSIGN', '@');
define ('DOTSIGN', '.');

include ('lib/translators.php');

$head['title'] = R_('Credits');

function print_credits($people)
{
        $last = end ($people);
        foreach ($people as $person => $mail)
        {
                echo $person.' &lt;'.mungify_mail($mail).'&gt;';

                if ($mail != $last)
                        echo "<br />\n";
        }
}

function print_translator_credits()
{
  global $translators;
  echo implode(', ', $translators);
}
?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('A large number of people contributed to the Xfce project. Although more people contributed to the project then the ones list below, we\'d like to say:') ?>

  <b><?php E_('Thanks to all who helped making this software available!') ?></b>
</p>

<h2 id="core"><?php E_('Core developers')?></h2>
<?php
        print_credits (array (
                'André Miranda' => 'andreldm'.ATSIGN.'xfce.org',
                'Alexander Schwinn' => 'alexxcons'.ATSIGN.'xfce.org',
                'Brian J. Tarricone' => 'kelnos'.ATSIGN.'xfce.org',
                'Gaël Bonithon' => 'gael'.ATSIGN.'xfce.org',
                'Olivier Fourdan' => 'fourdan'.ATSIGN.'xfce.org',
                'Romain Bouvier' => 'skunnyk'.ATSIGN.'xfce.org',
                'Sergios Anestis Kefalidis' => 'skefalidis'.ATSIGN.'xfce.org',
                'Simon Steinbeiß' => 'simon'.ATSIGN.'xfce.org',
                'Theo Linkspfeifer' => 'lastonestanding'.ATSIGN.'tutanota.com'));
?>

<h2 id="active"><?php E_('Active contributors')?></h2>
<?php
        print_credits (array (
                'Akbarkhon Variskhanov' => 'akbarkhon.variskhanov'.ATSIGN.'gmail.com',
                'Ali Abdallah' => 'aliov'.ATSIGN.'xfce.org',
                'Alistair Buxton' => 'a.j.buxton'.ATSIGN.'gmail.com',
                'Arkadiy Illarionov' => 'qarkai'.ATSIGN.'gmail.com',
                'Erkki Moorits' => 'erkki.moorits'.ATSIGN.'mail.ee',
                'Graeme Gott' => 'graeme'.ATSIGN.'gottcode.org',
                'Jan Ziak' => '0xe2.0x9a.0x9b'.ATSIGN.'xfce.org',
                'Landry Breuil' => 'landry'.ATSIGN.'xfce.org',
                'Sean Davis' => 'bluesabre'.ATSIGN.'xfce.org',
                'Stephan Haller' => 'nomad'.ATSIGN.'froevel.de',
                'Tony Paulic' => 'tony.paulic'.ATSIGN.'gmail.com',
                'Yongha Hwang' => 'mshrimp'.ATSIGN.'sogang.ac.kr'));
?>

<h2 id="servers"><?php E_('Servers maintained by')?></h2>
<?php
        print_credits (array (
                'Mike Massonnet' => 'mmassonnet'.ATSIGN.'gmail.com',
                'Romain Bouvier' => 'skunnyk'.ATSIGN.'xfce.org'));
?>

<h2 id="translation"><?php E_('Translations supervision')?></h2>
<?php
        print_credits (array (
                'Vinzenz Vietzke' => 'vinz'.ATSIGN.'vinzv.de'));
?>

<h2 id="documentation"><?php E_('Documentation supervision')?></h2>
<?php
        print_credits (array (
                'Kevin Bowen' => 'kevin.bowen'.ATSIGN.'gmail.com'));
?>

<h2 id="translators"><?php E_('Our beloved translators')?></h2>
<dl>
<?php   print_translator_credits(); ?>
</dl>

<h2 id="previous"><?php E_('Previous contributors')?></h2>
<?php
        print_credits (array (
                'Auke Kok' => 'sofar'.ATSIGN.'foo-projects.org',
                'Andrzej Radecki' => 'ndrwrdck'.ATSIGN.'gmail.com',
                'Benedikt Meurer' => 'benny'.ATSIGN.'xfce.org',
                'Bernhard Walle' => 'bernhard.walle'.ATSIGN.'gmx.de',
                'Biju Chacko' => 'botsie'.ATSIGN.'xfce.org',
                'Craig Betts' => 'craig.betts'.ATSIGN.'dfrc.nasa.gov',
                'Daichi Kawahata' => 'daichi'.ATSIGN.'xfce.org',
                'Danny Milosavljevic' => 'dannym'.ATSIGN.'xfce.org',
                'Darren Salt' => 'linux'.ATSIGN.'youmustbejoking.demon.co.uk',
                'David Mohr' => 'squisher'.ATSIGN.'xfce.org',
                'Edscott Wilson García' => 'edscott'.ATSIGN.'xfce.org',
                'Eduard Roccatello' => 'eduard'.ATSIGN.'xfce.org',
                'Ejvend Nielsen' => 'prophet'.ATSIGN.'sphere-x.net',
                'Enrico Tröger' => 'enrico.troeger'.ATSIGN.'uvena.de',
                'Eric Koegel' => 'eric'.ATSIGN.'xfce.org',
                'Erik Touve' => 'etouve'.ATSIGN.'earthlink.net',
                'Erik Harrison' => 'erikharrison'.ATSIGN.'xfce.org',
                'François Le Clainche' => 'fleclainche'.ATSIGN.'wanadoo.fr',
                'Guido Berhoerster' => 'guido+xfce'.ATSIGN.'berhoerster.name',
                'Harald Judt' => 'hjudt'.ATSIGN.'xfce.org',
                'Jannis Pohlmann' => 'jannis'.ATSIGN.'xfce.org',
                'Jasper Huijsmans' => 'jasper'.ATSIGN.'xfce.org',
                'Jérôme Guelfucci' => 'jeromeg'.ATSIGN.'xfce.org',
                'Jean-François Wauthy' => 'pollux'.ATSIGN.'fce.org',
                'Jens Guballa' => 'j.guballa'.ATSIGN.'t-online.de',
                'Jens Luedicke' => 'jens'.ATSIGN.'irs-net.com',
                'Joakim Andreasson' => 'joakim.andreasson'.ATSIGN.'gmx.net',
                'Karsten Luetkewitz' => 'phrep'.ATSIGN.'plskthx.org',
                'Lionel Le Folgoc' => 'mrpouit'.ATSIGN.'gmail.com',
                'Martin Loschwitz' => 'madkiss'.ATSIGN.'debian.org',
                'Maurizio Galli' => 'maurizio.galli'.ATSIGN.'gmail.com',
                'Maximilian Schleiss' => 'maximilian'.ATSIGN.'xfce.org',
                'Michael Mosier' => 'michael'.ATSIGN.'spyonit.com',
                'Mickaël Graf' => 'korbinus'.ATSIGN.'xfce.org',
                'Mike Massonnet' => 'mmassonnet'.ATSIGN.'gmail.com',
                'Nick Schermer' => 'nick'.ATSIGN.'xfce.org',
                'Olivier Duchateau' => 'duchateau.olivier'.ATSIGN.'gmail.com',
                'Pau Rul·lan Ferragut' => 'paurullan'.ATSIGN.'bulma.net',
                'Stephan Arts' => 'stephan'.ATSIGN.'xfce.org',
                'Steve Dodier-Lazaro' => 'sidi'.ATSIGN.'xfce.org',
                'Silvio Knizek' => 'killermoehre'.ATSIGN.'gmx.net',
                'Thomas Leonard' => 'tal00r'.ATSIGN.'ecs.soton.ac.uk',
                'Tobias Henle' => 'tobias'.ATSIGN.'page23.de',
                'Viktor Odintsev' => 'ninetls'.ATSIGN.'xfce.org',
                'Xavier Maillard' => 'zedek'.ATSIGN.'fxgsproject.org',
                'Yves-Alexis Perez' => 'corsac'.ATSIGN.'debian.org'));
?>
