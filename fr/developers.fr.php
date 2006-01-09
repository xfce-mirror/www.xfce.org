<!-- <p>Vous trouverez des informations complémentaires à propos du développement de Xfce 4 (release notes, liste de fonctionnalités souhaitées, fonctionnalités prévues...) sur la <a href="http://www.symonds.net/~botsie/xfce/index.php/HomePage"><b>page Wiki</b></a> de Xfce 4.</p> -->

<p>La documentation de l'API de Xfce 4.2 est disponible sur <a href="http://www.xfce.org/documentation/api-4.2/">cette page</a>.</p>

<a name="bug"></a>

<h3>Signaler un bogue :</h3>

<p>Vous pouvez signaler un bogue en postant un message sur la liste de diffusion des développeurs: <a href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>, ou bien en utilisant le <a href="http://bugs.xfce.org/">système de gestion des bogues</a> mis en place par l'équipe de Lunar Linux.</p>

<p>Vous pourrez peut-être trouver certains d'entre-nous sur IRC : #xfce sur irc.freenode.net.</p><br>

<a name="contribute"></a>

<h3>Contribuer :</h3>

<p>Si vous recherchez un moyen de contribuer à Xfce 4, voici quelques éléments qui requièrent du travail :</p>

<ul class="submenu">


	<li><b>Développement</b> - Vous être libres de vous joindre au nouveau <a href="http://thunar.xfce.org/wiki/">projet Thunar</a>, destiné à développer un nouveau gestionnaire de fichier pour la prochaine branche majeure de Xfce (la branche 4.4), ainsi que le développement de la <a href="http://foo-projects.org/mailman/listinfo/xfc-dev">"Xfc C++ foundry" pour Xfce</a>.
	</li>


<li><b>Traductions</b> - Les traductions de plusieurs modules manquent encore.


<!-- Nous avons maintenant un module "virtuel" pour les traductions, qui contient les répertoires /po de tous les modules. La commande à utiliser est :<br>
<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co translations</tt></td></tr></table>

<p>Cette commande créera un sous-répertoire "translations". Si vous voulez télécharger les fichiers correspondant spécifiquement à la branche 4.2, utilisez 'co -r xfce_4_2 translations' à la place.</p> -->
	
Si vous souhaitez participer, veuillez noter que des <a href="http://xfce.org/~kelnos/xfce4/i18n/">statistiques</a> sur l'état des traductions de Xfce sont disponibles, et envisagez de vous abonner à la liste de diffusion <a href="http://lunar-linux.org/mailman/listinfo/xfce-i18n">xfce-i18n</a>.

Nous avons un "module" virtuel qui téléchargera les répertoires po/	pour l'ensemble des modules. Selon la version que vous désirez traduire, la commande à utiliser est la suivante:<br>

<table width="100%">
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/trunk-po</tt></td></tr>
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/4.2-po</tt></td></tr>
</table>

</li>


<li><b>Documentation</b> - Toutes les contributions et les commentaires concernant la <a href="http://members.home.nl/xfce4/
documentation/">documentation</a> de Xfce 4 actuellement disponible seront les bienvenus.

<!-- Un module "docs" est disponible, qui permet le téléchargement depuis le serveur CVS de tous les répertoires doc/ en utilisant la commande suivante :<br>
<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co docs</tt></td></tr></table> -->

</li>



<li><b>Plugins pour le panneau</b> - Il est devenu courant pendant le développement de Xfce 4.0 
d'ajouter des fonctionalités au panneau Xfce en codant de nouveaux plugins. Le projet 
<a href="http://xfce-goodies.berlios.de/">Xfce Goodies</a> rassemble déjà plusieurs plugins, 
grâce à la contribution de nos utilisateurs que nous remercions ici.<br>

   Si vous projetez d'écrire votre propre plugin pour le panneau, il faut dès le départ faire attention à un certaines choses.
   Pour bien faire, lisez le code source de <tt>xfce4-panel</tt>, cat il contient un exemple de plugin qui enseigne les bases nécessaires à ce travail.
   Vous devriez également consulter le code source des plugins qui existent déjà et fonctionnent réellement.

   Après cette phase d'apprentissage, vous devrez récupérer autotools GNU dans les versions disponibles <a
   href="http://xfce.org/archive/tools/">ici</a>, car ce sont ceux utilisés par les développeurs de Xfce, et parce qu'ils ont fait la preuve de leur bon fonctionnement.

   Si vous avez des question à propos du développement d'un plugin pour le panneau, ou si vous rencontrez des difficultés, postez un message sur la liste de ddiffusion  Xfce Goodies.
   
	</li>

	
	<li><b>Graphisme</b> - L'<a href="http://xfce.org/various/xfce_images.tar.gz">archive suivante</a> contient quelques images que vous pouvez utiliser pour créer des logos, des fonds d'écran, etc... en rapport avec Xfce, ou encore pour placer un lien vers Xfce depuis votre site. Un <a href="http://www.xfce.org/xfwm4-theme-howto/">guide de création de thèmes pour xfwm4</a> ainsi qu'un <a href="http://www.xfce.org/~jasper/ICONTHEMES">guide pour la création de thèmes d'icônes</a> sont également disponibles.</li>


</li>
</ul>

<p>Si vous avez des questions, envoyez un email à <a href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>.</p><br>



