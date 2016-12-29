<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Haven Fighters";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic2" align="left">
<img src="../Images/haven4.jpg" height="500" width="600" alt="Haven Fighters">
</div>

<?php
    include("footer.php");
?>