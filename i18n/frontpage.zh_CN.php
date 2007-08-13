<div id="front-intro">
	<div id="front-right">
		<div id="front-download">
			<div class="link">
				<h2><a href="/download/" title="下载Xfce 4.4.1">下载Xfce 4.4.1</a></h2>
			</div>
			<div class="notes">
				<p><a href="/documentation/changelogs/4.4.1" title="阅读更新日志">更新日志</a><span class="grey"> | </span><a href="/about/tour" title="Xfce 4.4中有何新东西">漫游</a></p>
			</div>
		</div>
	</div>
	<div id="front-intro-about">
		<h1>关于Xfce</h1>
		<p><em>Xfce是一款适用于多种 *NIX 系统的轻量级桌面环境。它被设计用来提高您的效率，在节省系统资源的同时，能够快速加载和执行应用程序。</em> - <strong>Olivier Fourdan, Xfce创始人</strong></p>
		<p>Xfce 4.4体现了传统UNIX哲学中的模块化和可复用性。它包含一系列的组件，这些组件一起提供了一个桌面环境的全部功能。所有组件都被独立打包，你可以自行选择安装各组件来构件一个属于你自己的最佳工作环境。</p>
		<p class="readmore"><a href="/about/" title="了解更多关于Xfce的信息...">了解更多</a></p>
	</div>
</div>
<div class="clearboth"></div>
<div id="front-container">
	<div id="front-news">
		<div id="front-news-content">
			<h2><a href="/?feed=rss2&amp;lang=<?php echo $lang ?>"><img src="/layout/images/feed.gif" alt="feed" title="订阅'Xfce新闻'..." width="12" height="12" border="0" align="right" /></a>最新信息</h2>
			<?php
				echo $frontpage["news"];
			?>
			<div class="readmore">
				<a href="/about/news" title="阅读所有新闻...">阅读更多</a>
			</div>
		</div>
	</div>
	<div id="front-projects">
		<div id="front-borders">
			<div id="front-projects-content">
				<h2>Xfce项目</h2>
				<ul>
					<li>
						<a href="/projects/thunar/">Thunar</a>
						<br />
						<span class="grey">Thunar是Xfce桌面环境的一个新的、现代的文件管理器。</span>
					</li>
					<li>
						<a href="/projects/mousepad/">Mousepad</a>
						<br />
						<span class="grey">Mousepad是Xfce桌面环境的一个简单、快速和易用的文本编辑器，基于文本编辑器Leafpad。</span>
					</li>
					<li>
						<a href="/projects/orage/">Orage</a>
						<br />
						<span class="grey">Xfce项目的日历程序。</span>
					</li>
					<li>
						<a href="/projects/xfburn/">Xfburn</a>
						<br />
						<span class="grey">CD和DVD烧录程序。</span>
					</li>
					<li>
						<a href="/projects/xfmedia">Xfmedia</a>
						<br />
						<span class="grey">Xfmedia是一个简单易用的媒体播放器，使用xine引擎。</span>
					</li>
				</ul>
				<div class="readmore">
					<a href="/projects/" title="查看所有Xfce项目...">更多项目</a>
				</div>
			</div>
		</div>
	</div>
	<div id="front-blog">
		<div id="front-blog-content">
			<h2><a href="http://blog.xfce.org/?feed=rss2"><img src="/layout/images/feed.gif" alt="feed" title="订阅'Xfce Blog'..." width="12" height="12" border="0" align="right" /></a>开发人员博客</h2>
			<?php
				echo $frontpage["blog"];
			?>
			<div class="readmore">
				<a href="http://blog.xfce.org/" title="查看完整Xfce blog...">访问blog</a>
			</div>
			<h2>快速链接</h2>
			<ul>
				<li><a href="/community/lists">邮件列表</a></li>
				<li><a href="/about/screenshots">屏幕截图</a></li>
				<li><a href="http://forum.xfce.org" target="_blank" title="Xfce论坛(新窗口)" class="external">Xfce论坛</a></li>
				<li><a href="http://bugzilla.xfce.org" title="报告bug(新窗口)" target="_blank" class="external">报告bug</a></li>
				<li><a href="http://wiki.xfce.org" title="Xfce Wiki  (新窗口)" target="_blank" class="external">Xfce Wiki</a></li>
				<li><a href="/download/distros">Xfce发行版</a></li>
			</ul>
		</div>
	</div>
</div>
