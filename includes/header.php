<?php
	print ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Xfce - Desktop Environment</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

		<link rel="stylesheet" media="screen" href="'. XFCEURL .'/layout/css/fixed.css" type="text/css" title="Fixed" />
		<link rel="alternate stylesheet" media="screen" href="'. XFCEURL .'/layout/css/liquid.css" type="text/css" title="Liquid" />
		<!-- Only needed for the front page -->
		<link rel="stylesheet" media="screen" href="'. XFCEURL .'/layout/css/front.css" type="text/css" />

		<link rel="alternate" type="application/rss+xml" title="Xfce News" href="'. XFCEURL .'/news.rdf" />
		<link rel="alternate" type="application/rss+xml" title="Xfce Blog" href="'. XFCEURL .'/blog.rdf" />

		<script type="text/javascript" src="'. XFCEURL .'/layout/js/styleswitcher.js"></script>

		</head>
		<body>
		<div class="hidden">
			<a href="#global-contentwrap" title="Skip site navigation" accesskey="1">Skip site navigation</a> (1)
			<!--
			<a href="#content-text" title="Skip section navigation" accesskey="2">Skip section navigation</a> (2)
			-->
			<h1>Xfce Desktop Environment</h1>
			<h4>...and everything goes faster!</h4>
			<hr />
		</div>
		<div id="global-pagewrap">
			<div id="global-page">
				<div id="header">
					<div id="header-logo"><!-- Place holder for image logo --></div>
					<div id="header-right">
						<div id="header-style">
							<h2 class="hidden">Website Layout</h2>
							<p>Layout: <a href="#" title="Fixed Width Layout (780px Width)" onclick="setActiveStyleSheet(\'Fixed\'); return false;">Fixed</a> / 
							<a href="#" title="Fluid Layout (100% Width)" onclick="setActiveStyleSheet(\'Liquid\'); return false;">Liquid</a></p>
						</div>
						<div id="header-search">
							<h2 class="hidden">Search</h2>
							<form action="#" method="post">
								<input name="q" type="text" id="q" onfocus="if(this.value==this.defaultValue ) this.value=\'\';" onblur="if(this.value==\'\') this.value=this.defaultValue;" value="Search..." />
								<input type="button" class="hidden" value="Search" />
							</form>
						</div>
					</div>
					<div id="header-menu">
						<h2 class="hidden">Site navigation</h2>
						<ul>
							<li><a href="'. XFCEURL .'/" title="Home">Home</a></li>
							<li><a href="'. XFCEURL .'/about" title="About">About</a></li>
							<li><a href="'. XFCEURL .'/projects" title="Projects">Projects</a></li>
							<li><a href="'. XFCEURL .'/download" title="Download">Download</a></li>
							<li><a href="'. XFCEURL .'/docs" title="Documentation">Documentation</a></li>
							<li><a href="'. XFCEURL .'/community" title="Community">Community</a></li>
						</ul>
					</div>
				</div>
				<hr class="hidden" />
				<div id="global-contentwrap">
		');
?>
