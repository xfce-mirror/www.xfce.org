<h1>Xfce garapen iturburu kodea</h1>
<p>Xfce iturburu kodearen bidez konpilatu nahi baduzu, argitaratutako Xfce bertsioaren iturburu paketea deskarga 
dezakezu gure <a href="/download">deskarga orrialdetik</a>, edo garapenean dagoen bertsioa probatu dezakezu iturburua 
subversion-etik deskargatuaz (abentura zaleentzat bakarrik). Kontutan izan ez dela Xfce bi bertsio desberdin batera 
instalatzailea (garapenean eta argitaratutakoa adibidez) onartzen.</p>
<h3>Argitaratutako azken bertsioa (4.4.x)</h3>
<p>Bertsio honek azken programa errore konponketak ditu, ezaugarri
berririk gabe. Hau garapen bertsioa baino egonkorragoa izan beharko
litzateke (baita azken argitaraketa ofiziala baino), hala ere hau ez
da bertsio honek errorerik ez duenaren bermerik.</p>
<h3>Garapen azken bertsioa (4.5.x)</h3>
<p>Bertsio honek garapenek azken eguneraketa eta errore konponketak ditu. Ez dago bermerik guztiz funtzionatuko duenik ez errorerik ez duenik.</p>
<h2>Iturburu kodea eskuratzen</h2>
<h3>Argitaratutako azken bertsioa (4.4.x) SVN-tik</h3>
<p>Argitaratutako azken bertsioaren iturburu kode zuhaitz osoa
komando honen bidez eskuratu dezakezu:<</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>Edo moduluak nahi izanez gero:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $modulename</code></p>
<h3>Garapen azken bertsioa (4.5.x) SVN-tik</h3>
<p>Argitaratutako azken bertsioaren iturburu kode zuhaitz osoa komando honen bidez eskuratu dezakezu:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>Edo moduluak nahi izanez gero:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<p>
<div class="tip">Garapen bertsioaren edo argitaratutako bertsioaren kopia lokala
zerbitzarikoarekin sinkronizatu nahi izanez gero (checkout) <code>svn update</code>
exekutatu dezakezu <code>svn checkout</code> beharrean. Honek prozesua bizkortu
eta Xfce zerbitzari transferentzia murriztuko du</div>
</p>
<h3>Eguneko garapen paketea/h3>
<p>Ez baduzu Xfce garapen bertsioa base erregular batzuetan
oinarriturik egin edo svn-ko iturburuarekin konpilazioetan
esperientziarik ez baduzu eguneko garapen bertsio<a
href="http://foo-projects.org/~pollux/xfce-snapshots/" target="_blank">hemen</a> deskargatu dezakezu..</p>
<h2>Moduluak eraikitzen</h2>
<p>Pakete bat deskargatu baduzu irauli egin behar duzu aurrera jarraitu aurretik.</p>
<p>Pkg-konfig ez den aurrizki bide batetan instalatu nahi izanez gero PKG_CONFIG_PATH  
aldagaia ezarri behar duzu Xfce 4 liburutegiak instalaturiko *pc fitxategiak eduki ditzan, 
zein bidea
${prefix}/lib/pkgconfig da. Adibidez <code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>Moduluak paketetik eraikitzeko komando hau abiarazi</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>Svn moduluak eraikitzeko (xfce4-dev-tools paketea behar duzu) komando hau abiarazi: </p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
