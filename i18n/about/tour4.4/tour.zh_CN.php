<h1>漫游 Xfce 4.4.0</h1>
<p align="justify">
经过许多天的等待，Xfce4.4.0 版本终于在万众瞩目中发布了。我会高亮标出最新稳定版中刚加入的一些特性。
</p>


<h2>桌面图标<a name="desktop-icons"></a></h2>

<p align="justify">
在 4.0 及 4.2 版本中被要求的最多的特性是提供在桌面上放置图标的支持。现在，在 Xfce 4.4.0 中，该特性终于被加入到桌面管理器 <b>Xfdesktop</b> 中。
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="Desktop Icons" /></p>

<p align="justify">
桌面管理器利用 <b>Thunar</b> 的库来处理桌面上的启动器以及文件/文件夹。
桌面管理器还拥有一个 CDE 中的流行特性，在桌面上显示最小化程序图标。
当然，如果您喜欢一个干净的桌面的话，您可以一次性禁用所有桌面图标。
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="Desktop Settings" /></p>

<p align="justify">
<b>Xfdesktop</b> 将像以往的版本一样，继续提供应用程序菜单的访问。
</p>


<h2>文件管理器<a name="file-manager"></a></h2>

<p align="justify">
和桌面图标的支持一起的，是我们新的文件管理器 <a href="http://thunar.xfce.org/">Thunar</a>，它代替了旧的文件管理器 <b>Xffm</b>。
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Thunar File Manager" /></p>

<p align="justify">

<b>Thunar</b> 是从零开写的，旨在为 Xfce 提供一个易用且相当小巧的文件管理器。它的用户界面被设计成与 GTK+ 2.4 中的文件选择器非常相似。其它文件管理器例如 <b>Nautilus</b> 和 <b>pcmanfm</b> 也采用了相似的设计。
</p>

<p align="justify">
<b>Thunar</b> 提供所有用户所希望的文件管理功能以及更多高级特性。例如，一个被称为 <i>Bulk Renamer</i> 的东西，允许用户按照规则一次性批量更改文件名。
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Thunar Bulk Rename" /></p>


<h2>卸载设备及媒体介质<a name="removable-drives-and-media"></a></h2>

<p align="justify">
Xfce 4.4.0 提供对于可移动设备及媒体的轻松访问。您只需将可移动介质插入驱动器，桌面以及 <b>Thunar</b> 的侧栏就会出现相应的图标。
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="Removable Volumes" /></p>

<p align="justify">
点击图标将自动挂载卷。右击图标卸载卷或弹出驱动器。注意，迄今，改特性需要 <a href="http://freedesktop.org/wiki/Software_2fhal">HAL</a> 的支持以及 2.6.x 以上版本的 Linux 或 6.x 以上版本的 FreeBSD (FreeBSD 4.x 和 5.x 无须 HAL，拥有有限的可移动媒体的支持).
</p>


<h2>文本编辑器<a name="text-editor"></a></h2>

<p align="justify">
新的文本编辑器 <b>MousePad</b> 包含于此发布版中。<b>MousePad</b> 提供基本的文本编辑功能，不多不少。
</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p align="justify">

您可以将 <b>MousePad</b> 看做和 Windows 上的 <b>NotePad</b> 一样的东西。它启动非常迅速，通常小于一秒，即便是在老机器上。
</p>


<h2>窗口管理器<a name="window-manager"></a></h2>

<p align="justify">

<b>Xfwm4</b> 继续作为默认的窗口管理器。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p align="justify">
这个版本拥有增强的混合管理的特性，支持 ARGB 窗口透明、窗口阴影以及边框透明等等。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Xfwm4 Switcher" /></p>

<p align="justify">
<b>Xfwm4</b> 同样包含一个崭新的程序切换器，如上图所示，它能够显示当前工作区中的所有窗口的图标和标题。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Xfwm4 Themes" /></p>

<p align="justify">
对窗口装饰主题所用图片格式提供了更广泛的支持，包括 <tt>PNG</tt>、<tt>GIF</tt>和<tt>SVG</tt> 图象。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Xfwm4 Tweaks" /></p>

<p align="justify">
对窗口管理器的高级控制同样被加入，允许对于窗口行为的完全控制。
</p>


<h2>面板<a name="panel"></a></h2>

<p align="justify">

Xfce 4.4 中的 <b>Xfce4-panel</b> 被彻底地重写，提供了<i>开箱即用</i>的多面板支持，可用下图所示的 <b>Panel Manager</b> 进行轻松配置。
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="Panel Manager" /></p>

<p align="justify">

在以往 Xfce 的版本中一个主要的问题是，所有的插件都需要与面板运行于相同的进程，一个插件的崩溃会引起整个面板的崩溃。如今，对于外部插件的支持已被加入到面板中。
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Panel Add Item Dialog" /></p>

<p align="justify">
开发者们如今可以决定插件以外部进程运行还是作为面板进程的一部分运行，这取决于插件的稳定性。
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Panel Icon Box Plugin" /></p>

<p align="justify">

