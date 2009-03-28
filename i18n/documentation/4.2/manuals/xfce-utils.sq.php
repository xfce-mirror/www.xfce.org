
  <h1><a name="xfce-utils"></a>Të dobishëm dhe Programthe Xfce 4</h1>

  <p>
  <strong>Jasper Huijsmans</strong> &lt;jasper@xfce.org&gt;<br  />
  <strong>Benedikt Meurer</strong> &lt;benny@xfce.org&gt;
  </p>

  <h3>Ky doracak përshkruan paketën xfce-utils, version 4.2.0.</h3>

  <p>
  Të drejta Kopjimi &copy; 2004 Jasper Huijsmans<br />
  Të drejta Kopjimi &copy; 2004 Benedikt Meurer
  </p>
  
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#utils-intro">Hyrje</a></dt>

    <dt><a href="#utils-taskbar">Shtyllë veprimesh</a></dt>

    <dt><a href="#utils-run">Dialogu për Xhiro</a></dt>

    <dt><a href="#utils-about">Dialogu për Rreth</a></dt>

    <dt><a href="#utils-scripts">Programthe</a></dt>

    <dt><a href="#utils-copyright">Rreth xfce-utils</a></dt>
  </dl>

  

  <h2><a name=
  "utils-intro"></a>Hyrje</h2>

  <p>Paketa <b><tt>xfce-utils</tt></b> ofron një shtyllë veprimesh, dialogun
  Rreth për Xfce 4-n, një dialog për xhirim urdhrash apo programesh dhe disa
  programthe të dobishëm të cilët përdoren nga përbërës të tjerë të Xfce 4-s,
  si p.sh. menuja e panelit dhe ajo e desktopit.</p>

  

  <h2><a name="utils-taskbar"></a>Shtyllë veprimesh</h2>

  <p>Shtylla e veprimeve tregon tërë programet që po xhirojnë.
  Sjellja e shtyllës së veprimeve mund të ndryshohet prej përgjegjësit
  të rregullimeve. Xhironi <b>xfce-setting-show</b>, ose nisni
  prej panelit përgjegjësin e rregullimeve.</p><a name="taskbar-settings-fig"></a>

  <p><b>Figurë 1. Dialog rregullimesh shtylle veprimesh</b></p><img src=
  "/images/documentation/4.2/taskbar_settings.png" alt=
  "Shfaq dialogun për rregullimet e shtyllës së veprimeve. " />

  <p>Prej dialogut të rregullimeve, mund të përzgjidhni pozicionin e 
  shtyllës së veprimeve: sipër ose poshtë ekranit. Mund të caktoni
  lartësinë dhe gjerësinë e shtyllës, duke përdorur dy rrëshqitësat,
  dhe përzgjidhni drejtim majtas, djathtas apo në qendër, nëse gjerësia e 
  shtyllës së veprimeve është më e vogël se ajo e ekranit tuaj. Një tjetër
  mundësi ju lejon të përdorni &quot;Vetëfshehjen&quot;.</p>

  <p>Mundësitë për &quot;Veprime&quot; ju lejojnë të përshtasni sjelljen e 
  shtyllës së veprimeve në përputhje me administrimin e zbatimeve të hapur.
  Mund të zgjidhni të tregohen veprime prej tërë hapësirave tuaj të punës
  ose nga vetëm ajo e çastit, të grupohen veprimet përherë ose vetëm kur
  shtylla e veprimeve mbushet dëng, dhe a të shfaqen emrat e zbatimeve
  apo vetëm ikonat e tyre.</p>

  <p>Përveç listës së veprimeve, shtylla e veprimeve përmban gjithashtu
  një faques të thjeshtë grafik dhe një fushë njoftimesh (e njohur
  gjithashtu si <em>system tray</em>). Të dyja mund të çaktivizohen
  prej dialogut të rregullimeve.</p>



  <h2><a name="utils-run"></a>Dialogu
  Xhiro</h2><a name="run-dialog-fig"></a>

  <p><b>Figurë 2. Dialogu xhiro</b></p><img src=
  "/images/documentation/4.2/run-dialog.png" alt="Shfaq dialogun e xhirimeve." />

  <p>Dialogu xhiro u lejon përdoruesve të nisin zbatime.
  Zbatimet mund të xhirojnë nga një terminal (si parazgjedhje xterm,
  shihni programthin xfterm4 më poshtë). Në një mjedis Xfce 4, ashtu siç vjen si parazgjedhje,
  shkurtorja Alt+F2 do të hapë një dialog xhirimi.</p>

  

  <h2><a name="utils-about"></a>Dialog Rreth</h2><a name="about-dialog-fig"></a>

  <p><b>Figurë 3. Dialogu Rreth</b></p><img src=
  "/images/documentation/4.2/about-dialog.png" alt=
  "Shfaq faqen e krediteve nga Dialogu Rreth. " />

  <p>Dialogu Rreth përdoret për të shfaqur të dhëna rreth Xfce 4-së,
  përfshi një listë përbërësish, një faqe kreditesh për tërë personat që
  ndihmuan në krijimin e Xfce 4-s dhe të dhëna licensash.</p>

  

  <h2><a name="utils-scripts"></a>Programthe</h2>

  <dl>
    <dt>startxfce4</dt>

    <dd>
      <p><b><tt>Startxfce4</tt></b> është një programth i përshtatshëm
      për të nisur një sesion Xfce 4 nga konsola. Do t'ju japë një sesion
      me një shtyllë veprimesh dhe një panel me përgjegjësin e desktopit
      dhe me përgjegjësin e dritareve në xhirim e sipër.</p>

      <p>Tërë programet, ose lidhjet simbolike te programe, te
      <tt>~/Desktop/Autostart/</tt> do të xhirohen nga 
      <b><tt>startxfce4</tt></b> në nisje.</p>

      <p>Për të përshtatur sjelljen e <b><tt>startxfce4</tt></b>,
      kopjoni kartelën <tt>${sysconfdir}/xfce4/xinitrc</tt> te drejtoria juaj
      vetjake <tt>~/.config/xfce4/</tt> dhe përpunojeni atë kartelë.
      Nëse instaloni prej burimit, <tt>${sysconfdir}</tt>
      si parazgjedhje shpie te <tt>/usr/local/etc</tt>; për paketa dyore
      shpesh është caktuar te <tt>/etc</tt>.</p>

      <p>Me përfshirjen e një përgjegjësi sesionesh te Xfce 4.2, rruga
      e parapëlqyer për të ndryshuar sjelljen në nisje është përmes përdorimit
      gjatë daljes të mundësisë &quot;Ruaj sesion&quot;.</p>
    </dd>

    <dt>xfhelp4</dt>

    <dd>
      <p>Ky programth përdoret për hapjen në një shfletues të
      dokumentacionit vendor për Xfce 4-n. Si parazgjedhje do të provojë
      një numër shfletuesish të mirënjohur, si Firefox, Galeon apo Konqueror,
      por mund ta ndryshoni këtë sjellje duke caktuar ndryshoren e mjedisit
      $BROWSER. Për shembull, te <tt>~/.bash_profile</tt> vendosni rreshtin vijues:</p>

      <table border="0" bgcolor="#F3F4F8" width="100%">
        <tr>
          <td>
            <pre>
