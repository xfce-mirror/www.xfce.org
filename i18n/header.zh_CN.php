<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />

<?php if (!$headup) { /* show only on frontpage */ ?>
	<meta name="description" content="Xfce Desktop Environment" />
	<meta name="keywords" content="desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment" />
<?php } ?>

	<link rel="home" href="/" />
	<link rel="help" href="/documentation/" />
<?php if ($headup) { ?>
	<link rel="up" href="<?php echo $headup ?>" />
<?php } ?>

	<link rel="stylesheet" media="screen" href="/layout/css/layout.css" type="text/css" />
	<?php echo $linked_css; ?>


	<style type="text/css">
		<?php echo $layout_css; ?>
	</style>

	<link rel="alternate" type="application/rss+xml" title="Xfce News" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Xfce Blog" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body id="top">
	<p id="header-top"><a href="#top" title="回到页面顶端">顶端</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="跳过站点导航" accesskey="1">跳过站点导航</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Skip section navigation" accesskey="2">Skip section navigation</a> (2)
<?php } ?>

		<h1>Xfce桌面环境</h1>
		<h4>...一切都快起来了！</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">站点布局</h2>
						<p>布局: <a href="?layout=normal" title="常规布局 (Min: 740px, Max: 1000px)">常规</a> / 
						<a href="?layout=liquid" title="浮动布局 (100% Width)">自适应</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">搜索</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Google Search..." />
							<input type="submit" name="sa" class="hidden" value="Search" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">站点导航</h2>
					<ul>
						<li><a href="/" title="主页">主页</a></li>
						<li><a href="/about/" title="关于">关于</a></li>
						<li><a href="/projects/" title="项目">项目</a></li>
						<li><a href="/download/" title="下载">下载</a></li>
						<li><a href="/documentation/" title="文档">文档</a></li>
						<li><a href="/community/" title="社区">社区</a></li>
						<li><a href="/development/" title="开发">开发</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">站点语言</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Breadcrumbs</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->
