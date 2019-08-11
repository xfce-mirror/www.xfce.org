<?php

include ('pages/news-array.php');
include ('pages/versions.php');

$head['description'] = 'Xfce is a lightweight desktop environment for UNIX-like operating systems. It aims to be fast and low on system resources, while still being visually appealing and user friendly.';
$head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
$head['feed'] = 'https://xfce.org/feed?lang='.$lang;
$head['css'] = '@media screen and (max-width:830px) {
#slide div#slide-thunar { background-image: url(' . $static_media . '/slider/thunar_mobile.png) !important; }
#slide div#slide-settings { background-image: url(' . $static_media . '/slider/settings_mobile.png) !important; }
#slide div#slide-xfwm4 { background-image: url(' . $static_media . '/slider/xfwm4_mobile.png) !important; }
#slide div#slide-panel { background-image: url(' . $static_media . '/slider/panel_mobile.png) !important; }
#slide div#slide-apps { background-image: url(' . $static_media . '/slider/apps_mobile.png) !important; }
}';
?>

<div id="slidewrap">
<div id="slide">
	<div id="slide-desktop" alt="Xfce Desktop" title="<?php E_('The default Xfce Desktop provides a simple and attractive desktop for Unix users.') ?>">
		<span id="slide-desktop-panel" style="background-image: url(<?php echo $static_media; ?>/slider/panel_bg.png);"><span id="slide-desktop-panel-left" style="background-image: url(<?php echo $static_media; ?>/slider/panel_left.png);"></span><span id="slide-desktop-panel-right" style="background-image: url(<?php echo $static_media; ?>/slider/panel_right.png);"></span></span>
		<span id="slide-desktop-icons" style="background-image: url(<?php echo $static_media; ?>/slider/desktop_icons.png);"></span>
	</div>
	<div id="slide-desktop" alt="Xfce Desktop" title="<?php E_('The default Xfce Desktop provides a simple and attractive desktop for Unix users.') ?>">
		<span id="slide-desktop-panel" style="background-image: url(<?php echo $static_media; ?>/slider/opensuse-panel-repeat.png);"><span id="slide-desktop-panel-left" style="background-image: url(<?php echo $static_media; ?>/slider/opensuse-panel-left.png);"></span><span id="slide-desktop-panel-right" style="background-image: url(<?php echo $static_media; ?>/slider/opensuse-panel-repeat.png);"></span></span>
		<span id="slide-desktop-icons" style="background-image: url(<?php echo $static_media; ?>/slider/opensuse-desktop-icons.png);"></span>
		<span id="slide-desktop-yast" style="background-image: url(<?php echo $static_media; ?>/slider/opensuse-yast.png);"></span>
	</div>
	<div id="slide-settings" style="background-image: url(<?php echo $static_media; ?>/slider/color-settings.png);" alt="Settings" title="<?php E_('The Xfce Desktop provides all the required settings to configure your hardware, desktop appearance and other desktop-critical settings allowing you to easily manage your system.') ?>"></div>
	<div id="slide-xfwm4" style="background-image: url(<?php echo $static_media; ?>/slider/xfwm4.png);" alt="Window Manager" title="<?php E_('The Xfce Window Manager is the core of the desktop. It can be tuned to make window management quick and predictable. It also features around 100 border styles giving it the look you want!') ?>"></div>
	<div id="slide-panel" style="background-image: url(<?php echo $static_media; ?>/slider/panel.png);" alt="Panel" title="<?php E_('The Xfce Panel can be customized in numerous ways so it provides all the items you need right where you need them. It has three different display modes, transparency and a few dozen different plugins.') ?>">
		<span id="slide-panel-deskbar" style="background-image: url(<?php echo $static_media; ?>/slider/panel_deskbar.png);"></span><span id="slide-panel-vertical" style="background-image: url(<?php echo $static_media; ?>/slider/panel_vertical.png);"></span>
	</div>
	<div id="slide-apps" style="background-image: url(<?php echo $static_media; ?>/slider/apps.png);" alt="Applications" title="<?php E_('Beside the core desktop functionality, a number of other applications are developed in the Xfce repositories, like an image viewer, the Midori web browser, task manager, notes plugin and calendar.') ?>"></div>
</div>
<div id="slidenav"></div>
</div>

<script type="text/javascript">
//<![CDATA[
<?php include ('style/slider.js'); ?>
//]]>
</script>

<div class="frontpage_cols">

<div class="column">
	<h2><?php E_('Xfce Desktop Environment') ?></h2>
	<p><?php E_('Xfce is a lightweight desktop environment for UNIX-like operating systems. It aims to be fast and low on system resources, while still being visually appealing and user friendly.') ?></p>
	<ul>
		<li>
			<a href="/download"><?php E_('Download') ?>
				<span>&ndash; <?php E_('get the source tarballs') ?></span>
			</a>
		</li>
		<li>
			<a href="/download/changelogs/4.14"><?php E_('ChangeLog') ?>
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
</div>

<div class="column">
	<h2><?php E_('Latest News') ?></h2>
	<span class="rss"><a href="https://xfce.org/feed?lang=<?php echo $lang ?>"><?php E_('Subscribe to RSS feed') ?></a></span>
	<?php
		$count = 2;
		foreach ($news as $item)
		{
			echo '<div class="newsitem group">';

			if (isset ($item['version']) && !empty ($item['version']))
				$title = sprintf (R_('Xfce %s released'), $item['version']);
			else
				$title = $item['title'];

			echo '<h3>'.$title.'</h3>';

			$link = '/about/news/?post='.strtotime ($item['date']);

			echo '<div class="post-wrap">';
			echo '<p>'.$item['paragraphs'][0] .' ';
			learnmore ($link);
			echo '</p></div>';

			$stamp = strtotime ($item['date']);
			echo '<div class="post-date"><span class="post-month">'. date ('M', $stamp).
				 '</span> <span class="post-day"><span class="day">'. date ('d', $stamp).
				 '</span><br /><span class="year">'.date ('Y', $stamp).'</span></span></div>';

			echo '</div>';

			if (--$count <= 0)
				break;
		}
	?>
</div>

<div class="column">
	<h2><?php E_('On the Xfce Blog') ?></h2>
	<span class="rss"><a href="https://blog.xfce.org/feed"><?php E_('Subscribe to RSS feed') ?></a></span>
	<?php
		require_once('lib/simplepie/autoloader.php');
		$feed = new SimplePie();
		$feed->set_feed_url(array('https://blog.xfce.org/feed/'));
		$feed->set_cache_location('cache');
		$feed->init();
		$feed->handle_content_type();

		echo '<ul class="feeds group">';
		foreach($feed->get_items(0,4) as $item){
			echo '<li><strong><a href="'.$item->get_permalink().'">'.$item->get_title().'</a></strong><br />';
			echo '<span class="meta">'.$item->get_author()->get_name().' on '.$item->get_date('M d Y').'</span></li>';
		}
		echo '</ul>';
		echo '<p><a href="https://blog.xfce.org/">'.R_('Read more articles on the Xfce Blog &rarr;').'</a></p>';
	?>
</div>

</div>
