<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>Xfce 4 Printing Management</title><link rel="stylesheet" href="../xfce.css" type="text/css"><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="#xfprint" title="Xfce 4 Printing Management"><link rel="next" href="#xfprint-intro" title="Introduction"></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="article" lang="en"><div class="titlepage"><div><div><h1 class="title"><a name="xfprint"></a>Xfce 4 Printing Management</h1></div><div><div class="authorgroup"><div class="author"><h3 class="author"><span class="firstname">Jean-François</span> <span class="surname">Wauthy</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:pollux@xfce.org">pollux@xfce.org</a>&gt;</tt></p></div></div></div><div class="author"><h3 class="author"><span class="firstname">Jasper</span> <span class="surname">Huijsmans</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:jasperx@xfce.org">jasperx@xfce.org</a>&gt;</tt></p></div></div></div><div class="author"><h3 class="author"><span class="firstname">Jasper</span> <span class="surname">Huijsmans</span></h3><div class="affiliation"><div class="address"><p><tt class="email">&lt;<a href="mailto:jasperx@xfce.org">jasperx@xfce.org</a>&gt;</tt></p></div></div></div></div></div><div><span xmlns="http://www.w3.org/TR/xhtml1/transitional" class="releaseinfo">This manual describes <b xmlns="" class="application"><tt>xfprint</tt></b> version 4.2.0
  <br></br></span></div><div><p class="copyright">Copyright © 2004 Jean-François Wauthy</p></div></div><hr></div><div class="toc"><p><b>Table of Contents</b></p><dl><dt><span class="sect1"><a href="#xfprint-intro">Introduction</a></span></dt><dt><span class="sect1"><a href="#xfprint-select">Printer selection</a></span></dt><dt><span class="sect1"><a href="#xfprint-use">Using <b class="application"><tt>xfprint4</tt></b></a></span></dt><dt><span class="sect1"><a href="#xfprintmanager-use">Using <b class="application"><tt>xfprint-manager</tt></b></a></span></dt><dt><span class="sect1"><a href="#xfprint-copyright">About <b class="application"><tt>xfprint</tt></b></a></span></dt></dl></div><p> </p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfprint-intro"></a>Introduction</h2></div></div></div><p>The Xfce 4 Printing Management is part of the <a href="http://www.xfce.org" target="_top">Xfce Desktop Environment</a>.
  It's composed of two applications : <b class="application"><tt>xfprint4</tt></b> and <b class="application"><tt>xfprint-manager</tt></b>.    
  <b class="application"><tt>xfprint4</tt></b> provides a graphical frontend for printing and
  <b class="application"><tt>xfprint-manager</tt></b> provides printer management and job queue
  management (if supported by the printing system backend).
  </p><p>Please note that <span class="emphasis"><em>printer configuration</em></span> is not
    part of <b class="application"><tt>xfprint</tt></b>. It can only use printing systems that have already been
    configured properly.
  </p></div><p> </p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfprint-select"></a>Printer selection</h2></div></div></div>

  Before doing anything with <b class="application"><tt>xfprint</tt></b> you need to select the printing system
  backend.
  
  <div class="figure"><a name="mcs-plugin"></a><p class="title"><b>Figure 1. <tt class="application">xfprint</tt> printing system selection</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint_mcs_plugin.png" alt="xfprint printing system selection"></div></div></div><p>At the time of this writing three printing system backends are 
    available:
  </p><div class="variablelist"><dl><dt><span class="term">CUPS</span></dt><dd><p>The CUPS printing system is currently the most full-featured
	  printing backend. It supports full job queue support and detection of
	  avaialbel printers.
	</p></dd><dt><span class="term">BSD-LPR</span></dt><dd><p>BSD-LPR is the traditional UNIX printing system available on
	  most systems. This backend provides job queuing support, but with
	  slightly less information than the CUPS backend.
	</p></dd><dt><span class="term">File</span></dt><dd><p>This backend simply creates a postscript file that can later be
	  send to any postscript capable printer or printed by using a
	  postscript viewer.
	</p></dd></dl></div></div><p> </p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfprint-use"></a>Using <b class="application"><tt>xfprint4</tt></b></h2></div></div></div>

  The <b class="application"><tt>xfprint4</tt></b> application allows the user to print files of many
  different types and to set the printing options. For this it makes use of
  the <b class="application"><tt>a2ps</tt></b> application.

  The dialog contains several tabs with a multitude of options. Most of them
  probably don't have to be changed. The following figures show all notebook
  tabs of the dialog. For an explanation of the options we refer to the
  documentation for <b class="application"><tt>a2ps</tt></b>.

  <div class="variablelist"><dl><dt><span class="term">Sheets</span></dt><dd><div class="figure"><a name="xfprint-sheets-fig"></a><p class="title"><b>Figure 2. <tt class="application">xfprint4</tt> dialog | Sheets</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint_sheets.png" alt="xfprint4 dialog | Sheets
		"></div></div></div><p> </p></dd><dt><span class="term">Virtual pages</span></dt><dd><div class="figure"><a name="xfprint-virtualpages-fig"></a><p class="title"><b>Figure 3. <tt class="application">xfprint4</tt> dialog | Virtual pages</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint_virtualpages.png" alt="xfprint4 dialog | Virtual pages
		  system
		"></div></div></div><p> </p></dd><dt><span class="term">Pretty-printing</span></dt><dd><div class="figure"><a name="xfprint-prettyprinting-fig"></a><p class="title"><b>Figure 4. <tt class="application">xfprint4</tt> dialog | Pretty-printing</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint_prettyprinting.png" alt="xfprint4 dialog | Pretty-printing
		"></div></div></div><p> </p></dd><dt><span class="term">Input</span></dt><dd><div class="figure"><a name="xfprint-input-fig"></a><p class="title"><b>Figure 5. <tt class="application">xfprint4</tt> dialog | Input</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint_input.png" alt="xfprint4 dialog | Input
		"></div></div></div><p> </p></dd><dt><span class="term">Headings</span></dt><dd><div class="figure"><a name="xfprint-headings-fig"></a><p class="title"><b>Figure 6. <tt class="application">xfprint4</tt> dialog | Headings</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint_headings.png" alt="xfprint4 dialog | Headings
		"></div></div></div><p> </p></dd></dl></div></div><p> </p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfprintmanager-use"></a>Using <b class="application"><tt>xfprint-manager</tt></b></h2></div></div></div>

  The <b class="application"><tt>xfprint-manager</tt></b> application provides queue and job control for
  the printing systems that support it. It allows you to set the printer you
  want to use and set which one should be the default.

  <div class="figure"><a name="xfprint-manager-fig"></a><p class="title"><b>Figure 7. <tt class="application">xfprint-manager</tt> main dialog</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint-manager.png" alt="xfprint-manager main dialog"></div></div></div><div class="figure"><a name="xfprint-manager-queue-fig"></a><p class="title"><b>Figure 8. <tt class="application">xfprint-manager</tt> queue management</b></p><div class="screenshot"><div class="mediaobject"><img src="images/xfprint-manager-queue.png" alt="xfprint-manager queue management screenshot"></div></div></div></div><p> </p><div class="sect1" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="xfprint-copyright"></a>About <b class="application"><tt>xfprint</tt></b></h2></div></div></div><p><b class="application"><tt>xfprint</tt></b> was written by Jean-François Wauthy  
    (<tt class="email">&lt;<a href="mailto:pollux@xfce.org">pollux@xfce.org</a>&gt;</tt>). To find more information, please visit 
    the <a href="http://www.xfce.org" target="_top">Xfce web site</a>. 
  </p><p>To report a bug or make a suggestion regarding this application or
    this manual, use the bug tracking system at <a href="http://bugzilla.xfce.org/" target="_top">http://bugzilla.xfce.org/</a>. 
  </p><p>If you have questions about the use or installation of this package,
    please ask on the <a href="http://lunar-linux.org/mailman/listinfo/xfce" target="_top">xfce</a> mailing list. Development discussion takes
    place on the <a href="http://lunar-linux.org/mailman/listinfo/xfce4-dev" target="_top">xfce4-dev</a> mailing list.
  </p><p>You should have received a copy of the GNU General Public License 
    along with this program; if not, write to the Free Software 
    Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, 
    USA.
  </p></div></div></body></html>
