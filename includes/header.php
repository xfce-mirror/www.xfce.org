<?php
	$defaultstyle = "fixed";
	
	if (strtolower ($_GET["style"]) == "liquid"
		|| strtolower ($_GET["style"]) == "fixed")
	{
		$style = strtolower ($_GET["style"]);
		
		setcookie ( "xfcestyle", $style, (time()+(60*60*24*365)));
	}
	else if ($_COOKIE["xfcestyle"])
	{
		$style = $_COOKIE["xfcestyle"];
		
		if ($style != "liquid" && $style != "fixed")
		{
			$style = $defaultstyle;
		}
	}
	else
	{
		$style = $defaultstyle;
	}
	
	print ('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Xfce - Desktop Environment</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		
		<style type="text/css">
		
			@import url("'. XFCEURL .'/layout/css/global.css");
			@import url("'. XFCEURL .'/layout/css/content.css");
			@import url("'. XFCEURL .'/layout/css/header.css");
			@import url("'. XFCEURL .'/layout/css/footer.css");
			@import url("'. XFCEURL .'/layout/css/ie.css");
			
			@import url("'. XFCEURL .'/layout/css/front.css");
			
		');

		if ($style == "liquid")
		{
			
			print ('#global-page {
					width: 100%;
				}');
			
		}
		else /* fixed */
		{ 
			
			print ('#global-page {
					width: 780px;
				}');
		}
		
			
	print ('
		</style>

		<link rel="alternate" type="application/rss+xml" title="Xfce News" href="'. XFCEURL .'/news.rdf" />
		<link rel="alternate" type="application/rss+xml" title="Xfce Blog" href="'. XFCEURL .'/blog.rdf" />

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
							<p>Layout: <a href="?style=fixed" title="Fixed Width Layout (780px Width)">Fixed</a> / 
							<a href="?style=liquid" title="Fluid Layout (100% Width)">Liquid</a></p>
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
