<h1>Tour visuel de Xfce 4.4.0</h1>
<p align="justify">
À partir d'aujourd'hui, la tant attendue version 4.4.0 de l'environnement de
bureau Xfce est finalement disponible. Je vais essayer de mettre en avant quelques
unes des nouveautés apportées depuis la dernière version stable.
</p>


<h2>Icônes sur le bureau<a name="desktop-icons"></a></h2>

<p align="justify">
Une des options la plus souvent demandée durant les versions 4.0 et 4.2 était le
support d'icônes sur le bureau. Pour la version 4.4.0 de Xfce, cette option a été
ajoutée au gestionnaire de bureau <b>Xfdesktop</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="Icônes sur le bureau" /></p>

<p align="justify">
Le gestionnaire de bureau utilise les librairies de <b>Thunar</b> pour
manipuler les lanceurs et fichiers/dossiers dur le bureau. Le gestionnaire de
bureau est aussi capable d'afficher sur le bureau des icônes de fenêtres
minimisées, ce qui est une des particularités appréciées du monde CDE. Il est bien
sûr possible de désactiver les icônes sur le bureau pour garder un espace propre.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="Paramètres du bureau" /></p>

<p align="justify">
<b>Xfdesktop</b> permet toujours l'accès au menu des applications comme dans les 
versions précédentes de Xfce.
</p>


<h2>Gestionnaire de fichiers<a name="file-manager"></a></h2>

<p align="justify">
Le support des icônes sur le bureau vient de pair avec le gestionnaire de fichiers
<a href="http://thunar.xfce.org/">Thunar</a>. Ce dernier vient à remplacer le
précédent gestionnaire de fichiers, <b>Xffm</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Gestionnaire de fichiers Thunar" /></p>

<p align="justify">

<b>Thunar</b> a été écrit dès le départ pour être un gestionnaire de fichiers
simple d'utilisation et léger pour l'environnement de bureau Xfce. Son interface
graphique a été conçue pour ressembler au modèle de sélection de fichier
introduit par la version 2.4 de GTK+. D'autres gestionnaire de fichiers comme
<b>Nautilus</b> et <b>pcmanfm</b> ont suivi ce mouvement.
</p>

<p align="justify">
<b>Thunar</b> contient toutes les fonctionalités requises par un utilisateur
ainsi que plusieurs options avancées. Par exemple, l'option
<i>Renommer en masse</i> permet de renommer plusieurs fichiers à la fois en
utilisant certains critères.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Renommer en masse dans Thunar" /></p>


<h2>Lecteur amovibles et médias<a name="removable-drives-and-media"></a></h2>

<p align="justify">
Xfce 4.4.0 fournit un accès facile aux données sur disques amovibles et autres
 médias. Il suffit d'insérer le média dans le lecteur ou brancher le nouveau
lecteur dans l'ordinateur pour voir apparaître une icône sur le bureau ou dans 
le panneau latéral du gestionnaire de fichiers <b>Thunar</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="Volumes amovibles" /></p>

<p align="justify">
Cliquez sur l'icône pour monter le volume automatiquement. Un clic-droite sur
l'icône permet de démonter (unmount) ou éjecter le média du lecteur. Notez bien 
que cette particularité de Xfce requiert le support pour 
<ahref="http://freedesktop.org/wiki/Software_2fhal">HAL</a> et de ce fait n'est 
disponible que sur les systèmes linux 2.6.x ou FreeBSD 6.x et supérieurs (il y'à
la possibilité d'avoir un support limité pour les médias amovibles pour les 
versions 4.x et 5.x de FreeBSD, qui ne requièrent pas le support HAL).
</p>


<h2>Éditeur de texte<a name="text-editor"></a></h2>

<p align="justify">
Le nouvel éditeur de texte <b>MousePad</b> est inclus dans la nouvelle version. 
<b>MousePad</b> offre toutes les fonctionalités basiques d'un éditeur de texte, 
rien de plus, rien de moins.
</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p align="justify">

Imaginez <b>MousePad</b> comme étant l'équivalent de <b>Notepad</b> sous Windows.
Il démarre rapidement, en règle générale, moins d'une seconde même sur des vieilles
machines.
</p>


<h2>Gestionnaire de fenêtres<a name="window-manager"></a></h2>

<p align="justify">

