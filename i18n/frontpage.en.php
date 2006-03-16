<div id="front-intro">
	<div id="front-right">
		<div id="front-download">
			<div class="link">
				<h2><a href="#" title="Downlaod Xfce 4.4">Download Xfce 4.4</a></h2>
			</div>
			<div class="notes">
				<p><a href="#" title="Read the release notes">Release Notes</a><span class="grey"> | </span><a href="#" title="What's new in Xfce 4.4">Tour</a></p>
			</div>
		</div>
	</div>
	<div id="front-intro-about">
		<h1>About Xfce</h1>
		<p>Xfce is a lightweight desktop environment for various *NIX systems. Designed for productivity, it loads and executes applications fast, while conserving system resources.</p>
		<p>Xfce 4.2 embodies the traditional UNIX philosophy of modularity and re-usability. It consists of a number of components that together provide the full functionality of the desktop environment. They are packaged separately and you can pick and choose from the available packages to create the best personal working environment.</p>
		<p class="readmore"><a href="#" title="Learn more about Xfce...">learn more</a></p>
	</div>
</div>
<div class="clearboth"></div>
<div id="front-container">
	<div id="front-news">
		<div id="front-news-content">
			<h2><a href="#"><img src="/layout/images/feed.gif" alt="feed" title="Subscribe to 'Xfce News'..." width="12" height="12" border="0" align="right" /></a>Latest News</h2>
			<?php
				if ($frontpage["xfce"])
					include $frontpage["xfce"];
				else
					echo "Something is wrong with the news files";
			?>
			<div class="readmore">
				<a href="#" title="View the news archive...">archive</a>
			</div>
		</div>
	</div>
	<div id="front-projects">
		<div id="front-borders">
			<div id="front-projects-content">
				<h2>Xfce projects</h2>
				<?php
					if ($frontpage["projects"])
					include $frontpage["projects"];
				else
					echo "Something is wrong with the project files";
				?>
				<div class="readmore">
					<a href="#" title="View all Xfce projects...">more projects</a>
				</div>
			</div>
		</div>
	</div>
	<div id="front-blog">
		<div id="front-blog-content">
			<h2><a href="#"><img src="/layout/images/feed.gif" alt="feed" title="Subscribe to 'Xfce Blog'..." width="12" height="12" border="0" align="right" /></a>Developers Blog</h2>
			<?php
				if ($frontpage["blog"])
					include $frontpage["blog"];
				else
					echo "Something is wrong with the blog files";
			?>
			<div class="readmore">
				<a href="#" title="View the blog archive...">archive</a>
			</div>
			<h2>Shortcuts</h2>
			<ul>
				<li><a href="#" title="Mailinglists">Mailinglists</a></li>
				<li><a href="http://forum.xfce.org" target="_blank" title="Xfce Forum (New window)" class="external">Xfce Forum</a></li>
				<li><a href="http://bugzilla.xfce.org" title="Report a bug  (New window)" target="_blank" class="external">Report a bug</a></li>
				<li><a href="#" title="Handbook">Handbook</a></li>
				<li><a href="http://www.xfcewiki.org" title="Xfce Wiki  (New window)" target="_blank" class="external">Xfce Wiki</a></li>
			</ul>
		</div>
	</div>
</div>
