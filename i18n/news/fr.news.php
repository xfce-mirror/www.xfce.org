<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/
$date_format = "%e %B %Y";
$posted_by = "Posté par";

$news_translated = array (
/*
    array (
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
    22 => array (
        'title'   => "Xfce 4.6.1 est sorti",
        'content' => "La première mise à jour de maintenance de Xfce 4.6 est sortie.".
                     "[br][br]".
                     "Merci à toutes les personnes qui utilisent Xfce 4.6 et qui ".
                     "ont pris la peine de nous signaler ce qui ne fonctionnait pas ".
                     "correctement. Nous avons réussi à régler plusieurs problèmes ".
                     "au cours des dernières semaines.".
                     "[br][br]".
                     "Pour la liste complète des changements, rendez-vous ".
                     "[link=/documentation/changelogs/4.6.1]ici[/link]. ".
                     "[br][br]".
                     "Merci aussi aux tradcuteurs, grâce à qui plusieurs ".
                     "traductions ont été améliorées ou terminées depuis la sortie ".
                     "de Xfce 4.6.0".
                     "[br][br]".
                     "Merci à tous, et appreciez cette nouvelle version que vous ".
                     "pouvez trouver sur ".
                     "[link=/download]http://www.xfce.org/download[/link]".
                     "[br][br]".
                     "Sincèrement,[br]".
                     "L'équipe de développement de Xfce."
    ),

    21 =>array (

        'title'   => "La version finale de Xfce 4.6 est sortie",
        'content' => "Après plus de deux ans de développement, Xfce 4.6.0 vient de sortir.".
                     "[br][br]".
                     "Xfce 4.6 vient avec un nouveau système et une nouvelle interface ".
                     "de configuration, un nouveau mixer de son et de nombreuses ".
                     "améliorations dans le système de sessions et dans les autres ".
                     "composants de Xfce. Une liste de tous les changements depuis la ".
                     "dernière Release Candidate se trouve à ".
                     "[link=/documentation/changelogs/4.6.0]cette page[/link]. ".
                     "[br][br]".
                     "Un tour visuel de Xfce 4.6 est disponible ici : [br]".
                     "[link=/about/tour]http://www.xfce.org/about/tour[/link]".
                     "[br][br]".
                     "Vous pouvez télécharger Xfce 4.6 à partir de la section ".
                     "Téléchargement du site Internet de Xfce : [br]".
                     "[link=/download]http://www.xfce.org/download[/link]".
                     "[br][br]".
                     "Sincèrement,[br]".
                     "L'équipe de développement de Xfce.".
                     "",
    ),

    12 => array (
        'title'   => 'Sortie de Xfce 4.4.1',
        'content' => 'Salut à tous,[br][br]'.
                     'Xfce 4.4.1 vient de sortir. C\'est la première sortie de maintenance de Xfce 4.4 (la version stable de Xfce) qui apporte des corrections de bogues importants et une mise à jour des traductions.'.
                     '[br][br]'.
                     'Vous pouvez télécharger Xfce 4.4.1 depuis le [link=/download/]site Xfce.[/link]'.
                     '[br][br]'.
                     'Une vue d\'ensemble des changements est disponible dans le [link=/documentation/changelogs/4.4.1]changelog[/link].'.
                     '[br][br]'.
                     'Amusez-vous![br]'.
                     'L\'équipe de développement de Xfce.',
    ),
    11 => array (
        'title'   => 'Sortie de Xfce 4.4.0',
        'content' => 'Après plus de deux années de développement, Xfce 4.4.0 vient juste de sortir.'.
                     '[br]'.
                     'Xfce 4.4 comprend de nouveaux utilitaires dont le très attendu gestionnaire de fichiers Thunar. Xfce 4.4 contient aussi d\'énormes améliorations de ses composants de base.'.
                     '[br][br]'.
                     'Un tour visuel de Xfce 4.4 est disponible à l\'adresse suivante :[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Téléchargez Xfce 4.4 à partir le la section téléchargement :[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),    
    10 => array (
        'title'   => 'Sortie de Xfce 4.2.4',
        'content' => 'Une nouvelle version corrigée de Xfce 4.2 est disponible. Cette version est probablement la dernière pour la famille de Xfce 4.2. elle contient plusieurs correctifs de bogues portés de la version en développement.[br]'.
                     'Cette version ne doit pas être confondue avec la prochaine sortie de la version 4.4 de Xfce, c\'est une version corrigée de la dernière version stable de la famille Xfce 4.2. Téléchargez Xfce 4.4 à partir le la section téléchargement :[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
);
?>
