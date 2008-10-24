<?php include_once('version.php'); ?>
<ul>
	<li><a href="/download#stable">Stable release</a>
		<ul>
			<li><a href="/download#source">Source Code</a></li>
			<li><a href="/download#installer">Graphical installer</a></li>
			<li><a href="/download#binaries">Binaries</a></li>
		</ul>
	</li>
    <?php if(isset($version_unstable)) { ?>
    <li><a href="/download#unstable">Unstable release</a></li>
    <?php } ?>
	<li><a href="/download/development">Development version</a>
		<ul>
			<li><a href="http://svn.xfce.org/" target="_blank" class="external">Browse SVN</a></li>
			<li><a href="http://mocha.xfce.org/downloads/svn-snapshots/" target="_blank" class="external">Daily Snapshots</a></li>
		</ul>
	</li>
	<li><a href="http://goodies.xfce.org" target="_blank" class="external">Panel Plugins</a></li>
	<li><a href="/download/distros">Xfce Distributions</a></li>
</ul>
