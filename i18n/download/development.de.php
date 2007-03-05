<h1>Quellcode der Entwicklerversionen von Xfce</h1>
<p>Wenn Sie Xfce aus dem Quellcode kompilieren wollen, können Sie entweder das Tar-Archiv der letzten offiziellen Veröffentlichung von unserer <a href="/download">Download-Seite</a> herunterladen oder es mit einer Entwicklerversion versuchen, die Sie aus den `subversion´-Quellen herunterladen (nur etwas für Abenteurer). Beachten Sie dabei, dass die gleichzeitige Installation von zwei verschiedenen Versionen von Xfce (z.B. stabile und Entwicklerversion) nicht unterstützt wird.</p>
<h3>Neueste veröffentlichte Version (4.4.x)</h3>
<p>Diese Version enthält vor allem Fehlerkorrekturen, keine großen Neuerungen. Sie sollte stabiler als die Entwicklerversion (und auch als die letzte offizielle Veröffentlichung) laufen, dennoch gibt es keine Garantie dafür, dass diese Version fehlerfrei ist.</p>
<h3>Aktuelle Entwicklerversion (4.5.x) </h3>
<p>Diese Version enthält aktuelle Neuerungen der Entwickler sowie Fehlerkorrekturen. Es kann weder Fehlerfreiheit noch volle Funktionsfähigkeit garantiert werden.</p>
<h2>Herunterladen des Quellcodes </h2>
<h3>Neueste veröffentlichte Version (4.4.x) aus den SVN-Quellen</h3>
<p>Sie können entweder den kompletten Zweig der Veröffentlichung mit folgendem Befehl herunterladen:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>Oder nur ein bestimmtes Modul:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $modulename</code></p>
<h3>Aktuelle Entwicklerversion (4.5.x) aus den SVN-Quellen </h3>
<p>Sie können entweder den kompletten Zweig der Entwicklerversion mit folgendem Befehl herunterladen:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>Oder nur ein bestimmtes Modul:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<div class="tip">Um ihre lokale Kopie (checkout) mit dem jeweiligen Entwicklungszweig auf dem Server abzugleichen, können Sie <code>svn update</code> anstelle von <code>svn checkout</code> verwenden. Das beschleunigt den Vorgang und entlastet den Xfce-Server.</div>
<h3>Tagesaktuelle Schnappschüsse der Entwicklung</h3>
<p>Wenn Sie nicht vorhaben, die Entwicklerversion von Xfce regelmäßig zu testen, bzw. keine Erfahrung mit dem Kompilieren aus SVN-Quellen haben, dann können Sie tägliche `Schnappschüsse´ der Entwicklerarbeit <a href="http://foo-projects.org/~pollux/xfce-snapshots/" target="_blank">hier</a> herunterladen.</p>
<h2>Kompilieren der Module</h2>
<p>Wenn Sie die Tar-Archive heruntergeladen haben, müssen Sie sie zunächst entpacken.</p>
<p>Wenn Sie mit einem anderen `prefix´ für pkg-config installieren, müssen Sie für die Variable PKG_CONFIG_PATH den Pfad zu den *.pc-Dateien angeben, die von den Xfce4-Bibliotheken installiert werden, also ${prefix}/lib/pkgconfig. Zum Beispiel:</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>Die Module aus den Tar-Archiven kompilieren Sie mit folgendem Befehl:</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>Die Module aus den SVN-Quellen (Sie benötigen das Paket xfce4-dev-tools) kompilieren Sie mit folgendem Befehl:</p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
