<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />

<?php if (!$headup) { /* show only on frontpage */ ?>
	<meta name="description" content="Xfce Desktop Environment, Skrivebordsmiljøet Xfce" />
	<meta name="keywords" content="skrivebordsmiljø, vindueshåndtering, skrivebord, hastighed, letvægtig, gtk+, open source, xforms common environment" />
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

	<link rel="alternate" type="application/rss+xml" title="Nyheder om Xfce" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Blog om Xfce" href="http://blog.xfce.org/?feed=rss2" />
</head>
<?php } ?>
<body id="top">
	<p id="header-top"><a href="#top" title="Gå til toppen af siden">Top</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="Spring sidenavigering over" accesskey="1">Spring sidenavigering over</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Spring sektionsnavigering over" accesskey="2">Spring sektionsnavigering over</a> (2)
<?php } ?>

		<h1>Skrivebordsmiljøet Xfce</h1>
		<h4>...og alting går hurtigere!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style"> 
						<h2 class="hidden">Netstedets layout</h2>
						<p>Layout: <a href="?layout=normal" title="Standard layout (Min: 740px, Maks: 1000px)">Standard</a> / 
						<a href="?layout=liquid" title="Flydende layout (100% bredde)">Flydende</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Søg</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Google Search..." />
							<input type="submit" name="sa" class="hidden" value="Search" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
						<h2 class="hidden">Sidenavigering</h2>
					<ul>
						<li><a href="/" title="Hjem">Hjem</a></li>
						<li><a href="/about/" title="Om">Om</a></li>
						<li><a href="/projects/" title="Projekter">Projekter</a></li>
						<li><a href="/download/" title="Hent">Hent</a></li>
						<li><a href="/documentation/" title="Dokumentation">Dokumentation</a></li>
						<li><a href="/community/" title="Fællesskab">Fællesskab</a></li>
						<li><a href="/development/" title="Udvikling">Udvikling</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Sprog på siden</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Brødkrummer</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->