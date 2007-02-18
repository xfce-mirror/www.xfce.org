<?php if ($_GET["id"]) { PrintNewsPage ("en", $_GET["id"], "Es wurde kein Artikel mit dieser ID gefunden."); ?><p>
        <a href="/about/news#m<?php echo $_GET["id"]; ?>"&gt;Zurück zu den Neuigkeiten</a>
    </p>
<?php
}
else
{
?>
    <h1>Alle Neuigkeiten</h1>
<?php
    $top=true;
    PrintNewsPage ("en", false, "");
}
?>
