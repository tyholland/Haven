<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Super Haven 5";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="type" align="left">
Super Haven 5
</div>



<div id="super">

<img src="../Images/superhaven5.jpg" height=300 width=300 alt="Super Haven 5">

</div>

<?php
    include("footer.php");
?>