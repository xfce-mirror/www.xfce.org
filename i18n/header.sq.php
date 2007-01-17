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

	<link rel="alternate" type="application/rss+xml" title="Lajme nga Xfce" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Blogu i Xfce-së" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body>
	<p id="header-top"><a href="#" title="Go to the top of the page">Top</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="Anashkalo lundrim site-i" accesskey="1">Anashkalo lundrim <em>site</em>-i</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Anashkalo lundrim ndarjeje" accesskey="2">Anashkalo lundrim ndarjeje</a> (2)
<?php } ?>

		<h1>Mjedisi Desktop Xfce</h1>
		<h4>...dhe gjithçka shkon më shpejt!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Hartimi i <em>site</em>-it Web</h2>
						<p>Hartimi: <a href="?layout=normal" title="Hartim normal (Min: 740px, Maks: 1000px)">Normal</a> / 
						<a href="?layout=liquid" title="Hartim fluid (Gjerësi 100%)">Liquid</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Kërkoni</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Kërkim me Google..." />
							<input type="submit" name="sa" class="hidden" value="Kërko" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Lundrim <em>site</em>-i</h2>
					<ul>
						<li><a href="/" title="Hyrje">Hyrje</a></li>
						<li><a href="/about/" title="Rreth">Rreth</a></li>
						<li><a href="/projects/" title="Projekte">Projekte</a></li>
						<li><a href="/download/" title="Shkarkoni">Shkarkoni</a></li>
						<li><a href="/documentation/" title="Dokumentim">Dokumentim</a></li>
						<li><a href="/community/" title="Bashkësi">Bashkësi</a></li>
						<li><a href="/development/" title="Zhvillim">Zhvillim</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Gjuhë e <em>site</em>-it</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Thërrime</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->
