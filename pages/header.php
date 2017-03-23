<?php
/* setup the page title */
if (isset ($head['title']))
	$title = $head['title'].' - Xfce';
else
	$title = R_('Xfce Desktop Environment');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $title ?></title>
	<link rel="icon" href="/style/favicon.png" />
	<link rel="stylesheet" media="screen" href="/style/css.php" type="text/css" />
	<link rel="apple-touch-icon" href="<?php echo $static_media ?>/apple-touch-icon.png" />
	<meta name="content-language" content="<?php echo $lang ?>" />
<?php
	if (isset ($head['description']))
		echo "\t<meta name=\"description\" content=\"".$head['description']."\" />\n";
	if (isset ($head['keywords']))
		echo "\t<meta name=\"keywords\" content=\"".$head['keywords']."\" />\n";
	if (isset ($head['feed']))
		echo "\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS 2.0\" href=\"".$head['feed']."\" />\n";
?>
</head>

<body id="top">

<div id="xfce-header">
	<div>
		<h1 id="xfce-header-title">Xfce</h1>
		<h5 id="xfce-header-subtitle">Subdomains</h5>
		&nbsp;
		<ul>
			<li><a href="https://xfce.org" title="Go to the homepage" class="active">Home</a></li>
			<li><a href="https://docs.xfce.org" title="Official documentation">Docs</a></li>
			<li><a href="http://archive.xfce.org" title="Download location of tarballs">Archive</a></li>
			<li><a href="https://wiki.xfce.org" title="Community documentation">Wiki</a></li>
			<li><a href="https://forum.xfce.org" title="Community forums">Forum</a></li>
			<li><a href="https://bugzilla.xfce.org" title="Report and track bugs">Bugs</a></li>
			<li><a href="http://blog.xfce.org" title="Visit the blog">Blog</a></li>
			<li><a href="https://xfce.org/getinvolved/translation" title="Help translating the Xfce project">Translate</a></li>
			<li><a href="https://git.xfce.org" title="Project repositories">GIT</a></li>
		</ul>
	</div>
	<div  id="xfce-header-clear"></div>
</div>

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
