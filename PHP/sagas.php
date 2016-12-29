<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Sagas";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="saga" align="left">
<a href="hs.php">History Saga</a><br><br>
<a href="ss.php">Spike Saga</a><br><br>
<a href="zs.php">Zero Saga</a><br><br>
<a href="cs.php">Cyborg Saga</a>
</div>

<?php
    include("footer.php");
?>