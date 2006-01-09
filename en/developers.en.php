<!-- <p>You will find complementary information about Xfce 4 development (release
notes, wish list, planned features...) on the Xfce 4 <a
href="http://www.symonds.net/~botsie/xfce/index.php/HomePage"> <b>Wiki
page</b></a>.</p> -->

<p>
  The Xfce API documentation for the Xfce 4.2 branch is available from
  <a href="http://www.xfce.org/documentation/api-4.2/">this page</a>.
</p>

<a name="bug"></a>

<h3>Report a bug :</h3>

<p>You can report a bug by posting a message to the devel mailing list : <a
href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>, or using the <a
href="http://bugs.xfce.org/">bug tracking system</a> provided by the Lunar
Linux team.</p>

<p>Maybe you will find some of us on IRC : #xfce on irc.freenode.net.</p>

<a name="contribute"></a>

<h3>Getting involved :</h3>

<p>If you are looking for a way to contribute to Xfce 4, here are some things
that need work :</p>

<ul class="submenu">

	<li><b>Development</b> - Feel free to join the new <a href="http://thunar.xfce.org/wiki/">Thunar Project</a>, aims at developing a new file manager for the next major branch of Xfce (the 4.4 branch), and the new <a href="http://foo-projects.org/mailman/listinfo/xfc-dev">Xfc C++ foundry for Xfce development</a>.
	</li>

	<li><b>Translations</b> - Several modules are still missing translations. If you want to contribute, please note that <a href="http://xfce.org/~kelnos/xfce4/i18n/">Xfce translations statistics</a> are available, and consider subscribing to the <a href="http://lunar-linux.org/mailman/listinfo/xfce-i18n">xfce-i18n</a> mailing list.
	
We have a virtual module that will check out the po/	directories for all modules. Depending on the tree you want to translate, the command to use is:<br>

<table width="100%">
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/trunk-po</tt></td></tr>
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/4.2-po</tt></td></tr>
</table>

</li>

	<!-- 
	<p>This will create a subdirectory translations. If you want to checkout files
	specifically for the 4.2 branch use 'co -r xfce_4_2 translations'
	instead.</p>
	
 -->
 
	<li><b>Documentation</b> - All contributions and comments about available Xfce
	4 <a href="http://members.home.nl/xfce4/documentation/">documentation</a> are
	welcome.
	
	<!-- A "docs" module is available, that will checkout all doc/ directories
	from CVS using the following command :<br>
  
<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co docs</tt></td></tr></table>
 -->
	</li>

	 <li><b>Panel plugins</b> - It has become quite popular during the Xfce
   4.0 days to enhance the functionality of the Xfce panel by writing new
   plugins. The <a href="http://xfce-goodies.berlios.de/">Xfce Goodies</a>
   project provides several additional plugins already, thanks to the
   work of our contributors.<br>If you plan to write your plugin for the Xfce, there are a few
   things to take care of when you start. At best, you should have a
   look at the <tt>xfce4-panel</tt> source, it contains a sample
   plugin that demonstrates the basics of panel plugin writing.
   Furthermore, you should have a look at the source code of the
   existing panel plugins, to see some real-life examples of
   panel plugins. When you are done with learning, you should grab the
   versions of the GNU autotools available <a
   href="http://xfce.org/archive/tools/">here</a>, as those are
   the official ones used by the Xfce developers, and have
   proven to work fine. If you have questions about the panel plugin development
   or if you experience problems, please ask on the Xfce Goodies
   Development mailinglist.
   
	</li>
	
	<li><b>Artwork</b> - The <a href="http://xfce.org/various/xfce_images.tar.gz">following tarball</a> contains some images which you can use in order to create Xfce-related artwork or link Xfce from your website. A <a href="http://www.xfce.org/xfwm4-theme-howto/">Xfwm4 theme how-to</a> and an <a href="http://www.xfce.org/~jasper/ICONTHEMES">icon theme how-to</a> are available too.</li>

	</li>
</ul>

<p>If you have any questions, send mail to <a
href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>.</p><br>


