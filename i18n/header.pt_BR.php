<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
	<title>Xfce - <?php echo $headtitle; ?></title>
	<link rel="shortcut icon" href="/favicon.png" type="image/png" />

<?php if (!$headup) { /* show only on frontpage */ ?>
	<meta name="description" content="Xfce Desktop Environment, Ambiente de Desktop Xfce" />
	<meta name="keywords" content="desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment, gerenciador de janelas, ambiente de desktop, rápido, veloz, leve" />
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

	<link rel="alternate" type="application/rss+xml" title="Notícias sobre o Xfce" href="/?feed=rss2&amp;lang=<?php echo $lang ?>" />
	<link rel="alternate" type="application/rss+xml" title="Blog do Xfce" href="http://blog.xfce.org/?feed=rss2" />
</head>
<body id="top">
	<p id="header-top"><a href="#top" title="Vai para o topo da página">Topo</a></p>
	<div class="hidden">
		<a href="#global-contentwrap" title="Pular a navegacão do site" accesskey="1">Pular a navegação do site</a> (1)
<?php if ($content_bool) { ?>
		<a href="#content-text" title="Pular a sessão de navegação" accesskey="2">Pular a sessão de navegação</a> (2)
<?php } ?>

		<h1>Ambiente de Desktop Xfce</h1>
		<h4>...e tudo fica mais rápido!</h4>
		<hr />
	</div>
	<div id="global-pagewrap">
		<div id="global-page">
			<div id="header">
				<div id="header-logo"></div>
				<div id="header-right">
					<div id="header-style">
						<h2 class="hidden">Layout do Website</h2>
						<p>Disposição: <a href="?layout=normal" title="Disposição Normal (Min: 740px, Max: 1000px)">Normal</a> / 
						<a href="?layout=liquid" title="Disposição Líquida (100% Width)">Líquida</a></p>
					</div>
					<div id="header-search">
						<h2 class="hidden">Pesquisar</h2>
						<form id="GoogleSearch" action="/search/">
							<input type="hidden" name="cx" value="008920933163277390313:rifucd7pcta" />
							<input name="q" type="text" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="Pesquisar com Google..." />
							<input type="submit" name="sa" class="hidden" value="Pesquisar" />
							<input type="hidden" name="cof" value="FORID:11" />
						</form>
					</div>
				</div>
				<div id="header-menu">
					<h2 class="hidden">Navegação do Site</h2>
					<ul>
						<li><a href="/" title="Home">Principal</a></li>
						<li><a href="/about/" title="Sobre o Xfce">Sobre</a></li>
						<li><a href="/projects/" title="Projetos do Xfce">Projetos</a></li>
						<li><a href="/download/" title="Download">Download</a></li>
						<li><a href="/documentation/" title="Documentação">Documentação</a></li>
						<li><a href="/community/" title="Comunidade">Comunidade</a></li>
						<li><a href="/development/" title="Desenvolvimento">Desenvolvimento</a></li>
					</ul>
				</div>
				<div id="header-white">
					<div id="header-language">
						<h2 class="hidden">Idiomas do Site</h2>
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
