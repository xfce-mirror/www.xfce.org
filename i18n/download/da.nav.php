<?php include_once('version.php'); ?>
<ul>
	<li><a href="/download#stable">Stabil udgivelse</a>
		<ul>

			<li><a href="/download#source">Kildekode</a></li>
			<li><a href="/download#installer">Grafisk installatør</a></li>
			<li><a href="/download#binaries">Binære</a></li>
		</ul>
	</li>
    <?php if(isset($version_unstable)) { ?>
    <li><a href="/download#unstable">Ustabil udgivelse</a></li>
    <?php } ?>
	<li><a href="/download/development">Udviklingsversion</a>
		<ul>>
			<li><a href="http://svn.xfce.org/" class="external">Gennemse SVN</a></li>
			<li><a href="http://mocha.xfce.org/downloads/svn-snapshots/" class="external">Dagligt øjebliksbillede</a></li>
		</ul>
	</li>
	<li><a href="http://goodies.xfce.org" class="external">Paneludvidelser</a></li>
	<li><a href="/download/distros">Distributioner baseret på Xfce</a></li>
</ul>
