<?php
if ($_GET["id"])
{
    PrintNewsPage ("en", $_GET["id"], "Ez da id honetako artikulurik aurkitu");
?>
    <p>
        <a href="/about/news#<?php echo $_GET["id"]; ?>">Berri biltegira itzuli</a>
    </p>
<?php
}
else
{
?>
    <h1>Xfce Berri Biltegia</h1>
<?php
    $top=true;
    PrintNewsPage ("en", false, "");
}
?>
