
  <h1><a name="xfce4-session"></a>Përgjegjës Sesioni për Xfce 4-n</h1>

  <p>Benedikt Meurer &lt;benny@xfce.org&gt;</p>
  
  os-cillation<br />
  Zhvillues sistemi<br />
  Zhvillues software-i<br />

  <h3>Ky doracak përshkruan paketën xfce4-session, version 4.2.0. Përditësimi i fundit: Jan 2005</h3>

  <p>Të drejta Kopjimi &copy; 2003, 2004 Benedikt Meurer</p>
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#xfsm-intro">Hyrje</a></dt>

    <dt><a href="#xfce4-session-settings">Rregullime Përgjegjësi 
    Sesioni</a></dt>

    <dd>
      <dl>
        <dt><a href="#xfsm-general-settings">Parapëlqime të përgjithshme</a></dt>

        <dt><a href="#xfsm-advanced-settings">Parapëlqime 
        të mëtejshme</a></dt>
      </dl>
    </dd>

    <dt><a href="#xfsm-customize">Si të përshtatet Përgjegjësi 
    i Sesionit</a></dt>

    <dd>
      <dl>
        <dt><a href="#xfsm-engines">Rregullime për siglën</a></dt>

        <dt><a href="#xfsm-shutdown">Mundësi 
        fikjeje/rinisjeje</a></dt>
      </dl>
    </dd>

    <dt><a href="#xfsm-advanced">Të mëtejshëm</a></dt>

    <dd>
      <dl>
        <dt><a href="#files-and-env-vars">Kartela dhe Ndryshore 
        Mjedisi</a></dt>

        <dt><a href="#xfsm-kiosk-mode">Mënyra Kioskë</a></dt>
      </dl>
    </dd>

    <dt><a href="#xfsm-copyright">Rreth
    <b><tt>xfce4-session</tt></b></a></dt>
  </dl>

  

  <h2><a name=
  "xfsm-intro"></a>Hyrje</h2>

  <p><b><tt>xfce4-session</tt></b> është përgjegjësi i sesioneve për Xfce 4-n.
  Detyra e tij është të ruajë gjendjen e desktopit tuaj (cilët zbatime janë hapur
  dhe vendi i tyre) dhe t'i rikthejë gjatë nisjes. Mund të krijoni sesione të ndryshëm
  dhe të zgjidhni një prej tyre gjatë nisjes.</p>

  <p><b><tt>xfce4-session</tt></b> ofron administrim sesionesh për
  të dy protokollet, X11R6 dhe X11R5. Nëse nuk keni nevojë për mbulim
  të protokollit të vjetër, mund ta çaktivizoni ndërkohë që bëhet përpilimi,
  duke xhiruar ./configure me mundësinë --disable-legacy-sm. <em>MOS XHIRONI KURRË</em>
  <b><tt>smproxy</tt></b> në një sesion që administrohet nga <b><tt>xfce4-session</tt></b>,
  përndryshe do të shihni gjëra të çuditshme. Administrimi sipas protokollit
  të vjetër që përfshihet këtu, bën gjithçka që do të bënte <b><tt>smproxy</tt></b>,
  dhe për më tepër, mbulon edhe paraqitjen në shumë ekrane.</p>

  

  <h2><a name=
  "xfce4-session-settings"></a>Rregullime Përgjegjësi Sesioni</h2>

  <h3><a name="xfsm-general-settings"></a>Parapëlqime
  të përgjithshme</h3><a name="xfsm-general-fig"></a>

  <p><b>Figurë 1. Parapëlqime të përgjithshme <tt>xfce4-session</tt></b></p><img src="/images/documentation/4.2/xfsm-general.png" alt=
  "Shfaq skedën Të përgjithshme të dialogut të rregullimeve xfce4-session." />

  <dl>
    <dt>Zgjedhës ekrani gjatë hyrjes</dt>

    <dd>
      <p>Me këtë të përzgjedhur, përgjegjësi i sesionit do t'ju kërkojë
      të zgjidhni një sesion sa herë që hyni në Xfce.</p>
    </dd>

    <dt>Ruaje vetvetiu sesionin gjatë daljes</dt>

    <dd>
      <p>Kjo mundësi e udhëzon përgjegjësin e sesionit të ruajë
      vetvetiu sesionin e çastit kur dilni prej tij. Nëse s'doni
      ta përzgjidhni këtë mundësi, do t'ju kërkohet gjatë çdo daljeje
      në doni të ruhet sesioni i çastit.</p>
    </dd>

    <dt>Kërkesë gjatë daljes</dt>

    <dd>
      <p>Kjo mundësi çaktivizon dialogun ripohues për daljen.
      Nëse do të ruhet apo jo sesioni varet në zgjodhët apo jo
      ruajtje të vetvetishme sesionesh gjatë daljes.</p>
    </dd>
  </dl>

  <h3><a name="xfsm-advanced-settings"></a>Parapëlqime 
  të mëtejshme</h3><a name="xfsm-advanced-fig"></a>

  <p><b>Figurë 2. Parapëlqime të mëtejshme <tt>xfce4-session</tt>
  </b></p><img src="/images/documentation/4.2/xfsm-advanced.png" alt=
  "Shfaq skedën Të mëtejshme të dialogut të rregullimeve xfce4-session." />

  <dl>
    <dt>Nis shërbime Gnome gjatë nisjes</dt>

    <dd>
      <p>Aktivizojeni këtë mundësi nëse lypset të xhirojë
      <em>GNOME keyring daemon</em> gjatë nisjes. Kjo mundësi
      udhëzon gjithashtu <b><tt>xfce4-session</tt></b> të vërë
      në punë teknologjitë ndihmëse GNOME gjatë nisjes (nëse janë
      aktivizuar në qendrën e kontrollit të GNOME-s). Shihni dokumentimin
      e GNOME-s për më tepër të dhëna mbi këtë temë.</p>
    </dd>

    <dt>Nis shërbime KDE gjatë nisjes</dt>

    <dd>
      <p>Aktivizojeni këtë mundësi nëse keni në plan të xhironi zbatime
      KDE si pjesë të sesionit tuaj Xfce. Kjo do të rrisë dukshëm kohën
      e nisjes, por nga ana tjetër, zbatimet KDE do të nisen më shpejtë.
      Disa zbatime KDE mund të mos punojnë fare nëse nuk e aktivizoni
      këtë mundësi.</p>
    </dd>

    <dt>Administroni zbatime në largësi</dt>

    <dd>
      <p>Lejojeni përgjegjësin e sesionit të administrojë zbatime që xhirojnë
      në strehë të largëta. Ngaqë kjo mundësi mund të përbëjë një rrezik
      për sigurinë, përmes përgjimit të një porte TCP në sistemin tuaj, mos e
      aktivizoni nëse nuk dini se çfarë po bëni.</p>

      <p>Administratorët e sistemeve mund të duan ta aktivizojnë këtë
      mundësi globalisht përmes <a href=
      "#xfsm-kiosk-mode">aftësive të mënyrës KIOSKË</a> të 
      përgjegjësit të sesioneve.</p>
    </dd>
  </dl>

  

  <h2><a name="xfsm-customize"></a>Si të Përshtatet Përgjegjësi 
  i Sesionit</h2>

  <p> Mund të përshtasni siglën e hyrjes që do të përdoret nga
  <b><tt>xfce4-session</tt></b> kur hyni në Xfce 4.
  Ka një dialog posaçërisht për këtë prej <em>Përgjegjësit të Rregullimeve
  për Xfce 4-n</em>.</p>

  <h3><a name="xfsm-engines"></a>Rregullime për
  siglën</h3><a name="splash-screen-settings-fig"></a>

  <p><b>Figurë 3. Dialog rregullimesh për siglën</b></p><img src=
  "/images/documentation/4.2/xfsm-splash.png" alt=
  "Shfaq dialogun e rregullimeve të siglës për xfce4-session." />

  <p>Majtas, dialogu shfaq një listë të tërë mekanizmave të instaluar.
  Përzgjidhni një mekanizëm, dhe do të shihni, në pastë, një paraparje dhe
  të dhëna rreth tij. Mund të klikoni butonin <b>Provë</b> për të parë
  një shfaqje nga mekanizmi i siglës së përzgjedhur.</p>

  <p><b><tt>xfce4-session</tt></b> ofron tre mekanizma teme Sigle,
  si parazgjedhje. Mundësitë përkatëse të formësimit - në pastë
  - janë të passhme prej butonit <b>Formësoni</b>.</p>

  <h3><a name="xfsm-shutdown"></a>Mundësi fikjeje/rinisjeje</h3>

  <p><b><tt>xfce4-session</tt></b> mbulon fikjen e kompjuterit
  gjatë daljes prej sesionit të desktopit. Për të mundur të fikni
  kompjuterin, ju duhet të jeni të radhitur në kartelën e
  <tt>sudoers</tt>-ve të sistemit, në veçanti, duhet t'ju lejohet
  përmbushja e urdhërit <tt>${libexecdir}/xfsm-shutdown-helper</tt>
  (<tt>/usr/sbin/xfsm-shutdown-helper</tt> në Debian GNU/Linux) si
  përdorues rrënjë (ku <tt>${libexecdir}</tt> është nëndrejtoria <tt>libexec</tt>
  në shtegun ku instaluat <b><tt>xfce4-session</tt></b>, për shembull
  <tt>/usr/local/libexec</tt>).</p>

  <p>Për shembull, le të themi, instaluat
  <b><tt>xfce4-session</tt></b> te <tt>/usr/local</tt>, emërstreha juaj
  është <em>strehaime</em> dhe llogaria juaj e përdoruesit quhet
  <em>unëpërdoruesi</em>, atëherë do të ishte mirë të shtonit rreshtin e mëposhtëm te
  kartela juaj <tt>sudoers</tt> (kujtohuni të përdorni urdhrin
  <b><tt>visudo</tt></b> për përpunimin e kësaj kartele):</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
