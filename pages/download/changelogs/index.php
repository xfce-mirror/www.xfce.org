<?php

$head['title'] = R_('Changelogs');

$toc['anchors'] = array (
        '4.10' => 'Xfce 4.10',
        '4.8' => 'Xfce 4.8',
        '4.6' => 'Xfce 4.6',
        '4.4' => 'Xfce 4.4',
        '4.2' => 'Xfce 4.2');

$path = 'pages/download/changelogs/';
$versions = array ();

if ($dir = opendir ('pages/download/changelogs/'))
{
	while (($name = readdir($dir)) !== false)
	{
		if (!is_file ($path.$name)
		    || $name == 'index.php'
		    || $name == 'nav.php')
			continue;

		$versions[] = basename ($name, '.php');
	}
	closedir ($dir);
}
rsort ($versions);
?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('Xfce release notes are specific to each version. Select your version from the list below to see the changes in the release. ') ?>
</p>

<?php

$printed = 0;

foreach ($toc['anchors'] as $id => $name)
{
	echo '<h2 id="'.$id.'">'.$name.'</h2>';
	echo '<ul>';

	$oddid = sprintf ('%0.1f', floatval ($id) - 0.1);
	foreach ($versions as $version)
	{
		if (str_has_prefix ($version, $id) || str_has_prefix ($version, $oddid))
		{
			echo '<li><a href="/download/changelogs/'.$version.'">'.$version.'</a></li>';
			$printed++;
		}
	}

	echo '</ul>';
}

if ($printed != count ($versions))
	echo 'Warning, not all changelog versions were printed!'
?>
