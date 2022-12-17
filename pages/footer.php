	</div> <!-- page-contents -->
<?php
	if (isset($toc['filename']))
	{
		echo '<hr class="hidden" />';
		echo '<div id="related">';
		include ($toc['filename']);
		echo '</div>';
	}
?>
	</div> <!-- content-wrap -->
	</div> <!-- page-wrap -->
	<footer>
		<hr class="hidden" />
			<div><?php printf (R_('Copyright %s <a href="/about/credits">Xfce Development Team</a>. This page was last modified on %s.'), '2003-'.date ('Y'), $footer['mtime']) ?></div>
			<div><?php printf (R_('Hosted by <a href="https://gandi.net" target="_blank">Gandi</a>. Additional servers provided by <a href="https://fosshost.org" target="_blank">fosshost.org</a>.')) ?></div>
	</footer>
</body>
</html>
