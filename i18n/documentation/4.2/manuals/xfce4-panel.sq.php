  <h1><a name="xfce4-panel"></a>Paneli Xfce 4</h1>

  <p><strong>Jasper Huijsmans</strong> &lt;jasper@xfce.org&gt;</p>

  <h3>Ky doracak përshkruan xfce4-panel, version 4.2.0. Përditësimi i fundit: Jan 2005</h3>

  <p>Të drejta Kopjimi &copy; 2004 Jasper Huijsmans</p>
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#panel-intro">Hyrje</a></dt>

    <dt><a href="#panel-getting-started">Nga t'ia Fillohet</a></dt>

    <dt><a href="#panel-items">Objekte Paneli</a></dt>

    <dd>
      <dl>
        <dt><a href="#launcher-item">Nisës</a></dt>

        <dt><a href="#clock-item">Orë Xfce</a></dt>

        <dt><a href="#mailcheck-item">Kontrollues për Postë</a></dt>

        <dt><a href="#switcher-item">Këmbyes Desktopi dhe Pager
        Grafik</a></dt>

        <dt><a href="#systembuttons-item">Butona Sistemi</a></dt>

        <dt><a href="#separator-item">Ndarës</a></dt>
      </dl>
    </dd>

    <dt><a href="#subpanels">Menu Paneli</a></dt>

    <dt><a href="#panel-settings">Parapëlqime Paneli</a></dt>

    <dd>
      <dl>
        <dt><a href="#panel-apearance">Dukje</a></dt>

        <dt><a href="#panel-behaviour">Sjellje</a></dt>
      </dl>
    </dd>

    <dt><a href="#panel-advanced">Të mëtejshëm</a></dt>

    <dd>
      <dl>
        <dt><a href="#panel-files">Kartela dhe Ndryshore 
        Mjedisi</a></dt>

        <dt><a href="#panel-kiosk">Mënyra Kioskë</a></dt>

        <dt><a href="#panel-transparency">Tejdukshmëri</a></dt>
      </dl>
    </dd>

    <dt><a href="#panel-copyright">Rreth
    <b><tt>xfce4-panel</tt></b></a></dt>
  </dl>

  

  <h2><a name=
  "panel-intro"></a>Hyrje</h2>

  <p>Paneli Xfce 4 është pjesë e <a href="http://www.xfce.org"
 >Mjedisit Desktop Xfce 4</a> dhe përmban nisësa programesh,
  menu paneli, një orë, një këmbyes desktopi dhe të tjera.
  Shumë anë të panelit mund të formësohen përmes dialogjesh
  grafikë. Ky doracak do të duhej t'ju pajiste me tërë të dhënat
  e nevojshme rreth se si ta terezisni panelin ashtu si ju pëlqen.</p>

  

  <h2><a name=
  "panel-getting-started"></a>Nga t'ia Fillohet</h2>

  <p>Zakonisht do ta nisni panelin si pjesë të sesionit tuaj Xfce,
  duke përdorur programthin <b><tt>startxfce4</tt></b>. Urdhri që
  do të përmbushet për panelin është <b><tt>xfce4-panel</tt></b>.</p>

  <p>Kur nisni panelin  do të shihni të shfaqet një shtyllë në fundin e
  ekranit tuaj, që duket pak a shumë kështu:</p><a name=
  "default-panel-fig"></a>

  <p><b>Figurë 1. Paneli parazgjedhje Xfce</b></p><img src=
  "/images/documentation/4.2/default_panel.png" alt=
  "Paneli Xfce në formësimin parazgjedhje: disa nisësa, një mbikqyrës i ri për postën, një orë dhe një pager desktopi; përfshin gjithashtu një menu të hapur paneli. " />

  <p>Figura paraqet panelin në formësimin parazgjedhje, me një
  menu paneli të hapur. Duke i kaluar miun përsipër një objekti
  do të shfaqet një ndihmëz. Paneli i Xfce-së përdor gjerësisht
  butonat e majtë dhe të djathtë të miut. Klikimi i të majtit përmbush
  veprimin parazgjedhje të një objekti, ndërkohë që djathtasklikimi
  zakonisht nxjerr një menu konteksti. Shift + klikim majtas mund të përdoret
  zakonisht në vend të djathtasklikimit. Kini parasysh që ky doracak merr si të mirëqenë
  përdorimin e një miu për djathtarashë.</p>

  <p>Ka një dorës në çdo anë të panelit. Mund t'i përdorni për ta tërhequr
  panelin kudo në skajet e ekranit. Tërheqja tej mesit të ekranit do ta kalojë panelin
  te skaji përballë i ekranit. Klikimi me butonin e djathtë të miut mbi një
  prej tyre shfaq një menu ... Oburra!, jepini, provojeni ;-)</p><a name=
  "handle-popup-fig"></a>

  <p><b>Figurë 2. Menu dorëze</b></p><img src=
  "/images/documentation/4.2/handle-popup.png" alt="Menu dorëze." />

  <p>Zona ndërmjet dorëzave përmban objektet e panelit. Objektet që mund të kihen
  përshkruhen te ndarja &quot; <a href="#panel-items">Objekte Paneli</a>&quot;.
  Shumica e objekteve kryejnë një veprim kur klikohet mbi ta. Djathtasklikimi
  mbi një objekt do të shfaqë një menu prej së cilës mud të hapni një dialog
  vetish, të hiqni objektin ose të shtoni një objekt të ri. Mund të shtohen
  objekte edhe prej menusë që hapet me djathtasklikim mbi një nga dorëzat (sihni më sipër).</p>
  <a name=
  "item-popup-fig"></a>

  <p><b>Figurë 3. Menu objekti</b></p><img src=
  "/images/documentation/4.2/item-popup.png" alt="Menu objekti." />

  <p>Kur doni të shtoni një objekt, hapet një dialog që tregon tërë
  objektet e mundshëm për në panel. Disa objekte mund të duken vetëm
  një herë në panel, p.sh. <em>system tray</em>, dhe do të shfaqen në ngjyrë
  gri kur janë tashmë të pranishëm.</p><a name="add-item-dialog-fig"></a>

  <p><b>Figurë 4. Dialog shtimi objekti</b></p><img src=
  "/images/documentation/4.2/add-item-dialog.png" alt=
  "Dialog me objekte paneli të passhëm" />

  <p>Parapëlqimet e përgjithshëm për panelin mund të ndryshohen
  prej Përgjegjësit të Rregullimeve Xfce 4, i cili mund të niset
  ose prej panelit nga një nisës, ose duke xhiruar <b><tt>xfce-settings-show</tt></b>.
  Shihni &quot;<a href="#panel-settings">Parapëlqime Paneli</a>&quot; për një shpjegim
  të opsioneve të mundshëm.</p>

  

  <h2><a name="panel-items"></a>Objekte Paneli</h2>

  <p>Është e mundur që paneli Xfce 4 të ngarkojë shtojva të jashtme,
  dhe po njësoj edhtë brendshme. Në këtë ndarje do të përshkruhen vetëm
  objekte paneli që instalohen me panelin.</p>

  <p>Dialogu i vetive për një objekt paneli mund të hapet prej menusë së
  djathtasklikimit mbi objektin. Çdo tip objekti paneli ka dialogun e vet
  të formësimit. Çdo dialog ofron të paktën këto mundësi:</p>

  <ul type="disc">
    <li>Ndryshoni vendin e objektit në panel.</li>

    <li>Hiqni objektin.</li>

    <li>Mbyllni dialogun.</li>
  </ul>

  <h3><a name="launcher-item"></a>Nisës</h3>

  <p>Objekti më i rëndomtë në panele është nisësi. Ju lejon të nisni
  programe prej panelit. Dialogu i vetive për të ofron mundësitë vijuese:</p>

  <dl>
    <dt>Ikonë</dt>

    <dd>
      <p>Ikona e përdorur nga paneli do të ndjekë temën për ikona të cilën 
      e zgjidhni prej <a href="xfce-mcs-plugins#ui-settings"
     >dialogut për ndërfaqe përdoruesi</a>. Sigurisht që mund të përdorni
      ikona vetjake, ose duke shfletuar të tjerët që pasojnë
      atë të parazgjedhur, ose duke hedhur një pamje prej një
      përgjegjësi kartelash te zona e paraparjes.</p>
    </dd>

    <dt>Urdhër</dt>

    <dd>
      <p>Mud të shtypni urdhrin që do përmbushur ose të shfletoni sistemin 
      e kartelave për ta gjetur. Ka një mundësi për nisjen prej një terminali
      dhe një tjetër për përdorim njoftimi nisjeje. Mundësia e fundit do të thotë
      që përgjegjësi i dritareve mund të tregojë një klepsidër për sa kohë që
      programi është duke u ngarkuar. Por kjo duhet të mbulohet edhe nga zbatimi
      po ashtu. Çka duhet të jetë e siguruar për programe të krijuar me Gtk 2.2.</p>
    </dd>

    <dt>Ndihmëz</dt>

    <dd>
      <p>Objekti i panelit do ta shfaqë këtë ndihmëz kur e mbani miun sipër tij.</p>
    </dd>

    <dt>Menu</dt>

    <dd>
      <p>Nisësi mund të ketë të bashkangjitur një menu paneli. Kur përzgjidhet
      kjo mundësi, do të shfaqet një buton i vogël me një shigjetë ngjitur me
      objektin. Shihni <a href="#subpanels">këtu</a> për më tepër të dhëna rreth
      menush paneli. Vendi i butonit të menusë mund të ndryshohet prej dialogut
      të rregullimeve të përgjithshëm.</p>
    </dd>
  </dl><a name="launcher-fig"></a>

  <p><b>Figure 5. Launcher item</b></p><img src=
  "/images/documentation/4.2/launcher-properties.png" alt=
  "Shfaq dialog vetish për objekt nisësi." />

  <h3><a name="clock-item"></a>Orë Xfce</h3>

  <p>Ora e Xfce ka një numër mundësish për ndryshimin e mënyrës
  se si duket. Ka të passhëm tre tipe orësh: analoge, shifrore dhe
  LED. Ka një mundësi për të shfaqur sekondat dhe për tipet shifrore
  dhe LED për orën mund të zgjidhni të shfaqet në formatin 24 orësh,
  12 orësh, apo 12 orësh me tregues AM/PM. Ora tregon datën e çastit,
  si ndihmëz. Klikimi mbi orën nuk pasohet me ndonjë veprim.</p><a name="clock-fig"></a>

  <p><b>Figurë 6. Ora</b></p><img src=
  "/images/documentation/4.2/clock-properties.png" alt=
  "Shfaq dialog vetish për objektin orë." />

  <h3><a name="mailcheck-item"></a>Kontrollues për postë</h3>

  <p>Kontrolluesi për postën mbikqyr një kuti postare për postë ardhëse.
  Kutia postare mund të jetë në format mbox ose Maildir.</p>

  <p>Ikona për kutinë postare ndjek temën e ikonës. Mund të zgjidhni
  vendin e kutisë postare, urdhrin që do duhej xhiruar kur klikoni
  mbi butonin dhe intervalin ndërmjet kontrollesh. Urdhri ka të njëjtat mundësi
  si edhe urdhri për objekt nisësi (shihni <a href=
  "#launcher-item">më sipër</a>). Mund të zgjidhni edhe kryerjen e një urdhri
  sa herë që mbërrin postë e re.</p><a name=
  "mailcheck-fig"></a>

  <p><b>Figurë 7. Kontrollues për postë</b></p><img src=
  "/images/documentation/4.2/mailcheck-properties.png" alt=
  "Shfaq dialog vetish për kontrollues poste." />

  <p>Për përdorim të përparuar mund të jepni një kuti të largët postare POP3
  nëse përdorni formatin vijues te rreshti për kutinë postare:
  <tt>pop3://përdorues:fjalëkalim@shërbyes:portë</tt>. Nëse harroni pa vënë portën
  do të kalohet vetiu te 110.</p>

  <p>Vini re që kjo karakteristikë është ende eksperimentale. Para se ta përdorni,
  sigurohuni që keni lidhje të mirë rrjeti, sepse dështimi i kontrollit për postën
  mund të bllokojë panelin.</p>

  <h3><a name="switcher-item"></a>Këmbyes Desktopi dhe Pager
  Grafik</h3>

  <p>Paneli furnizon dy objekte që merren me desktopë virtualë.
  Një këmbyes desktopi të ngjashëm me ata CDE, që shfaq butona me emra
  desktopi dhe një <em>pager</em> grafik që shfaq një pamje miniaturë
  të desktopëve dhe madje ju lejon të zhvendosni dritare te një tjetër
  hapësirë pune duke e tërhequr minidritaren te <em>pager</em>-i.
  Ky ju lejon gjithashtu të ndryshoni hapësira pune duke përdorur
  rrotëzën e miut.</p>

  <p>Mund të caktoni numrin e rreshtave që përdoren, ose shtyllave
  kur paneli është vertikal , për <em>pager</em> grafik.</p><a name=
  "pager-fig"></a>

  <p><b>Figurë 8. <em>Pager</em> grafik</b></p><img src=
  "/images/documentation/4.2/pager-properties.png" alt=
  "Shfaq dialog vetish për <em>pager</em> grafik. " />

  <h3><a name="systembuttons-item"></a>Butona Sistemi</h3>

  <p>Një objekt buton sistemi shfaq një ose dy butona të cilët mund të kryejnë
  veprime të caktuara sistemi. Butonat ndjekin temën e ikonave për panelin.
  Ka katër butona të mundshëm:</p>

  <dl>
    <dt>Kyç</dt>

    <dd>
      <p>Xhiron programthin <b><tt>xflock4</tt></b> që do të provojë
      të kyçë ekranin duke përdorur ose xscreensaver-in, ose nëse kjo dështon, xlock.</p>
    </dd>

    <dt>Dil</dt>

    <dd>
      <p>Kjo do të shfaqë një dialog daljeje, për përfundim të sesionit
      tuaj Xfce.</p>
    </dd>

    <dt>Të dhëna</dt>

    <dd>
      <p>Butoni i të dhënave do të të shfaqë dialogun
      <em>Rreth Xfce 4</em>.</p>
    </dd>

    <dt>Rregullime</dt>

    <dd>
      <p>Shtypja e butonit të rregullimeve do të hapë dialogun er përgjegjësit
      të rregullimeve të Xfce-së, prej ku mund të hyni te rregullimet për tërë 
      përbërësit e Xfce-së si edhe te ca për sistemin, si fjala vjen për sjelljen
      e miut apo rregullime ndërfaqesh përdoruesi.</p>
    </dd>
  </dl><a name="systembuttons-fig"></a>

  <p><b>Figurë 9. Butona sistemi</b></p><img src=
  "/images/documentation/4.2/systembuttons-properties.png" alt=
  "Shfaq dialog vetish për butona sistemi. " />

  <h3><a name="separator-item"></a>Ndarës</h3>

  <p>Ky objekt thjesht shton në panel një vijë ndarëse. Nuk ka tjetër mundësi
  veç caktimit të pozicionit për të.</p>

  <p>Mbani parasysh që mund të jetë pak e vështirë të hapni menunë me djathtasklikim,
  ngaqë ka vetëm një zonë të ngushtë për klikim.</p><a name=
  "nooptions-fig"></a>

  <p><b>Figurë 10. Objekt pa mundësi</b></p><img src=
  "/images/documentation/4.2/nooptions-properties.png" alt=
  "Shfaq dialog vetish për objekt pa mundësi. " />

  

  <h2><a name="subpanels"></a>Menu Paneli</h2>

  <p>Objekteve nisësash paneli mund t'u vihen në shoqërim menu,
  e cila mund të hapet duke klikuar te shigjeta e vogël e butonit 
  ngjitur te objekti. Pozicioni i vërtetë i këtyre butonave është
  i formësueshëm prej dialogut të parapëlqimeve të përgjithshme.
  Mund të hapni gjithashtu menu duke shtypur butonin e nisësit dhe
  mbajtur të shtypur. Pas një vonese të vogël menuja do të hapet.</p>

  <p>Përdorni 'Shto nisës' në krye të menusë së panelit për të shtuar
  objekt të ri ose për të tërhequr prej një përgjegjësi kartelash
  një të ekzekutueshëm për te kjo kuti. Për të hequr objekte prej
  një menuje paneli përdorni butonin 'Hiq' te dialogu i vetive.</p>

  <p>Një karakteristikë e veçantë e menuve të panelit është që këto
  mund të shqiten prej panelit dhe të jetojnë brenda dritares së vet.
  Për të shqitur një menu klikoni te vija e vogël në fund të menusë
  (shihni 
  <a href="#default-panel-fig">pamjen</a> e panelit parazgjedhje).</p>

  <p>Dialogu i vetive për një objekt menuje hapet përnjëherë kur klikohet
  butoni i djathtë i miut. Dialogu në vetvete është shumë i ngjashëm
  me dialogun për objekte të tipit të nisësve.</p><a name=
  "menuitem-fig"></a>

  <p><b>Figurë 11. Objekt Menuje</b></p><img src=
  "/images/documentation/4.2/menuitem-properties.png" alt=
  "Shfaq dialog vetish për objekte menush. " />

  

  <h2><a name="panel-settings"></a>Parapëlqime Paneli</h2>

  <p>Dialogu i vetive për Panelin Xfce mund të hapet prej
  Përgjegjësit të Rregullimeve të Xfce 4-s ose prej menusë
  djathtasklikim në një nga dorëzat e lëvizjes së panelit.
  </p><a name="panel-settings-fig"></a>

  <p><b>Figurë 12. Rregullime Paneli</b></p><img src=
  "/images/documentation/4.2/panel-settings.png" alt=
  "Shfaq dialog vetish për parapëlqime të përgjitshëm
  paneli. " />

  <h3><a name="panel-apearance"></a>Dukje</h3>

  <dl>
    <dt>Madhësi</dt>

    <dd>
      <p>Ka katër madhësi të mundshme paneli: të vogël, të mesme,
      të madhe dhe të stërmadhe. Parazgjedhja është e mesmja.</p>
    </dd>

    <dt>Drejtim</dt>

    <dd>
      <p>Panelit Xfce 4 mund t'i jepet drejtim vertikal,
      po ashtu si edhe ai standard horizontal.</p>
    </dd>

    <dt>Pozicion fllucke</dt>

    <dd>
      <p>Kjo mundësi ndryshon vendin e butonave që hapen në
      një menu paneli. Ky mund të jetë sipër, poshtë, majtas
      ose djathtas objektit të panelit të cilit i shoqërohen.</p>
    </dd>
  </dl>

  <h3><a name="panel-behaviour"></a>Sjellje</h3>

  <dl>
    <dt>Vetëfshehje</dt>

    <dd>
      <p>Nëse zgjidhni vetëfshehje, paneli do të tkurret sa një shtyllë
      e hollë. Kalimi i miut sipër do ta nxjerrë panelin nga fshehja.</p>
    </dd>
  </dl>

  

  <h2><a name=
  "panel-advanced"></a>Të mëtejshëm</h2>

  <h3><a name="panel-files"></a>Kartela dhe Ndryshore
  Mjedisi</h3>

  <p>Xfce-ja tani përdor <em>Basedir Specification</em> siç përcaktohen nga
  nga <a href="http://freedesktop.org">Freedesktop.org</a> për gjetjen e 
  të dhënave dhe kartelave të formësimit. Kjo do të thotë që vendet për
  kartelat do të tregohen si shteg relativ te drejtoritë e përshkruara
  në përcaktim.</p>

  <dl>
    <dt>${XDG_CONFIG_HOME}</dt>

    <dd>
      <p>Drejtoria e parë për të parë për kartela formësimi.
      Si parazgjedhje si e tillë caktohet <tt>~/.config/</tt>.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}</dt>

    <dd>
      <p>Listë drejtorish sistemi që përmbajnë të dhëna formësimi.
      Si parazgjedhje, paneli do të shohë te <tt>${sysconfdir}/xdg/</tt>
      dhe <tt>/etc/xdg/</tt>. Vlera për ${sysconfdir} varet nga mënyra se
      si qe ndërtuar programi dhe shpesh do të jetë <tt>/etc/</tt> për
      paketa dyore.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/panel/contents.xml</dt>

    <dd>
      <p>Ky është vendi i kartelës xml të formësimit që përshkruan
      përmbajtjen e panelit, relative te drejtoritë bazë përmendur
      më sipër.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/mcs_settings/panel.xml</dt>

    <dd>
      <p>Ky është vendi relativ i rregullimeve të përgjithshme për
      panelin. Kjo kartelë administrohet nga përgjegjësi i rregullimeve,
      dhe jo nga vetë paneli.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/kiosk/kioskrc</dt>

    <dd>
      <p>Kartela për formësimin e Mënyrës Kioskë. Shihni <a href="#panel-kiosk"
     >ndarjen pasuese</a> për një shpjegim.</p>
    </dd>

    <dt>&lt;basedir&gt;/xfce4/transparency</dt>

    <dd>
      <p>Formësim tejdukshmërie. Jepet shpjegim i mëtejshëm te
      <a href="#panel-transparency">kjo ndarje</a> më poshtë.</p>
    </dd>
  </dl>

  <p>Asnjë nga këto kartela formësimi, hiq <tt>kioskrc</tt> dhe
  <tt>transparency</tt>, nuk janë krijuar për t'u përpunuar me dorë;
  në fakt ndryshimet do të mbishkruhen në rast se i përpunoni ndërkohë
  që paneli dhe përgjegjësi i rregullimeve janë duke xhiruar.</p>

  <h3><a name="panel-kiosk"></a>Mënyra Kioskë</h3>

  <p>Paneli tani e tutje mbulonn edhe Mënyrën Kioskë, e cial do t'u
  parandalojë përdoruesve të bëjnë ndryshime te formësimi i panelit të tyre.
  Për ta përdorur lypset të përpunoni ose krijoni kartelën <tt>${sysconfdir}/xdg/xfce4/kiosk/kioskrc</tt>.</p>

  <p>Rruga më e mirë për të shpjeguar formatin e kësaj kartele është duke përdorur
  një shembull.Ndarja xfce4-panel e kioskrcmund të ketë këtë pamje:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
