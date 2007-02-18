<h1>Kod burim i zhvillimit të Xfce-së</h1>
<p>Nëse doni ta formoni Xfce-në prej kodit burim, mundeni ose të shkarkoni burimin e ngjeshur
 të një versioni të Xfce-së prej <a href="/download">faqes tonë të shkarkimeve</a>, ose
 të provoni një nga versionet në zhvillim, duke e shkarkuar prej SVN-je (vetëm për
 të guximshmit). Ju lutemi kini parasysh që instalimi i dy versioneve të ndryshëm
 të Xfce-së (dmth. i qëndrueshmi dhe ai në zhvillim) nuk mbulohet prej nesh.</p>

<h3>Versioni më i ri në qarkullim (4.2.x)</h3>
<p>Ky version përmban ndreqjet më të fundit të të metave, pa ndonjë karakteristikë të re të rëndësishme.
 Ky i bie të jetë më i qëndrueshëm se sa versioni në zhvillim (dhe madje edhe se versioni i fundit zyrtar),
 por nuk ka akoma garanci që ky version është pa të meta.</p>
<h3>Versioni më i ri në zhvillim (4.3.x) </h3>
<p>Ky version përmban përditësime të fundit zhvillimesh dhe ndreqje të metash. Nuk ka garanci që
 do të punojë se s'bën dhe as se është pa të meta.</p>
<h2>Si të merrni kodim burim </h2>
<h3>Versioni më i ri në qarkullim (4.2.x) prej SVN-je</h3>
<p>Mund të shkarkoni tërë pemën për këtë version duke dhënë urdhrin vijues:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.2</code></p>
<p>Ose për modulet përkatës:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_2 $modulename</code></p>
<h3>Versioni më i ri në zhvillim (4.3.x) from SVN </h3>
<p>Mund të shkarkoni tërë pemën përmes urdhrit vijues:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>Ose për modulet përkatës:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<p>
<div class="tip">Për të njëkohësuar kopjen tuaj vendore (checkout) të pemës për versionin në qarkullim apo atij në zhvillim e sipër
 prej njërit prej shërbyesve mund të xhironi <code>svn update</code> në vend të <code>svn checkout</code>.
 Kjo do të përshpejtojë procesin dhe do të zvogëlojë sa mundet trafikun për shërbyesin e Xfce-së</div>
</p>
<h3>Kampione të përditshëm zhvillimi</h3>
<p>Nëse s'doni të provoni rregullisht versionin në zhvillim e sipër të Xfce-së ose nuk keni përvojë
 me marrjen e burimit përmes SVN-së, mund të shkarkoni kampione të përditshëm zhvillimi prej <a href="http://foo-projects.org/~pollux/xfce-snapshots/" target="_blank">këtej</a>.</p>

<h2>Formim modulesh</h2>
<p>nëse keni shkarkuar një version burim të ngjeshur, lypset ta çpaketoni para se të vazhdoni.</p>
<p>Nëse e instaloni në nj tjetër parashtesë nga pkg-config, lispet ta rregulloni ndryshoren PKG_CONFIG_PATH
 të përfshijë shtegun për te kartelat *.pc të instaluara nga libraritë e  Xfce 4-s, i cili është
 ${prefix}/lib/pkgconfig.  Për shembull:</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>

<p>Për të formuar modulet prej burimi thjesht xhironi:</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>Për të formuar modulet prej svn-je (ju duhet paketa xfce4-dev-tools) xhironi këtë urdhër: </p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
