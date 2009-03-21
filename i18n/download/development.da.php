<h1>Udviklingskildekode af Xfce</h1>
<p>
Hvis du ønsker at bygge Xfce fra kildekoden, kan du enten hente kilden som
tar-arkiv for en udgivet version af Xfce fra vores <a href="/download">downloadside</a>,
eller prøve en udviklingsversion, ved at hente den gennem subversion (kun for de 
eventyrlige). Bemærk venligst at installering af to forskellige versioner af
Xfce (f.eks. den stabile- og udviklingsversionen) ikke er understøttet.</p>

<h3>Seneste udgivelsesversion (4.6.x)</h3>

<p>
Denne version indeholder de seneste fejlrettelser uden nogen større nye funktioner. Denne 
skulle være mere stabil end udviklingsversionen (og selv den seneste officielle udgivelse), men
der er stadig ikke nogen garanti for at, denne version er fejlfri.
</p>
>
<h3>Seneste udviklingsversion (4.7.x) </h3>

<p>
Denne version indeholder de seneste udviklingsopdateringer og fejlrettelser. Der er 
ingen garanti for, at den hverken virker fuldstændig eller er fejlfri.
</p>

<h2>Hent kildekoden </h2>

<h3>Seneste udgivelsesversion (4.6.x) fra SVN</h3>

<p>Du kan hente hele udgivelsestræet med den følgende kommando:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.6</code>
</p>

<p>Eller de passende moduler:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_6 $modulename</code>
</p>

<h3>Seneste udviklingsversion (4.7.x) fra SVN </h3>

<p>
Du kan hente hele udgivelsestræet med den følgende kommando:
</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code>
</p>

<p>Eller de passende moduler:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code>
</p>

<div class="tip">For at synkronisere din lokale kopi (checkout) af udgivelses- eller
udviklingstræet med den på serveren kan du køre <code>svn update</code> istedet for
<code>svn checkout</code>. Dette vil fremskynde processen og minimere overførslen fra
Xfce's server
</div>

<h3>Daglige øjebliksbilleder af udvikling</h3>

<p>
Hvis du ingen interesse har i at teste udviklingsversionen af Xfce regelmæssigt eller du
ingen erfaring har med at bygge kilden fra SVN, kan du hente det daglige øjebliksbilleder af udviklingen
<a href="http://mocha.xfce.org/downloads/svn-snapshots/">her</a>.
</p>

<h2>Bygger modulerne</h2>

<p>
Hvis du har hentet tar-arkiverne, skal du pakke dem ud, før du fortsætter.
</p>

<p>
Hvis du installerer til et andet præfix fra pkg-config, er du nødt til at indstille
PKG_CONFIG_PATH-variablen til at inkludere stien til *.pc-filerne installeret af bibliotekerne
i Xfce, som er ${prefix}/lib/pkgconfig.  For eksempel:
</p>

<p>
<code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code>
</p>

<p>For at bygge moduler fra tar-arkiverne skal du blot køre:</p>

<p>
<code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>For at bygge svnmoduler (du skal bruge xfce4-dev-toolspakken) skal du køre denne kommando: </p>

<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
