
  <h1><a name="xffm"></a>Përgjegjës kartelash XFce 4</h1>

  <p><strong>Edscott Wilson Garcia</strong> &lt;edcott@xfce.org&gt;</p>

  <h3>Ky doracak përshkruan xffm version 4.2.0. Përditësimi i fundit: Jan 2005.</h3>

  <p>Copyright &copy; 2004 Edscott Wilson Garcia</p>
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#introduction">Hyrje</a></dt>

    <dt><a href="#xffm-getting-started">Si t'ia niset</a></dt>

    <dt><a href="#xffm-tree-types">Degëzime rrënje përgjegjësi kartelash</a></dt>

    <dd>
      <dl>
        <dt><a href="#xftree">Xftree</a></dt>

        <dt><a href="#xfsamba">Xfsamba</a></dt>

        <dt><a href="#xfbook">Xfbook</a></dt>

        <dt><a href="#xfglob">Xfglob</a></dt>

        <dt><a href="#xffrequent">Xffrequent</a></dt>

        <dt><a href="#xfrecent">Xfrecent</a></dt>

        <dt><a href="#xffstab">Xffstab</a></dt>

        <dt><a href="#xftrash">Xftrash</a></dt>
      </dl>
    </dd>

    <dt><a href="#xffm-menus">Menutë</a></dt>

    <dd>
      <dl>
        <dt><a href="#main-menu">Menuja kryesore</a></dt>

        <dt><a href="#xffm-popupmenus">Menutë hapmbyll</a></dt>
      </dl>
    </dd>

    <dt><a href="#Toolbar">Panelet</a></dt>

    <dd>
      <dl>
        <dt><a href="#standard_toolbar">Paneli standard</a></dt>

        <dt><a href="#menu_toolbar">Paneli i menuve</a></dt>

        <dt><a href="#Sidebars">Anështyllat</a></dt>
      </dl>
    </dd>

    <dt><a href="#xffm-settings">Xfce-mcs-manager</a></dt>

    <dt><a href="#diagnostics">Dritarja e diagnostikimeve</a></dt>

    <dt><a href="#FAQ">FAQ</a></dt>

    <dd>
      <dl>
        <dt><a href="#FAQ1">A ka pamje ikonike?</a></dt>

        <dt><a href="#FAQ2">Si mund të përshtas ikona?</a></dt>

        <dt><a href="#FAQ3">Mund ta përdor gjetjen pa <em>input/output</em> GUI?</a></dt>

        <dt><a href="#FAQ4">A mund të krijoj dritare ndryshimesh prejfrom other filemanagers?</a></dt>

        <dt><a href="#FAQ5">Mund të kodoj/çkodoj
        prej rreshti urdhrash?</a></dt>

        <dt><a href="#FAQ6">Çfarë ndodh te Xfsamba me shërbyes SMB
        në nënrrjete të largët?</a></dt>

        <dt><a href="#FAQ7">Çfarë mund të bëjë Xfsamba nëse nuk ka 
        përkatësi kryesore në një nënrrjet të largët?</a></dt>

        <dt><a href="#FAQ8">Ç'problem ka Xfsamba me shenjat
        që nuk janë ascii?</a></dt>

        <dt><a href="#FAQ9">Si mund të heq qafe anështyllën?</a></dt>

        <dt><a href="#FAQ10">Si mund ta kthej prapë anështyllën?</a></dt>

        <dt><a href="#FAQ11">Çfarë pune bëjnë tastet F-diçka?</a></dt>

        <dt><a href="#FAQ12">Pse mbikëqyrësi i kartelave xftree
        nuk pranon të hapë sytë për ndryshime në disa drejtori?</a></dt>

        <dt><a href="#FAQ13">Si të pjek një CDRW?</a></dt>

        <dt><a href="#FAQ14">Cili është urdhri për të pjekur një CDRW?</a></dt>

        <dt><a href="#FAQ15">Çfarë kriteri përdoret për vetëplotësim?</a></dt>

        <dt><a href="#FAQ16">Si e regjistroj një zbatim të ri për një tip të caktuar mime?</a></dt>

        <dt><a href="#FAQ17">Përse shërben butoni &quot;hold&quot; te pjesa për ekzekutime?</a></dt>

        <dt><a href="#FAQ18">Si mund të shkoj kollaj më poshtë përmes tastierës?</a></dt>

        <dt><a href="#FAQ19">Si mund të dyklikoj me tastierën?</a></dt>

        <dt><a href="#FAQ20">Si mund të kaloj nga zona e majtë në
        të djathtën dhe anasjelltas duke përdorur tastierën?</a></dt>

        <dt><a href="#FAQ21">Si mund të mbyllni një degëzim duke
        përdorur tastierën?</a></dt>
      </dl>
    </dd>
  </dl>

  

  <h2><a name=
  "introduction"></a>Hyrje</h2>

  <p>Ky dokument përshkruan funksionin themelor dhe sjelljen e
  Xffm-së, përgjegjësi i shpejtë i kartelave te <a href="http://www.xfce.org">Mjedisi Xfce 4
  për Desktop</a>.</p>

  <p>Ky përgjegjës kartelash është hartuar mbi bazën e strukturës
  në trajtë peme. Çdo degë kryesore e pemës është një shtojcë
  që nuk ka nevojë të ngarkohet nëse nuk kërkohet. Me këtë
  përgjegjës kartelash mund të nisni programe, të shqyrtoni
  përmbajtje drejtorish, të administroni përmbajtjen e koshave
  për hedhurina, të shqyrtoni rrjet SMB (Wind*ws), të mbani
  faqerojtësa, të shihni ndryshimet midis kartelave, të gjeni
  kartela, të kodoni me fjalëkalim kartela, dhe të lëvizni,
  kopjoni, riemërtoni, dyfishoni, fshini apo të krijoni simlidhje
  për te kartela. Mundeni gjithashtu të krijoni, shqyrtoni ose
  përftoni drejtori nga kartela tar të ngjeshura, kartela sistemi
  iso, dhe të hidhni në CD pamje disku. Montimi dhe çmontimi
  i pjesëve SMB të largëta, sisteme vendorë kartelash dhe media
  të lëvizshme bëhen gjithashtu me një dyklikim.</p>

  <p>Përtej atyre më sipër, përgjegjësi i shpejtë i kartelave Xfce
  ka një mekanizëm të sofistikuar me bazë DBH për të regjistruar pikë
  për programet e përdorur shpesh, <em>site</em>-e të vizituar, 
  dhe një sistem plotësimi me tastin Tab i cili ju shfaq mundësitë
  në vend që të presë të hamendësoni se çfarë mund të ishte.
  Mund riemërtoni kartelat, të ndryshoni të dhëna përdoruesi apo grupi
  apo leje mbi kartelat thjesht duke përzgjedhur dhe përpunuar fushën 
  përkatëse. Mund të përdorni merr dhe vër ose pri dhe ngjit për lëvizje
  apo kopjim kartelash me të tjerë përgjegjës kartelash apo për shkarkim
  dhe ngarkim kartelash prej shërbyesish SMB të largët.</p>

  

  <h2><a name=
  "xffm-getting-started"></a>Si t'ia niset</h2>

  <p>Zakonisht do ta nisni përgjegjësin e kartelave përmes përzgjedhjes
  së zërit përkatës te Xfce-panel, menusë Xfce-desktop menu ose
  duke shtypur një drejtori (me shtegun absolut ose relativ ndaj drejtorisë
  vatër të përdoruesit) te dialogu i xfrun4. Po aty ose te një dritare
  terminali mund të shtypni xffm.</p>

  <p>Kur e nisni për herë të parë përgjegjësin e kartelave do të shihni
  në ekran një dritare, që duket pak a shumë si kjo:</p><a name=
  "xffm-default-fig"></a>

  <p><b>Figurë 1. Dritarja parazgjedhje Xffm</b></p><img src=
  "/images/documentation/4.2/xffm_default.png" alt=
  "Formësimi parazgjedhje Xffm: Një menu kryesore, një panel, një anështyllë, një kuti dritare
  me një degë vendore dhe tërë shtyllat aktive, dhe një kuti dritare më të vogël me tërë degët e rrënjës
  aktive dhe pa shtylla aktive. " />

  

  <h2><a name="xffm-tree-types"></a>Degëzime rrënjë 
  të përgjegjësit të kartelave</h2>

  <p>Hëpërhë ka nivelet vijuese për degëzime rrënjë. Mund të shfaqni
  çfarëdo ndërthurje të tyre në secilën nga kutitë dritare.</p>

  <h3>Kartela vendore te <a name="xftree"></a>Xftree</h3><em></em>

  <p>Dega e kartelave vendore është pema tradicionale që shfaq
  kartelat e kompjuterit vendor. Pema mund të hapet në çfarëdo 
  nivel degëzimi, dhe niveli më i sipërm mund të jetë i rivendosshëm
  në cilëndo drejtori te kompjuteri vendor. Për thirrjen e përgjegjësit
  të kartelave me vetëm degën e kartelave vendore të aktivizuar,
  përdorni <b><tt>xftree4</tt></b> si rresht urdhrash.</p>

  <h3><a name="xfsamba"></a>Xfsamba</h3><em>Rrjet SMB</em>

  <p>Rrjeti SMB është rruga se si mund të lundrohet nëpër një rrjet SMB
  duke përdorur suitën e programeve samba. Për ta thirrur përgjegjësin e kartelave
  veprues vetëm me degën e rrjeteve SMB, përdorni
  <b><tt>xfsamba4</tt></b> si rresht urdhrash.</p>

  <h3><a name="xfbook"></a>Xfbook</h3><em>Faqerojtësa</em>

  <p>Dega e faqerojtësve është një mënyrë për të krijuar drejtori virtuale
  me kartela vendore dhe kartela ose pjesë rrjeti SMB të largët. Mund të përdoren
  formësime të shumta faqerojtësish dhe nga njëri te tjetri kalohet duke përdorur
  ctrl-B. Për ta thirrur përgjegjësin e kartelave, me vepruese vetëm degën
  e faqerojtësave, përdorni <b><tt>xfbook4</tt></b> si rresht urdhri.</p>

  <h3><a name="xfglob"></a>Xfglob</h3><em>Gjej përfundime</em>

  <p>Dega gjej përfundime është pjesa ku shfaqen përfundimet
  e një kërkimi. Mbi veprimet janë vepruese tërë operacionet
  që mund të bëjë një përgjegjës kartelash. Për ta thirrur
  përgjegjësin e kartelave, me vepruese vetëm degën e gjetjeve,
  përdorni <b><tt>xfglob4</tt></b> si rresht urdhrash.</p>

  <h3><a name="xffrequent"></a>Xffrequent</h3><em>Kartela të
  shpeshta</em>

  <p>Dega kartela të shpeshta përmban një strukturë në trajtë peme
  të atyre kartelave apo drejtorive te të cilat hyhet shpesh me ndihmën e
  përgjegjësit të kartelave. Si prag parazgjedhje për shpeshtinë
  është vendosur 13 herë, por ky mund të ndryshohet përmes menusë kryesore. 
  Për ta thirrur përgjegjësin e kartelave, me vepruese vetëm degën
  më të fundit, përdorni <b><tt>xfapps4</tt></b> si rresht urdhrash.</p>

  <h3><a name="xfrecent"></a>Xfrecent</h3><em>Kartela së fundmi</em>

  <p>Dega e kartelave së fundmi përmban një strukturë në trajtë peme
  të atyre kartelave apo drejtorive te të cilat është hyrë së fundmi përmes
  përgjegjësit të kartelave. Si prag parazgjedhje për shpeshtinë
  është vendosur 3 ditë, por ky mund të ndryshohet përmes menusë kryesore.
  Për të thirrur përgjegjësin e kartelave, me vepruese vetëm degën
  më të fundit, përdorni <b><tt>xfapps4</tt></b> si rresht urdhri.</p>

  <h3><a name="xffstab"></a>Xffstab</h3><em>Pika montimi Fstab</em>

  <p>Dega fstab është një rrugë alternative për të parë sistemin e kartelave,
  ku pajisje fizike janë renditur sipas pikave ku montohen. Kjo mundëson
  veprime të lehta montimi/çmontimi me shigjetat MAJTAS dhe DJATHTAS të
  tastierës, dyklikim të miut, ose përzgjedhje menuje. Për të thirrur
  përgjegjësin e kartelave, me vepruese vetëm degën fstab, përdorni
  <b><tt>xffstab4</tt></b> si rresht urdhri.</p>

  <h3><a name="xftrash"></a>Xftrash</h3><em>Trashcan</em>

  <p>Dega <em>trashcan</em> është një grumbull koshash hedhurinash. Këta
  mund të përfshijnë kosha hedhurinash Xffm, GNOME ose KDE. Kjo degë
  është një mënyrë për administrimin e hedhurinave që prodhohen në pjesë
  të ndryshme të sistemit të kartelave. Mund të grumbulloni kosha hedhurinash
  që u përkasin përdoruesve të tjerë, si një nga funksionet e tjerë të mundshëm.
  Për të thirrur përgjegjësin e kartelave, me vepruese vetëm degën e hedhurinave,
  përdorni <b><tt>xftrash4</tt></b> si rresht urdhrash.</p>

  

  <h2><a name="xffm-menus"></a>Menutë</h2>

  <p>Kyçi i punimit me përgjegjësin e kartelave është të kuptohen
  menutë. Ka saktësisht dy menu me të cilatduhet të merreni: kryesorja
  dhe ajo ato që shfaqen si fllucka. Meqë ky është një përgjegjës
  kartelash i harmonishëm me tastierat, për të parë se çfarë shkurtoresh
  janë të passhme, duhet tu hidhni një sy menuve. Gjithashtu tërë butonat
  në panele dhe anështylla kanë elementet e tyre përgjegjës te menutë.</p>

  <h3><a name="main-menu"></a>Menuja kryesore</h3><a name=
  "main-menu-fig"></a>

  <p><b>Figurë 2. </b></p><img src="/images/documentation/4.2/main_menu.png" alt=
  "Menuja kryesore. " />

  <p>Figura tregon menunë kryesore. Mund të bëhet e pranishme duke klikuar me të majtën ose me të djathtën te shtylla e menusë kryesore, ose duke shtypur tastin F10.</p>

  <p>Menuja kryesore përbëhet nga 4 nënmenu:</p>

  <ul type="disc">
    <li><em>Mjete</em></li>

    <li><em>Hap</em></li>

    <li><em>Shko</em></li>

    <li><em>Mundësi</em></li>
  </ul>

  <p>Menusë <em>Shko</em> mund t'i ndryshohet ngjyra në gri nëse nuk vendoset dot se mbi cilën kuti dritareje duhen zbatuar funksionet. Në pastë diçka të përzgjedhur, ose nëse ka të dukshme vetëm kuti dritareje, nuk ka mëdyshje. Provojeni ;-)</p><a name=
  "tools-menu-fig"></a>

  <p><b>Figurë 3. Menuja mjete</b></p><img src=
  "/images/documentation/4.2/tools_menu.png" alt="Menuja mjete. " />

  <p>Menuja <em>mjete</em> mund të shfaqet prej menusë kryesore ose
  duke përdorur F3, dhe përmban zërat vijues:</p>

  <ul type="disc">
    <li>
      <em>Terminal</em>: Hap një terminal te drejtoria
          e përzgjedhur në atë kohë. Cili terminal hapet, përcaktohet nga  
          kjo radhë përparësie:

      <ul type="circle">
        <li>TERMCMD i caktuar nga <b><tt>xfce-setting-show</tt></b></li>

        <li><b><tt>xfce4-terminal</tt></b></li>

        <li><b><tt>xterm</tt></b></li>
      </ul>
    </li>

    <li><em>Gjej</em>: Hap një dritare dialogu gjetjesh. Përfundimet
    shfaqen në një degë gjetjeje përfundimesh të përgjegjësit të 
    kartelave.</li>

    <li><em>Dallime</em>: Hap një dritare dallimesh ndërmjet dy kartelash të përzgjedhura. Nëse nuk ka përzgjedhje kartelash, mund t'i merrni e t'ia kaloni dritares më vonë.</li>

    <li><em>Formësim shtypësi</em>: hap një dialog për të formësuar shtypësat tuaj.</li>

    <li><em>Shfaq të papastrën</em>: hedh përmbajtjen e të papastrës në atë kohë te një dritare diagnostikimesh.</li>

    <li><em>Pastro të papastrën</em>: Pastron përmbajtjen e të papastrës në atë kohë (sistemi i kartelave nuk preket nga ky veprim).</li>
  </ul><a name="open-menu-fig"></a>

  <p><b>Figurë 4. Menuja Hap</b></p><img src=
  "/images/documentation/4.2/open_menu.png" alt="Menuja Hap. " />

  <p>Menuja <em>Hap</em> mund të shfaqet prej menusë kryesore ose duke përdorur F4, dhe përmban zërat vijues:</p>

  <ul type="disc">
    <li><em>Xhiro</em>: Kërkon rreth një programi që duhet xhiruar.</li>

    <li><em>xftree4</em>: Kërkon rreth një shtegu drejtorie dhe hap atje një dritare të re përgjegjësi kartelash. I barazvlefshëm me përmbushjen e
    <b><tt>xftree4 directory_path</tt></b> prej një rreshti urdhrash.
    Pranohen shtigje absolutë ose relativë (ndaj drejtorisë vatër).</li>

    <li><em>xfsamba4</em>: I barazvlefshëm me përmbushjen e
    <b><tt>xfsamba4</tt></b> prej një rreshti urdhrash.</li>

    <li><em>xffstab</em>: I barazvlefshëm me përmbushjen e
    <b><tt>xffstab4</tt></b> prej një rreshti urdhrash.</li>

    <li><em>xfbook</em>: Kërkon për një kartelë faqerojtësish dhe hap atje përgjegjësin e kartelave.  barazvlefshëm me përmbushjen e <b><tt>xfbook4
    bookname</tt></b> prej një rreshti urdhrash.</li>

    <li><em>xftrash4</em>: I barazvlefshëm me përmbushjen e
    <b><tt>xftrash4</tt></b> prej një rreshti urdhrash.</li>

    <li><em>xfrecent</em>: I barazvlefshëm me përmbushjen e
    <b><tt>xfrecent4</tt></b> prej një rreshti urdhrash.</li>

    <li><em>xffrequent</em>: I barazvlefshëm me përmbushjen e
    <b><tt>xffrequent4</tt></b> prej një rreshti urdhrash.</li>
  </ul><a name="go-menu-fig"></a>

  <p><b>Figurë 5. Menuja Shko </b></p><img src="/images/documentation/4.2/go_menu.png"
  alt="Menuja Shko. " />

  <p>Menuja <em>shko</em> mund të shfaqet prej menusë kryesore ose duke përdorur F5, e përmban këto zëra:</p>

  <ul type="disc">
    <li><em>Shko te</em>: Hap një kërkesë ku mund të tregoni ku dëshironi të shkoni. Shtigje të paraprirë nga dy pjerrëse (//) interpretohen si shërbyesa SMB të largët.</li>

    <li><em>Hyrje</em>: Shkoni te drejtoria juaj hyrëse, ose te XFFM_HOME
    në qoftë e përcaktuar me xfce-mcs-manager.</li>

    <li><em>Prapa</em>: Shkon te vendi i mëparshëm.</li>

    <li><em>Përpara</em>: Shkon përpar (pas një shko-prapa, sigurisht).</li>

    <li><em>Sipër</em>: Shkon një shkallë më sipër në strukturën e drejtorisë së kartelave.</li>
  </ul><a name="options-menu-fig"></a>

  <p><b>Figurë 6. Menuja Mundësi</b></p><img src=
  "/images/documentation/4.2/options_menu.png" alt="Memuja mundësi. " />

  <p>Menuja <em>mundësi</em> mund të shfaqet prej menusë kryesore ose duke përdorur F6, e përmban këto zëra:</p>

  <ul type="disc">
    <li><em>Parapëlqime</em>: hap nënmenunë e parapëlqimeve.</li>

    <li><em>Përpunoni tema</em>: xhiron programin <b><tt>xfmime-edit</tt></b> i cili ju lejon të përshtasni rregullimet për ikonat.</li>

    <li><em>Caktoni prag shpeshtie</em>: ju lejon të ndryshoni pragun e shpeshtisë ndryshe nga vlera e tij parazgjedhje prej 13 goditjesh.</li>

    <li><em>Caktoni prag më të fundmesh</em>: ju lejon të ndryshoni pragun për më të fundmet ndryshe nga vlera e tij parazgjedhje prej 3 ditësh.</li>

    <li><em>Znadhoni ikona</em>: zmadhon ikonat.</li>

    <li><em>Rrudh ikonat</em>: rrudh ikonat.</li>

    <li><em>xfce-setting-show</em>: Nis programin
    <b><tt>xfce-setting-show</tt></b> i cili ju lejon të lëvizni rregullimet për përgjegjësin mcs.</li>
  </ul><a name="preferences-menu-fig"></a>

  <p><b>Figurë 7. Menuja e parapëlqimeve</b></p><img src=
  "/images/documentation/4.2/preferences_menu.png" alt="Menuja e parapëlqimeve. " />

  <p>Nënmenuja e <em>parapëlqimeve</em> mund të shfaqet prej menusë kryesore ose duke përdorur F7, dhe përmban kutizat vijuese:</p>

  <ul type="disc">
    <li><em>Vetërrëshqitje</em>: Kjo e bën pamjen në trajtë peme të rrëshqasë vetiu kur hapni një dosje.</li>

    <li><em>Tituj tekst</em>: Kjo mundësi nuk është më e passhme.</li>

    <li><em>Kopjo gjatë tërheqjesh</em>: Po qe kjo e zgjedhur, veprimi parazgjedhje për merr-dhe-vër do të jetë kopjimi, po e latë pa shenjë, parazgjedhja do të jetë lëvizje.</li>

    <li><em>Shfaq të fshehurat</em>: Kontrollon shfaqjen ose jo të kartelave të fshehura.</li>

    <li><em>Vetëparaparje pamjesh</em>: Kontrollon në prodhohen a jo vetvetiu, gjatë hapjes së dosjeve, paraparje për kartelat grafike.</li>

    <li><em>Mbikëqyrësi veprues</em>: Në duhen mbikëqyrur a jo ndryshimet në sistemin e kartelave, për të bërë përditësime të vetvetishme.</li>

    <li><em>Përzgjedhje me mi parazgjedhje GTK</em>: Të përdoret përzgjedhja parazgjedhje GTK në trajtë peme, apo përzgjedhja vetjake për miun e prurë për herë të parë me 4.0.x.</li>

    <li><em>Ripërmaso gërmat në përputhje me ikonat</em>: Në duhen ripërmasuar a jo gërmat kur ndryshon madhësia e ikonave.</li>

    <li><em>Çaktivizo vetëgrumbullim hedhurinash</em>: Si parazgjedhje, hedhurinat grumbullohen vetvetiu te dega hedhurina. Nëse parapëlqeni t'i grumbulloni dorazi, bëjeni ndryshimin këtu.</li>

    <li><em>Çaktivizoni ngjyra teksti</em>: Përdorni bardhezi për lista në vend të ngjyrave lozonjare.</li>

    <li><em>Çaktivizoni përpunime kutizash</em>: Çaktivizoni rimeërtime,
    ndryshime përdoruesi/grupi, ose modifikime mënyre përmes përpunimi të drejtpërdrejtë "inline".</li>

    <li><em>Kosha të padukshëm hedhurinash</em>: Nëse nuk doni të shihni në ka a jo hedhurina për drejtorinë kur hapni këtë dosje, i vini shenjë kësaj.</li>

    <li><em>rcp përpara scp</em>: Kur një xffm-je i mbërrin një hedhje nga një tjetër dritare xffm në po atë shfaqje, por që xhiron në një tjetër strehë, kartelat do të duheshin kopjuar nga rcp apo scp? Në formësime të sigurt klusterash kjo do të ishte mirë të qe rcp, përndryshe scp.</li>

    <li><em>Diagnostikim fjalaman</em>: Nëse e shenjoni, do të rritet sasia e të dhënave të përpunuara që shfaqet te dritarja e diagnostikimeve.</li>
  </ul>

  <h3><a name="xffm-popupmenus"></a>Menutë fllucka</h3>

  <p>Menutë fllucka formësohen në mënyrë dinamike, varet se çfarë është përzgjedhur në çastin që shfaqet fllucka. Në paragrafët vijues do të marrim në shqyrtim skenarët më të zakonshëm. Menuja flluckë mund të shfaqet duke djathtasklikuar me miun ose duke shtypur F9</p><a name=
  "book-menu-fig"></a>

  <p><b>Figurë 8. Menuja flluckë për libra</b></p><img src=
  "/images/documentation/4.2/book_popup.png" alt="Menuja. " />

  <p>Përveç veprimeve normale, prej kësaj menuje flluckë mund të hapni gjithashtu një libër me emër të dhënë, të hapni librin parazgjedhje, të radhisni të librat e emërtuar, të krijoni një libër të ri, dhe të ruani librin e çastit me një emër të ri.</p><a name="frequent-menu-fig"></a>

  <p><b>Figurë 9. Menuja flluckë për më të shpeshtën</b></p><img src=
  "/images/documentation/4.2/frequent_popup.png" alt="Menuja. " />

  <p>Përveç veprimeve normale, nga kjo menu flluckë mund të ricaktoni prag shpeshtie tjetër nga vlera parazgjedhje 13 goditje.</p><a name="recent-menu-fig"></a>

  <p><b>Figurë 10. Menuja flluckë për më të fundmet</b></p><img src=
  "/images/documentation/4.2/recent_popup.png" alt="Menuja. " />

  <p>Përveç veprimeve normale, prej kësaj menuje flluckë mund të ricaktoni pragun për më të fundmet tjetër nga vlera parazgjedhje 3.</p><a name="fstab-mount-fig"></a>

  <p><b>Figurë 11. Menuja flluckë për fstab (monto/çmonto)</b></p><img src="/images/documentation/4.2/fstab_popup_mount.png"
  alt="Menuja. " />

  <p>Përveç veprimeve normale, prej kësaj menuje flluckë mund të montoni ose çmontoni vëllime që tregohen te kartela e të dhënave fstab (këta mund të jenë pjesë SMB, vëllime NFS ose sisteme vendorë kartelash).</p><a name="trash-menu-fig"></a>

  <p><b>Figurë 12. Menuja flluckë për hedhurinat</b></p><img src=
  "/images/documentation/4.2/trash_popup.png" alt="Menuja. " />

  <p>Përveç veprimeve normale, prej kësaj menuje flluckë mund të fshini përgjithnjë tërë hedhurinat e mbledhura prej sistemit të kartelave.
  Mund të pastroni po ashtu përmbajtjen e koshit të hedhurinave, e në këtë rast do t'ju duhej të grumbullonit hedhurinat prej flluckës për drejtorinë për ta bërë të duket sërish.</p><a name="directory-menu-fig"></a>

  <p><b>Figurë 13. Menuja flluckë për drejtoritë</b></p><img src=
  "/images/documentation/4.2/directory_popup.png" alt="Menuja. " />

  <p>Përveç veprimeve normale, prej kësaj menuje flluckë mund të krijoni 
  "tarball"-e .gzip ose .bzip. Mund të krijoni gjithashtu kartela sistemi kartelash iso për të shkruajtur drejtpërsëdrejti vëllime CD-RW.</p><a name=
  "directory-menu-unmount-fig"></a>

  <p><b>Figurë 14. Menuja flluckë për drejtoritë
  (çmontim)</b></p><img src="/images/documentation/4.2/directory_popup_unmount.png"
  alt="Menuja. " />

  <p>Në rastin kur një drejtori tregohet gjithashtu si pikë montimi te kartela fstab, mund të montoni/çmontoni vëllime prej kësaj fllucke.</p><a name="file-popup-fig"></a>

  <p><b>Figurë 15. Menuja flluckë për kartela</b></p><img src=
  "/images/documentation/4.2/file_popup.png" alt="Menuja. " />

  <p>Fllucka për kartelat përmban tërë veprimet që kryhen zakonisht mbi kartela. Në varësi të tipit MIME të kartelës së përzgjedhur, mund të kini disa mundësi të ndryshme veprimesh përmes të cilave të hapni një kartelë. Këto mundësi krijohen mbi bazën e tipeve MIME të vlefshëm në shkallë sistemi, tipe MIME zbatimesh përdoruesi (krijuar duke klikuar
  <em>mbaje mend</em> kur përdoret funksioni <em>hape me</em>),
  dhe të zbatimit të fundit të përdorur për hapjen e kartelës (pavarësisht nëse është përzgjedhur a jo <em>mbaje mend</em>). Kështu në figurën më sipër mund të shihni që kartela TeX e përzgjedhur ka disa mundësi me anë të të cilave mund të hapet.</p>

  <p>Veprime të mëtejshëm mbi kartelat përfshihen te nënmenuja e kartelave,
  e përshkruar më poshtë dhe tek e cila mund të hyhet shpejt përmes F8.</p><a name="file-submenu-fig"></a>

  <p><b>Figurë 16. Nënmenuja flluckë për kartelat</b></p><img src=
  "/images/documentation/4.2/file_subpopup.png" alt="Menuja. " />

  <p>Te nënmenuja për kartelat mund të hyhet shpejt përmes F8,
  e përmban veprimet bazë të kryera normalisht mbi sistemin e kartelave:</p>

  <ul type="disc">
    <li><em>Veti</em>: Ndryshoni file's përdorues/grup të kartelës ose të dhëna mënyre (çka mund të bëhet po ashtu edhe përmes përpunimi të fushave nga brenda).</li>

    <li><em>Kartelë e re</em>: Krijon një kartelë të re te drejtoria e përzgjedhur.</li>

    <li><em>Drejtori e re</em>: Krijon një drejtori të re brenda drejtorisë së përzgjedhur.</li>

    <li><em>Shtyp</em>: Shtyp kartelën e përzgjedhur duke përdorur
    <b><tt>xfprint4</tt></b></li>

    <li><em>Dyfishoje</em>: Krijon një kopje të kartelës apo drejtorisë së përzgjedhur.</li>

    <li><em>Simlidhje</em>: Krijon një simlidhje të drejtorisë ose kartelës së përzgjedhur (e passhme gjithashtu përmes tërheqjeje duke pasur ndërkohë të shtypur ctl-shift ose përmes ngjitje-lidhjeje nga e papastra).</li>

    <li><em>Prek</em>: Prek kartelën ose drejtorinë.</li>

    <li><em>Riemërto</em>: Riemërto kartelën ose drejtorinë (e mundshme gjithashtu edhe me përpunim nga brenda.</li>

    <li><em>Përziej</em>: Përzieje kartelën dhe mbroje me fjalëkalim. Nëse përgjegjësi i kartelave përpilohet me mundësinë --enable-scrambledir,
atëherë ky objekt nuk do të jetë në ngjyrë hiri kur bëhet fjalë për drejtoritë, dhe e tërë drejtoria mund të përziehet e ngatërrohet qëllimisht për ta mbrojtur me të njëjtin fjalëkalim.</li>

    <li><em>Çpërziej</em>: Çpërziej kartelën. Zgjatimi për tipin MIME të kartelave të përziera është .cyt, prandaj kjo mundësi është e zbehur nëse kartela e përzgjedhur nuk është e tipit të përzier. Nëse gjatë përpilimit ka qenë aktivizuar përzierja e drejtorive, kjo mundësi do të jetë vepruese edhe për drejtoritë.</li>
  </ul><a name="netfile-menu-fig"></a>

  <p><b>Figurë 17. Menuja flluckë për netfile</b></p><img src=
  "/images/documentation/4.2/netfile_popup.png" alt="Menuja. " />

  <p>Fllucka për kartela SMB rrjeti është e ngjashme me atë për kartela vendore, por nuk përmban nënmenu kartelash.</p><a name=
  "columns-menu-fig"></a>

  <p><b>Figurë 18. Menuja flluckë për shtyllat</b></p><img src=
  "/images/documentation/4.2/column_titles_popup.png" alt="Menuja. " />

  <p>nëse djathtasklikoni mbi titull shtyllash, ju del <em>fllucka e shtyllave</em>. Me këtë flluckë mund të bëni të dukshme ose jo shtyllat që doni. Sipas formësimit parazgjedhje, kuadrati djathtas ka tërë shtyllat e mundshme të dukshme, dhe shtylla majtas nuk ka të dukshme asnjë nga të mundshmet.</p><a name=
  "icon-title-smartbutton-fig"></a>

  <p><b>Figurë 19. Butoni i mençur për titull ikone</b></p><img src=
  "/images/documentation/4.2/icon_title_smartbutton.png" alt="Menuja. " />

  <p>Kjo është fllucka për titullin e shtyllës së ikonave. Duke e mbajtur të shtypur ju del një flluckë butonash. Përzgjedhja e cilitdo buton përcakton cili fiton klikimin. Këta butona përdoren për të kaluar degët kryesore "on" dhe "off". Nëse doni të shihni degën fstab, klikoni mbi simbolin fstab. Nëse doni të fshini degën vendore, klikoni simbolin e degës vendore.</p><a name=
  "sort-popup-fig"></a>

  <p><b>Figurë 20. Nënmenuja flluckë për renditje</b></p><img src=
  "/images/documentation/4.2/sort_subpopup.png" alt="Menuja. " />

  <p>Nënmenuja e renditjeve ju lejon të këmbeni metodën e renditjeve për parjen në trajtë peme. Metoda për <em>mosrenditje</em> nënkupton një radhitje sipas emrash dhe lloji kartelash. Mund të këmbeni metodën e renditjes duke klikuar te titujt e shtyllave. Qëllimi i kësaj menuje është të bëjë të mundur që nga tastiera një metodë për këmbim mënyre renditjeje.</p>

  

  <h2><a name="Toolbar"></a>Panelet</h2>

  <h3><a name="standard_toolbar"></a>Paneli standard</h3><a name="toolbar-fig"></a>

  <p><b>Figurëe 21. </b></p><img src="/images/documentation/4.2/toolbar.png" alt=
  "Paneli. " />

  <p>Paneli standard është një shkurtore për te mjaft funksione menuje. Duke djathtasklikuar mbi cilindo buton me një shigjetë poshtë, mund të shfaqni ose zhdukni anështyllën përkatëse. Duke e shtypur dhe mbajtur të shtypur butonin, mund të nxirrni gjithashtu një flluckë me elementet e anështyllës. Mandej e lëshoni pasi të keni gjedhur elementin që dëshironi të klikohet. Elementi i klikuar i fundit prej grupi do të shndërrohet në butonin e epërm të dukshëm në panel.</p>

  <h3><a name="menu_toolbar"></a>Paneli i menusë</h3>

  <p>Paneli i menusë përbëhet nga elementët vijues:</p><a name="filter-fig"></a>

  <p><b>Figurë 22. Kutia e filtrave</b></p><img src=
  "/images/documentation/4.2/filter_box.png" alt="Menuja. " />

  <p>Kjo ju lejon të filtroni përmbajtjen e një drejtorie përpara se të hyjë te pamja në trajtë peme. Pranohen po ashtu edhe shprehjet e rregullta si ajo e treguar në figurë (tej filtrave klasikë si <em>*.c</em>). Pas një ndryshimi vargu filtrash, rifreskoni pamjen. Nëse pamja në trajtë peme është e fshehur, nuk filtrohe gjë.</p><a name="hide-show-buttons-fig"></a>

  <p><b>Figurë 23. Butona fshih/shfaq</b></p><img src=
  "/images/documentation/4.2/hide_show_buttons.png" alt="Menuja. " />

  <p>Te paneli i menusë, keni butona për shfaqjen vetëm të pamjes në trajtë peme të anës së djathtë (edhe me F12), të pamjes në trajtë peme të anës së majtë (edhe me F11), parjen e të dyjaves (ose me F11 dy herë, ose me F12 prapë dy herë), dhe fshehjen dhe shfaqjen e kutisë së filtrave dhe të panelit standard. (Nëse e përpiluat me --enable-panel, do të keni një panel të dytë që pasqyron formësimin tuaj për xfce4-panel, të plotë me butona fshehje dhe shfaqje, i cili zëvendëson degën rrënjë për zbatime nga <b><tt>xffm-4.0).</tt></b></p>

  <h3><a name="Sidebars"></a>Anështyllat</h3>

  <p>Sipas formësimit parazgjedhje ka disa anështylla të passhme.</p><a name="file-submenu-sidebar-fig"></a>

  <p><b>Figurë 24. Anështylla për nënmenu kartelash</b></p><img src=
  "/images/documentation/4.2/sidebar_filesubmenu.png" alt="Menuja. " />

  <p>Shihni &quot;<a href="#file-submenu-fig">Nënmenu kartelash</a>&quot; për nëj shpjegim të mundësive të mundshme. Duhet përzgjedhur saktësisht një objekt prej pamjes në trajtë peme që kjo anështyllë të jetë vepruese.</p><a name="go-sidebar-fig"></a>

  <p><b>Figurë 25. Anështylla për Shko</b></p><img src=
  "/images/documentation/4.2/sidebar_go.png" alt="Menuja. " />

  <p>Shihni &quot;<a href="#go-menu-fig">menunë për Shko</a>&quot; për një shpjegim rreth mundësive të mundshme.</p><a name=
  "multiple-select-sidebar-fig"></a>

  <p><b>Figurë 26. Anështylla për përzgjedhje të shumëfishtë</b></p><img src=
  "/images/documentation/4.2/sidebar_multiple_select.png" alt="Menuja. " />

  <p>Prej këtej mund të krijoni një kartelë apo drejtori të re, ose të hapni dialogun e vetive. Duhet përzgjedhur e pakta një objekt prej pamjes në trajtë peme, që kjo të jetë vepruese. Shihni &quot;<a href="#file-submenu-fig"
 >Nënmenu kartelash</a>&quot; për një shpjegim të mundësive të passhme.</p><a name="open-sidebar-fig"></a>

  <p><b>Figurë 27. Anështylla për hapjet</b></p><img src=
  "/images/documentation/4.2/sidebar_open.png" alt="Menuja. " />

  <p>Shihni &quot;<a href="#open-menu-fig">menunë hap</a>&quot; për një shpjegim të mundësive të passhme.</p><a name=
  "options-sidebar-fig"></a>

  <p><b>Figurë 28. Anështylla e mundësive</b></p><img src=
  "/images/documentation/4.2/sidebar_options.png" alt="Menuja. " />

  <p>Shihni &quot;<a href="#options-menu-fig">menu mundësish</a>&quot; për një shpjegim të mundësive të passhme.</p><a name="paste-sidebar-fig"></a>

  <p><b>Figurë 29. Anështyllë ngjitjesh</b></p><img src=
  "/images/documentation/4.2/sidebar_paste.png" alt="Menuja. " />

  <p>Mund të ngjisni përmbajtjen e të papastrës, ose të lidhngjisni përmbajtjen e të papastrës. Funksioni i lidhngjitjes krijon simlidhje të kartelave që përmbahen te e papastra.</p><a name=
  "tools-sidebar-fig"></a>

  <p><b>Figure 30. Anështylla e mjeteve</b></p><img src=
  "/images/documentation/4.2/sidebar_tools.png" alt="Menuja. " />

  <p>Shihni &quot;<a href="#tools-menu-fig">menunë e mjeteve</a>&quot;
  për një shpjegim të mundësive të passhme.</p>

  

  <h2><a name="xffm-settings"></a>Xfce-mcs-manager</h2><a name="mcs-plugin-fig"></a>

  <p><b>Figurë 31. Shtojca mcs</b></p><img src=
  "/images/documentation/4.2/mcs-plugin.png" alt="Menuja. " />

  <p>Disa funksione përmbushen më mirë po qe se formësohen me shtojcën për përgjegjësin mcs.</p>

  <p>Gjatë fshirjes së një kartele, dialogu i ripohimi do të shfaqë, si parazgjedhje, një nga tre butonat: anulo, kosh hedhurinash ose zgjidhe. Zgjidhni kë t'ju pëlqejë.</p>

  <p>Po qe se s'doni ndonjë përfundim te dritarja e diagnostikimeve,
  i vini shenjë mundësisë <em>Çaktivio diagnistikimet</em></p>

  <p>Në doni të mbani përfundimin prej xterms apo xfce4-terminals hapur prej përgjegjësit të kartelave, i vini shenjë mundësisë <em>Mbaj xterms</em></p>

  <p>Në doni të përfitoni plotësisht nga funksionet monto/çmonto që ofrn përgjegjëi i kartelave, rruga më e mirë është të instaloni <b><tt>sudo</tt></b> dhe ta formësoni si duhet, në mënyrë që të lejojë montime/çmontime. Nëse <b><tt>sudo</tt></b> lyp fjalëkalim, përgjegjësi i kartelave do t'ua kërkojë kur të jetë nevoja. I vini shenjë mundësisë <em>Montoje me sudo</em> që të bëhet kjo.</p>

  <p>Pjesa e fundit e shtojcës mcs ju lejon të përcaktoni fluturimthi ndryshore mjedisi:</p>

  <ul type="disc">
    <li><em>TERMCMD</em>: Urdhri i përdorur për hapje terminalesh.</li>

    <li><em>LANG</em>: Ndryshorja LANG e mjedisit që përgjegjësi i kartelave u kalon zbatimeve të hapur prej tij. Lypset ta ndërroni këtë vetëm nëse dëshironi që kjo ndryshore të jetë tjetër nga ajo e përdorur prej përgjegjësit të kartelave.</li>

    <li><em>XFFM_HOME</em>: Shtegu që ndjek përgjegjësi i kartelave kur përzgjidhet funksioni <em>Shko në hyrje</em>.</li>

    <li><em>SMB_USER</em>: Username%password parazgjedhje i përdorur për kërkesa rrjeti SMB.</li>

    <li><em>SMB_CODESET</em>:Kodim gërmash i përdorur për interpretim shenjash jo-ascii në shërbyesa SMB të largët.</li>

    <li><em>XFFM_STATUS_LINE_LENGTH</em>: Përcakton gjatësinë më të madhe për vargjet që duken te rresht gjendjeje. Kjo mundësi sillet për të shmangur rritjen e gjerësisë së dritares për përgjegjës kartelash tej zgjedhjes së përdoruesit.</li>

    <li><em>XFFM_MAX_PREVIEW_SIZE</em>: Kjo ndryshore mjedisi përcakton madhësinë më të madhe për paraparje pamjesh (vendosur, si parazgjedhje, në masën 256 KB). Mbani shënim që disa paraparje mund të mos prodhohen dot nëse janë shumë të ngushta, ose shumë të gjera. Për të parë këto, instaloni image-magick dhe përdorni dyklikim për parjen e këtyre kartelave.</li>
  </ul>

  

  <h2><a name="diagnostics"></a>Dritarja e diagnostikimeve</h2><a name="diagnostics-window-fig"></a>

  <p><b>Figurë 32. Dritarja e diagnostikimeve</b></p><img src=
  "/images/documentation/4.2/diagnostics_window.png" alt="Menuja. " />

  <p>Kjo është dritarja ku shfaqet përfundimi i urdhrave të përmbushur nga përgjegjësi i kartelave. Në e daçi më tepër fjalamane, përdorni <a href="#preferences-menu-fig"
  >parapëlqimin</a> <em>fjalamane</em>, dhe nëse doni ta çaktivizoni fund e krye, përdorni <a href="#mcs-plugin-fig">shtojcën mcs</a>.</p>

  

  <h2><a name="FAQ"></a>FAQ</h2>

  <h3><a name="FAQ1"></a>A ka parje në trajtë ikonash?</h3>

  <p>Ka gjasa që kjo të vijë me versionin 4.4</p>

  <h3><a name="FAQ2"></a>Si mund të përshtas ikonat?</h3>

  <p>Përdorni programin <b><tt>xfmime-edit</tt></b> (prej menusë së mundësive).
  Ky program funksionon me përpunime të trajtës merr-dhe-vër ose nga brenda. Gjatë ruajtjes, do të krijoni kartelën e nevojshme mime.xml te drejtoria $HOME/.themes. Mund ta thërrisni <b><tt>xfmime-edit</tt></b> prej një terminali rreshti urdhrash. Grupi i ikonave i përdorur do të jetë ai i përzgjedhur te xfce-setting-show (ndërfaqja e përdoruesit).</p>

  <h3><a name="FAQ3"></a>A mund ta përdor gjetjen pa futje/përfundim GUI?</h3>

  <p>Po. Ekzekutoni <b><tt>fgr</tt></b> prej rreshti urdhrash.</p>

  <h3><a name="FAQ4"></a>Mund të përmbush dritare ndryshimesh prej përgjegjësish të tjerë kartelash?</h3>

  <p>Sigurisht. Thjesht hapni kartelat e përzgjedhura me xfdiff4.</p>

  <h3><a name="FAQ5"></a>A mund të bëj përzierje/çpërzierje prej rreshti urdhrash?</h3>

  <p>Po. Thjesht përdorni programin <b><tt>scramble</tt></b> prej një terminali. Ky program do të veprojë në mënyrë gjithëpërfshirëse në drejtoritë.</p>

  <h3><a name="FAQ6"></a>Ç'ndodh te Xfsamba me shërbyesa SMB në nënrrjete të largët?</h3>

  <p>Në daçi të shihni shërbyesa në një nënrrjet të largët (përtej një rrugëzuesi), atëherë <em>duhet</em> të keni një "domain master" në secilin nënrrjet. Te kartela e formësimit të sambas, mund ta përcaktoni strehën vendore tuaj të jetë një "domain master".</p>

  <h3><a name="FAQ7"></a>Ç'mund të bëjë Xfsamba nëse nuk ka "domain
  master" te nënrrjeti i largët?</h3>

  <p>Nëse nuk ka "domain master" te nënrrjeti i largët, prapë mund të
lidheni te një shërbyes po qe se njihni emrin e tij BIOS. Thjesht përdorni funksionin <em>shko tek</em> dhe paraprijini emrit të shërbyesit me një dyshe pjerrësesh, d.m.th., <em>//shërbyes</em>. Që të funksionojë kjo, si makina juaj vendore, ashtu edhe shërbyesi i largët <em>duhen</em> formësuar të përdorin të njëjtin shërbyes WINS.</p>

  <h3><a name="FAQ8"></a>Ç'problem ka Xfsamba me shenjat jo-ascii?</h3>

  <p>Kodimi i gërmave që përdoret nga shërbyesi i largët përcaktohet po nga ky vetë. Dhe kjo varet nga sistemi operativ. Përfundimi: rrëmujë hesapi. Xfsamba bën sa mundet të hamendësojë se ç'është e saktë dhe ju mund të ndihmoni përmes përcaktimit të SMB_CODESET me ndihmën e <a href="#xffm-settings">përgjegjësit MCS</a>.
  Përfundimi varet. Në paçi probleme me shpërngulje kartelash me shenja jo-ascii të trupëzuara në to, përdorni menunë flluckë që të montoni ndarjen e largët si sistem vendor kartelash.</p>

  <h3><a name="FAQ9"></a>Si mund ta bëj një anështyllë të hiqet qafe?</h3>

  <p>Klikoni mbi të me butonin 3.</p>

  <h3><a name="FAQ10"></a>Si mund ta kthej prapë anështyllën?</h3>

  <p>Klikoni me butonin 3 mbi cilëndo anështyllë që ka një shigjetë për hapmbyll.</p>

  <h3><a name="FAQ11"></a>Çfarë bëjnë tastet F-diçka?</h3>

  <p>Shtypni F1 që ta merrni vesh.</p>

  <h3><a name="FAQ12"></a>Përse nuk pranon mbikëqyrësi xftree i kartelave të shohë për ndryshime në disa drejtori?</h3>

  <p>Nëse ringarkimi i një drejtorie zgjat më tepër se njëfarë kohe (mundësi e paformësueshme), xftree-ja nuk do ta ringarkojë vetvetiu kur zbulon ndryshime. Për rifreskim, përdorni butonin ringarko ose CTRL-Z.</p>

  <h3><a name="FAQ13"></a>Si mund të shkruaj një CDRW?</h3>

  <p>Përzgjidhni drejtorinë. Mandej, me menunë flluckë, përzgjidhni
  <em>Krijo isofs</em>. Zgjidhni një drejtori për përfundimin dhe prisni deri sa të plotësohet. Mandej përzgjidheni kartelën isofs të krijuar rishtazi dhe shfaqni menunë fluckë. Përzgjidhni <em>cdrecord</em> (ose <em>burncd</em> në sisteme që përdorin këtë program). Prisni të mbarohet.</p>

  <h3><a name="FAQ14"></a>Cili është urdhri i përdorur për shkrim të një
  CDRW-je?</h3>

  <p>Në varësi se çfarë është instaluar, <b><tt>sudo</tt></b> dhe
  <b><tt>cdrecord</tt></b> apo <b><tt>burncd</tt></b>, do t'ju të ndiqni urdhrat vijues që të shkruani një CDRW:</p>

  <ul type="disc">
    <li><b><tt>burncd -f /dev/acd0 -s max data %s
    fixate</tt></b></li>

    <li><b><tt>cdrecord -v dev=ATAPI:0,0,0 &quot;,&quot;cdrecord
    %s</tt></b></li>

    <li><b><tt>sudo burncd -f /dev/acd0 -s max data %s
    fixate</tt></b></li>

    <li><b><tt>sudo cdrecord -v dev=ATAPI:0,0,0 &quot;,&quot;cdrecord
    %s</tt></b></li>
  </ul>

  <p>Do të duhej të ishit në gjendje të përzgjidhnit kartelën isofs dhe të përdorni funksionin <em>hape me</em> që të mund të përdorni urdhrin tuaj vetjak nëse këto parazgjedhje nuk ju mbarojnë punë.</p>

  <h3><a name="FAQ15"></a>Çfarë kriteri përdoret për vetëplotësim?</h3>

  <p>Vargu i përdorur së fundmi ka përparësinë më të madhe. Përndryshe vargjet për vetëplotësime radhitem me zërat më të përdorur në krye.</p>

  <h3><a name="FAQ16"></a>Si e regjistroj një zbatim të ri për një tip MIME të dhënë?</h3>

  <p>Përdorni menunë flluckë dhe përzgjidhni funksionin <em>hape me</em>.
  Shkruani aty vargun që do përdoret për të hapur programin. Mund të përdornit &quot;%s&quot; për të vendosur shtegun e kartelës së përzgjedhur në një vend tjetër nga ai në fund. I vini shenjë kutizës <em>Mbaje mend</em>. Nëse dështon përmbushja e urdhrit, nuk ka për tu regjistruar gjë.</p>

  <h3><a name="FAQ17"></a>Përse hyn në punë butoni &quot;mbaje&quot; gjatë ekzekutimesh?</h3>

  <p>Le ta zëmë se doni të përmbushni një urdhër terminali me përfundim dhënë te STDOUT, të themi <b><tt>ls /tmp</tt></b>. Për mbajtjen hapur të dritares së terminalit që të mund të shihni përfundimin, përdorni urdhrin mbaj. Pasi të mos ju hyjë në punë më përfundimi, duhet ta shkatërroni dorazi dritaren e terminalit. Nëse është përzgjedhur <em>Hold xterms</em> te <a href="#xffm-settings">përgjegjësi MCS</a>, atëherë tërë xterms-et <em>mbahen</em> dhe kutia për shenjë do të jetë në ngjyrë gri.</p>

  <h3><a name="FAQ18"></a>Si mund të rrëshqas shpejt poshtë me tastierën?</h3>

  <p>Shtypja e cilësdo gërmë do t'ju rrëshqasë poshtë te rreshti i parë që fillon me atë gërmë (në nivelin e përzgjedhur në atë çast). Në daçi të rrëshqisni në kah të kundërt, përdorni SHIFT-gërmë. Nuk ka dallim midis të mëdhajash dhe të voglash.</p>

  <h3><a name="FAQ19"></a>Si bëhet dyklikimi me tastierën?</h3>

  <p>Shtypni <em>return</em> (e në disa raste,
  <em>shigjetën djathtas</em>).</p>

  <h3><a name="FAQ20"></a>Si mund të hidhem nëpër kuadratet majtas e djathtas të dritareve duke përdorur tastierën?</h3>

  <p>Shtypni <em>tab</em>.</p>

  <h3><a name="FAQ21"></a>Si mund të mbyllet një degë duke përdorur tastierën?</h3>

  <p>Shtypni <em>shigjetën majtas</em>.</p>

