<?php include ('pages/versions.php'); ?>

<ul>
	<li><a href="/download"><?php E_('Download') ?></a>
		<ul>
			<li><a href="/download#stable"><?php E_('Stable release') ?></a></li>
<?php if($preview_visible) { ?>
			<li><a href="/download#unstable"><?php E_('Preview release') ?></a></li>
<?php } ?>
			<li><a href="/download/#individual"><?php E_('Individual releases') ?></a></li>
		</ul>
	</li>
	<li><a href="/download/development"><?php E_('Development') ?></a></li>
</ul>

<ul>
	<li><a href="http://git.xfce.org/" class="external"><?php E_('Browse GIT repositories') ?></a></li>
	<li><a href="http://goodies.xfce.org" class="external"><?php E_('Panel Plugins') ?></a></li>
</ul>