既然现在已经支持多面板了，分离的 <b>Xftaskbar4</b> 和 <b>Xfce4-iconbox</b> 已不在需要。取而代之的是作为面板插件的 taskbar 和 iconbox。
</p>

<p align="justify">
<a href="http://goodies.xfce.org/">Xfce
Goodies Project</a> 上的很多额外的面板插件都已经随新面板更新了，同时加入了很多新的。例如，崭新的 <b>xfce4-xfapplet-plugin</b> 允许用户在 Xfce 面板上加载 GNOME 面板小程序。
</p>


<h2>时间管理<a name="time-management"></a></h2>

<p align="justify">
新的时间管理程序 <b>Orage</b> 取代了随 Xfce 4.2.0 一同引进的 <b>Xfcalendar</b>。<b>Orage</b> 提供了许多特性使您能够高效管理您的时间。
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p align="justify">
<b>Orage</b> 非常小巧易用，它提供了所有您能在 <b>Outlook</b> 或 <b>Evolution</b> 等大型日历程序中找到的重要功能。过去 <b>Xfcalendar</b> 使用传统的 <tt>dbh</tt> 格式存储设置，而 <b>Orage</b> 基于 <tt>ical</tt>，所以更兼容其他日历程序。
</p>


<h2>终端模拟器<a name="terminal-emulator"></a></h2>

<p align="justify">
虽然 <b>Terminal</b> 在 4.2 时期就可用了，但作为核心组件还不够成熟。这一版本中，它被正式加入核心组件。
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p align="justify">
除了您所期望的作为一个终端模拟器的基本特性以外，它还包括许多好的附加特性，比如多标签、可定制工具栏，以及通过<i>隐藏选项</i>进行全方位的配置。通过上图可以看到，这个版本通过 <b>Xfwm4</b> 的混合管理提供了真透明的支持。
</p>


<h2>打印<a name="printing"></a></h2>

<p align="justify">
<b>Xfprint</b>，Xfce 的打印管理程序，在此版本中有许多微小的改进。首先，<tt>a2ps</tt> 转换器不再被强制，但仍被推荐。加入对 <tt>CUPS</tt> 1.2 的支持，<b>Xfprint</b> 现已能通过 <tt>CUPS</tt>-后端显示打印状态。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Xfce Printing" /></p>

<p align="justify">
<b>Xfprint</b> 同样与 <b>MousePad</b> 集成，使用 <tt>a2ps</tt> 转换器提供对不同文档的打印支持。
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Xfce Print Dialog" /></p>

<p align="justify">
您可以看到虽然打印对话框仍与 Xfce 4.2 时有几分相似，但是内部工作机制改善了，尤其是对 <tt>CUPS</tt> 的支持。除了这些，打印管理的函数被移到了一个库中，所以应用程序可以使用这个 API 来访问打印配置。
</p>


<h2>自启动<a name="autostart"></a></h2>

<p align="justify">
Xfce 4.4.0 实行新的<a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">自启动规范</a> - 事实上，Xfce 是第一个实行这个规范的桌面，只不过其它的比 Xfce 发布得早罢了。;-)
</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Xfce Autostart Editor" /></p>

<p align="justify">
该规范由两部分组成，在 <b>xfce4-session</b> 中执行的<i>启动时自启动 (Autostart of Applications During Startup)</i>，和在 <a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a> 中执行的<i>挂载后自启动 (Autostart Of Applications After Mount)</i>。这个版本同样包含上图所示的 <b>xfce4-autostart-editor</b>，它允许用户轻松添加、移除或禁用自启动程序。
</p>


<h2>设置<a name="settings"></a></h2>

<p align="justify">
该版本引入新选项来定制您的桌面。一些新设置对话框已经在上面的图片中出现过了。
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Preferred Applications" /></p>

<p align="justify">

当初只在 <b>Terminal</b> 可用的首选应用程序框架，已被引入 Xfce，所以用户无须再编辑 shell profiles 以决定要用那个浏览器和那个终端模拟器。目的是为了使改变应用程序类别的操作尽量简单 (GNOME 用户可能已经注意到 GNOME 采用了这个方法，因为这太简单了)。
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="Keyboard Shortcuts" /></p>

<p align="justify">
在 Xfce 4.2 中存在着键盘快捷键的问题... Xfce 4.2 限制了快捷键数量。在 Xfce 4.4 中，这种限制已经成为了历史，应用程序快捷键已从窗口管理器快捷键中分离出来了。
</p>


<h2>反馈<a name="feedback"></a></h2>

<p align="justify">
请将对此文章的评论发到我的<a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">博客</a>上，如果您有关于 Xfce 4.4.0 的问题或在安装时遇到了麻烦，请使用 <a href="/community/lists">xfce</a> 的邮件列表。
</p>


<h2>Links<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Xfce 网站</a></li>
<li><a href="http://thunar.xfce.org/">Thunar 网站</a></li>
</ul>

<h2>Credits<a name="credits"></a></h2>
<p align="justify">Written by Benedikt Meurer, 21 Jan 2007</p>
