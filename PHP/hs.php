<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "History Saga";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>



<div id="names" align="left">

<a href="hs1.php">1. The First Haven Fighter</a><br><br>

<a href="hs2.php">2. Encounter Of Mom</a><br><br>

<a href="hs3.php">3. Four Children</a><br><br>

</div>

<?php
    include("footer.php");
?>