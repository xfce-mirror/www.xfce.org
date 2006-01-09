<a name="whatis"></a>

<h2>Qu'est-ce que Xfce 4.2 ?</h2>

<p>Xfce est un environnement de bureau léger destiné aux systèmes d'exploitation apparentés à UNIX. 
Il est conçu pour être rapide et économe en ressources, tout en restant agréable et facile à utiliser.</p>

<p>Xfce est fidèle à la philosophie traditionnelle de modularité et de réutilisabilité d'UNIX. 
Xfce est constitué de plusieurs composants qui, assemblés, fournissent toutes les fonctionnalités d'un environnement de bureau. Ces composants sont disponibles séparemment, ce qui permet à l'utilisateur de sélectionner ceux dont il a besoin afin de créer le meilleur environnement de travail possible.</p>

<p>Une autre priorité de Xfce est son respect des normes, spécifiquement celles définies sur <a href="http://www.freedesktop.org/Standards/Home">
freedesktop.org</a>.</p>

<p>Xfce peut être installé sur de nombreuses plateformes de type UNIX. Il peut en effet être compilé sous Linux, NetBSD, FreeBSD, Solaris, Cygwin et MacOS X, sur x86, PPC, Sparc, Alpha...</p>

<br>

<a name="features"></a>

<h2>Fonctionnalités et composants de Xfce 4.2</h2>

<h3>Généralités</h3>

<ul class="submenu">

		<li>Conformité vis à vis des normes <a href="http://www.freedesktop.org/">Freedesktop</a> 
		pour la gestion des fenêtres, les menus, les thèmes d'icônes, la spécifications XDG Basedir, 
		le protocole Xsettings, le glisser/déposer...</li>

		<li>Support des modes multiscreen et Xinerama</li>

		<li>Support du "kiosk mode" grâce auquel les actions des utilisateurs peuvent 
		être restreintes dans les modules xfce4-session, xfce4-panel, et xfdesktop</li>

		<li>Plateforme de développement pour des applications</li>

		<li>Support du lissage des fontes</li>

		<li>Possibilité d'installer et lancer chaque module de Xfce séparemment, ce qui est 
		très utile si vous n'avez besoin que de certains composants, ou si vous ne disposez 
		que de ressources matérielles très limitées</li>

		<li>Plus de 40 langues disponibles...</li>

</ul>

<h3>Librairies (libxfce4util, libxfcegui4, libxfce4mcs)</h3>

<ul class="submenu">

<li>libxfce4util : librairie fournissant des fonctions d'aide non graphiques</li>
<li>libxfcegui4 : widgets et fonctions commodes destinées à créer des interfaces graphiques 
utilisateur</li>
<li>libxfce4mcs : librairie de gestion des paramètres utilisées par la plupart des composants de Xfce</li>

</ul>

<img src="images/mcs.png" width="238" height="157" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

		<h3>Gestionnaire de paramètres (xfce-mcs-manager et xfce-mcs-plugins</h3>
		
		<p>
		Fournit le Multi-Channel Settings, un système de configuration modulaire, centralisé, 
		indépendant de l'hôte et utilisable en réseau de manière transparente. Il fonctionne 
		en tâche de fond et fournit des informations globales de configuration aux autres 
		composants de Xfce. Ses icônes sont personnalisables. xfce-mcs-plugins fournit des 
		plugins de configuration pour certains paramètres plus généraux tels ceux de Gtk, 
		de la souris, des polices, du clavier ou de l'affichage.</p>
				
<img src="images/wm.png" width="187" height="151" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px; ">

		<h3>Gestionnaire de fenêtres (xfwm4)</h3>
		
		<p>
		
		Le gestionnaire de fenêtres de Xfce 4. Il gère le placement des applications sur l'écran, 
		fournit les décorations des fenêtres et gère les espaces de travail virtuels. 
		Xfwm4 supporte nativement les modes "multihead". Il intègre son propre gestionnaire de 
		l'extension Composite de X.Org, ce qui apporte au bureau de Xfce des effets de transparence 
		réelle. Les thèmes supportent la composition d'image par l'utilisation d'images PNG en tant que 
		calques, ce qui autorise la création de dégradés qui s'appliquent à toutes les images 
		composant le cadre des fenêtres. Xfwm4 inclut un éditeur graphique des raccourcis 
		clavier. De plus, les utilisateurs peuvent enrouler les fenêtres et changer d'espace 
		de travail simplement en utilisant la molette de la souris.</p>

		<h3>Panneau (xfce4-panel)</h3>

<img src="images/panel.png" width="235" height="46" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">
		
		<p>
	
		Le panneau de Xfce 4. Il propose un mode vertical ou horizontal, un changeur de 
		bureaux, une horloge, une fonction de masquage automatique, des menus détachables 
		et des lanceurs d'application faciles à configurer, un contrôleur de courrier avec support 
		mbox, Maildir et POP3. Le panneau supporte la transparence quand l'extension X Composite 
		est activée. Il offre un moyen facile d'ajouter un plugin en utilisant une fenêtre de dialogue 
		et un double-clic de souris. Il est compatible avec les nombreux plugins disponibles 
		depuis la page du projet <a href="http://xfce-goodies.berlios.de/" target="_new">Xfce 
		Goodies</a>.</p>
		
<img src="images/menu.png" width="101" height="153" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	
	
		<h3>Gestionnaire du bureau (xfdesktop)</h3>
		
		<p>
		
		Le gestionnaire de fond d'écran. Ce programme établit l'image de fond d'écran et fournit 
		un menu de bureau. Il inclut le support des dégradés pour les couleurs de fond d'écran, 
		le support de la saturation de l'image de fond d'écran, le support des modes multiscreen et 
		xinerama, un éditeur graphique pour le menu du bureau avec support du glisser-déposer depuis 		xfce4-appfinder et des fichiers .desktop depuis Rox, Konqueror, Nautilus, Xffm...
		Le menu du bureau et la liste des fenêtres disposent d'un support optionnel pour les icônes, 
		pour que l'utilisateur ne les utilse que s'il le souhaite, et s'il dispose des ressources 
		matérielles suffisantes pour les activer. Xfdesktop fournit un plugin pour intégrer le menu 
		du bureau au panneau: vous pouvez accéder au menu standard aussi bien depuis le bureau que 
		depuis le panneau.</p>

<img src="images/taskbar.png" width="275" height="112" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Utilitaires (xfce-utils)</h3>

		<p>
		
		Scripts et utilitaires essentiels. Fournit une barre des tâches, une fenêtre 
		"À propos", une fenêtre lanceur d'application, et plusieurs scripts importants 
		qui sont utilisés par d'autres composants, dont le panneau (startxfce4, xfhelp4, 
		xflock4, xfmountdev4, et xfterm4). Contient également le guide de l'utilisateur. 
		La barre des tâches intègre une option "Toujours regrouper les tâches", un alignement 
		réglable gauche/centre/droit et une largeur variable, ainsi qu'un menu clic droit 
		d'action sur les fenêtres.
		</p>

