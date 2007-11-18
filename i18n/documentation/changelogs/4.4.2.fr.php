<?php
function bug ($id){
	echo 'Bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}

/*
	Replace the following characters:

	<	= &lt;
	>	= &gt;
	"	= &quot;
	&	= &amp;
	<?php bug ('1974') ?>
*/
?>
<h1>Xfce 4.4.2 Changelog</h1>

<h3>Bibliothèque d'utilitaires <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Correction d'un dépassement de tampon (reporté par Vegard Nosum sur la ml).</li>
    <li>Suppression des parenthèses des variables passées à AC_INIT afin de
    contourner un bogue dans intltool 0.35.x et 0.36.x.</li>
    <li>Traductions mises à jour: Maximilian Schleiss (nl), Dimitri Gogelia (ka),
        Pablo Vieira and Jose Vitor Lopes e Silva (pt_BR).</li>
    <li>Nouvelles traductions: Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT),
        Manatsawin (th), Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Bibliothèque graphique <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Libération de la liste retournée par gtk_container_get_children().</li>
    <li>Suppression des parenthèses des variables passées à AC_INIT afin de
      contourner un bogue dans intltool 0.35.x et 0.36.x.</li>
    <li>Alloue une copie de l'id client, le nom du programme, et le répertoire
      de travail passés au gestionnaire de session, au cas où l'application
      libère les données.</li>
    <li>Usage correct des champs commençant par % dans les commandes des
      fichiers .desktop.</li>
    <li>Traductions mises à jour: Maximilian Schleiss (nl), Dimitri Gogelia (ka),
        Pablo Vieira and Jose Vitor Lopes e Silva (pt_BR).</li>
    <li>Nouvelles traductions: Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT),
        Tegegne Tefera (am), Manatsawin (th), RPrieditis (lv).</li>
</ul>

<h3>Gestionnaire de fenêtres <em>(xfwm4)</em>:</h3>
<ul>
    <li>Gestion plus aisée des fenêtres transitoires, autorisation des fenêtres
      transitoires à être coller sur tous les bureaux indépendamments de leur
      fenêtre parent (<?php bug ('3296') ?>).</li>
    <li>Correction d'un blocage dû à gtk+-2.11.x (<?php bug ('3346') ?>).</li>
    <li>Fixation d'une fuite causée par la prise en compte d'un bouton de la
      souris lors d'un changement de thème.</li>
    <li>Correction des dialogues et modales sans parents qui n'étaient plus
      centrés comme auparavent (<?php bug ('3278') ?>).</li>
    <li>Correction du masque de modification ne fonctionnant pas sur tous les
      keymaps (<?php bug ('3194') ?>).</li>
    <li>Correction d'un mauvais dénombrage des raccourcis clavier causant un
      saut vers le dernier espace de travail lors de l'appuie d'une touche de
      modification si aucune fenêtre n'a le focus (<?php bug ('3191') ?>).</li>
    <li>Ajout du fichier spec manquant à l'archive tarball causant un
      échec à « make dist ».</li>
    <li>Correction d'une vérification de bord strict causant un focus sur une
      mauvaise fenêtre avec le mode « la focalisation suit la souris »
      (<?php bug ('2781') ?>).</li>
    <li>Le passage du mode transitoire sur un groupe ne doit pas affecter
      d'autres fenêtres transitoires, ou l'ordre de la pile risque d'être
      cassée pour certaines applications, notamment le dialoge « enregistrer
      sous » de mozilla…</li>
    <li>Correction d'une typo empêchant la compilation sur des systèmes sans
      support XShape 1.1.</li>
</ul>

<h3>Gestionnaire de bureau <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Correction d'un crash avec le menu xfdesktop italien.</li>
    <li>Correction d'un appel manquant à xfce_rc_close() causant une fuite et
      trop de descripteurs de fichiers (<?php bug ('3065') ?>).</li>
    <li>Toujours utiliser le bouton 0 dans gtk_menu_popup() comme GTK+ 2.11+
      nécessite le même bouton à être pressé sinon il n'active pas l'entrée
      (<?php bug ('3359') ?>).</li>
    <li>Correction de l'appel du menu par raccourci clavier échouant parfois, à
      nouveau.  La temporisation est à présent de 0,25s (<?php bug('441') ?>).</li>
    <li>Correction des paramètres du bureau appliqués uniquement au premier
      écran dans un mode dual-head sans Xinerama (<?php bug('3467') ?>).</li>
    <li>Correction d'un mauvais « glisser/déposer » lors d'un double clique sur
      un volume qui ne se monte pas (<?php bug('3426') ?>).</li>
    <li>Nettoyage des entrées obsolètes dans le fichier des positions des
      icônes (<?php bug('3267') ?>).</li>
    <li>Corrections mineures de fuites (certaines sont encore présentes, très probablement).</li>
    <li>Correction de l'option --disable-menu-editor dans le script
      configure.</li>
