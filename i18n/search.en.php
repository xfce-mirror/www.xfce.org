<?php
include_once "include/search.php";
?>
<h1>Search</h1>
<p>
<form name="search" method="post" action="/search">
	
	<input name="q" type="text" id="q" value="<?php echo $_POST["q"] ?>" size="40">
	<input name="submit" type="submit" id="submit" value="Search">
	<br />
	<table cellspacing="5">
	<tr>
		<td valign="top"><strong>Search in:</strong></td>
		<td>
			<input name="sw" type="checkbox" id="sw" value="1" <?php if($_POST["sw"] == "1"){ echo 'checked';} ?>>
			<label for="sw">Website</label>
			<br>
			<input name="sa" type="checkbox" id="sa" value="1" <?php if($_POST["sa"] == "1"){ echo 'checked';} ?>>
			<label for="sa">API documentation</label>		</td>
		<td valign="top"><strong>Language:</strong></td>
		<td>
			<input name="lang" type="radio" id="langall" value="all" <?php if($_POST["lang"] != "cur"){ echo 'checked';} ?>>
			<label for="langall">All languages</label>
			<br>
			<input name="lang" type="radio" id="langcur" value="cur" <?php if($_POST["lang"] == "cur"){ echo 'checked';} ?>>
			<label for="langcur">Current language</label>		</td>
      </tr>
	</table>
</form>
</p>
<h1>Results</h1>
<p>
<?php
	RunSearch ($search_db);
?>
</p>
