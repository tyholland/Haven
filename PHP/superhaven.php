<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Super Haven";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="type" align="left">
Super Haven 1

</div>



<div id="super">

<img src="../Images/supert-mac.jpg" height=300 width=300 alt="Super Haven 1">

</div>


<div id="next">

<a href="superhaven2.php">Next Level</a>

</div>

<?php
    include("footer.php");
?>