  <h1>Përgjegjësi i Rregullimeve për Xfce 4</h1>

  <p>
  <strong>Fran&ccedil;ois Le Clainche</strong> &lt;fleclainche@wanadoo.fr&gt;<br />
  <strong>Jasper Huijsmans</strong> &lt;huysmans@users.sourceforge.net&gt;
  </p>

  <h3>Ky doracak përshkruan xfce-mcs-manager version 4.2.0</h3>

  <p>
  Të drejta Kopjimi &copy; 2004 Fran&ccedil;ois Le Clainche<br />
  Të drejta Kopjimi &copy; 2004 Jasper Huijsmans
  </p>
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#manager-intro">Hyrje</a></dt>

    <dt><a href="#manager-dialog">Dialog Përgjegjësi Rregullimesh</a></dt>

    <dd>
      <dl>
        <dt><a href="#id2533406">Hapja e dialogut</a></dt>

        <dt><a href="#id2533451">Përdorimi i dialogut</a></dt>
      </dl>
    </dd>

    <dt><a href="#manager-backend">Backend i Përgjegjësit të Rregullimeve</a></dt>

    <dt><a href="#manager-copyright">Rreth Përgjegjësit të Rregullimeve Xfce</a></dt>
  </dl>

  <h2><a name="manager-intro" id=
  "manager-intro"></a>Hyrje</h2>

  <p>Përgjegjësi i rregullimeve Xfce 4 ju lejon hyrjen te rregullimet
  për tërë përbërësit Xfce 4. Zbatimi ka dy pjesë. Dialogu i përgjegjësit të
  rregullimeve, i cili është pjesa e vetme rreth së cilës nevojitet të ketë
  njohuri përdoruesi, dhe pjesa <em>backend</em> për përgjegjësin e rregullimeve
  e cila <em>u flet</em> programeve Xfce 4 dhe u bën të ditur ndryshimet te
  parapëlqimet.</p>

  <p>Nga ana teknike, pjesa <em>backend</em> për përgjegjësin e rregullimeve
  përdor protokollin XSETTINGS ashtu si ky prëcaktohet nga freedesktop.org, përshtatur
  për lejim kanalesh të shumtë, që kështu një modul të mund të ndjekë vetëm ndryshimet
  për të cilat interesohet; Mcs-ja te emri nënkupton <em>multichannel settings - rregullime shumëkanalëshe</em>.</p>

  <h2><a name="manager-dialog"
  id="manager-dialog"></a>Dialog Përgjegjësi Rregullimesh</h2>

  <h3><a name="id2533406"></a>Hapja e dialogut</h3>

  <p>ka disa rrugë për të hapur dialogun e përgjegjësit të rregullimeve.</p>

  <p>Para së gjithash, mund ta hapni prej panelit Xfce. Ka një nisës te
  paneli sipas formësimit parazgjedhje. Nëse dëshironi
  mund të shtoni një buton të veçantë rregullimi që do të jetë pjesë e objektit
  Butona Sistemesh.</p><a name="smgr-setup-button-fig" id=
  "smgr-setup-button-fig"></a>

  <p><b>Figurë 1. Buton rregullimi në Xfce 4
  panel</b></p><img src="/images/documentation/4.2/smgr_from_setup_button.png" alt=
  "Shfaq buton rregullimi te paneli Xfce 4 panel, i përdorur për të hapur dialogun e përgjegjësit të rregullimeve. " />

  <p>Dritarja rrënjë për menutë, e furnizuar nga përgjegjësi i Desktopit Xfce 4
  (<b><tt>xfdesktop</tt></b>) përmban një zë për hapjen e dialogut
  të përgjegjësit të rregullimeve. Djathtasklikoni në sfondin e desktopit
  dhe zgjidhni <b>Përgjegjësi i Rregullimeve Xfce 4</b> te nënmenuja <b>Rregullime</b>.</p><a name=
  "smgr-root-menu-fig" id="smgr-root-menu-fig"></a>

  <p><b>Figurë 2. Menu dritareje rrënjë
  menu</b></p><img src="/images/documentation/4.2/smgr_from_root_menu.png" alt=
  "Shfaq dritare mëmë menuje miu, përdorur për të hapur dialogun e përgjegjësit të rregullimeve. " />

  <p>Së fundi, mund ta hapni dialogun e përgjegjësit të rregullimeve duke xhiruar
  <b><tt>xfce-setting-show</tt></b>.</p>

  <h3><a name="id2533451"></a>Përdorimi
  i dialogut</h3>

  <p>Dialogu i Përgjegjësit të Rregullimeve Xfce 4 ju lejon hyrje të qendërzuar
  te parapëlqimet e tërë përbërësve Xfce të instaluar, pa u dashur domosdo që këta të jenë
  duke xhiruar.</p><a name="smgr-dialog-fig" id=
  "smgr-dialog-fig"></a>

  <p><b>Figurë 3. Përgjegjës Rregullimesh
  Dialog</b></p><img src="/images/documentation/4.2/settings_manager.png" alt=
  "Shfaq dialogun e përgjegjësit të rregullimeve. " />

  <p>Thjesht klikoni te butoni që  përgjigjet modulit që doni të formësoni.
  Ky veprim do të hapë një dialog të ri vetish. Zakonisht, tërë ndryshimet do të kenë 
  efekt të atypëratyshëm mbi sjelljen e modelit të përzgjedhur
  (<em>zbato menjëherë</em>). Pasi të keni mbaruar së ndryshuari mundësitë,
  mund ta mbyllni dialogun duke klikuar te butoni <b>Mbyll</b>. Kini parasysh
  që nuk ka <b>Anulo</b>; nëse ndërroni mendje rreth një rregullimi
  ju duhet ta ktheni mbrapsht dorazi.</p>

  <p>Ju lutemi shihni <a href="index">doracakët</a> për përbërës të ndryshëm Xfce 4
  për të mësuar rreth mundësive të tyre për formësim.</p>


  <h2><a name="manager-backend"
  id="manager-backend"></a><em>Backend</em> Përgjegjësi Rregullimesh</h2>

  <p>Zbatimi <b><tt>xfce-mcs-manager</tt></b>
  do të duhej të nisej përpara përbërësve të tjerë Xfce 4.
  Në fakt, paneli dhe përgjegjësi i dritareve së bashku do të përpiqen të xhirojën
  përgjegjësin nëse nuk është duke xhiruar tashmë.</p>

  <p>Programthi <b><tt>startxfce4</tt></b> i furnizuar me
  Xfce 4 (pjesë e paketës <em>xfce-utils</em>) kujdeset për xhirimin e tij
  në fillim të një sesioni X. Nëse nuk e përdorni atë
  shtojeni te kartela juaj <tt>~/.xinitrc</tt>. Përgjegjësi 
  do të xhirojë në prapaskenë pasi të gatitet, ndaj nuk ka nevojë
  të shtoni një '&amp;' pas urdhrit.</p>

  <p>Pas instalimit të një paketë të re që ofron dialog
  rregullimesh, mund ta bëni përgjegjësin të rilexojë formësimin e tij duke dërguar një
  sinjal SIGUSR1:</p>
  <pre>
 $ pkill -USR1 xfce-mcs-manager
</pre>



  <h2><a name="manager-copyright"
  id="manager-copyright"></a>Rreth Përgjegjësit të Rregullimeve Xfce 4</h2>

  <p>Kjo paketë u shkruajt nga Olivier Fourdan (<tt>&lt;<a href=
  "mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>), Jasper
  Huijsmans (<tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>) dhe
  Benedikt Meurer (<tt>&lt;<a href=
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

  <p>Ky program shpërndahet sipas kushteve të Licensës më të Ngushtë Publike të Përgjithshme GNU
  ashtu su botohet nga Free Software Foundation; ose versioni 2 i Licensës, ose (në dëshirën tuaj)
  cilido version i mëvonshëm.</p>

  <p>Duhej të kishit marrë një kopje të Licensës më të Ngushtë Publike të Përgjithshme GNU
  bashkë me këtë; nëse jo, shkruajini Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>

