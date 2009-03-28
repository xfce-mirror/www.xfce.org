
  <h1><a name="xfprint"></a>Administrim Shtypjesh në Xfce 4</h1>

  <p>
  <strong>Jean-Fran&ccedil;ois Wauthy</strong> &lt;pollux@xfce.org&gt;<br />
  <strong>Jasper Huijsmans</strong> &lt;jasperx@xfce.org&gt;
  </p>

  <h3>Ky doracak përshkruan versionin 4.2.0 për xfprint-in</h3>

  <p>Të drejta kopjimi &copy; 2004 Jean-Fran&ccedil;ois Wauthy</p>
  <hr />

  <p><b>Tabela e Përmbajtjes</b></p>

  <dl>
    <dt><a href="#xfprint-intro">Hyrje</a></dt>

    <dt><a href="#xfprint-select">Përzgjedhje shtypësi</a></dt>

    <dt><a href="#xfprint-use">Si të përdoret
    <b><tt>xfprint4</tt></b></a></dt>

    <dt><a href="#xfprintmanager-use">Si të përdoret
    <b><tt>xfprint-manager</tt></b></a></dt>

    <dt><a href="#xfprint-copyright">Rreth
    <b><tt>xfprint</tt></b></a></dt>
  </dl>

  

  <h2><a name=
  "xfprint-intro"></a>Hyrje</h2>

  <p>Administrimi i Shtypjeve në Xfce 4 është pjesë e <a href=
  "http://www.xfce.org">Mjedisit Xfce për Desktop</a>.
  Përbëhet nga dy zbatime : <b><tt>xfprint4</tt></b> dhe
  <b><tt>xfprint-manager</tt></b>. <b><tt>xfprint4</tt></b>
  furnizon një paraqitje grafike për shtypjen kurse <b><tt>xfprint-manager</tt></b> ofron administrim shtypësi dhe administrim të radhës së akteve për shtypje (nëse kjo mbulohet nga mekanizmi real i sistemit të shtypjes).</p>

  <p>Ju lutem kini parasysh që <em>formësimi i shtypësit</em> nuk është pjesë e <b><tt>xfprint</tt></b>. Ky mund të përdorë vetëm shtypësa që janë formësuar si duhet tashmë.</p>

  

  <h2><a name="xfprint-select"></a>Përzgjedhje shtypësi</h2>Përpara se të bëni çfarëdo gjëje me <b><tt>xfprint</tt></b> lypset të përzgjidhni mekanizmin e sistemit të shtypjeve. <a name=
  "mcs-plugin"></a>

  <p><b>Figurë 1. <tt>xfprint</tt> përzgjedhje sistemi shtypjesh</b></p><img src="/images/documentation/4.2/xfprint_mcs_plugin.png" alt=
  "përzgjedhja e sistemit stë shtypjeve me xfprint" />

  <p>Në kohën që u shkruajt ky doracak kish të passhëm tre mekanizma sistemi shtypjesh:</p>

  <dl>
    <dt>CUPS</dt>

    <dd>
      <p>Sistemi CUPS i shtypjeve është hëpërhë mekanizmi më i pasur në karakteristika për shtypje. Mbulon plotësisht radhë aktesh shtypjeje dhe zbulim të shtypësave të passhëm.</p>
    </dd>

    <dt>BSD-LPR</dt>

    <dd>
      <p>BSD-LPR është sistemi tradicional UNIX i shtypjeve në shumicën e sistemeve. Ky mekanizëm furnizon asistencë për radhë shtypjesh,
      por me diçka më pak të dhëna se sa mekanizmi CUPS.</p>
    </dd>

    <dt>File</dt>

    <dd>
      <p>Ky mekanizëm thjesht krijon një kartelë postscript e cila mund të dërgohet më tej në cilindo shtypës të aftë të shtypë postscript ose të shihet duke përdorur një parës postscript.</p>
    </dd>
  </dl>

  

  <h2><a name="xfprint-use"></a>Si të përdoret
  <b><tt>xfprint4</tt></b></h2>Zbatimi <b><tt>xfprint4</tt></b>
  i lejon përdoruesit të shtypë kartela llojesh të ndryshëm dhe të rregullojë mundësitë e shtypjes. Për ta bërë këtë përdor zbatimin <b><tt>a2ps</tt></b>. Dialogu përmban disa skeda me një shumicë mundësish secila. Shumica prej tyre ka mundësitë të mos kenë nevojë për tu ndryshuar. Figurat vijuese tregojnë tërë skedat e dialogut. Për një shpjegim të mundësive iu referohemi dokumentimit të <b><tt>a2ps</tt></b>.

  <dl>
    <dt>Fletët</dt>

    <dd>
      <a name="xfprint-sheets-fig"></a>

      <p><b>Figurë 2. <tt>xfprint4</tt> dialog |
      Fletët</b></p><img src="/images/documentation/4.2/xfprint_sheets.png" alt=
      "xfprint4 dialog | Fletët ">

      
    </dd>

    <dt>Faqe virtuale</dt>

    <dd>
      <a name="xfprint-virtualpages-fig"></a>

      <p><b>Figurë 3. <tt>xfprint4</tt> dialog | Faqe virtuale</b></p><img src="/images/documentation/4.2/xfprint_virtualpages.png" alt=
      "xfprint4 dialog | Sistemi i faqeve virtuale ">

      
    </dd>

    <dt>Shtypje e hijshme</dt>

    <dd>
      <a name="xfprint-prettyprinting-fig"></a>

      <p><b>Figurë 4. <tt>xfprint4</tt> dialog |
      Shtypje e hijshme</b></p><img src=
      "/images/documentation/4.2/xfprint_prettyprinting.png" alt=
      "xfprint4 dialog | Shtypje e hijshme ">

      
    </dd>

    <dt>Futje</dt>

    <dd>
      <a name="xfprint-input-fig"></a>

      <p><b>Figurë 5. <tt>xfprint4</tt> dialog |
      Futje</b></p><img src="/images/documentation/4.2/xfprint_input.png" alt=
      "xfprint4 dialog | Futje ">

      
    </dd>

    <dt>Kryefaqe</dt>

    <dd>
      <a name="xfprint-headings-fig"></a>

      <p><b>Figurë 6. <tt>xfprint4</tt> dialog |
      Kryefaqe</b></p><img src="/images/documentation/4.2/xfprint_headings.png" alt=
      "xfprint4 dialog | Kryefaqe ">

      
    </dd>
  </dl>

  

  <h2><a name="xfprintmanager-use"></a>Si të përdoret
  <b><tt>xfprint-manager</tt></b></h2>Zbatimi
  <b><tt>xfprint-manager</tt></b> furnizon kontrollimin e radhës së shtypjeve dhe vetë procesin e shtypjes për sisteme shtypjesh të mbuluar prej tij. Ju lejon të caktoni shtypësin që doni të përdoret dhe të caktoni atë që do të duhej të ishte parazgjedhje. <a name="xfprint-manager-fig"></a>

  <p><b>Figurë 7. <tt>xfprint-manager</tt> dialogu kryesor</b></p><img src="/images/documentation/4.2/xfprint-manager.png" alt=
  "xfprint-manager main dialog" /><a name=
  "xfprint-manager-queue-fig"></a>

  <p><b>Figurë 8. <tt>xfprint-manager</tt> administrim radhe</b></p><img src="/images/documentation/4.2/xfprint-manager-queue.png"
  alt="xfprint-manager queue management screenshot" />

  

  <h2><a name="xfprint-copyright"></a>Rreth
  <b><tt>xfprint</tt></b></h2>

  <p><b><tt>xfprint</tt></b> u shkruajt nga Jean-Fran&ccedil;ois Wauthy
  (<tt>&lt;<a href=
  "mailto:pollux@xfce.org">pollux@xfce.org</a>&gt;</tt>). Për më tepër të dhëna, ju lutem vizitoni <a href="http://www.xfce.org"
 >Site-in web të Xfce-së</a>.</p>

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
  versioni 2 i Licensës, ose (në dëshirën tuaj) cilido version i 
  mëvonshëm.</p>

  <p>Duhej të kishit marrë një kopje të Licensës Publike të Përgjithshme GNU
  bashkë me këtë; nëse jo, shkruajini Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>