strehaime unëpërdoruesi=/usr/local/libexec/xfsm-shutdown-helper
</pre>
      </td>
    </tr>
  </table>

  

  <h2><a name="xfsm-advanced"></a>Të mëtejshëm</h2>

  <h3><a name="files-and-env-vars"></a>Kartela dhe Ndryshore 
  Mjedisi</h3>

  <p>Xfce për vendosjen e të dhënave të veta dhe të kartelave të formësimit
  tani përdor Përcaktimet Basedir si përcaktohen te <a href=
  "http://freedesktop.org/">Freedesktop.org</a>. Kjo do të thotë që vendet
  e kartelave do të tregohen si shtigje relative për te drejtoritë e përcaktuara
  nga përcaktimet.</p>

  <dl>
    <dt>${XDG_CONFIG_HOME}</dt>

    <dd>
      <p>Drejtoria e parë bazë ku duhet parë për kartela formësimi.
      Si parazgjedhje, si e tillë caktohet <tt>~/.config/</tt>.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}</dt>

    <dd>
      <p>Një listë drejtorish të sistemit që përmban të dhëna formësimi.
      Si parazgjedhje, paneli do të shohë te
      <tt>${sysconfdir}/xdg/</tt> dhe <tt>/etc/xdg/</tt>. Vlera e
      ${sysconfdir} varet nga mënyra se si qe përpiluar programi dhe shpesh,
      për paketa dyore do të jetë <tt>/etc/</tt>.</p>
    </dd>

    <dt>${XDG_CACHE_HOME}</dt>

    <dd>
      <p>Përcakton rrënjën për tërë të dhëna fshehtinash që kanë të bëjnë
      me përdoruesa. Nëse kësaj ndryshore nuk i është dhënë një vlerë,
      parazgjedh <tt>~/.cache</tt>.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}/xfce4-session/xfce4-session.rc</dt>

    <dd>
      <p>Ky është vendi i kartelës së formësimit që përfshin
      rregullime të ndryshme për <b><tt>xfce4-session</tt></b>, 
      të cilat mund të ndryshohen prej dialogut të rregullimeve.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}/xfce4-session/xfce4-splash.rc</dt>

    <dd>
      <p>Ky është vendi i kartelës së formësimit që përfshin
      formësimin për siglën e ekranit, e cila mund të ndryshohet
      prej dialogut të rregullimeve.</p>
    </dd>

    <dt>${XDG_CACHE_HOME}/sessions/</dt>

    <dd>
      <p>Drejtoria ku depozitojnë të dhënat <b><tt>xfce4-session</tt></b>
      dhe <b><tt>xfwm4</tt></b>.</p>
    </dd>

    <dt>${sysconfdir}/xdg/xfce4/kiosk/kioskrc</dt>

    <dd>
      <p>Kartela e formësimit të mënyrës kioskë. Për shpjegim shihni <a href=
      "#xfsm-kiosk-mode">ndarjen pasuese</a>.</p>
    </dd>
  </dl>

  <p>Asnjë nga kartelat e formësimit, hiq <tt>kioskrc</tt>,
  nuk është menduar për t'u përpunuar dorazi përgjatë një sesioni Xfce;
  në fakt, ndryshimet do të mbishkruhen, nëse i përpunoni ndërkohë
  që përgjegjësi i sesionit apo përgjegjësa rregullimesh janë
  duke xhiruar.</p>

  <p>Përgjegjësat e sistemeve mund të duan të përshtasin kartelën
  <tt>${sysconfdir}/xdg/xfce4-session/xfce4-session.rc</tt> me qëllim
  ndryshimin e zbatimeve parazgjedhje që xhirojnë në nisje të Xfce-së.
  Për shembull, nëse doni të nisni <b><tt>xfce4-iconbox</tt></b>
  në vend të <b><tt>xftaskbar4</tt></b>, do të duhej të ndryshonit
  pjesën <em>[Failsafe Session]</em> pak a shumë si më poshtë:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
