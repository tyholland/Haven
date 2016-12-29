<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Spike";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="../Images/v-tron.jpg" height=300 width=300 alt="Spike">
</div>

<div id="local" align="left">
<b>Name</b>: Spike<br>

<b>Age</b>: 32<br>

<b>Sex</b>: Male<br>

<b>Status</b>: Villain<br>

<b>Height</b>: 6'0"<br>

<b>Home</b>: Planet Earth
</div>

<div id="bio" align="left">
The first to try and take over the earth. Spike though was human, but he gave himself shots to give him great powers. He has a deep hatred for Big Dog, for he was defeated by him when they were younger. He plains to kill Big Dog and whomever is close to him, and  then take over the earth and become ultimate ruler.

</div>

<?php
    include("footer.php");
?>