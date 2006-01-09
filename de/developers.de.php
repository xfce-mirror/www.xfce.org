<!-- <p>Weiterf&uuml;hrende Informationen zur Xfce 4 Entwicklung (Release Notes, W&uuml;nsche, geplante Features, ...) k&ouml;nnen Sie in unserem Xfce 4 <a href="http://www.symonds.net/~botsie/xfce/index.php/HomePage"><b>Wiki</b></a> nachlesen.</p> -->

<p>Die Xfce API-Dokumentation f&uuml;r die Version 4.2 ist auf <a href="http://www.xfce.org/documentation/api-4.2/">dieser Seite</a>verfu&uml;gbar.</p>

<a name="bug"></a>

<h3>Fehler melden:</h3>

<p>Wenn Sie einen Fehler melden m&ouml;chten, schreiben Sie eine Email an die Entwickler Mailingliste: <a href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>, oder benutzen Sie das <a href="http://bugs.xfce.org/">Bugtracking System</a> bereitgestellt vom Lunar Linux Team.</p>

<p>Manchmal treffen Sie auch einige von uns im IRC: #xfce auf irc.freenode.net.</p>

<a name="contribute"></a>

<h3>Beim Projekt mitmachen:</h3>

<p>Wenn Sie Ihren Beitrag zu Xfce 4 leisten m&ouml;chten, hier sind einige Dinge die noch Arbeit ben&ouml;tigen:</p>

<ul class="submenu">

	<li><b>Development</b> - Feel free to join the new <a href="http://thunar.xfce.org/wiki/">Thunar Project</a>, aims at developing a new file manager for the next major branch of Xfce (the 4.4 branch), and the new <a href="http://foo-projects.org/mailman/listinfo/xfc-dev">Xfc C++ foundry for Xfce development</a>.
	</li>

<li><b>&Uuml;bersetzungen</b> - Zu verschiedenen Modulen existieren noch keine &Uuml;bersetzungen.

<!-- Es gibt jetzt ein virtuelles "&Uuml;bersetzungen"-Modul mit dem die po/-Verzeichnisse aller Module ausgecheckt werden k&ouml;nnen. Der Befehl dazu lautet:<br>

<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co translations</tt></td></tr></table>

<p>Dadurch wird ein Unterverzeichnis "translations" erstellt. Wenn Sie Dateien speziell aus dem 4.2 Branch auschecken m&ouml;chten, schreiben Sie stattdessen 'co -r xfce_4_2 translations'.</p> -->
	
	Wenn Sie einen Beitrag dazu leisten m&ouml;chten, beachten Sie bitte die <a href="http://xfce.org/~kelnos/xfce4/i18n/">&Uuml;bersetzungs-Statistiken von Xfce</a>, und treten Sie wenn m&ouml;glich der <a href="http://lunar-linux.org/mailman/listinfo/xfce-i18n">xfce-i18n</a> Mailingliste bei.

We have a virtual 'translations' module that will check out the po/	directories for all modules. Depending on the tree you want to translate, the command to use is:<br>

<table width="100%">
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/trunk-po</tt></td></tr>
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/4.2-po</tt></td></tr>
</table>
	
	</li>
	
<li><b>Dokumentationen</b> - Alle Beitr&auml;ge und Kommentare zur <a href="http://members.home.nl/xfce4/documentation/">Dokumentation</a> von Xfce 4 sind willkommen. <!-- Mithilfe des "docs" Moduls k&ouml;nnen mit dem folgenden Befehl alle doc/ Verzeichnisse aus dem CVS ausgecheckt werden:<br>
<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co docs</tt></td></tr></table> -->

</li>



<li><b>Panel plugins</b> - It has become quite popular during the Xfce
   4.0 days to enhance the functionality of the Xfce panel by writing new
   plugins. The <a href="http://xfce-goodies.berlios.de/">Xfce Goodies</a>
   project provides several additional plugins already, thanks to the
   work of our contributors.<br>

	If you plan to write your plugin for the Xfce, there are a few
   things to take care of when you start. At best, you should have a
   look at the <tt>xfce4-panel</tt> source, it contains a sample
   plugin that demonstrates the basics of panel plugin writing.
   Furthermore, you should have a look at the source code of the
   existing panel plugins, to see some real-life examples of
   panel plugins.

	When you are done with learning, you should grab the
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



<p>Wenn Sie Fragen dazu haben, senden Sie eine Email an <a href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>.</p><br>


