<h1>Un aperçu de Xfce 4.6.0</h1>

<p>
La version 4.6.0 de l'environnement de bureau Xfce est enfin là ! Nous allons essayer
de vous présenter quelques unes des nouveautés de cette nouvelle version.
</p>

<h2>Xfdesktop, un bureau plus facile d'usage<a name="xfdesktop"></a></h2>

<p>
Depuis que Xfce 4.4 a apporté le support des icônes sur le bureau, de nombreuses personnes
souhaitaient pouvoir sélectionner plusieurs icônes en même temps. Avec <b>Xfce 4.6</b>,
 c'est maintenant possible : <b>Xfdesktop</b> permet de sélectionner plusieurs icônes en
 même temps, de les déplacer, de les supprimer...
</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-rubberbanding.png" alt="Sélection de plusieurs icônes" /></p>

<p>
<b>Xfce 4.6</b> dispose aussi d'un tout nouveau menu qui permet de manipuler les fichiers
comme avec le menu contextuel du gestionnaire de fichiers <b>Thunar</b>, mais aussi
d'ouvrir des applications, de quitter la session ou d'accéder à l'aide.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-menu.png" alt="Nouveau menu" /></p>

<h2>Tableau de bord <a name="panel"></a></h2>

<p>
De nombreux bogues présents depuis des années ont été corrigés, en particulier pour les
systèmes à plusieurs écrans, mais cette nouvelle version est aussi accompagnée d'un ensemble
d'extensions amélioré.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-panel-clock.png" alt="Nouvelle horloge binaire" /></p>

<p>
L'horloge a été réécrite pour consommer moins de ressources et pour corriger plusieurs
problèmes d'affichage, mais il y aussi un nouvel affichage pour le geek qui sommeille en
vous : l'horloge binaire ! On peut aussi remarquer que la nouvelle extension de <b>zone
de notification</b> permet de choisir les icônes de notification à ne pas afficher, pour
que cette zone ne soit pas encombrée et reste lisible.
</p>

<h2>Nouveau contrôleur de volume<a name="sound-mixer"></a></h2>

<p>
<b>Xfce4 Mixer</b> a été totalement réécrit en utilisant
<a href="http://www.gstreamer.net/">Gstreamer</a> qui prend en charge de nombreux systèmes
de son; l'interface utilisateur est plus aboutie, il est possible de gérer plusieurs cartes
son et une extension pour le tableau de bord permet de régler le volume rapidement grâce
à la molette de la souris.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-mixer.png" alt="Nouveau controleur de volume" /></p>

<h2>Un gestionnaire de session amélioré <a name="session-manager"></a></h2>

<p>
<b>Xfce 4.6</b> améliore aussi le gestionnaire de session : les sessions sont chargées plus
rapidement and la fenêtre de configuration a été retravaillée pour faciliter la gestion
des applications qui utilisent le mécanisme des sessions. De plus, le gestionnaire de session
recharge maintenant les composants clés du sytème s'ils venaient à s'arrêter à cause d'un
bogue : fini les pertes de bureau, de tableau de bord ou de gestionnaire de fenêtres !
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-settings.png" alt="Fenêtre de configuration du gestionnaire de session" /></p>

<p>
Il implémente aussi une fonctionnalité demandée depuis des années : le support de l'hibernation
et du 'suspend'. La fenêtre de déconnexion offre maintenant ces deux choix suplémentaires.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-logout.png" alt="Fenêtre de déconnexion" /></p>

<h2>Gestionnaire de fenêtres <a name="window-manager"></a></h2>

<p>
Comme d'habitude, <b>Xfwm4</b> a bien mûri pendant ce cycle de développement: de nombreux
bogues ont été corrigés, le support des systèmes à plusieurs écrans et les performances ont
été améliorés et quelques fonctionnalités sympathiques ont été implémentées.
</p>

<p>
<b>Xfwm4</b> détecte maintenant les fenêtres qui ne répondent plus et vous propose de forcer
leur fermeture quand vous essayez de les quitter.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-net-ping.png" alt="Fenêtre pour quitter les applications qui ne répondent plus" /></p>

<p>
Il y a aussi un nouveau menu <b>d'actions</b> avec des éléments supplémentaires pour
déplacer et redimensionner des fenêtres rapidement, pour les mettre au-dessus ou en-dessous
d'autres fenêtres ou pour les mettre en plein écran.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-menu.png" alt="Nouveau menu d'actions'" /></p>

<p>
Une nouvelle fonctionnalité permet d'étendre une fenêtre donnée à l'espace disponible sans
empiéter sur les fenêtres adjacentes.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-fill-operation.png" alt="Fonctionnalité de 'remplissage'" /></p>

<p>
Le <b>décorateur</b> ('compositor') a été optimisé pour réduire les clignotements pendant
les redimensionnements .
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-resize.png" alt="Redimensionnement optimisé" /></p>

