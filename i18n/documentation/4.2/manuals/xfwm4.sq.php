
  <h1><a name="xfwm4"></a>Përgjegjësi Xfce 4 i dritareve</h1>

  <p><strong>Fran&ccedil;ois Le Clainche</strong> &lt;fleclainche@wanadoo.fr&gt;</p>

  <h3>Ky doracak përshkruan versionin 4.2.0 të xfwm4-s</h3>

  <p>
  Të drejta kopjimi &copy; 2004 Fran&ccedil;ois Le Clainche<br />
  Të drejta kopjimi &copy; 2004 Jasper Huijsmans
  </p>
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#wm-intro">Hyrje</a></dt>

    <dt><a href="#wm-using">Si të përdoret <b><tt>xfwm4</tt></b></a></dt>

    <dd>
      <dl>
        <dt><a href="#wm-windows">Administroni dritare</a></dt>
      </dl>
    </dd>

    <dt><a href="#wm-settings">Si të përshtatet
    <b><tt>xfwm4</tt></b></a></dt>

    <dd>
      <dl>
        <dt><a href="#wm-style">Stil zbukurimesh</a></dt>

        <dt><a href="#keyboard_shortcuts">Shkurtore tastiere</a></dt>

        <dt><a href="#focus">Parapëlqime fokusi</a></dt>

        <dt><a href="#wm_advanced">Rregullime të mëtejshme</a></dt>

        <dt><a href="#hidden_options">Mundësi të fshehura</a></dt>
      </dl>
    </dd>

    <dt><a href="#workspaces">Administrimi i hapësirave të punës</a></dt>

    <dd>
      <dl>
        <dt><a href="#id2597233">Rregullime për hapësira pune</a></dt>

        <dt><a href="#workspace-margins">Mënjana hapësirash pune</a></dt>
      </dl>
    </dd>

    <dt><a href="#wm-copyright">Rreth
    <b><tt>xfwm4</tt></b></a></dt>
  </dl>

  

  <h2><a name="wm-intro"></a>Hyrje</h2>

  <p>Përgjegjësi Xfce 4 i Dritareve është pjesë e <a href=
  "http://www.xfce.org">Mjedisit Xfce për Desktop</a>.
  Urdhri i njëmendtë për xhirimin është <b><tt>xfwm4</tt></b>. Për ta zhiruar në prapaskenë përdorni <b><tt>xfwm4</tt> --daemon</b>. Përgjegjësi i  dritareve është përgjegjës për vendosjen e dritareve në ekran, për furnizimin e zbukurimeve të ekranit dhe ju lejon mes të tjerash t'i lëvizni, t'i ripërmasoni ose t'i mbyllni ato.</p>

  <p><b><tt>xfwm4</tt></b> respekton fort standardet e përkufizuara te <a href="http://www.freedesktop.org"
  >freedesktop.org</a>. Për pasojë, anë speciale si kthimi i dritareve në të paana, ose furnizimi i një ikone për zbatimin tani duhet të sendërtohen te zbatimi; nuk mund të përdorni më përgjegjësin e dritareve për të detyruar sjellje tjetër. Një nga karakteristikat më të pëlqyeshme të  <b><tt>xfwm4</tt></b> është temshmëria. Zbulurimet e dritareve (anët, shtylla e titullit dhe butonat e dritareve) mund të fomrësohen duke përdorur tema përgjegjësi dritaresh.</p>

  <p><b><tt>xfwm4</tt></b> ofron mbulim për shumë krye, për të dy mënyrat,
  xinerama dhe shumëekranësh të njëmendtë, i dobishëm kur keni të lidhur te kompjuteri juaj më shumë se një monitor.</p>

  <p><b><tt>xfwm4</tt></b> mund të xhirohet më vete, por në e përdorshi në këtë farë feje, do të keni nevojë për <a href="xfce-mcs-manager"
 >Përgjegjësin Xfce 4 të Rregullimeve</a> nëse dëshironi administrim GUI të rregullimeve. Veprime të tjera ndryshe nga administrimi i dritareve, si p.sh. caktim pamjeje sfondi apo nisje programesh, lypset të bëhen nga të tjera programe.</p>

  <p><b><tt>xfwm4</tt></b> përfshin përgjegjësin e vet për hartime,
  i cili shfrytëzon më së miri zgjerimet <a href=
  "http://freedesktop.org/Software/xorg">X.org</a> për shërbyesa. Hartuesi është si një WM më vete, administron një kapicë të tërë dritareve, mbikëqyr tërë llojet e akteve X dhe kundërvepron si duhet. Pasja e përgjegjësit të hartimeve të trupëzuar te përgjegjësi i dritareve i ndih gjithashtu mbajtjes së efekteve të ndryshme pamore të njëkohësuar me ngjarje dritaresh. Nëse doni të përdorni hartuesin, duhet të formoni <b><tt>xfwm4</tt></b> duke përdorur mundësinë e formësimit --enable-compositor. Sido që të jetë, mund ta çaktivizoni hartuesin gjatë nisjes së <b><tt>xfwm4</tt></b> duke përdorur argumentin '--compositor=off'.</p>

  

  <h2><a name="wm-using"></a>Si të përdoret
  <b><tt>xfwm4</tt></b></h2>

  <h3><a name="wm-windows"></a>Administroni dritare</h3>

  <p>Përgjegjësi i dritareve furnizon dritaret e zbatimeve me anë, shtylla titulli dhe butona dritareje. Pamja përcaktohet nga tema e përgjegjësit të dritares.</p>

  <p>Te tema parazgjedhje <b><tt>xfwm4</tt></b> tregon gjashtë butona dhe një titull, në dritare të rregullta zbatimesh. Gjashtë butonat kryejnë këta funksione bazë:</p><a name="titlebar-fig"></a>

  <p><b>Figurë 1. <tt>xfwm4</tt> butona shtylle titulli</b></p><img src=
  "/images/documentation/4.2/titlebar.png" alt=
  "butona shtylle titulli dhe funksione xfwm4" />

  <p>Menunë e dritares mund ta hapni duke klikuar me të majtin mbi një buton menuje te shtylla e titullit, ose duke klikuar me të djathtin mbi vetë zonën e titullit të dritares.</p>

  <p>Në rast se po përdorni <b><tt>xftaskbar4</tt></b>, mund të hapni një menu veprimi duke klikuar me të djathtin mbi një nga zërat e shtyllës së veprimeve; përfshin disa objekte nga ata që janë të passhëm te menuja e dritares.</p>

  

  <dl>
    <dt>Dhënie fokusi një dritareje</dt>

    <dd>
      <p>Lypset t'i jepni fokus një dritareje nëse doni që të pranohen futje nga tastiera apo miu. Në varësi të fokusit do të ndryshojnë edhe ngjyrat e zbukurimit të dritares. Për më tepër të dhëna rreth mundësive të fokusit, ju lutem shihni <a href="#focus"
     >ndarjen përkatëse</a> më poshtë.</p>

      <p>Ka një shkurtore tastiere që ju lejon të kaloni fokusin nga një dritare në të tjera : Mbani të shtypur tastin Alt e mandej mund të shtypni  Tab një numër herësh për ta pasur fokusin te dritarja që ju intereson. Nëse e përdorni, do të shihni një flluckë të vockël që tregon emrin e zbatimit, ikonën e tij dhe titullin e dritares. Gjithashtu <b><tt>xfwm4</tt></b> do të theksojë përvijimin e dritares që do të bëhet zonjë e fokusit.</p>

      <p>SHËNIM: përdorimi i një shkurtoreje tastiere brenda një zbatimi lyp që fokusin ta ketë dritarja e atij zbatimi :)</p>
    </dd>

    <dt>Maksimizoni / çmaksimizoni dritaret</dt>

    <dd>
      <p>Nëse maksimizoni një dritare, ajo do të zgjerohet brenda ekranit tuaj duke përdorur tërë hapësirën e passhme (siç përcaktohet nga <a href=
      "xfdesktop#xfdesktop-workspace">rregullimet për hapësirën e punës</a>). Për më tepër, mund ta maksimizoni një dritare edhe vetëm vertikalisht ose horizontalisht.</p>

      <p>Për maksimizimin e një dritareje, kryeni këto veprime:</p>

      <ul type="disc">
        <li>klikoni butonin e maksimizimeve te shtylla e titullit</li>

        <li>hapni menunë dritare prej shtyllës së titullit dhe zgjihni objektin &quot;maksimizo&quot;</li>

        <li>përdorni shkurtoren e tastierës Alt + F5</li>
      </ul>

      <p>Mund të bëni të mundur shfaqjen e secilës dritare në mënyrën tërë ekrani (do të përdorë kështu tërë madhësinë e ekranit pa shfaqur anë dritareje) duke përdorur shkurtoren e tastierës Alt + F11, e cila edhe kjo vetë mund të përshtatet.</p>

      <p>Për ta maksimizuar një dritare vertikalisht :</p>

      <ul type="disc">
        <li>klikoni me butonin e mesit të miut mbi butonin e maksimizimeve te shtylla e titullit</li>

        <li>përdorni shkurtoren e tastierës Alt + F6</li>
      </ul>

      <p>Për ta maksimizuar një dritare horizontalisht :</p>

      <ul type="disc">
        <li>djathtasklikoni mbi butonin e maksimizimeve te shtylla e titullit</li>

        <li>përdorni shkurtoren e tastierës Alt + F7</li>
      </ul>

      <p>Kur një dritare maksimizohet, me njërën mënyrë a tjetrën, ajo mund të rikthehet te madhësia e vet e mëparshme duke kryer një nga këta veprime :</p>

      <ul type="disc">
        <li>klikoni mbi butonin e çmaksimizimeve te shtylla e titullit</li>

        <li>përdorni edhe një herë të njëjtën shkurtore tastiere</li>

        <li>zgjidhni objektin &quot;Çmaksimizo&quot; prej menusë së dritares</li>
      </ul>

      
    </dd>

    <dt>Ripërmasim dritaresh</dt>

    <dd>
      <p>Edhe pse disa dritare të caktuara speciale nuk mund të ripërmasohen, jeni në gjendje të ripërmasoni shumicën e tyre në përputhje me nevojat tuaja.</p>

      <ul type="disc">
        <li>mund të përdorni skajet dhe cepat e kornizës së dritares për të ndryshuar madhësinë e saj, duke i tërhequr ato me miun</li>

        <li>mund të përdorni shkurtoren Alt + klimim me të djathtin ndërkohë që e mbani shigjetën e miut kudo qoftë mbi kornizën e dritares; do të veprohet njësoj si të tërhiqnit cepin e poshtëm të djathtë të dritares</li>

        <li>mund të përdorni shkurtore praktike tastiere : Shift + Alt
        + Shigjetë (sipër, poshtë, majtas ose djathtas)</li>
      </ul>

      
    </dd>

    <dt>Fshih / zbulo dritare</dt>

    <dd>
      <p>Një dritare mund ta fshihni duke kryer një nga këto veprime
      :</p>

      <ul type="disc">
        <li>klikoni mbi butonin e fshehjes te shtylla e titullit</li>

        <li>hapni menunë e dritares prej shtyllës së titullit dhe zgjidhni objektin &quot;Fshih&quot;</li>

        <li>përdorni shkurtoren e tastierës Alt + F8</li>
      </ul>

      <p>Ose ndryshe, mund të fshihni tërë dritaret e hapësirës së punës ku ndodheni, hiq atë ku po punoni, vetëm me një veprim: klikoni butonin e menusë së shtyllës së titullit dhe zgjidhni &quot;Fshih tërë të tjerat&quot;.</p>

      <p>Për &quot;ta nxjerrë nga fshehja&quot; një dritare, duhet të përzgjidhni emrin ose ikonën e saj në një nga këta përbërësa të Xfce 4 :</p>

      <ul type="disc">
        <li><b><tt>xftaskbar4</tt></b></li>

        <li>lista e dritareve, ku mund të hyhet me klikim me  butonin e mesit mbi sfondin e desktopit. Kjo listë tregon tërë dritaret e hapura, klasifikuar sipas hapësirave të punës. Dritaret që në atë çast janë të fshehura tregohen mes [ ].</li>

        <li><b><tt>xfce4-iconbox</tt></b></li>
      </ul>

      
    </dd>

    <dt>Hijezo / hiqu hije dritareve</dt>

    <dd>
      <p>Po qe se &quot;e vini në hije&quot; një dritare, do të zvogëlohet madhësia e shtyllës së titullit për të. I njëjti veprim i përsëritur ja këmben gjendjen dritares në hije/johije :</p>

      <ul type="disc">
        <li>klikoni butonin hijezo/çhijezo të shtyllës së titullit</li>

        <li>hapni menunë dritare prej shtyllës së titullit dhe zgjidhni
        objektin &quot;Hijezo&quot; ose &quot;Çhijezo&quot;</li>

        <li>përdorni rrotëzën e miut ndërkohë që e mbani shigjetën e tij përmbi shtyllën e titullit</li>

        <li>përdorni shkurtoren e tastierës Alt + F9</li>
      </ul>

      
    </dd>

    <dt>Ngjisni / shqisni dritaret</dt>

    <dd>
      <p>Nëse e &quot;ngjisni &quot; një dritare, do të jetë e dukshme te i njëjti vend në tërë hapësirat e punës. Përsëritja e të njëjtit veprim nga ata më poshtë e ngjit/shqit një dritare :</p>

      <ul type="disc">
        <li>klikoni butonin ngjit/shqit të shtyllës së titullit</li>

        <li>hapni butonin e menusë së dritares prej shtylle titulli dhe zgjidhni objektin &quot;Ngjit&quot; ose &quot;Shqit&quot;</li>

        <li>përdorni shkurtore tastiere Alt + F10</li>
      </ul>

      
    </dd>

    <dt>Ulni / ngrini dritare</dt>

    <dd>
      <p>Funksioni i &quot;ngritjes së një dritareje&quot; e bën kornizën e një dritareje të duket përmbi tërë kornizat e tjera. Për ta ngritur një dritare, mund të :</p>

      <ul type="disc">
        <li>klikoni me të djathtën mbi shtyllën e saj të titullit</li>

        <li>kalojini dritares fokusin, nëse mundësia përkatëse është e përzgjedhur te <a href="xfwm4#wm-focus"
       >Dialogu i parapëlqimeve për tastierën dhe fokusin</a></li>

        <li>klikoni me butonin e majtë të miut kudo qoftë mbi kornizën e saj, nëse mundësia përkatëse është e përzgjedhur te <a href="xfwm4#wm-focus"
       >Dialogu i parapëlqimeve për tastierën dhe fokusin</a></li>

        <li>klikoni etiketën e saj te shtylla e veprimeve ose te kutiza e ikonave</li>

        <li>përdorni shkurtore tastiere Shift + Alt + Page_Up (nëse dritarja ka tashmë fokusin)</li>
      </ul>

      <p>Duke hapur menunë e dritareve dhe përzgjedhur objektin &quot;përherë sipër&quot;, mund ta bëni një kornizë dritareje të qëndrojë përherë sipër tërë dritareve të tjera.</p>

      <p>Funksioni i &quot;uljes së një dritareje&quot; e dërgon kornizën e një dritareje nën tërë kornizat e tjera. Për &quot;ta ulur&quot; një dritare, mund të :</p>

      <ul type="disc">
        <li>klikoni me butonin e mesit të miut mbi shtyllën e saj të titullit</li>

        <li>përdorni shkurtore tastiere Shift + Alt + Page_Down (nëse dritarja ka tashmë fokusin)</li>
      </ul>

      
    </dd>

    <dt>Lëvizni dritare</dt>

    <dd>
      <p>Ka disa rrugë për të lëvizur dritaret :</p>

      <ul type="disc">
        <li>djathtasklikoni ose majtasklikoni mbi shtyllën e titullit të dritares dhe tërhiqeni atë</li>

        <li>përdorni Alt + klikim majtas ndërkohë që shigjeta e miut gjendet kudo qoftë përmbi kornizën e dritares dhe lëvizni miun</li>

        <li>përdorni shkurtore tastiere Control + Alt + Shift + Shigjetë(sipër, poshtë, majtas ose djathtas)</li>
      </ul>

      
    </dd>

    <dt>Kalojeni një dritare te një tjetër hapësirë pune</dt>

    <dd>
      <p>Një dritare mund ta dërgoni te një tjetër hapësirë duke kryer një prej këtyre veprimeve :</p>

      <ul type="disc">
        <li>ngjiteni dritare, kaloni te një tjetër hapësirë pune, dhe mandej shqiteni dritaren.</li>

        <li>përdorni menunë e dritares dhe zgjidhni një nga objektet e nënmenusë &quot;Dërgoje te&quot;.</li>

        <li>majtasklikoni ose djathtasklikoni mbi shtyllë titulli të dritares, tërhiqeni te skaji i ekranit : shigjeta e miut do të shkojë kështu te hapësira tjetër e punës, ende duke mbajtur dritaren. Lypset të jetë përzgjedhur mundësia përkatëse te <a href=
        "xfwm4#wm_misc">dialogu i Parapëlqimeve për Përgjegjësin e Dritareve</a>.</li>

        <li>përdorni shkurtore tastiere :

          <ul type="circle">
            <li>Alt + Control + End do ta kalojë një dritare te hapësira pasuese e punës</li>

            <li>Alt + Control + Home do ta kalojë një dritare te hapësira e mëparshme e punës</li>

            <li>Alt + Control + Keypad-Number do ta kalojë dritaren e çastit te hapësira përkatëse e punës</li>
          </ul>
        </li>

        <li>përdorni <a href="xfce4-panel#switcher-item"
       >faquesin grafik</a> duke klikuar mbi përfaqësuesin e dritares, dhe kalojeni te hapësira e dëshiruar e punës.</li>
      </ul>

      
    </dd>

    <dt>Mbyllja e një dritareje</dt>

    <dd>
      <p>për mbylljen e një dritareje :</p>

      <ul type="disc">
        <li>klikoni butonin e mbylljes te shtylla e titullit</li>

        <li>Hapni menunë e dritares prej shtylle titulli dhe zgjidhni objektin &quot;Mbyll&quot;</li>

        <li>or përdorni shkurtore tastiere Alt + F4</li>
      </ul>
    </dd>
  </dl>

  

  <h2><a name="wm-settings"></a>Si të përshtatet
  <b><tt>xfwm4</tt></b></h2>

  <p>Për hapjen e dialogut të parapëlqimeve për Përgjegjësin e Dritareve, klikoni butonin me emrin &quot;Përgjegjësi i Dritareve&quot; te <a href=
  "xfce-mcs-manager#manager-dialog">përgjegjësi i Rregullimeve për Xfce 4</a>. Dialogu ju paraqet katër skeda : Stil,
  Tastierë, Fokus, Të mëtejshme. Tërë ndryshimet do të hyjnë menjëherë në lojë mbi sjelljen e modulit të përzgjedhur.</p>

  <h3><a name="wm-style"></a>Stil zbukurimi</h3><a name=
  "wm_decoration_style-fig"></a>

  <p><b>Figurë 2. Parapëlqime stili zbukurimi</b></p><img src=
  "/images/documentation/4.2/decoration_style.png" alt="Skeda e stilit të zbukurimeve" />

  <dl>
    <dt>Stil dritareje</dt>

    <dd>
      <p>Lista në anën e djathtë të dialogut tregon tërë zbukurimet e mundshme për dritaret. Moduli xfwm 4 ofron mundësinë e zgjedhjes së njërë nga 4 temat e ndryshme, por ka më shumë se 60 tema shtesë që mund të kihen me paketën shtesë xfwm4-themes.</p>
    </dd>

    <dt>Gërma titulli</dt>

    <dd>
      <p>Butoni &quot;Përzgjedhje gërmash&quot; tregon familjen e gërmave në përdorim atë çast për titullin e dritares. Klikoni këtë buton nëse doni ta ndryshoni atë, dhe do të shfaqet dialogu &quot;Përzgjedhje gërmash&quot;. Funksionon si dialogu i përzgjedhjes së gërmave te <a href="xfce-mcs-plugins#id2811474">shtojca e përgjegjësit të rregullimeve të ndërfaqes</a>.</p>
    </dd>

    <dt>Vendosje e titullit</dt>

    <dd>
      <p>Cilado qoftë skema për butonat, mund të vendosni për drejtimin e titullit brenda shtyllës së titullit, duke përzgjedhur një nga këto mundësi të thjeshta : vëre majtas, në qendër ose djathtas.</p>
    </dd>

    <dt>Skemë butonash</dt>

    <dd>
      <p>Formësimi i skemës së butonave përdor një mjet të lehtë të llojit merr-dhe-vër. Klikoni dhe tërhiqni butona që të ndryshoni skemën. Hidhni një buton te zona &quot;e Fshehur&quot; për ta hequr atë buton nga shtylla e titullit. Tërë ndryshimet do të hyjnë menjëherë në lojë lidhur me vendosjen e butonave të shtyllës së titullit.</p>
    </dd>
  </dl>

  <h3><a name="keyboard_shortcuts"></a>Shkurtore tastiere</h3><a name="keyboard_shortcuts-fig"></a>

  <p><b>Figurë 3. Parapëlqime shkurtoresh tastiere</b></p><img src=
  "/images/documentation/4.2/keyboard_shortcuts.png" alt="Skeda e shkurtoreve të tastierës" />

  <dl>
    <dt>Shkurtore Tastiere</dt>

    <dd>
      <p>Lista në anën e majtë të dialogut tregon tërë temat e passhme për shkurtore, duke përdorur emrin e drejtorive që përmbajnë një kartelë keythemerc.</p>

      <p>Si parazgjedhje, ka vetëm një temë :
      $(datadir)/themes/Default/xfwm4/keythemerc</p>

      <p>Te formësimi parazgjedhje janë përcaktuar ndërthurjet vijuese të tastave:</p>

      <ul type="disc">
        <li>mbyll dritare : Alt + F4</li>

        <li>Maksimizo dritare : Alt + F5</li>

        <li>Maksimizo vertikalisht : Alt + F6</li>

        <li>Maksimizo horizontalisht : Alt + F7</li>

        <li>Fshih dritare : Alt + F8</li>

        <li>Hijezo dritare : Alt + F9</li>

        <li>Ngjit dritare : Alt + F10</li>

        <li>Ciklo fokus dritareje : Alt + Tab</li>

        <li>Lëviz dritare : Control + Shift + Alt + Shigjetë (sipër, poshtë,
        majtas, ose djathtas)</li>

        <li>Ripërmasoni dritare : Shift + Alt + Shigjetë (sipër, poshtë,
        majtas, ose djathtas)</li>

        <li>Ngri dritare : Shift + Alt + Page_Up</li>

        <li>Ul dritare : Shift + Alt + Page_Down</li>

        <li>Këmbe gjendje "tërë ekrani" : Alt + F11</li>

        <li>Hapësira pasuese e punës : Control + Alt + Shigjeta djathtas</li>

        <li>Hapësira e mëparshme e punës : Control + Alt + Shigjeta majtas</li>

        <li>Shto një hapësirë pune : Alt + Insert</li>

        <li>Fshi një hapësirë pune : Alt + Delete</li>

        <li>Shko te hapësira e punës numër N (1-9) : Control + F(N)</li>

        <li>Kaloje dritaren te hapësira e mëparshme|pasuese e punës : Alt +
        Control + Home|End</li>

        <li>Kaloje dritaren te hapësira e punës numë N (1-9) : Alt +
        Control + tast shifre N te pjesa e tastierës për numrat</li>

        <li>Nis xfhelp4 : Alt + F1</li>

        <li>Nis xfrun4 : Alt + F2</li>

        <li>Kyç ekranin : Alt + Control + Delete</li>
      </ul>

      <p>Ka dy lista në anën e djathtë të dialogut. Lista
      &quot;Shkurtore dritaresh&quot; tregon shkurtore tastiere që përdoren për drejtimin e përgjegjësit të dritareve. Lista &quot;Shkurtore urdhërash&quot;
      shfaq shkurtore tastiere që kanë të bëjnë me nisje zbatimesh. Për ndryshimin e shkurtoreve, duhet të dyklikoni mbi të te lista, duke përdorur butonin e majtë të miut, dhe të hartoni shkurtoren tuaj të re sapo të shfaqet dritarja flluckë &quot;Hartoni shkurtore&quot;.</p><a name=
      "compose_shortcut-fig"></a>

      <p><b>Figurë 4. Fllucka për hartim shkurtoreje</b></p><img src=
      "/images/documentation/4.2/compose_shortcut.png" alt=
      "Fllucka për hartim shkurtoreje" />

      <p>Nëse doni të krijoni një temë të re, krijoni një drejtori të re të ngjashme me këtë, për shembull :
      $HOME/.themes/Custom/xfwm4/keythemerc, mandej përzgjidheni te lista e temave të mundshme.</p>

      <p>Nëse nuk i njihni emrat e tasteve të ndryshuesit të tastierës suaj, mund të nisni prej një terminali zbatimin &quot;xev&quot; dhe t'i provoni tastet.</p>
    </dd>
  </dl>

  <h3><a name="focus"></a>Parapëlqime për fokusin</h3><a name=
  "focus-fig"></a>

  <p><b>Figurë 5. Parapëlqime për fokusin</b></p><img src=
  "/images/documentation/4.2/focus.png" alt="Skeda për fokusin" />

  <dl>
    <dt>Model fokusi</dt>

    <dd>
      <p>Dritarja që zotëron fokusin, merr futjet prej tastiere apo miu.
      Keni dy modele zgjedhjeje për fokusin :</p>

      <ul type="disc">
        <li>Klikim për fokus : përzgjidhni këtë mundësi nëse doni që një dritare të marrë fokusin vetëm kur klikohet mbi çfarëdo pjese të kornizës së saj.</li>

        <li>Fokusi ndjek miun : përzgjidhni këtë mundësi nëse doni që një dritare të marrë fokusin sapo shigjeta e miut gjendet mbi kornizën e saj.</li>
      </ul>

      
    </dd>

    <dt>Fokus për dritare të re</dt>

    <dd>
      <p>Përzgjedhja e kësaj mundësie ja kalon vetvetiu fokusin dritareve të krijuara rishtazi, pa patur nevojë të klikohet apo të lëvizet shigjeta e miut.</p>
    </dd>

    <dt>Me fokusin, ngrije</dt>

    <dd>
      <p>Nëse është përzgjedhur kjo mundësi, korniza e dritares së re të sapofokusuar do të shfaqet vetvetiu përsipër tërë kornizave të tjera, pas një kohe të dhënë që ju e rregulloni me rrëshqitësin e &quot;vonesës&quot;.</p>
    </dd>

    <dt>Me klikimin, ngrije</dt>

    <dd>
      <p>Zgjidheni këtë mundësi nëse dëshironi që një dritare të ngrihet mbi shoqet kur klikoni kudo mbi kornizën e saj. Nëse nuk përzgjidhet kjo mundësi, do t'ju duhet të klikoni diku mbi zbukurimin e saj (shtyllë titulli, anë ose cepa) për ta ngritur.</p>
    </dd>
  </dl>

  <h3><a name="wm_advanced"></a>Rregullime të mëtejshme</h3><a name=
  "misc_wm_prefs-fig"></a>

  <p><b>Figurë 6. Rregullime të mëtejshme</b></p><img src=
  "/images/documentation/4.2/misc_wm_prefs.png" alt="Skeda për të  mëtejshmet" />

  <dl>
    <dt>Përlarje dritaresh</dt>

    <dd>
      <p>Mund të zgjidhni që anët e dritareve të tërhiqen (përlahen) nga anët e dritareve të tjera, ose nga skajet e ekranit, kur lëvizen. Largësia përbrenda së cilës do të punojë kjo gjë mund të përcaktohet me rrëshqitësin e &quot;Largësisë&quot;.</p>
    </dd>

    <dt>Mbështill hapësira pune</dt>

    <dd>
      <p>Përzgjidhni mundësinë e parë nëse doni të kalohet te hapësira pasuese e punës kur shigjeta e miut mbërrin në skajet e ekranit.
      Përzgjidhni mundësinë e dytë nëse dëshironi të njëjtën sjellje kur tërhiqni një dritare. Kundërshtimin e kësaj nga ana e skajeve të ekranit mund ta përcaktoni duke përdorur rrëshqitësin përkatës.</p>
    </dd>

    <dt>Lëvizje dhe ripërmasim për Të marrta</dt>

    <dd>
      <p>Këto dy mundësitë ju lejojnë të zgjidhni nëse lënda e një dritareje do të duket apo jo, kur e lëvizni apo ripërmasoni atë (mosshfaqja e lëndës do të kursejë ca burime sistemi).</p>
    </dd>

    <dt>Veprim dyklikimi</dt>

    <dd>
      <p>Përzgjidhni cila duhet të jetë sjellja e përgjegjësit të dritares kur dyklikoni mbi shtyllën e titullit të një dritareje : hijezim dritareje, fshehje dritareje, maksimizim dritareje ose asgjë.</p>
    </dd>
  </dl>

  <h3><a name="hidden_options"></a>Mundësi të fshehura</h3>

  <p>Disa mundësi të fshehura ju lejojnë të përshtasni sjelljen e  <b><tt>xfwm4</tt></b>. Këto duhe shtuar dorazi te kartela juaj HYRJE/.config/xfce4/xfwm4/xfwm4rc. Mund edhe t'ju duhet ta krijoni këtë kartelë.</p>

  <dl>
    <dt>cycle_minimum=false</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc nëse doni që zbatimet që s'duken te shtyllë veprimesh të përfshihen kur ndërroni fokus përmes shkurtores Alt+Tab.</p>
    </dd>

    <dt>cycle_hidden=false</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc nëse doni të përjashtoni dritaret e fshehura prej listës së paraqitur kur përdoret shkurtorja Alt+Tab.</p>
    </dd>

    <dt>easy_click=false</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc nëse doni të çaktivizohet mundësia për lëvizje apo ripërmasim dritaresh përmes përdorimit të shkurtores tast Alt + klikim miu.</p>
    </dd>

    <dt>focus_hint=false</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc që ta udhëzoni xfwm4 të shpërfillë këshilla fokusi të furnizuara nga zbatimet.</p>
    </dd>

    <dt>prevent_focus_stealing=true</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc që të parandaloni vjedhjen e fokusit nga dritare.</p>
    </dd>

    <dt>raise_with_any_button=false</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc nëse doni që të ngrihet një dritare vetëm kur klikohet mbi të me butonin e majtë të miut.</p>
    </dd>

    <dt>move_opacity=100</dt>

    <dd>
      <p>Caktoni marrtësi dritareje ndërkohë që kjo lëvizet. Marrtësia është një vlerë e plotë ndërmjet 0 dhe 100; 100 do të thotë e marrtë, 0 tërësisht e padukshme.</p>

      <p>Kjo mundësi nuk ka pasojë nëse përgjegjësi i hartimeve nuk është veprues.</p>
    </dd>

    <dt>resize_opacity=100</dt>

    <dd>
      <p>Cakton marrtësinë e dritares për kohën që kjo ripërmasohet. Marrtësia është një vlerë e plotë ndërmjet 0 dhe 100; 100 do të thotë e marrtë, 0 tërësisht e padukshme.</p>

      <p>Kjo mundësi nuk ka pasojë nëse përgjegjësi i hartimeve nuk është veprues.</p>
    </dd>

    <dt>toggle_workspaces=true</dt>

    <dd>
      <p>Shtojeni këtë rresht te kartela juaj xfwm4rc nëse doni që shkurtorja e tastierës Control+F(N) të mbajë mend hapësirën e mëparshme të punës.</p>
    </dd>

    <dt>wrap_layout=true</dt>

    <dd>
      <p>mbështjell hapësirat e punës në varësi të skemës aktuale të desktopit.</p>
    </dd>

    <dt>wrap_cycle=true</dt>

    <dd>
      <p>mbështjell hapësirat e punës kur mbërrihet te hapësira e parë ose e fundit e punës.</p>
    </dd>
  </dl>

  

  <h2><a name="workspaces"></a>Administrim hapësirash pune</h2>

  <p><b><tt>xfwm4</tt></b> lejon gjithashtu administrim hapësirash pune. Ka një dialog të veçantë rregullimesh për ndryshimin e vetive të hapësirave të punës. Mund ta hapni duke zgjedhur <em>Hapësira pune dhe Mënjana</em> prej <a href="xfce-mcs-manager#manager-dialog"
  >dialogut për përgjegjësin e rregullimeve</a>. Dialogu përmban dy skeda  prej nga mund të ndryshoni rregullimet për hapësira pune dhe mënjana desktopi.</p>

  <h3><a name="id2597233"></a>Rregullime hapësirash pune</h3><a name=
  "xfwm-workspace-fig"></a>

  <p><b>Figurë 7. Rregullime hapësirash pune</b></p><img src=
  "/images/documentation/4.2/xfwm_workspaces.png" alt=
  "Shfaq skeda rregullimesh hapësirash pune. " />

  <dl>
    <dt>Hapësira pune</dt>

    <dd>
      <p>Kjo mundësi ju lejon të zgjidhni numrin e hapësirave të punës që dëshironi të përdorni (nga 1 deri 32).</p>
    </dd>

    <dt>Emra hapësirash pune</dt>

    <dd>
      <p>Kjo fushë tregon listën e hapësirave të mundshme të punës. Nëse dëshironi të përpunoni emrin e njërës prej tyre, klikoni numrin e saj dhe plotësoni zërin e dialogut që do të shfaqet pas klikimit. Kur të mbaroni, klikoni butonin &quot;Zbato&quot;, ose thjesht shtypni tastin Enter, për tu kthyer te lista.</p>
    </dd>
  </dl>

  <h3><a name="workspace-margins"></a>Mënjana hapësirash pune</h3><a name="workspace_margins-fig"></a>

  <p><b>Figurë 8. Dialog mënjanash hapësirash pune</b></p><img src=
  "/images/documentation/4.2/workspace_margins.png" alt=
  "Skedë mënjanash hapësire pune" />

  <p>Për hapjen e dialogut të Mënjanave të hapësirave të punës, klikoni butonin me emrin &quot;Hapësira pune dhe Mënjana&quot; te <a href=
  "xfce-mcs-manager#manager-dialog">dialogu i përgjegjësit të rregullimeve</a> dhe zgjidhni skedën me emrin &quot;Mënjana&quot;.</p>

  <p>Mënjanat janë zona në skajet e ekranit të cilat nuk do të mbulohen nga dritarja e maksimizuar. Mund të rregulloni madhësinë, në piksel, të tërë mënjanave (majatas, djathtas, sipër dhe poshtë). Përdoreni këtë karakteristikë, për shembull, nëse nuk doni që dritaret e maksimizuara të tejkalojnë korniza paneli apo kutije ikonash.</p>

  

  <h2><a name="wm-copyright"></a>Rreth
  <b><tt>xfwm4</tt></b></h2>

  <p><b><tt>xfwm4</tt></b> u shkruajt nga Olivier Fourdan
  (<tt>&lt;<a href=
  "mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>). Për më tepër të dhëna, ju lutem vizitoni <a href="http://www.xfce.org"
 >site-in web të Xfce-së</a>.</p>

  <p>Për të raportuar një të metë apo për të dhënë një këshillë në
  lidhje me këtë zbatim apo këtë doracak, përdorni sistemin e ndjekjes
  së <em>bug</em>-eve te <a href="http://bugzilla.xfce.org/"
  >http://bugzilla.xfce.org/</a>.</p>

  <p>Nëse keni pyetje rreth instalimit të kësaj pakete, ju lutem
  pyesni te lista e postimeve <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce"
  >xfce</a>. Diskutimet rreth zhvillimit bëhen te lista 
  e postimeve <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev"
  >xfce4-dev</a>.</p>

  <p>Ky program shpërndahet sipas kushteve të Licensës Publike të
  Përgjithshme GNU, ashtu si botohet nga Free Software Foundation; ose
  versioni 2 i Licensës, ose (në dëshirën tuaj) cilido version i  
  mëvonshëm.</p>

  <p>Duhej të kishit marrë një kopje të Licensës Publike të Përgjithshme GNU
  bashkë me këtë; nëse jo, shkruajini Free Software Foundation, Inc., 59   
  Temple Place - Suite 330, Boston, MA 02111-1307, USA.</p>
