<?php

include ('pages/news-array.php');
include ('pages/versions.php');

$head['description'] = 'Xfce Desktop Environment';
$head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
$head['feed'] = 'http://www.xfce.org/feed?lang='.$lang;
?>

<div id="slidewrap">
<div id="slide">
	<ul>
		<li><img src="<?php echo $static_media; ?>/frontpage/slider-desktop.jpg" width="800" height="400" alt="" title="Xfce Desktop" /></li>
		<li><img src="<?php echo $static_media; ?>/frontpage/slider-thunar.jpg" width="800" height="400" alt="" title="File Manager" /></li>
		<li><img src="<?php echo $static_media; ?>/frontpage/slider-settings.jpg" width="800" height="400" alt="" title="Settings" /></li>
		<li><img src="<?php echo $static_media; ?>/frontpage/slider-xfwm4.jpg" width="800" height="400" alt="" title="Window Manager" /></li>
		<li><img src="<?php echo $static_media; ?>/frontpage/slider-panel.jpg" width="800" height="400" alt="" title="Panel" /></li>
		<li><img src="<?php echo $static_media; ?>/frontpage/slider-apps.jpg" width="800" height="400" alt="" title="Applications" /></li>
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
				<a href="/download/changelogs/4.10"><?php E_('ChangeLog') ?>
					<span>&ndash; <?php printf (R_('release notes for Xfce %s'), $stable_version) ?></span>
				</a>
			</li>
			<li>
				<a href="/about/tour"><?php printf (R_('%s Tour'), $stable_version) ?>
					<span>&ndash; <?php E_('visual tour about new features in the lastest releases') ?></span>
				</a>
			</li>
			<li>
				<a href="/about/screenshots"><?php E_('Screenshots') ?>
					<span>&ndash; <?php E_('examples of Xfce desktops ordered by version') ?></span>
				</a>
			</li>
		</ul>
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
				echo '<p>'.$item['paragraphs'][0];

				echo ' <a href="'.$link.'">';
				E_('Learn More &rarr;');
				echo '</a></p></div>';

				if (--$count <= 0)
					break;
			}
		?>
	</div>
</div>

<div class="clearboth"></div>

</div>
