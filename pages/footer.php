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
	<div class="clearboth"></div>
	</div> <!-- content-wrap -->
	<div id="footer">
		<hr class="hidden" />
		<p><?php printf (R_('Copyright %s <a href="/about/credits">Xfce Development Team</a>. This page was last modified on %s.'), '2003-'.date ('Y'), $footer['mtime']) ?></p>
	</div>
</div> <!-- page-wrap -->

</body>
</html>
