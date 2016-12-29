<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Mighty-One";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="/Haven/Images/mighty-one.jpg" name="mighty-one" height=300 width=300 alt="Mighty-One" id="photo4"></a>

</div>

<div id="local" align="left">
<b>Name</b>: Mighty-One<br>

<b>Age</b>: 14<br>

<b>Sex</b>: Male<br>

<b>Status</b>: Son<br>

<b>Height</b>: 6'2"<br>

<b>SH</b>: 4<br>

<b>Home</b>: Toughtown, Planet Earth
</div>

<div id="bio" align="left">
Mighty-One the second son born. If you want to be technical, he is also the second child that Mom had in labor. But anyways this child had remarkable talent. Sometimes he would give T-Mac a run for his money. That is why he was the second strongest of the four. He and his brother were an unbeatable combination. To tell the truth he or T-mac can be considered the strongest in the world. Mighty-One can perform the Kamehameha wave, the Special Beam Cannon, Final Flash, Teleportation, the Solar Fare, and Fly

</div>

<?php
    include("footer.php");
?>