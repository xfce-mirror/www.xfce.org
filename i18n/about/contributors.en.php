<h1>Xfce contributors</h1>
<p>Thanks to all who helped making this software available.</p>

<?php $contributors = new Contributors(); ?>

<h2 id="developers">Developers</h2>
<?php echo $contributors->Developers (); ?>

<h2 id="translators">Translators</h2>
<?php echo $contributors->Translators (); ?>

<h2 id="webtranslators">Web Translators</h2>
<?php echo $contributors->Webtranslators (); ?>

<h2 id="contributors">Contributors</h2>
<?php echo $contributors->Contributors (); ?>