<p>
De plus, de nombreuses options ont été ajoutées: il est par exemple possible de ne plus
faire clignoter les fenêtres lorsqu'elles signalent une urgence.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-tweaks.png" alt="De nouvelles options" /></p>

<h2>Gestionnaire de fichiers <a name="file-manager"></a></h2>

<p>
De nombreux bogues ont été corrigés dans <b>Thunar</b> et l'application est aussi plus rapide
et plus légère. Il maintenant possible d'utiliser les boutons suivant et précédent de la
souris (si disponibles) pour naviguer, et une extension permet désormais de mettre une image
comme fond d'écran rapidement.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-wallpaper-plugin.png" alt="Changer son fond d'écran facilement" /></p>

<p>
<b>Thunar</b> suit maintenant la spécification
<a href="http://freedesktop.org/wiki/Software/xdg-user-dirs">XDG user directories</a>
qui permet d'avoir des répertoires utilisateurs pour stocker sa musique, ses documents,
ses vidéos, ses modèles...
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-xdg-user-dirs.png" alt="Le menu de Thunar pour les dossier de l'utilisateur" /></p>

<p>
Désormais, <b>Thunar</b> affiche des icônes translucentes pour les volumes ou périphériques
qui ne sont pas montés, pour mieux les distinguer.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-mounting.png" alt="Les icônes translucentes des volumes non montés" /></p>

<p>
Enfin, <b>Thunar</b> prend maintenant en charge les supports encryptés.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-encrypted.png" alt="Gestion des supports encryptés" /></p>

<h2>De nouvelles fenêtres de préférences <a name="configuration-dialogs"></a></h2>

<p>
Xfce 4.6 utilise une nouvelle interface de configuration, <b>Xfce Settings Manager</b>,
qui permet de configurer son environnement de bureau plus facilement : les fenêtres accessibles
par un simple clic ont été conçues pour prendre moins de place et pour permettre d'effectuer
les personnalisations plus rapidement et de manière plus intuitive.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-settings-manager.png" alt="Xfce4 Settings Manager" /></p>

<h3>Accessibilité <a name="accessibility"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-accessibility-settings.png" alt="Accessibilité" /></p>

<p>
La fenêtre de configuration de l'<b>accessibilité</b> permet de régler les options
du clavier et de la souris liées à l'accessibilité, comme les touches collantes et lentes,
ou l'émulation de la souris.
</p>

<h3>Apparence <a name="appearance"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-appearance-settings.png" alt="Apparence" /></p>

<p>
La fenêtre de configuration de l'<b>apparence</b> permet de choisir le style des
contrôles, le thème d'icônes, la police et de régler les préférences de barres d'outils et de
menus.
</p>

<h3>Affichage <a name="display"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-display-settings.png" alt="Affichage" /></p>

<p>
La fenêtre de configuration de l'<b>affichage</b> permet de choisir la résolution,
le taux de rafraichissement et la rotation de chaque écran branché.
</p>

<h3>Clavier <a name="keyboard"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-keyboard-settings-layout.png" alt="Clavier, disposition" /></p>

<p>
La fenêtre de configuration du <b>clavier</b> permet de choisir la dispostion
du clavier, de régler les raccourcis claviers et autres options diverses.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png" alt="Raccourcis clavier" /></p>

<p>
Vous pouvez maintenant créer des raccourcis clavier très simplement et les conflits sont
automatiquement détectés.
</p>

<h3>Souris <a name="mouse"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-mouse-settings.png" alt="Souris" /></p>

<p>
La fenêtre de configuration de la <b>souris</b> permet de configurer les
différentes souris branchées : ordre des bouttons, accélération, vitesse de double clic,
thème de la souris...
</p>

<h3>Bureau <a name="desktop-settings"></a></h3>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-settings.png" alt="Bureau" /></p>

<p>
La fenêtre de configuration du <b>bureau</b> est maintenant beaucoup plus compacte, elle
permet de régler les préférences par écran : fond d'écran, luminosité, menu, icônes affichées
...
</p>

<h2>Nouvel 'Application Finder' <a name="appfinder"></a></h2>

<p>
<b>Xfce 4.6</b> vient aussi avec un tout nouvel 'application finder' avec une interface plus
agréable d'utilisation. L'utilisation au clavier est simplifiée et la liste des applications
installées est mise à jour automatiquement lors des installations ou désinstallations
d'applciations. Il permet aussi de créer des lanceurs pour le tableau de bord facilement, en
faisant glisser l'icône d'une application sur le tableau de bord.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-appfinder.png" alt="Nouvel  'application finder'" /></p>

<h2>Liens<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Le site de Xfce</a></li>
<li><a href="http://thunar.xfce.org/">Le site de Thunar</a></li>
</ul>

<h2>Crédits<a name="credits"></a></h2>

<p>Écrit par Jérôme Guelfucci, captures d'écran par Jannis Pohlmann, Février 2009</p>
