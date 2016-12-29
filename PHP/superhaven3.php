<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Super Haven 3";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="type" align="left">
Super Haven 3

</div>



<div id="super">

<img src="../Images/superhaven3.jpg" height=300 width=300 alt="Super Haven 3">

</div>


<div id="next">

<a href="superhaven4.php">Next Level</a>

</div>

<?php
    include("footer.php");
?>