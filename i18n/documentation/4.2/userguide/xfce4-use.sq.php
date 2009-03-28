  <h2><a name="xfce4-use" id="xfce4-use"></a>Si të përdoret Xfce4</h2>

  <h3><a name="xfce4-getting-started" id="xfce4-getting-started"></a>Si t'ia fillojmë</h3>

  <p>Përdorni <b><tt>startxfce4</tt></b> që të nisni një sesion Xfce, në të cilin përfshihen përgjegjësi i sesioneve, paneli, shtylla e veprimeve, përgjegjësi i dritareve dhe përgjegjësi i desktopit. Tërë programet (ose lidhjet simbolike te programe) te <tt>~/Desktop/Vetënisje/</tt> do të xhirohen gjatë nisjes (mbani parasysh që kjo drejtori, si parazgjedhje, nuk ekziston dhe mund t'ju duhet ta krijoni).</p>

  <p>Si parazgjedhje, përgjegjësi i sesioneve Xfce administron nisjen e zbatimeve. Ju bën të mundur të ruani sesionin tuaj kur dilni prej Xfce-së, kështu që herës tjetër që hyni, të njëjtat zbatime do të nisen vetvetiu për ju.</p>

  <p>Për të përshtatur sjelljen e <b><tt>startxfce4</tt></b>, kopjoni kartelën <tt>${sysconfdir}/xdg/xfce4/xinitrc</tt> te drejtoria juaj vetjake <tt>~/.config/xfce4/</tt> dhe përpunojeni.
  Në varësi të metodës suaj të instalimit, vendi i kartelës <tt>xinitrc</tt> të sistemit mund të jetë i ndryshëm. Nëse instaloni prej burimi, <tt>${sysconfdir}</tt> do ta gjeni, si parazgjedhje, te <tt>/usr/local/etc/</tt>. Për instalime me anë paketash dyore, caktohen
  <tt>/etc/</tt>, <tt>/etc/X11</tt>, <tt>/usr/pkg/etc</tt> ose
  <tt>/usr/X11R6/etc</tt>; mund të përdorni përgjegjësin tuaj të paketave për ta marrë vesh se ku konkretisht.</p>

  

  <h3><a name="id2533342" id="id2533342"></a>Desktopi Parazgjedhje</h3>

  <p>Mjedisi Xfce 4 për Desktop nuk është një njësi e vetme që furnizon tërë funksionet, ai përpiqet më mirë të vazhdojë traditën e vjetër UNIX të mjeteve të vockla që bëjnë një punë dhe që e bëjnë në mënyrën më të mirë të mundshme.
  Te <a href="xfce4-use#default-session-fig" title=
  "Figurë 1. Sesion Xfce 4 parazgjedhje">Figura 1 tregohet një desktop Xfce 4 si hapet në parazgjedhje, pa programe në xhirim e sipër, &quot;Sesion Xfce 4 parazgjedhje&quot;</a>.</p>
  <a name="default-session-fig" id=
  "default-session-fig"></a>

  <p><b>Figura 1. Sesion Xfce 4 parazgjedhje</b></p><img src=
  "/images/documentation/4.2/default-session.png" alt=
  "Tregon një sesion parazgjedhje të Xfce-së, me përgjegjës sfondi, panel dhe shtyllë aktesh. " />

  <p>Kur xhironi <b><tt>startxfce4</tt></b> për herë të parë,
  nga përgjegjësi Xfce i sesionit niset disa zbatime:</p>

  <dl>
    <dt>Shtylla e veprimeve</dt>

    <dd>
      <p>Në krye të ekranit do të shihni një shtyllë veprimesh. Ajo ju tregon zbatimet që po xhirojnë në hapësirën e dhënë të punës. Mund të fokusoni zbatimin duke klikuar te butoni i shtyllës së veprimeve. Klikimi sërish do ta fshehë zbatimin. Nëse përdorni butonin r djathtë të miut, ka për tu shfaqur një menu, e cila ju lejon të kryeni disa veprime te dritarja e zbatimit.</p>

      <p>Shtylla e veprimeve mund të përmbajë, në qoftë e nevojshme, një faqosës grafik i cili tregon një pamje në miniaturë të tërë hapësirave tuaja të punës dhe një zonë njoftimi ose shtyllë sistemi.</p>
    </dd>

    <dt>Paneli</dt>

    <dd>
      <p>Në fund të ekrani gjendet paneli Xfce4. Ju lejon të xhironi zbatime dhe përmban gjithashtu një faqosës grafik, një sahat dhe një njoftues poste. Disa prej objekteve kanë një menu paneli të tyren që lejon futjen te më tepër zbatime. Menutë e panelit hapen duke shtypur butonat e vegjël shigjetë ngjitur me objektin e panelit.</p>

      <p>Ndryshimi i përmbajtjes së panelit dhe vetive të objekteve bëhet duke përdorur butonin e djathtë të miut. Qoftë objektet e panelit, qoftë dorezat për lëvizjen e panelit kanë menu të djathtasklikueshme prej nga ku mund të ndryshoni formësimin e panelit.
      Për më tepër të dhëna shihni te <a href="../manuals/xfce4-panel">doracaku i paneleve</a>.</p>
    </dd>

    <dt>Përgjegjësi i Desktopit</dt>

    <dd>
      <p>Përgjegjësi i desktopit furnizon pamjen e sfondit të desktop dhe dy menu kur klikoni mbi sfondin e desktopit.</p>

      <p>Butoni i djathtë i miut hap një menu që ju lejon të nisni zbatime. Hidhini një sy <a href="../manuals/xfdesktop">doracakut</a> për të marrë vesh se si të ndryshohet lënda e menusë.</p>

      <p>Butoni i mesit i miut (ose Shift + klikim me të majtin) hap një listë të tërë zbatimeve që po xhirojnë në atë çast. Mund ta aktivizoni një zbatim duke klikuar mbi zërin e tij te menuja.</p>
    </dd>

    <dt>Përgjegjësi i Dritareve</dt>

    <dd>
      <p>Përgjegjësi i dritareve mban përgjegjësi për vendosjen e dritareve në ekran dhe furnzion anët dhe zbukurimet e dritareve. Ju lejon të lëvizni dritaret përreth duke tërhequr shtyllën e titullit të tyre dhe furnizon edhe butonat për shtyllën e titullit, për shembull për mbyllje, minimizim ose maksimizim të një dritareje. Shihni <a href=
      "../manuals/xfwm4">doracakun</a> për një shpjegim të plotë të përgjegjësit të dritareve.</p>
    </dd>

    <dt>Përgjegjësi i Rregullimeve</dt>

    <dd>
      <p>Përgjegjësi i rregullimeve xhiron në prapaskenë dhe bën të mundur përditësimin e rregullimeve për tërë zbatimet Xfce 4 kur përdoruesi ndryshon diçka përmes dialogut të përgjegjësit të rregullimeve (shihni
ndarjen vijuese) dhe kujdeset për leximin te disku të formësimit gjatë nisjesh. Për një shpjegim të plotë të përgjegjësit të rregullimeve i hidhni një sy doracakëve <a href=
      "../manuals/xfce-mcs-manager">Përgjegjës Rregullimesh</a>
      dhe <a href="../manuals/xfce-mcs-plugins">Shtojca Rregullimesh</a>.</p>
    </dd>
  </dl>

  <h3><a name="id2533998" id="id2533998"></a>Veprime të Zakonshme</h3>

  <p>Kjo ndarje do t'ju shpjegojë si të kryhen disa veprime të zakonshme që t'ia filloni pa humbur kohë me Xfce 4. Ngaqë Xfce 4 për këtë punë është hartuar, t'ju lejojë të mbaroni punë.</p>

  <h4><a name="id2534007" id="id2534007"></a>Xhirimi i një programi</h4>

  <dl>
    <dt>Paneli Xfce 4</dt>

    <dd>
      <p>Paneli është hartuar të lejojë hyrje të shpejtë te zbatimet e përdorura më shpesh duke i vendosur ata te paneli kryesor. Zbatimet e përdorura jo aq shpesh mund të vendosen në një menu paneli.</p>
    </dd>

    <dt>Menu desktopi</dt>

    <dd>
      <p>Një tjetër metodë për nisje zbatimesh është nisja e tyre prej menuje desktopi me miun. Lexoni <a href="../manuals/xfdesktop">doracakun e Përgjegjësit të Desktopit</a> për të dhëna rreth se si të ndryshohet lënda e menuve.</p>
    </dd>

    <dt>Dialog xhirimesh</dt>

    <dd>
      <p>Nëse e dini emrin e një programi dhe ai nuk gjendet te menuja e desktopit, mund të përdorni dialogun e xhirimeve. Për të hapur dialogun shtypni <b>Alt+F2</b> ose zgjidhni prej menusë së desktopit <b>Xhironi program...</b>.</p>

      <p>Dialogut do të mbajë mend 10 urdhrat e fundit që u përmbushën me sukses.</p>
    </dd>
  </dl>

  <h4><a name="id2534077" id="id2534077"></a>Administrim dritaresh dhe hapësirash pune</h4>

  <dl>
    <dt>Veprime bazë me dritaret</dt>

    <dd>
      <p>Mund të lëvizni dritaret përreth ekranit duke i tërhequr për shtylle titulli. Duke përdorur butona shtylle titujsh, dritaret mund të mbyllen, fshihen, maksimizohen, hijezohen dhe të bëhen të ngjitshme &#8212; kjo do të thotë që do të jetë e dukshme në tërë hapësirat e punës &#8212;.</p>

      <p>Djathtasklikimi mbi shtyllën e titullit do të hapë një menu që lejon hyrje te të veprimet mbi dritare.</p>

      <p>Hijezimi i një dritareje, që do të thotë tkurrje për të lënë të dukshme vetëm shtyllën e titullit, mund të bëhet gjithashtu edhe duke përdorur rrotëzën e miut përmbi shtyllë titulli. Rrotullimi sipër jep hijezim, për poshtë jep çhijezim.</p>

      <p>Nëse doni që dritaret e maksimizuara të mos mbulojnë tërë ekranin mund të rregulloni mënjanat e hapësirës së punë te dialogu për përgjegjësin e rregullimeve (shini më poshtë).</p>
    </dd>

    <dt>Administrim zbatimesh</dt>

    <dd>
      <p>Për të mësuar se cilat zbatime po xhirojnë në një çast të dhënë mund të kontrolloni te shtylla e veprimeve. Klikimi mbi një buton te shtylla e veprimeve do të kalojë fokusin te zbatimi i klikuar. Klikimi edhe një herë do ta fshehë.</p>

      <p>Kur klikoni mbi sfondin e desktopit me butonin e mesit të miut, do të shfaqet një listë dritaresh, të radhitura duke u bazuar te hapësirat e punës. Mund të aktivizoni zbatimin ose të ndryshoni hapësira pune duke zgjedhur pjesën përkatëse të menusë.</p>

      <p>Edhe zbatimi <b><tt>xfce4-iconbox</tt></b> mund të përdoret për të pasur një sy te xhirimi i zbatimeve.</p>
    </dd>

    <dt>Hapësira pune</dt>

    <dd>
      <p>Hapësirën e punës mund ta ndryshoni duke klikuar mbi të te faqosësi grafik, ose te shtylla e veprimeve, ose te paneli.
      Shtypja e <b>Ctrl+Alt+ShigjetaMajtas</b> ose
      <b>Ctrl+Alt+ShigjetaDjathtas</b> do t'ju kalojë nga një hapësirë pune në tjetrën. 
      Të njëjtin efekt ka edhe përdorimi i rrotëzës së miut mbi faqosësin ose sfondin e desktopit.</p>

      <p>Për shtim ose heqje hapësirash pune mund të përdorni klikimin me të mesit mbi menu desktopi ose dialogun e rregullimeve (shihni më poshtë).</p>
    </dd>
  </dl>

  <h4><a name="id2534162" id="id2534162"></a>Si të përdoret dialogu i përgjegjësit të rregullimeve</h4>

  <p>Dialogu i përgjegjësit të rregullimeve mundëson hyrjen te parapëlqimet e përgjithshme për shumë zbatime Xfce 4. Mund ta xhironi duke shtypur nisësin e tij te paneli, ose prej menusë së miut për desktopin ose duke xhiruar <b><tt>xfce-setting-show</tt></b>.</p>

  <p>Ka dialogje për ndryshim të mjaft anëve të mjedisit Xfce 4 për desktop. Për më tepër të dhëna, shihni doracakët përkatës për përbërësit Xfce 4 tek e tek. Mund të jetë me interes tu hidhni një sy shpejt e shpejt tërë dialogjeve për të parë se çfarë mundësish ka të passhme, të cilat ju lejojnë të krijoni mjedisin e punës më të mirë të mundshëm.</p>

  <h3><a name="id2534182" id="id2534182"></a>Lexime të mëtejshme</h3>

  <p>Ky udhërrëfyes përdoruesi dha vetëm një përmbledhje të përgjithshme
  të Mjedisit Xfce 4 për Desktop. Mund të gjeni më tepër të dhëna te <a href="../manuals/">doracakët</a> e përbërësve të veçantë të Xfce 4.</p>
  <hr />