</ul>

<h3>Panneaux <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Correction de la largeur plus longue de 1 pixel rapportée par les
      indices du gestionnaire de fenêtre (<?php bug ('3402') ?>).</li>
    <li>Nettoyage de code dans le greffon MCS.</li>
    <li>Correction du remplissage des items dans un panneau à largeur normale.</li>
    <li>Assurer une infobulle pour chaque instance d'un greffon horloge (<?php bug ('3109') ?>).</li>
    <li>Correction de la zone qui est hors-limite aux autres fenêtres (l'indice
      _NET_WM_STRUT) pour une configuration Xinerama avec des résolutions
      différentes (<?php bug ('3097') ?>).</li>
    <li>Fixation du chargement des greffons internes si un ficher similaire
      existe dans le répertoire de démarrage (<?php bug ('3279') ?>).</li>
    <li>Recharger l'horloge une fois par minute si les secondes ne sont pas
      affichées.  L'horloge digitale est aussi initialisée dans le layout par
      défaut pour minimiser le nombre de mise à jour d'affichage.</li>
    <li>Correction d'un dépassement de tampon dans l'infobulle d'un lanceur
      (<?php bug ('3324') ?>).</li>
    <li>Lance exo-open --launch TerminalEmulator dans la configuration par
      défaut (<?php bug ('3384') ?>).</li>
    <li>Correction d'un crash lors de la suppression d'un panneau avec Gtk+
      2.11.x (<?php bug ('3496') ?>).</li>
    <li>Suppression des parenthèses des variables passées à AC_INIT afin de
      contourner un bogue dans intltool 0.35.x et 0.36.x.</li>
    <li>Traductions mises à jour: Pau Rul-lan Ferragut (ca), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Vincent Tunru (nl),
        Dimitri Gogelia (ka), Ivan Masár (sk), Fábio Nogueira (pt_BR).</li>
    <li>Nouvelles traductions: Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Gestionnaire de paramètres <em>(xfce-mcs-manager)</em>:</h3>
<ul>
    <li>Suppression du signal de vérification par temporisation d'une
      demi-seconde en faveur d'un signal de vérification par tube qui est
      espionné dans la boucle principale de glib.  Réduit considérablement le
      nombre de réveil du processeur qui est un point critique pour la
      performance des batteries des portables.
    <li>Traductions mises à jour: Terje Uriansrud (nb_NO), European Portuguese (pt_PT),
        Vincent Tunru (nl), Dimitri Gogelia (ka), Ivan Masar (sk), Vladimir Melo (pt_BR),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT).</li>
    <li>Nouvelles traductions: Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Greffons du gestionnaire de paramètres <em>(xfce-mcs-plugins)</em>:</h3>
<ul>
    <li>Étend la liste des thèmes pour un redimensionnement plus naturel de la
      fenêtre (<?php bug ('3659') ?>).</li>
    <li>Le DPI est configurable dans les Paramètres de l'interface (<?php bug
      ('3164') ?>).</li>
    <li>Correction du masque de modification ne fonctionnant pas sur tous les
      keymaps (<?php bug ('3194') ?>).</li>
    <li>Ajout du support pour les périphériques xinput lors du paramétrage de
      la souris droite/gauche.</li>
    <li>Traductions mises à jour: Fabio Riga (it), Nuno Miguel (pt_PT),
        Tegegne Tefera (am), Vincent Tunru (nl), Dimitri Gogelia (ka),
        Vladimir Melo (ka), Alexander Nyakhaychyk (be), Jari Rahkonen (fi),
        Nico Schümann (de), Mike Massonnet (fr), Jeff Bailes (en_GB),
        Terje Uriansrud (nb_NO), Stavros Giannouris (el), Fabio Riga (it),
        Luiz Armesto (pt_BR), Stephan Arts (nl).</li>
    <li>Nouvelles traductions: Terje Uriansrud (nb_NO), RPrieditis (lv).</li>
</ul>

<h3>Éditeur de texte <em>(mousepad)</em>:</h3>
<ul>
    <li>Ajout des tests pour le support de -Wall, -Werror et -errwarn=%all
      (<?php bug ('2921') ?>).</li>
    <li>Suppression des parenthèses des variables passées à AC_INIT afin de
      contourner un bogue dans intltool 0.35.x et 0.36.x.</li>
    <li>Traductions mises à jour: Maximilian Schleiss (fr), Szymon Kałasz (pl),
        Pau Rul-lan Ferragut (ca), Stavros Giannouris (el), ByungHyun Choi (ko),
        Piarres Beobide (eu), Maxim Dziumanenko (uk), Stephan Arts (nl),
        Nico Schümann (de), Jeff Bailes (en_GB), Daichi Kawahata (ja),
        Fabio Riga (it), Dimitri Gogelia (ka), Pablo Vieira (pt_BR),
        Og Maciel (pt_BR).</li>
    <li>Nouvelles traductions: Besnik Bleta (sq), Terje Uriansrud (nb_NO),
        Nuno Miguel (pt_PT), Tegegne Tefera (am), Manatsawin (th),
        RPrieditis (lv).</li>
