<?php

$head['title'] = R_('Changelogs');

$major_versions = array (
        '/^4\.12(|pre)/' => R_('Xfce 4.12'),
        '/^4\.10(|pre)/' => R_('Xfce 4.10'),
        '/^4\.8(|pre)/' => R_('Xfce 4.8'),
        '/^4\.[56]\./' => R_('Xfce 4.6'),
        '/^4\.[34]\./' => R_('Xfce 4.4'),
        '/^4\.[12]\./' => R_('Xfce 4.2'));

$path = 'pages/download/changelogs/';
$versions = array ();

function xfce_versort ($a, $b)
{
	if ($a == $b)
		return 0;

	$pre_a = strpos ($a, 'pre') !== false;
	$pre_b = strpos ($b, 'pre') !== false;
	if ($pre_a != $pre_b)
		return $pre_a ? +1 : -1;

	return ($a > $b) ? -1 : +1;
}

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
usort ($versions, 'xfce_versort');
?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('Xfce release notes are specific to each version. Select your version from the list below to see the changes in the release. ') ?>
</p>

<?php

$printed = 0;

foreach ($major_versions as $pattern => $name)
{
	echo '<h2>'.$name.'</h2>';
	echo '<ul>';

	foreach ($versions as $version)
	{
		if (preg_match ($pattern, $version))
		{
			echo '<li><a href="/download/changelogs/'.$version.'">'.$version.'</a></li>';
			$printed++;
		}
	}

	echo '</ul>';
}

if ($printed != count ($versions))
	echo '<p>Warning, not all changelog versions were printed!</p>';
?>
