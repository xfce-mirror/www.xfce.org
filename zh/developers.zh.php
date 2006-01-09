<!-- <p>在&nbsp;<a href="http://www.symonds.net/~botsie/xfce/index.php/HomePage"><b>&nbsp;Wiki</b></a>&nbsp;的Xfce 4页面上有所有关于Xfce 4开发的信息(发布信息、期望列表以及计划中的新功能……)。</p> -->

<p>
  The Xfce API documentation for the Xfce 4.2 branch is available from
  <a href="http://www.xfce.org/documentation/api-4.2/">this page</a>.
</p>

<a name="bug"></a>

<h3>报告臭虫：</h3>

<p>可以通过邮件列表 : <a href="mailto:xfce4-dev@xfce.org">xfce4-dev at xfce dot org</a>报告臭虫, 或者使用由Lunar Linux团队提供的<a href="http://bugs.xfce.org/">臭虫跟踪系统</a>提交错误报告。</p>

<p>我们中的一些人还会出现IRC的这个频道里：#xfce on irc.freenode.net.</p>

<a name="contribute"></a>

<h3>加入Xfce开发：</h3>

<p>如果你正想法为Xfce 4做些贡献的话，那么这儿正有些工作需要帮助：</p>

<ul class="submenu">

	<li><b>Development</b> - Feel free to join the new <a href="http://thunar.xfce.org/wiki/">Thunar Project</a>, aims at developing a new file manager for the next major branch of Xfce (the 4.4 branch), and the new <a href="http://foo-projects.org/mailman/listinfo/xfc-dev">Xfc C++ foundry for Xfce development</a>.
	</li>

<li><b>翻译：</b> - 一些模块的翻译工作还没完成(如xfce4的关于对话框到目前为止只提供英语和德语的信息)。

<!--  我们实现了一个虚拟模块，用来检出所有模块的"翻译"目录/po:
directories for all modules. The command to use is :<br>
<table width="100%"><tr bgcolor="E0E0E0"><td><tt>cvs -d:pserver:anoncvs@cvs.xfce.org:/cvsroot/xfce -z3 co translations</tt></td></tr></table>

<p>该命令将创建名为translations的目录，如果要检出4.2分支上的特定版本，可以使用命令 'co -r xfce_4_2 translations'。</p> -->
	
	如果你想提交翻译，请及时留意 <a href="http://xfce.org/~kelnos/xfce4/i18n/">Xfce翻译统计数字</a>，并且最好订阅<a href="http://lunar-linux.org/mailman/listinfo/xfce-i18n">xfce-i18n</a>的邮件列表。
		
		We have a virtual 'translations' module that will check out the po/	directories for all modules. Depending on the tree you want to translate, the command to use is:<br>

<table width="100%">
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/trunk-po</tt></td></tr>
<tr bgcolor="E0E0E0"><td><tt>svn checkout http://svn.xfce.org/svn/xfce/modules/4.2-po</tt></td></tr>
</table>
		
</li>

<li><b>文档：</b> - 欢迎提供现有<a href="http://members.home.nl/xfce4/documentation/">Xfce 4文档</a>的评论或其他相关内容(翻译等)。

<!-- "docs"模块可以检出所有的doc/目录，使用以下命令:<br>
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

<p>如果有任何问题，请发邮件到邮件列表<a href="mailto:xfce4-dev@xfce.org">xfce4-dev</a>。</p><br>


