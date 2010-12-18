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
	<title><?php echo $title ?></title>
	<link rel="shortcut icon" href="/style//favicon.png" type="image/png" />
	<link rel="stylesheet" media="screen" href="/style/base.css" type="text/css" />
<?php
        if (isset ($head['stylesheet']) && is_array ($head['stylesheet']))
                foreach ($head['stylesheet'] as $sheet)
                        echo "\t<link rel=\"stylesheet\" media=\"screen\" href=\"$sheet\" type=\"text/css\" />\n";

        if (isset ($head['description']))
                echo "\t<meta name=\"description\" content=\"".$head['description']."\" />\n";

        if (isset ($head['keywords']))
                echo "\t<meta name=\"keywords\" content=\"".$head['keywords']."\" />\n";
?>
</head>

<body id="top">

<div id="xfce-header">
	<div>
		<h1 id="xfce-header-title">Xfce</h1>
		<h5 id="xfce-header-subtitle">Sub domains</h5>
		&nbsp;
		<ul>
			<li><a href="http://www.xfce.org" title="Go to the homepage" class="active">Home</a></li>
			<li><a href="http://docs.xfce.org" title="Official documentation">Docs</a></li>
			<li><a href="http://wiki.xfce.org" title="Community documentation">Wiki</a></li>
			<li><a href="http://forum.xfce.org" title="Community forums">Forum</a></li>
			<li><a href="http://bugzilla.xfce.org" title="Report and track bugs">Bugs</a></li>
			<li><a href="http://blog.xfce.org" title="Visit the blog">Blog</a></li>
			<li><a href="http://translations.xfce.org" title="Help translating the Xfce project">Translate</a></li>
			<li><a href="http://git.xfce.org" title="Project repositories">GIT</a></li>
		</ul>
	</div>
	<div  id="xfce-header-clear"></div>
</div>

<div id="page-wrap">
	<div id="menu-main">
		<div>
			<h5 class="hidden"><?php E_('Categories') ?></h5>
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
		<div class="clearboth"></div>
	</div>

<?php
	if (isset($toc['filename']))
	{
		include ($toc['filename']);

		echo '<div id="menu-sub">';

		if (isset($toc['menu']))
		{
			echo '<h5>'.R_('Category Pages').'</h5>';
			echo '<ul>';
			foreach ($toc['menu'] as $link => $name)
			{
				echo '<li><a href="/'.$link.'">'.$name.'</a>';

				if (isset ($toc['anchors']) && strcmp ($uri, $link) == 0)
				{
					echo '<ul>';
					foreach ($toc['anchors'] as $id => $name)
						echo '<li><a href="#'.$id.'">'.$name.'</a></li>';
					echo '</ul>';
				}

				echo '</li>';
			}
			echo '</ul>';
		}

		if (isset($toc['external']))
		{
			echo '<h5>'.R_('External Links').'</h5>';
			echo '<ul>';
			foreach ($toc['external'] as $link => $name)
				echo '<li><a href="'.$link.'" class="external">'.$name.'</a></li>';
			echo '</ul>';
		}

		echo '</div>';
	}
?>
	<div id="page-contents">
