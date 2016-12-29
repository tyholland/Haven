<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Spike Saga";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="names" align="left">

<a href="ss1.php">1. Spike's Return</a><br><br>

<a href="ss2.php">2. Big Dog's Despair</a><br><br>

<a href="ss3.php">3. What Is He!!!</a><br><br>

<a href="ss4.php">4. The Final Blow</a><br><br>

</div>

<?php
    include("footer.php");
?>