</ul>

<h3>Gestionnaire de session <em>(xfce4-session)</em>:</h3>
<ul>
    <li>Traductions mises à jour: Pau Rul-lan Ferragut (ca), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Tegegne Tefera (am),
        Vincent Tunru (nl), Ivan Masár (sk), Luiz Armesto (pt_BR).</li>
    <li>Nouvelles traductions: RPrieditis (lv).</li>
</ul>

<h3>Gestionnaire d'imprimante <em>(xfprint)</em>:</h3>
<ul>
    <li>Traductions mises à jour: Stephan Arts (nl), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Tegegne Tefera (am),
        Ivan Masár (sk), Fábio Nogueira (pt_BR).</li>
    <li>Nouvelles traductions: Denizo Priskorn (eo), RPrieditis (lv).</li>
</ul>

<h3>Outils de développement <em>(xfce4-dev-tools)</em>:</h3>
<ul>
    <li>Ajout d'un script (xdt-commit) pour générer les messages de commit
      à la volée depuis les fichiers ChangeLog.</li>
    <li>Suppression des parenthèses des variables passées à AC_INIT afin de
      contourner un bogue dans intltool 0.35.x et 0.36.x.</li>
</ul>

<h3>Utilitaires et scripts <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Ajout d'un DPI par défaut pour Xorg, à nouveau (<?php bug ('3164') ?>,
      <?php bug ('3158') ?>).</li>
    <li>Utilise gnome-screensaver si xscreensaver n'est pas disponible (<?php
      bug ('3131') ?>).</li>
    <li>Correction d'une typo dans la définition des chemins XDG_DATA_DIRS
      (<?php bug ('2967') ?>).</li>
    <li>Mise à jour des crédits dans le dialogue « À propos ».</li>
    <li>Traductions mises à jour: Fabio Riga (it), Nuno Miguel (pt_PT),
        Dimitri Gogelia (ka), Ivan Masar (sk), Vladimir Melo (pt_BR).</li>
    <li>Nouvelles traductions: Terje Uriansrud (nb_NO), Tegegne Tefera (am),
        RPrieditis (lv).</li>
</ul>

<h3>Contrôleur de volume <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Fixation de la compilation en parallèle pour xfce4-mixer (<?php bug
      ('2892') ?>)</li>
    <li>Traductions mises à jour: Stephan Arts (nl), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Dimitri Gogelia (ka),
        Luiz Armesto (pt_BR).</li>
    <li>Nouvelles traductions: Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Calendrier <em>(xfcalendar)</em>:</h3>
<ul>
    <li>Récurrence non récurrante à la date limite.  Fixe manquant :
      reconvertir la date en UTC lors de la lecture.  Ce bogue a causé une
      mauvaise incrémentation du jour pour les fuseaux horaires -GMT (<?php bug
      ('2937') ?>).</li>
    <li>Ajout de l'entrée manquante « dernière modification » (<?php bug
      ('3431') ?>).</li>
    <li>L'horloge est mise à jour uniquement si nécessaire.  Ce fixe sacrifie
      un peu la précision.  Si les secondes ne sont pas affichées, le
      processeur n'est réveillé qu'une fois par minute (<?php bug ('3363') ?>).</li>
    <li>Traductions mises à jour: Fabio Riga (it), Pau Rul-lan Ferragut (ca),
        Daichi Kawahata (ja), Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT),
        Tegegne Tefera (am), Dimitri Gogelia (ka), Vincent Tunru (nl),
        Pablo Vieira (pt_PT), Fábio Nogueira (pt_PT).</li>
    <li>Nouvelles traductions: RPrieditis (lv).</li>
</li>
</ul>

<h3>Moteur de thème GTK <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
    <li>Ne pas inclure le fichier iconrc dans gtkrc.</li>
</ul>

<h3>Liste des applications <em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Suppression des parenthèses des variables passées à AC_INIT afin de
      contourner un bogue dans intltool 0.35.x et 0.36.x.</li>
    <li>Traductions mises à jour: Nuno Miguel (pt_PT), Dimitri Gogelia (ka),
        Pablo Vieira (pt_PT), Vladimir Melo (pt_BR).</li>
    <li>Nouvelles traductions: Terje Uriansrud (nb_NO), Tegegne Tefera (am),
        RPrieditis (lv).</li>
</ul>
