<a name="doc"></a>

<h2>Documentation en ligne</h2>

<p>La documentation en ligne de Xfce 4 est <a
href="/documentation/">disponible en ligne</a>. 
</p><br>

<a name="requirements"></a>

<h2>Dépendances de Xfce 4</h2>

La compilation des modules de Xfce 4 dépend de :

<ul class="submenu">

		<li><a href="http://www.freedesktop.org/software/pkgconfig/"><b>pkgconfig
		</b></a>, un système qui gère les options de compilation / lien des bibliothèques, et qui fonctionne avec automake et autoconf.</li>
		
		<li><a href="http://www.gtk.org/"><b>GTK+</b></a> >= 2.2 ((avec les paquets de développement), le "GIMP multi-
platform toolkit" conçu pour la création d'interfaces graphiques utilisateur.</li>
		
		<li><a href="http://xmlsoft.org/"><b>libxml2</b></a>, une bibliothèque XML C développée pour le projet <a href="http://www.gnome.org/">Gnome</a>.</li>
		
		<li><a href="http://sourceforge.net/projects/dbh/"><b>libdbh</b></a>, 
		la bibliothèque "Disk based hashtables", requise par xffm, le gestionnaire de fichiers.</li>

</ul>

<p>Soyez sûrs d'avoir ces paquets (et les paquets *-devel correspondants) installés.</p>

Dépendances optionnelles :

<ul class="submenu">

	<li><b><u>librsvg</u></b> >= 2.2.x, une bibliothèque de rendu pour les fichiers SVG, basée sur SAX, qui doit être installée si vous voulez utiliser les icônes du panneau au format SVG.</li>
	
	<li><b><u>libstartup-notification</u></b> >= 0.5, une bibliothèque qui doit être installée si vous voulez utiliser la fonctionnalité de 
	<a href="index.php?page=documentation&lang=fr#startup">notification de démarrage</a>.</li>

</ul><br>

<a name="install"></a>

<!-- install guide -->

<h2>Guide d'installation</h2>

<p>Il y a au moins trois façons d'installer Xfce :</p>

<ul class="submenu">
<li>depuis le code source, en compilant l'environnement soi-même</li>
<li>en utilisant les binaires fournis pour votre système; consulter la page de <a href="index.php?page=download&lang=fr">téléchargement</a> pour les trouvez</li>
<li>en utilisant l'installeur graphique fourni par os-cillation; consulter <a href="http://www.os-cillation.com/article.php?sid=42">cette page</a> pour les liens de téléchargement et les instructions.</li>
</ul>

<h3>Installation depuis le code source</h3>

<p>Si vous voulez compiler Xfce depuis son code source, vous pouvez soit télécharger les archives d'une version publiée de Xfce depuis notre page de <a href="index.php?page=download&lang=fr">téléchargement</a>, soit essayer une version de développement, en la téléchargeant depuis le serveur subversion (seulement pour les utilisateurs aventureux). Veuillez noter que l'installation simultanée de deux versions de Xfce (par exemple stable et développement) n'est pas supportée.</p>

<h4>Télécharger les sources depuis le serveur SVN</h4>

<p>Voici les instructions générales pour récupérer les modules sur le serveur SVN. Pour vérifier quels modules sont disponibles, vous pouvez visiter l'<a href="http://svn.xfce.org/svn/xfce/">interface web</a>.</p>

<p>Vous pouvez télécharger toute l'arborescence en utilisant la commande suivante:</p>
<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>
svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</tt></td></tr></tbody></table>

<p>Lisez <a href="http://svn.xfce.org/svn/xfce/modules/README">ce fichier</a> pour en apprendre plus sur les raccourcis utilisables dans les archives Subversion de Xfce.</p>

<p>Vous pouvez téléchargez les modules appropriés :</p>
<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>
svn co http://svn.xfce.org/svn/xfce/<i>$modulename</i>/trunk <i>$modulename</i></tt></td></tr></tbody></table>

<p>$modulename peut être l'un des noms suivants :</p>
<ul class="submenu">
		<?php include "edit/svn_modules_list.php"; ?>
</ul>

<h4>Compiler les modules</h4>

<p>Si vous avez téléchargé le archives du code source, décompressez les.</p>

<p>Si vous installez Xfce en utilisant un préfixe différent de celui de pkg-config, vous devez renseigner la variable d'environnement PKG_CONFIG_PATH afin d'y inclure le chemin vers les fichiers *.pc files installés par les librairies de Xfce 4, en l'occurence ${prefix}/lib/pkgconfig.  Par exemple :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</tt><td></tr></tbody></table><br>

<p>Compiler les modules devrait être aussi simple que de taper :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>./configure &amp;&amp; make &amp;&amp; make install</tt></td></tr></tbody></table>

<p>dans le répertoire parent de chaque module, dans l'ordre suivant :</p>

<ol>
<li>xfce4-dev-tools</li>
<li>libxfce4util</li>
<li>libxfcegui4</li>
<li>libxfce4mcs</li>
<li>xfce-mcs-manager</li>
<li>tous les autres modules (mais vous devez compiler le panneau xfce4-panel avant de compiler des plugins pour le panneau).<br></li>
</ol>

<p>Après avoir installé une librairie, vous devriez lancer <tt>ldconfig</tt>. Cela peut être nécessaire d'ajouter /usr/local à votre /etc/ld.so.conf.</p>

<p>Si des erreurs se présentent, essayez de lancer <tt>./autogen.sh</tt> au lieu de 
<tt>./configure</tt>. Dans ce cas, vous aurez besoin d'avoir installé automake, autoconf et 
libtool. En cas d'échec, merci de le signaler sur la liste de diffusion de Xfce : xfce4-dev@xfce.org.</p>

<p>Le moteur de thèmes gtk-xfce-engine-2 doit être installé en utilisant le même préfixe que celui utilisé pour l'installation de GTK+, habituellement /usr. Dans ce cas, vous devez utiliser la commande suivante dans le répertoire parent de gtk-xfce-engine-2 :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>./configure --prefix=/usr &amp;&amp; make &amp;&amp; make install</tt></td></tr></tbody></table>

<p>Quelques modules de Xfce offrent des fonctionnalités optionnelles qui peuvent être activées ou désactivées dans au moment de la compiltation en utilisant une option spécifique de configuration. Voici une liste de ces modules et des options correspondantes :</p>

<table cellpadding="5" cellspacing="0" border="1" width="80%" align="center" style="font-family: arial, helvetica, sans-serif; font-size: 12px; ">

<tr>
<td>xfwm4</td>
<td>--enable-compositor</td>
<td>enables the xfwm4 compositing manager (if Xorg >= 6.8 is installed)</td>
</tr>

<tr><td>xfce4-session</td><td>--enable-session-screenshots</td><td>activer la capture d'écran de la  session en sortant</td></tr>

<tr><td rowspan="2">xfdesktop</td><td>--disable-panel-plugin</td><td>ne pas compiler le plugin menu pour le panneau</td></tr>

<tr><td>--disable-desktop-menu</td><td>ne pas compiler le menu du bureau</td></tr>

<tr><td>xfce4-panel</td><td>--disable-startup-notification</td><td>ne pas vérifier la présence de la librairie startup notification</td></tr>

<tr><td rowspan="6">xffm</td><td>--disable-extendprefs</td><td>réduire le nombre des préférences configurables par l'utilisateur</td></tr>

<tr><td>--disable-smbbranch</td><td>désactiver la branche samba</td></tr>

<tr><td>--disable-filter</td><td>désactiver le filtre lors de la lecture des répertoires</td></tr>

<tr><td>--disable-menu</td><td>inclure le menu principal</td></tr>

<tr><td>--enable-scrambledir</td><td>autoriser "scramble" à fonctionner sur les répertoires</td></tr>

<tr><td>--enable-panel</td><td>inclure la barre d'outils dnd avec les lanceurs du panneau</td></tr>

</table>

<br><div align="right"><a href="#top" style="color: #154374; "><b>Haut de la page</b></a></div>

<a name="start">

<h2>Démarrer Xfce 4</h2>

<p>Utilisez <tt>startxfce4</tt> pour démarrer une session Xfce; cette session inclut le gestionnaire de session, le panneau, le gestionnaire de fenêtres et le gestionnaire de bureau. Tous les programmes, ou liens symboliques vers des programmes, présents dans le répertoire <tt>~/Desktop/Autostart/</tt> seront lancés au démarrage par startxfce4.</p>

<p>Pour personnaliser le comportement de <tt>startxfce4</tt>, copiez <tt>${sysconfdir}/xdg/xfce4/xinitrc</tt> dans votre <tt>~/.config/xfce4/xinitrc</tt> et éditez ce fichier. Si vous avez installé Xfce depuis les sources, <tt>${sysconfdir}</tt> est par défaut <tt>/usr/local/etc</tt>; pour les binaires, il correspond souvent à <tt>/etc</tt>.</p>

<p>Le gestionnaire de paramètres (xfce-mcs-manager) et le gestionnaire de fenêtres tourne en tâche de fond, en mode 'daemon'. Ainsi, n'ajoutez pas un '&amp;' après la commande. Pour xfwm4, vous devez ajouter l'option <tt>--daemon</tt> quand vous démarrer ce programme.</p>

<p>Si vous ne souhaitez pas utiliser la barre des tâches, mais utiliser la boîte à icônes à la place, et si vous utilisez le gestionnaire de session, tuez simplement xftaskbar4 et lancez xfce4-iconbox, et n'oubliez pas ensuite de sauvegarder votre session en quittant.</p>

<h4>Après l'installation</h4>

<p>Après l'installation de Xfce, vous devriez renseigner les variables d'environnement $BROWSER et $TERMCMD qui correspondent respectivement à votre navigateur et à votre terminal favoris. Elles seront notament utilisées par les scripts xfhelp4 et xfterm4 fournis avec Xfce. Ajoutez simplement les lignes suivantes à votre ~/.bash_profile, puis déconnectez/reconnectez vous :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>export BROWSER="your_favorite_browser"</tt><br>
<tt>export TERMCMD="your_favorite_terminal"</tt>
</td></tr></table>

<h4>Configurer GDM</h4>

<p>Si vous utilisez GNOME Display Manager (gdm) pour lancer une session X, vous devrez créer une fichier .desktop pour indiquer à gdm votre nouvelle installation de Xfce. Voici un fichier xfce42.desktop type :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>[Desktop Entry]</tt><br>
<tt>Encoding=UTF-8</tt><br>
<tt>Name=Xfce 4.2 Session</tt><br>
<tt>Comment=Use this session to run Xfce 4.2 as your desktop environment</tt><br>
<tt>Exec=/usr/local/bin/startxfce4</tt><br>
<tt>Icon=/usr/local/share/pixmaps/xfce4_xicon1.png</tt><br>
<tt>Type=Application</tt></td>
</tr></table>

<p>Il est en général suffisant de copier ce fichier type dans le répertoire Sessions utilisé par gdm; ce répertoire est souvent /etc/dm/Sessions, /etc/X11/gdm/Sessions, /usr/share/xsessions, /usr/X11R6/share/gnome/xsessions, reportez vous à la documentation de votre système pour les détails. Vous devez redémarrer gdm après avoir copié ce fichier.</p>

<p>Par exemple, votre système cherche les sessions disponibles dans /usr/share/xsessions, alors vous devrez taper la commande suivante (en tant que super-utilisateur) pour enregistrer Xfce dans gdm :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>cp /path/to/your/xfce42.desktop /usr/share/xsessions/xfce42.desktop</tt>
</td></tr></table>

<h4>Configurer KDM</h4>

<p>Si vous utilisez KDE Display Manager (kdm) pour démarrer votre session X, vous devrez créer un fichier .desktop pour indiquer à kdm votre nouvelle installation de Xfce. D'abord, vous devrez localiser le repertoire dans lequel kdm cherche ses fichiers .desktop. Les commandes :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>locate kde.desktop</tt><br>
<tt>locate mwm.desktop</tt>
</td></tr></table>

<p>peuvent aider à trouver ce répertoire. Les chemins les plus habituels sont /usr/share/apps/kdm/sessions ou /usr/local/share/apps/kdm/sessions. Une fois ce répertoire localisé, vous avez besoin d'y  créer un nouveau fichier xfce42.desktop, avec le contenu suivant :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>[Desktop Entry]</tt><br>
<tt>Encoding=UTF-8</tt><br>
<tt>Type=XSession</tt><br>
<tt>Exec=/usr/local/bin/startxfce4</tt><br>
<tt>TryExec=/usr/local/bin/startxfce4</tt><br>
<tt>Name=Xfce 4.2</tt><br>
<tt>Comment=The Xfce 4.2 Desktop Environment</tt>
</td></tr></table>

<p>Si vous n'avez pas installé Xfce dans /usr/local, alors vous devez ajuster les lignes Exec et TryExec pour qu'elles correspondent à votre installation.</p>

<p>Maintenant vous pouvez démarrer Xfce en utilisant kdm. Si Xfce n'apparaît pas, vérifiez les chemins que vous avez indiqués dans le fichier xfce42.desktop et essayez de redémarrer kdm.</p><br>

<a name="faq"></a>

<h2>Xfce FAQ</h2>

<blockquote>

<a href="#startup">1. A quoi correspond l'option "Utiliser la notification de démarrage" ?</a><br>

<a href="#themes">2. J'ai installé gtk-xfce-engine-2, mais les thèmes n'apparaissent pas dans la fenêtre des "Préférences de l'Interface Utilisateur". Pourquoi?</a><br>

<a href="#iconbox">3. Est-il possible de changer l'icône utilisée par la boîte à icônes pour une application donnée?</a><br>

<a href="#taskbar">4. Comment désactiver la barre des tâches ?</a><br>

<a href="#plugins_colors">5. J'ai installé un plugin pour le panneau, mais les indicateurs n'utilisent pas des couleurs différentes. Que puis-je faire ?</a><br>

<a href="#window_menu">6. Le délai entre un clic gauche sur le bouton du menu d'une fenêtre et l'apparition du menu semble long. Comment changer cela ?</a><br>

<a href="#corporate">7. Je souhaite utiliser Xfce en entreprise, et j'ai besoin d'empêcher les utilisateurs de modifier les menus.</a><br>

<a href="#hidden_option_2">8. Y-a-t-il moyen de désactiver la possibilité de déplacer et de redimensionner les fenêtres en utilisant le raccourci Alt + clic souris ?</a><br>

<a href="#xfterm4">9. Est-il possible de faire en sorte que le terminal de Xfce ressemble à...</a><br>

<a href="#apps">10. Y-a-t-il d'autres applications basées sur la plateforme de développement de Xfce ?</a><br>

<a href="#goodies">11. Où puis-je trouver tous les outils de surveillance du système visibles sur les captures d'écran du panneau ?</a><br>

<a href="#xcomposite">12. Comment puis-je activer la transparence du panneau et les ombres des fenêtres ?</a><br>

<a href="#icons">13. Où sont les thèmes d'icônes qui étaient habituellement fournis avec Xfce 4.0 ?</a><br>

<a href="#stock">14. Comment utiliser les icônes stock du paquet xfce4-icon-theme ?</a><br>

<a href="#logout">15. Comment activer l'action arrêter/redémarrer l'ordinateur dans la fenêtre de dialogue de déconnexion du gestionnaire de session ?</a><br>

<a href="#layer">16. Comment régler la hauteur du panneau par rapport aux autres fenêtres (panel layer) ?</a><br>

<a href="#xfprint">17. Comment configurer xfprint ?</a><br>

<a href="#transparency">18. Puis-je changer le niveau de transparence du panneau (ou de la boîte à icônes)?</a><br>

</blockquote>

<br>

<a name="startup">
<p><b>1. A quoi correspond l'option "Utiliser la notification de démarrage" ?</b></p>

		<p>Si vous sélectionnez cette option, le gestionnaire de fenêtres fera apparaître 
		une petite horloge pendant le chargement d'une applications à la place du curseur de 
		la souris. La librairie startup-notification doit être installée. Elle est probablement 
		disponible pour votre distribution. Cette foncitonnalité est seulement supportée par des 
		applications modernes (basées sur Gtk2.x et Qt3.x).<br> Veuillez noter que 
		l'API n'est pas encore stabilisée, et qu'en conséquence son bon fonctionnement avec Xfce 
		n'est garanti qu'avec une version >= 0.5 de la librairie.</p>


<a name="themes">
<p><b>2. J'ai installé gtk-xfce-engine-2, mais les thèmes n'apparaissent pas dans la fenêtre des "Préférences de l'Interface Utilisateur". Pourquoi?</b></p>

		<p>Le moteur de thèmes gtk-xfce-engine-2 doit être installé en utilisant le même préfixe 
		que celui de Gtk2 lui-même. Installé depuis les sources, ce moteur est par défaut installé 
		dans /usr/local, tandis que Gtk2 est souvent installé dans /usr. Installez simplement 
		gtk-xfce-engine-2 à nouveau en utilisant <code>./configure --prefix=/usr</code>, et les 
		thèmes deviendront normalement disponibles.</p>


<a name="iconbox">
<p><b>3. Est-il possible de changer l'icône utilisée par la boîte à icônes pour une application donnée?</b></p>

		<p>Ce n'est pas possible. Ce paramètre doit être géré par l'application elle-même.</p>


<a name="taskbar">
<p><b>4. Comment désactiver la barre des tâches ?</b></p>

		<p>Ne la lancez plus au démarrage...</p>
		
		<p>Si vous utilisez le gestionnaire de session, tuez xftaskbar4, et sauvez votre session 
		à la déconnexion, la barre des tâches ne sera plus lancée lors de la prochaine session.</p>
		
		<p>Si vous n'utilisez pas le gestionnaire de session, commentez la ligne <tt>xftaskbar4&amp;</tt> 
		dans votre <tt>$sysconfdir/xdg/xfce4/xinitrc</tt> ou <tt>~.config/xfce4/xinitrc</tt>.</p>
		
		<p>Si vous utilisez le gestionnaire de session et voulez enlever la barre des tâches pour 
		l'ensemble des utilisateurs du système, commentez la ligne relative à xftaskbar4 dans le 
		fichier $sysconfdir/xdg/xfce4-session/xfce4-session.rc.</p>


<a name="plugins_colors">
<p><b>5. J'ai installé un plugin pour le panneau, mais les indicateurs n'utilisent pas des couleurs différentes. Que puis-je faire ?</b></p>

		<p>First, try another Gtk theme, since some themes override the color. If it
		doesn't solve the problem, you probably have an old ~/.gtkrc-2.0 : remove it
		and try again.</p>


<a name="window_menu">
<p><b>6. Le délai entre un clic gauche sur le bouton du menu d'une fenêtre et l'apparition du menu semble long. Comment changer cela ?</b></p>

		<p>L'affichage du menu lors d'un simple clic sur le bouton du menu est lié à la vitesse 
		du double clic. Si vous voulez que le menu apparaisse plus rapidement, modifiez la vitesse 
		du double clic dans le gestionnaire des paramètres de la souris, ou bien utilisez le clic droit 
		sur la barre de titre des fenêtres pour voir apparaître le menu instantanément, sans avoir 
		à ajuster la vitesse du double clic.</p>


<a name="corporate">
<p><b>7. Je souhaite utiliser Xfce en entreprise, et j'ai besoin d'empêcher les utilisateurs de modifier les menus.</b></p>

		<p>Utilisez le mode kiosk (voir la documentation du panneau et de xfce4-session).</p>


<a name="hidden_option_2">
<p><b>8. Y-a-t-il moyen de désactiver la possibilité de déplacer et de redimensionner les fenêtres en utilisant le raccourci Alt + clic souris ?</b></p>

		<p>Éditez votre $HOME/.xfce4/xfwm4rc (ou créez en un nouveau) et ajoutez cette ligne :<br><br>
		easy_click=false<br><br>
		Ensuite kill -HUP [pid of xfwm4]</p>
		
		<p>Il y a plusieurs autres options cachées pour xfwm4. Elles sont répertoriées dans sa 
		documentation.</p>

		
<a name="xfterm4">
<p><b>9. Est-il possible de faire en sorte que le terminal de Xfce ressemble à...</b></p>

		<p>xfterm4 est un script qui appelle le terminal défini par la variable d'environnement 
		TERMCMD, ou bien xterm par défaut.</p>
		
		<p>Si vous utilisez xterm, <a href="various/Xresources.txt">voici</a> un exemple de fichier 
		~/.Xresources qui lui donnera un aspect agréable.</p>


<a name="apps">
<p><b>10. Y-a-t-il d'autres applications basées sur la plateforme de développement de Xfce ?</b></p>

		<p>Visitez <a href="http://www.xfce.org/~benny/apps.html">cette page</a> pour découvrir 
		des applications développées pour Xfce.</p>


<a name="goodies">
<p><b>11. Où puis-je trouver tous les outils de surveillance du système visibles sur les captures d'écran du panneau ?</b></p>

		<p>Ils sont disponibles depuis la parge du projet <a href="http://xfce-goodies.berlios.de/">
		Xfce Goodies</a>.</p>
		

<a name="xcomposite">
<p><b>12. Comment puis-je activer la transparence du panneau et les ombres des fenêtres ?</b></p>

		<p>Xfwm4 intègre son propre "compositing manager", qui permet un effet 
		de transparence pour le panneau et un ombrage des fenêtres. Il utilise l'extension 
		X Composite du serveur <a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0, 
		donc vous devez avant tout utiliser cette version du serveur graphique.</p>
		
		<p>L'extension Composite doit être activée dans votre /etc/X11/xorg.conf en utilisant 
		la section suivante :<br><br>
		Section "Extensions"<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Option "Composite" "Enable"<br>
		EndSection</p>
		
		<p>Xfwm4 doit être compilé avec l'option <em>--enable-compositor</em>, car elle n'est 
		pas activée par défaut. Si vous avez installé Xfce en utilisant des binaires fournis pour 
		votre distribution, vous aurez probablement à recompiler xfmw4.</p>
		
		<p>Veuillez noter que l'extension Composite est toujours en développement, elle contient 
		donc des bogues. Utiliser le "Compositing manager" peut ralentir votre environnement de travail 
		si votre carte graphique ne support pas l'accélération matérielle de l'extension RENDER. 
		Il est connu pour fonctionner correctement avec les cartes et pilotes NVidia, surtout si 
		vous ajoutez l'option <em>Option "RenderAccel" "true"</em> dans la section Device de votre 
		fichier xorg.conf. Cependant, notez que les modes Xinerama et TwinView ne fonctionnent pas 
		avec l'extension Composite, ainsi, pour le moment, il faut choisir entre dual-head et 
		Composite.</p>
		
<a name="icons">
<p><b>13. Où sont les thèmes d'icônes qui étaient habituellement fournis avec Xfce 4.0 ?</b></p>

		<p>Xfce 4.2 ne fournit plus qu'un seul thème d'icônes appelé xfce4-icon-theme. La version 4.2 
		du panneau suit le thème général d'icônes. Vous pouvez le sélectionner dans l'onglet 
		"Thème d'icônes" de la fenêtre de configuration de l'interface utilisateur, qui liste 
		tous les thèmes présents dans les répertoires $datadir/icons et ~/.icons.</p>
		

<a name="stock">
<p><b>14. Comment utiliser les icônes stock du paquet xfce4-icon-theme ?</b></p>
		
		<p>xfce4-icon-theme inclut un fichier $datadir/icons/Rodent/iconrc (pour les icônes au format 
		SVG) et un fichier $datadir/icons/Rodent/iconrc-png (pour les icônes au format PNG, si vous 
		ne voulez pas utiliser le format SVGn ou si votre système ne supporte pas ce format). Si 
		vous voulez utiliser les "Gtk Stock" icônes fournies par xfce4-icon-theme, ajoutez la 
		ligne suivante à votre fichier $datadir/themes/<em>theme_prefere</em>/gtk-2.0/gtkrc :<br><br>
		include "path/to/iconrc"<br><br>
		puis sélectionnez votre thème préféré.
		</p>


<a name="logout">
<p><b>15. Comment activer l'action arrêter/redémarrer l'ordinateur dans la fenêtre de dialogue de déconnexion du gestionnaire de session ?</b></p>
		
		<p>Vous devez autoriser le(s) utilisateur(s) à exécuter $installdir/libexec/xfsm-shutdown-helper 
		avec sudo. Installez sudo, et consultez la documentation de xfce4-session et de sudo.</p>


<a name="layer">
<p><b>16. Comment régler la hauteur du panneau par rapport aux autres fenêtres (panel layer) ?</b></p>

		<p>Cette option a disparu dans Xfce 4.2, afin d'améliorer la gestion du focus.</p>


<a name="xfprint">
<p><b>17. Comment configurer xfprint ?</b></p>

		<p>Xfprint n'est pas un utilitaire de configuration des imprimantes. C'est une interface 
		graphique entre Xfce et un système d'impression fonctionnel. Il supporte CUPS, BSD-LPR 
		(support minimal) et File (ps). Afin de compiler et installer Xfprint, vous devez 
		installer les paquets a2ps et psutils, et les paquets de développement de CUPS si vous 
		utilisez ce système d'impression (le ./configure vérifie la présence de BSD-LPR sur votre 
		système). Xfprint fournit les outils xfprint4 et xfprint-manager.</p>
		
		<p>Vous pouvez démarrer la fenêtre de configuration de Xfprint depuis le gestionnaire de 
		paramètres de Xfce, et sélectionner le système d'impression que vous souhaitez utiliser. 
		Les imprimantes configurées devraient devenir automatiquement disponibles par l'intermédiaire 
		de Xfprint.</p>
		
		<p>La commande xfprint4 permet d'envoyer des fichiers à l'imprimante depuis la ligne de 
		commande. Si vous l'ajoutez à un lanceur d'application du panneau, elle permet de faire 
		apparaître une fenêtre de recherche de fichier à imprimer, ou bien de glisser/déposer 
		des fichiers depuis un gestionnaire de fichiers.</p>
		
		<p>xfprint-manager donne accès à des informations concernant l'imprimante et sa file d'attente 
		si vous utilisez CUPS.</p>

<a name="transparency">
<p><b>18. Puis-je changer le niveau de transparence du panneau (ou de la boîte à icônes)?</b></p>

<p>Si vous utilisez <a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0 avec l'extension Composite activée, vous pouvez créer le fichier ~.config/xfce4/transparency si vous souhaitez modifier le niveau de transparence du panneau (ou de la boîte à icônes). Créez ce fichier et ajoutez une ligne avec le format panel=<i>value</i>, où "value" est un nombre compris entre 0 and 100. Le régler à 0 désactive l'effet de transparence.</p>

<p>Il y a plusieurs options pour changer le comportement du gestionnaire de l'extension Composite. Consultez la documentation de xfwm4 et de xfce4-panel pour en savoir plus.</p>


<div align="right"><a href="#top" style="color: #154374; "><b>Top of the page</b></a></div><br><br>
