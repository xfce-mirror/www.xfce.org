<?php
/* setup the page title */
if (isset ($head['title']))
	$title = $head['title'].' – Xfce';
else
	$title = R_('Xfce Desktop Environment');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
	<title><?php echo $title ?></title>
	<link rel="icon" href="<?php echo $static_media; ?>/images/favicon.ico" />
	<link rel="stylesheet" media="screen" href="<?php echo $static_media; ?>/style/css.php?site=www" type="text/css" />
	<link rel="apple-touch-icon" href="<?php echo $static_media; ?>/images/logo_apple-touch-icon.png" />
	<link rel="me" href="https://floss.social/@xfce" />
	<meta name="content-language" content="<?php echo $lang ?>" />
<?php
	if (isset ($head['description']))
		echo "\t<meta name=\"description\" content=\"".$head['description']."\" />\n";
	if (isset ($head['keywords']))
		echo "\t<meta name=\"keywords\" content=\"".$head['keywords']."\" />\n";
	if (isset ($head['feed']))
		echo "\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"".$head['feed']."\" />\n";
	if (isset ($head['css']))
		echo "\t<style type=\"text/css\">\n".$head['css']."\n</style>\n";
?>
</head>

<body id="top">

<header id="xfce-header">
	<h1 id="xfce-header-title">Xfce</h1>
	<h2 id="xfce-header-subtitle">Subdomains</h2>
	&nbsp;
	<ul>
		<li><a href="https://xfce.org" title="Go to the homepage" class="active">Home</a></li>
		<li><a href="https://docs.xfce.org" title="Official documentation">Docs</a></li>
		<li><a href="http://archive.xfce.org" title="Download location of tarballs">Archive</a></li>
		<li><a href="https://wiki.xfce.org" title="Community documentation">Wiki</a></li>
		<li><a href="https://forum.xfce.org" title="Community forums">Forum</a></li>
		<li><a href="https://gitlab.xfce.org" title="Report and track bugs">Bugs</a></li>
		<li><a href="https://blog.xfce.org" title="Visit the blog">Blog</a></li>
		<li><a href="https://docs.xfce.org/contribute/translate/start" title="Help translating the Xfce project">Translate</a></li>
		<li><a href="https://gitlab.xfce.org" title="Project repositories">Git</a></li>
	</ul>
	<div id="xfce-header-clear"></div>
</header>

<div id="main">
	<div id="mainnav" class="group">

		<h5 class="hidden"><?php E_('Categories') ?></h5>
		<div>
			<a href="#" id="mainnav-icon"><?php E_('Navigate') ?></a>
			<ul>
				<li><a href="/"><?php E_('Home') ?></a></li>
				<li><a href="/about"><?php E_('About') ?></a></li>
				<li><a href="/download"><?php E_('Download') ?></a></li>
				<li><a href="/community"><?php E_('Community') ?></a></li>
				<li><a href="/getinvolved"><?php E_('Get Involved') ?></a></li>
				<li><a href="/projects"><?php E_('Projects') ?></a></li>
			</ul>
		</div>
		<form id="languageform" action="" method="get">
			<select name="lang" onchange="document.getElementById('languageform').submit(); return true;" title="<?php E_('Change language') ?>">
<?php
				asort($languages);
				foreach ($languages as $code => $name)
				{
					/* select active language */
					if ($code == $lang || (empty ($lang) && $code == 'en'))
						$selected = ' selected="selected"';
					else
						$selected = '';

					echo "\t\t\t\t<option value=\"$code\"$selected>$name</option>\n";
				}
?>
			</select>
			<button type="submit" class="hidden"><?php E_('Change language') ?></button>
		</form>
	</div>

	<div id="content">
	<div id="article" class="file_<?php echo $page_class ?>">
<?php if (isset($toc['filename'])) { ?>
	<p id="related-jump" class="file_<?php echo $page_class ?>"><a href="#related"><?php E_('Related Pages') ?> &darr;</a></p>
<?php } ?>