export BROWSER=&quot;galeon -w&quot;
</pre>
          </td>
        </tr>
      </table>

      <p>Që të punojë kjo, duhet të dilni nga shelli i çastit dhe të rihyni në të sërish.</p>

      <p>Nëse ka dokumentacion të instaluar në gjuhën tuaj,
      xfhelp4 do të hapë atë, në vend të parazgjedhjes në
      Anglisht.</p>
    </dd>

    <dt>xflock4</dt>

    <dd>
      <p>Ky programth përdoret nga paneli për të kyçur ekranin kur përdoret
      xscreensaver, në mundet, ose duke kaluar te xlock përndryshe.</p>
    </dd>

    <dt>xfmountdev4</dt>

    <dd>
      <p><b>xfmountdev4 <tt>/dev/pikë_montimi</tt></b> do të montojë
      pikën e dhënë të montimit dhe hapë xffm në atë vendndodhje. Kur mbyllni
      dritaren, sistemi i kartelave xffm do të çmontohet. Mbani parasysh
      që për të njëjtin qëllim mund të përdorni <b><tt>xffstab4</tt></b>,
      që furnizohet me xffm-në.</p>
    </dd>

    <dt>xfterm4</dt>

    <dd>
      <p>Ky është një programth i leverdisshëm për terminal. Ky
      përdor ndryshoren e mejdisit $TERMCMD si urdhër terminali,
      në pastë, dhe kalon te përdorimi i xterm-it në të kundërt.
      Veçanërisht i dobishëm te paneli, pasi mund të tërhiqni dhe
      hidhni atje një kartelë apo një drejtori, e cila do të shfaqet
      nga zbatimi i duhur për konsol (less për kartela tekst,
      lynx për html).</p>
    </dd>
  </dl>

  

  <h2><a name="utils-copyright"></a>Rreth
  xfce-utils</h2>

  <p><b><tt>xfce-utils</tt></b> u shkruajt nga Jasper Huijsmans
  (<tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>), Olivier
  Fourdan (<tt>&lt;<a href=
  "mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>) dhe
  Benedikt Meurer (<tt>&lt;<a href=
  "mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>). Për më tepër
  të dhëna, ju lutemi vizitoni
 <a href="http://www.xfce.org"><em>site</em>-in web të Xfce-së</a>.</p>

  <p>Për të raportuar një të metë apo për të dhënë një këshillë në
  lidhje me këtë zbatim apo këtë doracak, përdorni sistemin e ndjekjes
  së <em>bug</em>-eve te <a href="http://bugzilla.xfce.org/"
  >http://bugzilla.xfce.org/</a>.</p>

  <p>Nëse keni pyetje rreth instalimit të kësaj pakete,
  ju lutem pyesni te lista e postimeve <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce"
  >xfce</a>. Diskutimet rreth zhvillimit bëhen te
  lista e postimeve <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev"
  >xfce4-dev</a>.</p>

  <p>Ky program shpërndahet sipas kushteve të Licensës Publike të
  Përgjithshme GNU, ashtu si botohet nga Free Software Foundation; ose
  versioni 2 i Licensës, ose (në dëshirën tuaj) cilido version i mëvonshëm.</p>

  <p>Duhej të kishit marrë një kopje të Licensës Publike të Përgjithshme GNU
  bashkë me këtë; nëse jo, shkruajini Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>
