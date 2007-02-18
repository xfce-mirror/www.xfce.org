<?php
if ($_GET["id"])
{
    PrintNewsPage ("sq", $_GET["id"], "Nuk u gjet artikull me këtë id");
?>
    <p>
        <a href="/about/news#<?php echo $_GET["id"]; ?>">Kthehuni te arkiva e lajmeve</a>
    </p>
<?php
}
else
{
?>
    <h1>Arkiva e Lajmeve të Xfce-së</h1>
<?php
    $top=true;
    PrintNewsPage ("sq", false, "");
}
?>
