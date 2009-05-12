<h1>Code source de Xfce</h1>
<p>Si vous voulez compiler Xfce vous-même à partir du code source, vous pouvez soit télécharger le code compressé dans des archives "tar" que vous trouverez sur notre page <a href="/download">Télécharger</a> ou, pour les plus aventureux, en testant la version de développement téléchargeable via "subversion". Notez bien que l'installation en paralèlle de plusieurs versions (stable et développement) n'est pas prise en charge.</p>
<h3>Dernière version stable (4.6.x)</h3>
<p>Cette version contient les dernières correction de bogues, sans pour autant contenir de nouvelles fonctionnalités majeures. Elle devrait être plus stable que la version de développement, sans pour autant la garantie d'être exempte de bogues.</p>
<h3>Dernière version en développement (4.7.x) </h3>
<p>Cette version contient les dernières mises à jour, ainsi que la correction de bogues. Il n'y à aucune garantie quant à son fonctionnement.</p>
<h2>Télécharger la dernière version du code source</h2>
<h3>Dernière version (4.4.x) sortie de SVN</h3>
<p>Vous pouvez télécharger la dernière version sortie du SVN avec la commande suivante :</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>Ou le module souhaité :</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $nomdumodule</code></p>
<h3>Dernière version (4.7.x) en développement de SVN</h3>
<p>Vous pouvez télécharger toute la version en développement avec la commande suivante :</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>Ou le module souhaité :</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $nomdumodule</code></p>
<div class="tip">Pour synchroniser votre copie locale (checkout) de l'arbre de développement avec celui du serveur, vous pouvez utiliser la commande <code>svn update</code> à la place de la commande <code>svn checkout</code>. Ceci rendra l'opération plus rapide et diminuera les transferts avec le serveur Xfce</div>
<h3>Images journalières du développement</h3>
<p>Si vous ne voulez pas tester la version de développement de Xfce tous les jours ou si vous ne savez pas trop comment compiler depuis les sources SVN, vous pouvez toujours télécharger des images journalières du développement <a href="http://mocha.xfce.org/downloads/svn-snapshots/">ici</a>.</p>
<h2>Compiler les modules</h2>
<p>Si vous avez téléchargé les archives, vous devez les extraire d'abord.</p>
<p>Si vous installez dans un prefixe différent de celui de pkg-config, vous devez définir la variable PKG_CONFIG_PATH avec ${prefix}/lib/pkgconfig pour inclure le chemin jusqu'aux fichiers *.pc que les librairies Xfce 4 ont installé. Par exemple :</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>Pour compiler les modules des archives, exécutez :</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>Pour compiler les modules SVN (vous aurez besoin du paquet xfce4-dev-tools), exécutez cette commande :</p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