<b>Xfwm4</b> est toujours notre gestionnaire de fenêtres préféré.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p align="justify">
Cette nouvelle version contient un copositeur avancé supportant la transparence 
ARGB des fenêtres, transparence des bords des fenêtres et bien plus...
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Basculeur de tâches Xfwm4" /></p>

<p align="justify">
<b>Xfwm4</b> contient aussi un tout nouveau basculeur de tâches. Comme l'on peut 
le voir dans la capture d'écran ci-dessus, il affiche, avec leur icône et titre
des fenêtres, toutes les fenêtres de l'espace de travail actuel.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Thèmes Xfwm4" /></p>

<p align="justify">
Le support pour plusieurs format de fichiers images pour les thèmes a été ajouté.
Les formats d'image supportés sont le <tt>PNG</tt>, <tt>GIF</tt> et le
 <tt>SVG</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Peaufinâge de Xfwm4" /></p>

<p align="justify">
Des options avancées permettant une personnalisation acrue du gestionnaire de 
fenêtre et son comportement ont été ajouté.
</p>


<h2>Le panneau<a name="panel"></a></h2>

<p align="justify">

Le panneau <b>Xfce4-panel</b> a été complètement réécrit pour la version 4.4 de
 Xfce. Le support pour plusieurs panneau est maintenant inclus d'origine et peuvent
être gérés facilement grâce au <b>Gestionnaire de panneau</b> dont on peut voir
une capture d'écran ci-dessous.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="Gestionnaire de panneau" /></p>

<p align="justify">

Un des problème majeur rencontré dans les précédentes versions de Xfce, était que
chaque greffon du panneau utilisait le même processus que le panneau lui-même, ce
 qui avait comme inconvénient que chaque plantage de greffon risquait de 
paralyser tout le panneau. Pour mettre fin à ce problème, le support de greffons
externes au panneau a été implémenté.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Ajouter des éléments au panneau" /></p>

<p align="justify">
Les développeurs de greffons pour le panneau peuvent maintenant décider si le
greffon devrait fonctionner en interne ou externe du processus du panneau, cela en
fonction de la stabilité du greffon.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Greffon boîte à icônes" /></p>

<p align="justify">

Depuis que le support pour de multiples panneau a été mis en place, les
applications <b>Xftaskbar4</b> et <b>Xfce4-iconbox</b> cont devenus des greffons
pour le panneau.
</p>

<p align="justify">
La plupart des greffons additionels pour le panneau, disponibles via le 
<a href="http://goodies.xfce.org/">Xfce Goodies Project</a>, ont été mis à jour
pour le nouveau panneau et de nouveaux greffons ont aussi vu le jour. Par exemple,
le tout nouveau <b>xfce4-xfapplet-plugin</b> permet d'ajouter des applets GNOME 
au panneau Xfce.
</p>


<h2>Gestion du temps<a name="time-management"></a></h2>

<p align="justify">
La nouvelle application de gestion des rendez-vous <b>Orage</b> remplace 
<b>Xfcalendar</b> qui avait vu le jour avec la versioon 4.2 de xfce. <b>Orage</b>
fournit plusieurs fonctions pour gérer efficacement votre temps.
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p align="justify">
Bien que <b>Orage</b> soit une application légère et simple d'utilisation, elle 
supporte les plus importantes fonctionalités que l'on peut trouver dans d'autres
applications plus avancées tel <b>Outlook</b> ou <b>Evolution</b>. Dans les 
versions précédentes, <b>Orage</b> fait usage du format <tt>dbh</tt> mais depuis
sa dernière version, <b>Orage</b> utilise le format <tt>ical</tt> qui se trouve
être compatible avec d'autres applications du même genre.
</p>


<h2>Émulateur de terminal<a name="terminal-emulator"></a></h2>

<p align="justify">
Bien que <b>Terminal</b> était déja disponible durant la periode de la version
4.2 de Xfce, il n'était pas encore prêt pour faire partie du projet. Avec cette
nouvelle version majeure de Xfce, <b>Terminal</b> a été intégré dans le coeur même
de l'environnement de bureau Xfce.
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p align="justify">
Mis à part les particularités auxquelles l'on pourrait s'attendre de la part d'un
émulateur de terminal, il inclut aussi des nouvelles fonctions comme de multiples
signets par fenêtre, des barres d'outils configurables et la possibilité de 
configurer presque tous les aspects de l'application via des
 <i>options cachées</i>. La capture d'écran ci-dessus permet de voir que cette
nouvelle version supporte la transparence en utilisant la fonction "Composite" du 
gestionnaire de fenêtres <b>Xfwm4</b>.
</p>


