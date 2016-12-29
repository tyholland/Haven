<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="plain" align="left">

<a href="t-maclevel.php">T-Mac</a><br><br>

<a href="t-boomlevel.php">T-Boom</a><br><br>

<a href="mighty-onelevel.php">Mighty-One</a><br><br>

<a href="snookielevel.php">Snookie</a><br><br>

<a href="parentslevel.php">Parents</a><br><br>

<a href="villainslevel.php">Villains</a><br><br>

<a href="superhavenlevel.php">Super Haven Levels</a>
</div>

<?php
    include("footer.php");
?>