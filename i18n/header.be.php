<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />

<?php if (!$headup) { /* show only on frontpage */ ?>
	<meta name="description" content="Працоўнае асяродзьдзе Xfce" />
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

	<link rel="alternate" type="application/rss+xml" title="Навіны Xfce" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Блёг Xfce" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body>
	<p id="header-top"><a href="#" title="Go to the top of the page">Top</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="Абмінуць навігацыю сайта" accesskey="1">Абмінуць навігацыю сайта</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Абмінуць частку навігацыі" accesskey="2">Абмінуць частку навігацыі</a> (2)
<?php } ?>

		<h1>Працоўнае асяродзьдзе Xfce</h1>
		<h4>...і ўсё будзе працаваць хутчэй!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Шырыня старонкі</h2>
						<p>Layout: <a href="?layout=normal" title="Статычная (Мін: 740 пкс, Макс: 1000 пкс)">Статычная</a> / 
						<a href="?layout=liquid" title="Дынамічная (залежыць ад шырыні вакна)">Дынамічная</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Пошук</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Пошук у Google..." />
							<input type="submit" name="sa" class="hidden" value="Search" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Навігацыя па сайце</h2>
					<ul>
						<li><a href="/" title="Home">Галоўная старонка</a></li>
						<li><a href="/about/" title="About">Пра Xfce</a></li>
						<li><a href="/projects/" title="Projects">Праекты</a></li>
						<li><a href="/download/" title="Download">Пампаваньне</a></li>
						<li><a href="/documentation/" title="Documentation">Дакумэнтацыя</a></li>
						<li><a href="/community/" title="Community">Супольнасьць</a></li>
						<li><a href="/development/" title="Development">Распрацоўка</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Мова сайта</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Хлебныя крошкі</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->
