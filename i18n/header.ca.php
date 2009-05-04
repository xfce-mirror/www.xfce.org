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

	<link rel="alternate" type="application/rss+xml" title="Notícies de Xfce" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Bloc de Xfce" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body id="top">
	<p id="header-top"><a href="#top" title="Anar a la part superior de la pàgina">Amunt</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="Ometre la navegació del lloc" accesskey="1">Ometre la navegació del lloc</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Ometre la navegació per seccions" accesskey="2">Ometre la navegació per seccions</a> (2)
<?php } ?>

		<h1>Entorn d'escriptori Xfce</h1>
		<h4>... i tot va més ràpid!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Aparença del lloc</h2>
						<p>Aparença: <a href="?layout=normal" title="Distribució normal (Mín: 740px, Màx: 1000px)">Normal</a> / 
						<a href="?layout=liquid" title="Distribució fluïda (100% del ancho)">Líquida</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Cercar</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Cercar al Google..." />
							<input type="submit" name="sa" class="hidden" value="Cercar" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Navegació del lloc</h2>
					<ul>
						<li><a href="/" title="Inici">Inici</a></li>
						<li><a href="/about/" title="Sobre">Sobre</a></li>
						<li><a href="/projects/" title="Projectes">Projectes</a></li>
						<li><a href="/download/" title="Descarregar">Descarregar</a></li>
						<li><a href="/documentation/" title="Documentació">Documentació</a></li>
						<li><a href="/community/" title="Comunitat">Comunitat</a></li>
						<li><a href="/development/" title="Desenvolupament">Desenvolupament</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Idioma del lloc</h2>
						<?php echo $lang_links; ?> 
					</div>
<?php if ($breadcrumbs) { ?>
					<div id="header-breadcrumbs">
						<h2 class="hidden">Pa ratllat</h2>
						<?php echo $breadcrumbs; ?>
					</div>
<?php } ?>
				</div>
			</div><!-- header -->
			<hr class="hidden" />
			<div id="global-contentwrap">
<!-- start: page content -->
