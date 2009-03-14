<h1>Código fuente para desarrollo de Xfce</h1>

<p>
Si desea compilar Xfce del código fuente, puede bajar las fuentes de una
versión ya publicada desde nuestra <a href="/download">página de descargas</a>
o probar con una versión de desarrollo, descargándoa de subversion (sólo
para los más atrevidos). Por favor, tenga en cuenta instalar dos versiones de
Xfce (estable y desarrollo) no está soportado.</p>

<h3>Última versión publicada (4.6.x)</h3>

<p>
Esta versión tiene las últimas correcciones de fallos sin ninguna nueva funcionalidad significativa. Debería ser
más estable que la versión de desarrollo (incluso más que la última versión oficial), pero
aún así no hay garantías de que esté libre de fallos.
</p>

<h3>Última versión de desarrollo (4.7.x) </h3>

<p>
Esta versión contiene las últimas actualizaciones de desarrollo y correcciones de fallos. No hay 
garantías de que sea totalmente funcional y que no contenga fallos.
</p>

<h2>Conseguir el código fuente</h2>

<h3>Última versión publicada (4.6.x) de SVN</h3>

<p>Puede descargar todo el árbol de la versión publicada con el siguiente comando:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.6</code>
</p>

<p>O los módulos que necesite:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_6 $modulename</code>
</p>

<h3>Última versión de desarrollo (4.7.x) de SVN </h3>

<p>
Puede descargar todo el árbol correspondiente a esta versión con el siguiente comando:
</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code>
</p>

<p>O los módulos que necesite:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code>
</p>

<div class="tip">Para sincronizar su copia local (checkout) del árbol de publicación o 
desarrollo con la del servidor puede ejecutar <code>svn update</code> en lugar de
<code>svn checkout</code>. Esto acelera el proceso y minimiza la tasa de transferencia
del servidor de Xfce.
</div>

<h3>Snapshots diarios de desarrollo</h3>

<p>
Si no quiere estar probando constantemente la versión de desarrollo de Xfce o
no tiene experiencia compilando fuentes de SVN, puede descargar los snapshots diarios
de desarrollo <a href="http://mocha.xfce.org/downloads/svn-snapshots/">aquí</a>.
</p>

<h2>Compilar los módulos</h2>

<p>
Si ha descargado las fuentes comprimidas, necesitará descomprimirlos antes de seguir.
</p>

<p>
Si realiza la instalación con un prefijo distinto al de pkg-config, tendrá que configurar la
variable PKG_CONFIG_PATH para incluir la ruta a los archivos *.pc instalados por las
bibliotecas de Xfce, las cuales se encuentran en ${prefijo}/lib/pkgconfig
</p>

<p>
<code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code>
</p>

<p>Para compilar los módulos a partir de las fuentes ejecute:</p>

<p>
<code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>Para compilar los módulos svn (necesitará el paquete xfce4-dev-tools) ejecute este comando: </p>

<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
