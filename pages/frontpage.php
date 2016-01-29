<?php

include ('pages/news-array.php');
include ('pages/versions.php');

$head['description'] = 'Xfce is a lightweight desktop environment for UNIX-like operating systems. It aims to be fast and low on system resources, while still being visually appealing and user friendly.';
$head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
$head['feed'] = 'http://www.xfce.org/feed?lang='.$lang;
?>

<div id="slidewrap">
<div id="slide">
	<ul>
		<li>
			<img src="<?php echo $static_media; ?>/frontpage/slider-desktop.jpg" width="800" height="400" alt="Xfce Desktop" title="<?php E_('The default Xfce Desktop provides a simple and attractive desktop for Unix users.') ?>" />
		</li>
		<li>
			<img src="<?php echo $static_media; ?>/frontpage/slider-thunar.jpg" width="800" height="400" alt="File Manager" title="<?php E_('Thunar is the file manager for the Xfce Desktop. It has been designed from the ground up to be fast and easy-to-use. Its user interface is clean and intuitive, and does not include any confusing or useless options by default.') ?>" />
		</li>
		<li>
			<img src="<?php echo $static_media; ?>/frontpage/slider-settings.jpg" width="800" height="400" alt="Settings" title="<?php E_('The Xfce Desktop provides all the required settings to configure your hardware, desktop appearance and other desktop-critical settings allowing you to easily manage your system.') ?>" />
		</li>
		<li>
			<img src="<?php echo $static_media; ?>/frontpage/slider-xfwm4.jpg" width="800" height="400" alt="Window Manager" title="<?php E_('The Xfce Window Manager is the core of the desktop. It can be tuned to make window management quick and predictable. It also features around 100 border styles giving it the look you want!') ?>" />
		</li>
		<li>
			<img src="<?php echo $static_media; ?>/frontpage/slider-panel.jpg" width="800" height="400" alt="Panel" title="<?php E_('The Xfce Panel can be customized in numerous ways so it provides all the items you need right where you need them. It has three different display modes, transparency and a few dozen different plugins.') ?>" />
		</li>
		<li>
			<img src="<?php echo $static_media; ?>/frontpage/slider-apps.jpg" width="800" height="400" alt="Applications" title="<?php E_('Beside the core desktop functionality, a number of other applications are developed in the Xfce repositories, like an image viewer, the Midori web browser, task manager, notes plugin and calendar.') ?>" />
		</li>
	</ul>
</div>
<div id="slidenavwrap">
	<ul id="slidenav">
		<li onclick="slideshow.pos(0)"></li>
		<li onclick="slideshow.pos(1)"></li>
		<li onclick="slideshow.pos(2)"></li>
		<li onclick="slideshow.pos(3)"></li>
		<li onclick="slideshow.pos(4)"></li>
		<li onclick="slideshow.pos(5)"></li>
	</ul>
	<div class="clearboth"></div>
</div>
</div>

<script type="text/javascript">
//<![CDATA[
<?php include ('style/tinyslider.js'); ?>
//]]>

var slideshow=new TINY.slider.slide('slideshow',{
	id:'slide',
	auto:10,
	vertical:false,
	navid:'slidenav',
	activeclass:'current',
	position:0,
	rewind:false,
	elastic:false
});
</script>

<div class="frontpage_cols">

<div class="column">
	<div class="lcolumn">
		<h2><?php E_('Xfce Desktop Environment') ?></h2>
		<p><?php E_('Xfce is a lightweight desktop environment for UNIX-like operating systems. It aims to be fast and low on system resources, while still being visually appealing and user friendly.') ?></p>
		<ul>
			<li>
				<a href="/download"><?php E_('Download') ?> 
					<span>&ndash; <?php E_('get the source tarballs') ?></span>
				</a>
			</li>
			<li>
				<a href="/download/changelogs/4.12"><?php E_('ChangeLog') ?>
					<span>&ndash; <?php printf (R_('release notes for Xfce %s'), $stable_version) ?></span>
				</a>
			</li>
			<li>
				<a href="/about/tour"><?php printf (R_('%s Tour'), $stable_version) ?>
					<span>&ndash; <?php E_('visual tour about new features in the latest releases') ?></span>
				</a>
			</li>
			<li>
				<a href="/about/screenshots"><?php E_('Screenshots') ?>
					<span>&ndash; <?php E_('examples of Xfce desktops ordered by version') ?></span>
				</a>
			</li>
		</ul>
		<a href="http://ilovefs.org">
			<img src="<?php echo $static_media; ?>/frontpage/ilovefs-banner-medium-en.png" style="border: 0 !important; margin-top: 2em;" alt="I love Free Software!">
		</a>
	</div>
</div>

<div class="column">
	<div class="rcolumn">
		<span class="rss"><a href="http://www.xfce.org/feed?lang=<?php echo $lang ?>"><?php E_('Subscribe to RSS feed') ?></a></span>
		<h2><?php E_('Latest News') ?></h2>
		<?php
			$count = 2;
			foreach ($news as $item)
			{
				if (isset ($item['version']) && !empty ($item['version']))
					$title = sprintf (R_('Xfce %s released'), $item['version']);
				else
					$title = $item['title'];

				$link = '/about/news/?post='.strtotime ($item['date']);

				echo '<h3>'.$title.'</h3>';

				$stamp = strtotime ($item['date']);
				echo '<div class="post-date"><span class="post-month">'. date ('M', $stamp).
					 '</span> <span class="post-day">'. date ('d', $stamp).
					 '<br />'.date ('Y', $stamp).'</span></div>';

				echo '<div class="post-wrap">';
				echo '<p>'.$item['paragraphs'][0] .' ';
				learnmore ($link);
				echo '</p></div>';

				if (--$count <= 0)
					break;
			}
		?>
	</div>
</div>

<div class="clearboth"></div>

</div>