[Failsafe Session]
Count=4
Client0_Command=xfwm4
Client0_PerScreen=False
Client1_Command=xfce4-panel
Client1_PerScreen=True
Client2_Command=xfce4-iconbox
Client2_PerScreen=True
Client3_Command=xfdesktop
Client3_PerScreen=False
</pre>
      </td>
    </tr>
  </table>

  <h3><a name="xfsm-kiosk-mode"></a>Mënyra Kioskë</h3>

  <p>Përgjegjësi i sesionit ofron mbulim të Mënyrës Kioskë, çka
  ndihmon t'u parandalohet përdoruesve të bëjnë ndryshime te rregullimet për
  sesionet e tyre. Për ta përdorur, lypset të përpunoni apo krijoni kartelën
  <tt>${sysconfdir}/xdg/xfce4/kiosk/kioskrc</tt>.</p>

  <p>Rruga për shpjegimin e formatit të kësaj kartele është duke
  përdorur një shembull. Ndarja xfce4-session për <tt>kioskrc</tt>-në tuaj
  mund të ishte si kjo:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
[xfce4-session]
CustomizeSplash=ALL
CustomizeChooser=ALL
CustomizeLogout=ALL
CustomizeCompatibility=%trimat
Shutdown=%trimat
CustomizeSecurity=NONE
</pre>
      </td>
    </tr>
  </table>

  <p>Kjo u lejon tërë përdoruesve të ndryshojnë siglën, rregullimet për zgjedhësin
  dhe daljen, por u lejon të përshtasin rregullime përputhshmërie dhe të fikin sistemin
  vetëm përdoruesve të grupit <em>trimat</em>. Nuk i janë lejuar kujt ndryshime
  në rregullimet e sigurisë.</p>

  <p>Përgjegjësi i sesionit mbulon aftësitë vijuese
  për KIOSKËN:</p>

  <dl>
    <dt>CustomizeSplash</dt>

    <dd>
      <p>I lejohet apo jo përdoruesit të përshtasë
      siglën.</p>
    </dd>

    <dt>CustomizeChooser</dt>

    <dd>
      <p>I lejohet apo jo përdoruesit të përshtasë
      rregullime zgjedhësi sesioni.</p>
    </dd>

    <dt>CustomizeLogout</dt>

    <dd>
      <p>I lejohet apo jo përdoruesit të përshtasë
      rregullime daljeje.</p>
    </dd>

    <dt>CustomizeCompatibility</dt>

    <dd>
      <p>I lejohet apo jo përdoruesit të përshtasë
      rregullime përputhshmërie (përputhje me KDE/Gnome)</p>
    </dd>

    <dt>CustomizeSecurity</dt>

    <dd>
      <p>I lejohet apo jo përdoruesit të përshtasë
      rregullime sigurie. Kjo është një nga rregullimet më të <em>RËNDËSISHME</em>,
      ngaqë u parandalon përdoruesve (hollë hollë <tt>libICE</tt>-së)
      lidhjen te një portë TCP.</p>
    </dd>

    <dt>Fikje</dt>

    <dd>
      <p>I lejohet apo jo përdoruesit të fikë (rinisë ose fikë plotësisht)
      sistemin. Nëse një përdoruesi nuk i lejohet kjo, mundësitë për
      rinisje dhe fikje të plotë te dialogu i fikjes do të duken me ngjyrë gri.</p>
    </dd>
  </dl>

  

  <h2><a name="xfsm-copyright"></a>Rreth
  <b><tt>xfce4-session</tt></b></h2>

  <p><b><tt>xfce4-session</tt></b> u shkruajt nga Benedikt Meurer
  (<tt>&lt;<a href=
  "mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>). Për më tepër
   të dhëna, ju lutemi vizitoni <a href="http://www.xfce.org"
 ><em>site</em>-in web të Xfce-së</a>.</p>

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

  <p>Ky program shpërndahet sipas kushteve të Licensës Publike të Përgjithshme GNU,
  ashtu si botohet nga Free Software Foundation; ose versioni 2 i Licensës, ose (në dëshirën tuaj)
  cilido version i mëvonshëm.</p>

  <p>Duhej të kishit marrë një kopje të Licensës Publike të Përgjithshme GNU
  bashkë me këtë; nëse jo, shkruajini Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>
