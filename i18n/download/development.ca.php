<h1>Desenvolupament del codi font de Xfce</h1>

<p>
Si voleu construir Xfce des del codi font, podeu baixar-vos els paquets amb el
codi font d'una versió alliberada de la nostra <a href="/download">pàgina de 
descàrregues</a>; o bé, provar una versió de desenvolupament descarregant-la 
del nostre Subversion (SVN a partir d'ara). Tingueu present que no hi ha 
suport per a instal·lar dues versions diferents de Xfce (ja siguin estables o
de desenvolupament).
</p>

<h3>Darrera versió estable (4.6.x)</h3>

<p>
Aquesta versió conté correccions d'errors, sense cap mena de funcionalitat major
addicional. Aquesta versió hauria de ser més estable que la versió en desenvolupament
(i més encara que la darrera versió alliberada), però no es pot assegurar 
l'inexistència d'errors.
</p>

<h3>Darrera versió en desenvolupament (4.7.x)</h3>

<p>
Aquesta versió conté els darrers desenvolupaments i resolucions d'errors.
No es pot considerar, però, completament funcional i lliure d'errors.
</p>

<h2>Com obtenir el codi font</h2>

<h3>Darrera versió estable (4.6.x) del SVN</h3>

<p>Podeu descarregar el paquet sencer amb la següent comanda:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.6</code>
</p>

<p>O fer el mateix per als diferents mòduls:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$nom_del_modul/branches/xfce_4_6 $nom_del_modul</code>
</p>

<h3>Darrera versió en desenvolupament (4.7.x) del SVN </h3>

<p>Podeu descarregar el paquet sencer amb la següent comanda:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code>
</p>

<p>O fer el mateix per als diferents mòduls:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$nom_del_modul/trunk $nom_del_modul</code>
</p>

<div class="tip">Per a sincronitzar la vostra còpia local de qualsevol
versió descarregada amb el SVN haureu d'executar <code>svn update</code>
enlloc de <code>svn checkout</code>. Això accelerarà el procés
alhora que minitzarà les transferències des dels servidors de Xfce.
</div>

<h3>Snapshots de desenvolupaments diaris</h3>

<p>
Si no voleu provar la versió en desenvolupament de Xfce regularment, o, no teniu
experiència construint Xfce a partir d'un codi font descarregat mitjançant el SVN,
podeu descarregar els <em>snapshots</em> de desenvolupament diaris 
d'<a href="http://mocha.xfce.org/downloads/svn-snapshots/">aquí</a>.
</p>

<h2>Construint els mòduls</h2>

<p>
Si heu descarregat els paquets (ja sigui en format .tar.gz o .tar.bz2), primer 
caldrà desempaquetar-los.
</p>

<p>
Si voleu instal·lar Xfce en un directori diferent al pkg-config, heu d'establir
la variable d'entorn PKG_CONFIG_PATH que apunti al directori on hi ha els fitxers
*.pc instal·lat per les llibreries Xfce, el qual és {prefixe}/lib/pkgconfig.
Per exemple:
</p>

<p>
<code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code>
</p>

<p>Per a construir els mòduls des dels paquets, només cal executar:</p>

<p>
<code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>Per a construir els mòduls descarregats des del SVN, necessitareu 
primer el paquet xfce4-dev-tools. Un cop instal·lat, executeu la següent
comanda per a construir els mòduls.</p>

<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