<img src="images/xffm.png" width="207" height="164" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	

<h3>Gestionnaire de fichiers (xffm)</h3>

		<p>
		
		Un gestionnaire de fichiers rapide, avec deux arborescences indépendantes, un navigateur 
		SAMBA et un monteur/démonteur de partitions utilisant les données fstab. Il inclut un éditeur de 
		thème d'icônes.</p>
		
<h3>Utilitaire d'impression (xfprint)</h3>

		<p>Interface graphique pour l'impression. Il inclut <tt>xfprint4</tt> et 
		<tt>xfprint-manager</tt>. Xfprint peut utiliser aussi bien CUPS, que BSD-LPR ou un 
		fichier comme destination, et les imprimantes sont automatiquement identifiées depuis 
		le système d'impression que vous avez sélectionné.</p>

<img src="images/appfinder.png" width="252" height="198" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Chercheur d'applications (xfce4-appfinder)</h3>
		
		<p>
		
		Un chercheur d'applications, qui permet de rechercher, lancer et trouver des informations 
		à propos des applications installées sur votre système.</p>
		
<h3>Gestionnaire de session (xfce4-session)</h3>
		
		<p>
				
		Le gestionnaire de session. Il contrôle le démarrage et l'arrêt de l'environnement 
		de bureau Xfce. Vous pouvez sauvegarder les applications en cours d'exécution en 
		quittant afin de les lancer à nouveau lors du démarrage suivant. Il est compatible avec 
		Gnome/KDE, supporte les modes multihead (Xinerama et multiscreen), et ne repose pas sur 
		smproxy (ni une quelconque récriture telle gnome-smproxy), mais fournit une gestion 
		(partielle) de la session même pour les applications non compatibles, ou bien seulement 
		compatibles avec le protocole X11R5-sm. De plus xfce4-session supporte de jolis thèmes.</p>

<img src="images/toys.png" width="46" height="198" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	

<h3>Console de mixage (xfce4-mixer)</h3>

		<p>Un contrôleur de volume pour le panneau. In inclut une console de mixage qui supporte 
		ALSA, OSS et Sun audio.</p>
		
<h3>Aire de notification (xfce4-systray)</h3>

		<p>Aire de notification (ou "system tray") pour le panneau.</p>
		
<h3>Jouets (xfce4-toys)</h3>

		<p>
		
		Utilitaires moins sérieux pour le panneau. Contient une fenêtre pour les fortunes et les trucs et astuces, et une implémentation de xeyes pour le panneau.</p>

<h3>Calendrier et rendez-vous (xfcalendar)</h3>

		<p>Une simple application faisant office de calendrier avec alarme.</p>

<h3>Interrupteur (xfce4-trigger-launcher)</h3>

		<p>Fournit un interrupteur pour le panneau, faisant apparaître un état Marche ou Arrêt 
		sur le panneau. Il peut être utilisé par example pour démarrer et arrêter des connexions 
		réseau.</p>

<img src="images/iconbox.png" width="192" height="57" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Boîte à icônes (xfce4-iconbox)</h3>

		<p>Une boîte à icônes, qui peut être utilisée comme alternative à la barre des 
		tâches fournie par le paquet xfce-utils. Comme pour le panneau, son niveau de transparence 
		est configurable lorsque l'extension X Composite est utilisée.</p>
		
<h3>Thèmes pour le gestionnaire de fenêtres (xfwm4-themes)</h3>

		<p>
		
		Plus de 60 décorations de fenêtres pour xfwm4.</p>		

<h3>Thème d'icônes (xfce4-icon-theme)</h3>

		<p>Thème d'icônes par défaut de Xfce 4. Inclut les icônes dans les deux formats PNG et SVG.</p>
		
<h3>Moteur de thèmes pout Gtk (gtk-xfce-theme-engine)</h3>

		<p>Un moteur de thèmes pour GTK2. Non requis pour le bon fonctionnement de Xfce, mais 
		il s'agit d'un moteur de thème agréable qu'il est conseillé d'essayer.</p>

<div align="right"><a href="#top" style="color: #154374; "><b>Haut de la page</b></a></div><br>

