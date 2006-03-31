
  <h1><a name="xfprint"></a>Xfce 4 Printing Management</h1>

  <h3>Jean-Fran�ois Wauthy</h3>

  <p><tt>&lt;<a href=
  "mailto:pollux@xfce.org">pollux@xfce.org</a>&gt;</tt></p>

  <h3>Jasper Huijsmans</h3>

  <p><tt>&lt;<a href=
  "mailto:jasperx@xfce.org">jasperx@xfce.org</a>&gt;</tt></p>

  <h3>Jasper Huijsmans</h3>

  <p><tt>&lt;<a href=
  "mailto:jasperx@xfce.org">jasperx@xfce.org</a>&gt;</tt></p><span xmlns="http://www.w3.org/TR/xhtml1/transitional">This
  manual describes <b><tt>xfprint</tt></b> version 4.2.0<br>
  <br></span>

  <p><span xmlns=
  "http://www.w3.org/TR/xhtml1/transitional">Copyright � 2004
  Jean-Fran�ois Wauthy</span></p>
  <hr>

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#xfprint-intro">Introduction</a></dt>

    <dt><a href="#xfprint-select">Printer selection</a></dt>

    <dt><a href="#xfprint-use">Using
    <b><tt>xfprint4</tt></b></a></dt>

    <dt><a href="#xfprintmanager-use">Using
    <b><tt>xfprint-manager</tt></b></a></dt>

    <dt><a href="#xfprint-copyright">About
    <b><tt>xfprint</tt></b></a></dt>
  </dl>

  <p>�</p>

  <h2><a name=
  "xfprint-intro"></a>Introduction</h2>

  <p>The Xfce 4 Printing Management is part of the <a href=
  "http://www.xfce.org" target="_top">Xfce Desktop Environment</a>.
  It's composed of two applications : <b><tt>xfprint4</tt></b> and
  <b><tt>xfprint-manager</tt></b>. <b><tt>xfprint4</tt></b>
  provides a graphical frontend for printing and
  <b><tt>xfprint-manager</tt></b> provides printer management and
  job queue management (if supported by the printing system
  backend).</p>

  <p>Please note that <em>printer configuration</em> is not part of
  <b><tt>xfprint</tt></b>. It can only use printing systems that
  have already been configured properly.</p>

  <p>�</p>

  <h2><a name="xfprint-select"></a>Printer
  selection</h2>Before doing anything with <b><tt>xfprint</tt></b>
  you need to select the printing system backend. <a name=
  "mcs-plugin"></a>

  <p><b>Figure�1.�<tt>xfprint</tt> printing system
  selection</b></p><img src="/images/manual/4.2/xfprint_mcs_plugin.png" alt=
  "xfprint printing system selection">

  <p>At the time of this writing three printing system backends are
  available:</p>

  <dl>
    <dt>CUPS</dt>

    <dd>
      <p>The CUPS printing system is currently the most
      full-featured printing backend. It supports full job queue
      support and detection of avaialbel printers.</p>
    </dd>

    <dt>BSD-LPR</dt>

    <dd>
      <p>BSD-LPR is the traditional UNIX printing system available
      on most systems. This backend provides job queuing support,
      but with slightly less information than the CUPS backend.</p>
    </dd>

    <dt>File</dt>

    <dd>
      <p>This backend simply creates a postscript file that can
      later be send to any postscript capable printer or printed by
      using a postscript viewer.</p>
    </dd>
  </dl>

  <p>�</p>

  <h2><a name="xfprint-use"></a>Using
  <b><tt>xfprint4</tt></b></h2>The <b><tt>xfprint4</tt></b>
  application allows the user to print files of many different
  types and to set the printing options. For this it makes use of
  the <b><tt>a2ps</tt></b> application. The dialog contains several
  tabs with a multitude of options. Most of them probably don't
  have to be changed. The following figures show all notebook tabs
  of the dialog. For an explanation of the options we refer to the
  documentation for <b><tt>a2ps</tt></b>.

  <dl>
    <dt>Sheets</dt>

    <dd>
      <a name="xfprint-sheets-fig"></a>

      <p><b>Figure�2.�<tt>xfprint4</tt> dialog |
      Sheets</b></p><img src="/images/manual/4.2/xfprint_sheets.png" alt=
      "xfprint4 dialog | Sheets ">

      <p>�</p>
    </dd>

    <dt>Virtual pages</dt>

    <dd>
      <a name="xfprint-virtualpages-fig"></a>

      <p><b>Figure�3.�<tt>xfprint4</tt> dialog | Virtual
      pages</b></p><img src="/images/manual/4.2/xfprint_virtualpages.png" alt=
      "xfprint4 dialog | Virtual pages system ">

      <p>�</p>
    </dd>

    <dt>Pretty-printing</dt>

    <dd>
      <a name="xfprint-prettyprinting-fig"></a>

      <p><b>Figure�4.�<tt>xfprint4</tt> dialog |
      Pretty-printing</b></p><img src=
      "/images/manual/4.2/xfprint_prettyprinting.png" alt=
      "xfprint4 dialog | Pretty-printing ">

      <p>�</p>
    </dd>

    <dt>Input</dt>

    <dd>
      <a name="xfprint-input-fig"></a>

      <p><b>Figure�5.�<tt>xfprint4</tt> dialog |
      Input</b></p><img src="/images/manual/4.2/xfprint_input.png" alt=
      "xfprint4 dialog | Input ">

      <p>�</p>
    </dd>

    <dt>Headings</dt>

    <dd>
      <a name="xfprint-headings-fig"></a>

      <p><b>Figure�6.�<tt>xfprint4</tt> dialog |
      Headings</b></p><img src="/images/manual/4.2/xfprint_headings.png" alt=
      "xfprint4 dialog | Headings ">

      <p>�</p>
    </dd>
  </dl>

  <p>�</p>

  <h2><a name="xfprintmanager-use"></a>Using
  <b><tt>xfprint-manager</tt></b></h2>The
  <b><tt>xfprint-manager</tt></b> application provides queue and
  job control for the printing systems that support it. It allows
  you to set the printer you want to use and set which one should
  be the default. <a name="xfprint-manager-fig"></a>

  <p><b>Figure�7.�<tt>xfprint-manager</tt> main
  dialog</b></p><img src="/images/manual/4.2/xfprint-manager.png" alt=
  "xfprint-manager main dialog"><a name=
  "xfprint-manager-queue-fig"></a>

  <p><b>Figure�8.�<tt>xfprint-manager</tt> queue
  management</b></p><img src="/images/manual/4.2/xfprint-manager-queue.png"
  alt="xfprint-manager queue management screenshot">

  <p>�</p>

  <h2><a name="xfprint-copyright"></a>About
  <b><tt>xfprint</tt></b></h2>

  <p><b><tt>xfprint</tt></b> was written by Jean-Fran�ois Wauthy
  (<tt>&lt;<a href=
  "mailto:pollux@xfce.org">pollux@xfce.org</a>&gt;</tt>). To find
  more information, please visit the <a href="http://www.xfce.org"
  target="_top">Xfce web site</a>.</p>

  <p>To report a bug or make a suggestion regarding this
  application or this manual, use the bug tracking system at
  <a href="http://bugzilla.xfce.org/" target=
  "_top">http://bugzilla.xfce.org/</a>.</p>

  <p>If you have questions about the use or installation of this
  package, please ask on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce" target=
  "_top">xfce</a> mailing list. Development discussion takes place
  on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev" target=
  "_top">xfce4-dev</a> mailing list.</p>

  <p>You should have received a copy of the GNU General Public
  License along with this program; if not, write to the Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>

