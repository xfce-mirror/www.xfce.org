<?php
include ("search.db.php");


function RunSearch ($search_db)
{
	$keyword = $_POST["q"];
	
	if ($keyword == "")
		return;
	
	foreach ($search_db as $page => $content)
	{
		$html = $content[1];
		
		if ($offset = strpos($html,$keyword))
		{
		
		$left = $offset - 100;
		$right = $offset + 100;
		
		if ($left < 0)
		{
			$left = 0;
			$right = 200;
		}
		
		if ($right > strlen ($html))
			$right = strlen ($html);
			
		$disc = substr ($html, $left, ($right-$left));
		$disc = str_replace ($keyword, "<strong>". $keyword ."</strong>", $disc);
		
		
		echo '<h3><a href="'. $page .'">'. $page .'</a></h3>';
		echo "<p>";
		echo "...". $disc ."...";
		echo "</p>";
		}
	}
}

?>