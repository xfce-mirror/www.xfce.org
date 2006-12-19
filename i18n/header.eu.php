<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EU"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />

<?php if (!$headup) { /* show only on frontpage */ ?>
	<meta name="description" content="Xfce Idazmahai Ingurunea" />
	<meta name="keywords" content="idazmahai ingurunea, leiho kudeatzailea, idazmahaia, abiadura, arina, gtk+, 
kode irekia, xforms ingurne bateratua" />
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

	<link rel="alternate" type="application/rss+xml" title="Xfce Berriak" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Xfce Blog-a" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body>
	<div class="hidden">
		<a href="#global-contentwrap" title="Gune nabigazioa saltatu" accesskey="1">Gune nabigazioa saltatu</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Atal nabigazioa saltatu" accesskey="2">Atal nabigazioa saltatu</a> (2)
<?php } ?>

		<h1>Xfce Idazmahai Ingurunea</h1>
		<h4>...eta dena arinago doa!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Webgune Diseinua</h2>
						<p>Layout: <a href="?layout=normal"  title="Diseinu arrunta (Gutx: 
740px, Gehi: 1000px)">Arrunta</a> / 
						<a href="?layout=liquid" title="Diseinu likidoa (100% Width)">Likidoa</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Bilaketa</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Google Bilaketa..." />
							<input type="submit" name="sa" class="hidden" value="Bilaketa" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Gune nabigazioa</h2>
					<ul>
						<li><a href="/" title="Hasiera">Hasiera</a></li>
						<li><a href="/about/" title="Honi buruz">Honi buruz</a></li>
						<li><a href="/projects/" title="Proiektuak">Proiektuak</a></li>
						<li><a href="/download/" title="Deskargatu">Deskargatu</a></li>
						<li><a href="/documentation/" title="Dokumentazioa">Dokumentazioa</a></li>
						<li><a href="/community/" title="Komunitatea">Komunitatea</a></li>
						<li><a href="/development/" title="Garapena">Garapena</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Gune hizkuntza</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Breadcrums</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->
