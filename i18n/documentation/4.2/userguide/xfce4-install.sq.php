<h2><a name="xfce4-install" id="xfce4-install"></a>Instalimi i Xfce4-s</h2>

<h3><a name="id2534533" id="id2534533"></a>Paketa dyore</h3>

<p>Projekti Xfce 4, zyrtarisht, qarkullon vetëm kodin burim për mjedisin e desktopit. Sidoqoftë, për OS-in tuaj ose shpërndarjen tuaj, mund të ofrohen paketa dyore nga persona të tjerë.</p>

<p>Kontrolloni te site-i Xfce për <a href=
"http://xfce.org/download">vende shkarkimesh</a> dhe të dhëna shtesë rreth paketash dyore të passhme. Nëse nuk arrini të gjeni paketë dyore për OS-in tuaj, mund të gjeni të tilla prej shitësit të OS-it tuaj ose atij që ka qarkulluar shpërndarjen tuaj, ose mund të instaloni Xfce 4 prej burimit.</p>

<h3><a name="id2534968" id="id2534968"></a>Instaluesa grafikë</h3>

<p>Rruga më e lehtë për instalimin e Xfce-së prej burimi është përmes përdorimit të <a href="http://xfce-installers.os-cillation.com/"
>instaluesave grafikë</a>. Ka dokumentim dhe udhëzime për këtë.</p>

<h3><a name="id2534990" id="id2534990"></a>Montim prej burimi</h3>

<p>Për hartimin e Xfce-së dorazi, shihni te site-i i Xfce-së për <a href=
"http://xfce.org/download">vende shkarkimesh</a>.</p>

<p>Montimi i paketave është thjesht çështje çpaketimi i "tarball"-eve dhe shtypjes, që nga brenda drejtorisë së epërme të burimit, të urdhrit:</p>

<table border="0" bgcolor="#eeeeee" width="100%">
<tr>
<td>
<pre>
./configure &amp;&amp; make &amp;&amp; make install
</pre>
</td>
</tr>
</table>

<p>Disa prej paketave kanë për të pasur mundësi shtesë formësimi. Këto mund t'i shihni duke shtypur <b>./configure <tt>--help</tt></b>.</p>

<p>Xfce 4 varet nga pkg-config, GTK+ &gt;= 2.2, libxml2 dhe, për të pasur
xffm, nga libdbh, që mund të kihet prej <a href=
"http://sf.net/projects/libdbh">SourceForge</a>. Nëse këto i keni instaluar prej paketash dyore, sigurohuni që keni të instaluara edhe paketat <tt>-dev</tt> përkatëse.</p>

<p>Përndryshe, mund të instalonit librsvg &gt;= 2.2, për mbulim ikonash SVG, dhe libstartup-notification, për të pasur kursor të zënë gjatë ngarkimit të zbatimeve që e mbulojnë këtë standard.</p>

<p>Nëse instalimin e bëni në një tjetër parashtesë nga ai i pkg-config-ut, lypset të caktoni ndryshoren PKG_CONFIG_PATH të tillë që të përfshijë shtegun për te kartelat *.pc të instaluara nga libraritë e Xfce 4-s, i cili është ${prefix}/lib/pkgconfig. Për shembull:</p>

<table border="0" bgcolor="#eeeeee" width="100%">
<tr>
<td>
<pre>
export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig
</pre>
</td>
</tr>
</table>

<p>Tërë kartelat burim "tarball" përmbajnë gjithashtu edhe një kartelë të ashtuquajtur "spec" e cila ju lejon të montoni rpm-në tuaj:</p>

<table border="0" bgcolor="#eeeeee" width="100%">
<tr>
<td>
<pre>
rpmbuild -ta module-x.y.z.tar.gz
</pre>
</td>
</tr>
</table>

<h3><a name="id2535072" id="id2535072"></a>Përdorimi i CVS-së</h3>

<p>Burimi për zhvillimet më të fundit të Xfce 4-s mund të kihen prej CVS-je.</p>

<p>Shihni <a href=
"http://xfce.org/documentation/"
>këtu</a> për të dhëna se si të kihen prej CVS-je përditësimet më të fundit te zhvillimi. Për shfletim të pemës CVS mund të përdorni edhe lidhjen WebCVS.</p>

<h3><a name="id2596877" id="id2596877"></a>Software shtesë</h3>

<p>Projekti <a href="http://xfce-goodies.berlios.de"
>Xfce Goodies</a> përmbledh kontribute prej palësh të treta te Xfce 4. Prej atje mund të kihen disa shtojca të shkëlqyera që zgjerojnë goxha punimin e Xfce 4-s.</p>

<p><a href="http://spuriousinterrupt.org/projects/xfmedia/"
>Xfmedia</a> është një lojtës mediash i peshës së lehtë për Xfce-në,
me mekanizmin xine për bazë. Lojtësi i përkryer media për mjedisin e përkryer desktop.</p>

<p><a href="http://terminal.os-cillation.com/"
>Terminal</a> është një emulues terminali i përparuar, por i lehtë për tu përdorur, për Mjedisin Xfce për Desktop. Përmban tërë karakteristikat që do të prisnit të ketë një emulues modern terminali.</p>
