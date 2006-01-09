<!-- <p>Encontrará información complementaria sobre el desarrollo del Xfce 4 (notas de lanzamiento características deseadas, lista de las características planeadas) en el <a href="http://www.symonds.net/~botsie/xfce/index.php/HomePage"><b>Wiki</b></a> de Xfce 4.</p> -->

<p>
  The Xfce API documentation for the Xfce 4.2 branch is available from
  <a href="http://www.xfce.org/documentation/api-4.2/">this page</a>.
</p>

<a name="bug"></a>

<h3>Enviar un aviso de error :</h3>

<p>Puede dar aviso de un error enviando un mensaje a la lista de correo de desarrollo : <a href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>, o usando el <a href="http://bugs.xfce.org/">sistema de seguimiento de errores</a> proporcionado por el equipo de Lunar Linux.</p>

<p>A lo mejor encuentra a algunos de nosotros en el IRC : #xfce en irc.freenode.net.</p><br>

</a><a name="contribute"></a>

<h3>Uniéndose a nosotros :</h3>

<p>Si está buscando una manera de contribuir a Xfce 4, aquí tiene algunas cosas que necesitan hacerse :</p>

<ul class="submenu">

	<li><b>Development</b> - Feel free to join the new <a href="http://thunar.xfce.org/wiki/">Thunar Project</a>, aims at developing a new file manager for the next major branch of Xfce (the 4.4 branch), and the new <a href="http://foo-projects.org/mailman/listinfo/xfc-dev">Xfc C++ foundry for Xfce development</a>.
	</li>

<li><b>Traducciones</b> - Muchos módulos aún carecen de traducciones. 

<!-- Ahora ya disponemos de un módulo virtual de 'traducciones'
que obtendrá los subdirectorios po/ de todos los módulos. El comando para hacerlo es :<br>
<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co translations</tt></td></tr></table> -->

<!-- <p>Esto creará un sudirectorio de traducciones. Si lo que desea es obtener los archivos específicos de la rama 4.2 use 'co -r xfce_4_2 translations'.</p> -->

	
	If you want to contribute, please note that <a href="http://xfce.org/~kelnos/xfce4/i18n/">Xfce translations statistics</a> are available, and consider subscribing to the <a href="http://lunar-linux.org/mailman/listinfo/xfce-i18n">xfce-i18n</a> mailing list.

We have a virtual 'translations' module that will check out the po/	directories for all modules. Depending on the tree you want to translate, the command to use is:<br>

<table width="100%">
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/trunk-po</tt></td></tr>
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/4.2-po</tt></td></tr>
</table>

</li>

<li><b>Documentación</b> - Todas las contribuciones y comentarios sobre la <a href="http://members.home.nl/xfce4/documentation/">documentation</a> de Xfce 4 serán bienvenidas. 


<!-- Está disponible un módulo "docs" de documentación, que
obtendrá todos los directorios doc/ del CVS, y que se puede conseguir usando el siguiente comando :<br>
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
   proven to work fine.

   If you have questions about the panel plugin development
   or if you experience problems, please ask on the Xfce Goodies
   Development mailinglist.
   
	</li>

	
	<li><b>Artwork</b> - The <a href="http://xfce.org/various/xfce_images.tar.gz">following tarball</a> contains some images which you can use in order to create Xfce-related artwork or link Xfce from your website. A <a href="http://www.xfce.org/xfwm4-theme-howto/">Xfwm4 theme how-to</a> and an <a href="http://www.xfce.org/~jasper/ICONTHEMES">icon theme how-to</a> are available too.</li>

</li>
</ul>

<p>Si tiene alguna pregunta, envíe un correo a <a href="mailto:xfce4-dev@xfce.org">xfce4-dev en xfce.org</a>.</p><br>



