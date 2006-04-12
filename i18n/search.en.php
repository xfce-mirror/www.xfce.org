<h1>Search</h1>
<p>
<form name="search" method="post" action="/search">
	
	<input name="q" type="text" id="q" value="<?php echo $keywords; ?>" size="40">
	<input name="FromPage" type="submit" id="submit" value="Search">
	<br />
	<table cellspacing="5">
	<tr>
		<td valign="top"><strong>Search in:</strong></td>
		<td>
			<input name="sw" type="checkbox" id="sw" value="1" <?php echo $enablewebsite; ?>>
			<label for="sw">Website</label>
			<br>
			<input name="sa" type="checkbox" id="sa" value="1" <?php echo $enableapi; ?>>
			<label for="sa">API documentation</label>
		</td>
		<td valign="top"><strong>Language:</strong></td>
		<td>
			<input name="sl" type="radio" id="langall" value="all" <?php echo $enableall; ?>>
			<label for="langall">All languages</label>
			<br>
			<input name="sl" type="radio" id="langcur" value="cur" <?php echo $enablecur; ?>>
			<label for="langcur">Current language <em>(<?php echo $lang; ?>)</em></label>
		</td>
      </tr>
	</table>
</form>
</p>
<h1>Results</h1>
<p>
<?php echo $html; ?>
</p>