[xfce4-panel]
CustomizePanel=%powerusers,foo
</pre>
      </td>
    </tr>
  </table>

  <p>Kjo u lejon vetëm përdoruesve të grupit powerusers dhe përdoruesit
  foo të përshtasin panelet e tyre.</p>

  <h3><a name="panel-transparency"></a>Tejdukshmëri</h3>

  <p>Ju lutemi, vini re që tejdukshmëria funksionon vetëm me një shërbyes X
  që mbulon zgjerimin Ndërthurje, si për shembull XOrg &gt;= 6.8.0, nëse
  zgjerimi ndërthurje është aktivizuar te kartela e formësimit dhe nëse
  përgjegjësi i dritares e mbulon atë (p.sh. <b><tt>xfwm4</tt></b> duhet
  përpiluar me <tt>--enable-compositor</tt>).</p>

  <p>Si parazgjedhje paneli do të jetë i tejdukshëm, veç në qoftë
  zgjedhur mundësia vetëfshih. Kur miu kalon sipër panelit,
  tejdukshmëria do të hiqet përkohësisht.</p>

  <p>Mund të krijoni kartelën <tt>&lt;basedir&gt;/xfce4/transparency</tt>
  nëse doni të ndryshoni vlerën e tejdukshmërisë  për panelin 
  (ose për kutinë e ikonave). Krijojeni kartelën dhe shtoni një rresht
  me format <em><tt>panel=&lt;vlerë&gt;</tt></em>, ku vlera është një numër
  ndërmjet 0 dhe 100. Caktimi i saj si 0 efektivisht e shmang tejdukshmërinë.</p>

  <p>Për shembull, një kartelë tejdukshmërie mund të ketë këtë pamje:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
