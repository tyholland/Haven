<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Zero Saga";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="names" align="left">

<a href="cs1.php">1. Dr. Fergie</a><br><br>

<a href="cs2.php">2. The Abduction</a><br><br>

<a href="cs3.php">3. Mighty-One To The Rescue</a><br><br>

<a href="cs4.php">4. Game Over</a><br><br>

</div>

<?php
    include("footer.php");
?>