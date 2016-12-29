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

<a href="zs1.php">1. Invader From Outer-Space</a><br><br>

<a href="zs2.php">2. Two New Heroes</a><br><br>

<a href="zs3.php">3. Here I Am</a><br><br>

<a href="zs4.php">4. T-Boom Unleashed</a><br><br>

</div>

<?php
    include("footer.php");
?>