panel=25
iconbox=0
</pre>
      </td>
    </tr>
  </table>

  

  <h2><a name="panel-copyright"></a>Rreth
  <b><tt>xfce4-panel</tt></b></h2>

  <p><b><tt>xfce4-panel</tt></b> u shkruajt nga Jasper Huijsmans
  (<tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>). Për më tepër
  të dhëna, ju lutemi vizitoni <a href="http://www.xfce.org"><em>site</em>-in
  web të Xfce-së</a>.</p>

  <p>Për të raportuar një të metë apo për të dhënë një këshillë në lidhje me këtë
  zbatim apo këtë doracak, përdorni sistemin e ndjekjes së <em>bug</em>-eve
  te <a href="http://bugzilla.xfce.org/"
  >http://bugzilla.xfce.org/</a>.</p>

  <p>Nëse keni pyetje rreth instalimit të kësaj pakete,
  ju lutem pyesni te lista e postimeve <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce"
  >xfce</a>. Diskutimet rreth zhvillimit bëhen te
  lista e postimeve <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev"
  >xfce4-dev</a>.</p>

  <p>Ky program shpërndahet sipas kushteve të Licensës më të Ngushtë Publike të Përgjithshme GNU
  ashtu su botohet nga Free Software Foundation; ose versioni 2 i Licensës, ose (në dëshirën tuaj)
  cilido version i mëvonshëm.</p>

  <p>Duhej të kishit marrë një kopje të Licensës më të Ngushtë Publike të Përgjithshme GNU
  bashkë me këtë; nëse jo, shkruajini Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>

