<?php
if ($_GET["id"])
{
    PrintNewsPage ("en", $_GET["id"], "No article was found with this id");
?>
    <p>
        <a href="/about/news#m<?php echo $_GET["id"]; ?>">Return to the news archive</a>
    </p>
<?php
}
else
{
?>
    <h1>Xfce News Archive</h1>
<?php
    $top=true;
    PrintNewsPage ("en", false, "");
}
?>