<h2>Imprimer<a name="printing"></a></h2>

<p align="justify">
<b>Xfprint</b>, l'application de gestion d'imprimantes de Xfce, a reçu quelques
améliorations avec cette nouvelle version. Tout d'abord, le convertisseur 
<tt>a2ps</tt> n'est plus obligatoire, bien qu'encore recommandé. Le support pour
la version 1.2 de <tt>CUPS</tt> a été ajouté et <b>Xfprint</b> est maintenant 
capable de d'afficher l'état de l'imprimante.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Système d'impression" /></p>

<p align="justify">
<b>Xfprint</b> s'intègre également à <b>MousePad</b> offrant ainsi un support 
d'impression général pour toutes sortes de documents texte en utilisant le
convertisseur <tt>a2ps</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Fenêtre d'impression Xfce" /></p>

<p align="justify">
Comme vous pouvez le remarquer la fenêtre du gestionnaire d'impression n'a pas
beaucoup changé depuis la  version 4.2 de Xfce mais le fonctionnement interne du
support d'impression a largement évolué, surtout le support pour <tt>CUPS</tt>.
Par ailleurs, la fonctionnalité de gestion d'imprimantes est devenu une librairie
à part entière, permettant à d'autres applications d'utiliser cet "API" pour
accéder à la configuration de l'imprimante.
</p>


<h2>Autodémarrage<a name="autostart"></a></h2>

<p align="justify">
Xfce 4.4.0 implémente la nouvelle spécification d'auto-démarrage <a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">Autostart
Specification</a> - en fait, Xfce a été le premier environnement de bureau à utiliser cette nouveauté mais les autres ont été plus rapide à sortir leurs
 nouvelles versions. ;-)
</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Xfce Éditeur d'auto-démarrage" /></p>

<p align="justify">
Cette spécification consiste en deux partie, l' <i>Auto-démarrage d'applications 
durant le démarrage</i> qui est implémentée dans <b>xfce4-session</b> et l'
<i>Auto-démarrage d'applications après montage</i> qui est implémentée dans
<a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>. Cette version de Xfce contient un éditeur d'auto-démarrage
d'applications <b>xfce4-autostart-editor</b> qui permet à l'utilisateur d'ajouter, 
supprimer ou désactiver des applications auto-démarées. La capture d'écran 
ci-dessus montre l'application en question.
</p>


<h2>Paramètres<a name="settings"></a></h2>

<p align="justify">
Pour cette nouvelle version plusieurs menus de configuration des paramètres ont 
été ajoutés, dont ceux que nous venons déjà de voir plus haut permettant de 
personnaliser le bureau à votre goût.
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Applications favorites" /></p>

<p align="justify">

Au départ, les applications favorites n'étaient disponibles que dans l'application
<b>Terminal</b> mais elles ont été importées dans Xfce pour que les utilisateurs 
n'aient plus à modifier des fichiers de configuration du "shell" pour définir
quel navigateur Web ou émulateur de terminal doit être utilisé par les applications
Xfce. Le but de l'opération étant de simplifier au maximum le changement 
d'application pour une certaine catégorie. (les utilisateurs de GNOME auront
remarqué que la même approche a été choisie par l'environnement de bureau GNOME).
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="raccourcis clavier" /></p>

<p align="justify">
La version 4.2 de Xfce a aussi connu un problème de limitation des raccourcis
clavier libres, alors que les utilisateurs voulaient assigner un plus grand nombre 
de raccourcis clavier. Avec xfce 4.4 cette limitation fait maintenant partie de 
l'histoire et les raccourcis claviers ont été séparés des paramètres du 
gestionnaire de fenêtres.
</p>


<h2>Réactions<a name="feedback"></a></h2>

<p align="justify">
Veuillez poster vos commentaires à propos de l'article, sur mon 
<a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">blog</a> et utiliser la liste de diffusion <a href="/community/lists">xfce</a> pour poster vos questions à propos de Xfce 4.4.0 ou si vous avez
des problèmes à l'installation.
</p>


<h2>Lien<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Site Web Xfce</a></li>
<li><a href="http://thunar.xfce.org/">Site Web Thunar</a></li>
</ul>

<h2>Crédits<a name="credits"></a></h2>
<p align="justify">Écrit par Benedikt Meurer, 21 Jan 2007</p>
<p align="justify">Traduit par Maximilian Schleiss, 25 Jan 2007</p>