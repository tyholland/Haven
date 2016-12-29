<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "T-Mac";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="/Haven/Images/t-mac.jpg" name="t-mac" height=300 width=300 id="photo2" alt="T-Mac">
</div>

<div id="local" align="left">
<b>Name</b>: T-Mac<br>

<b>Age</b>: 19<br>

<b>Sex</b>: Male<br>

<b>Status</b>: Son<br>

<b>Height</b>: 5'11"<br>

<b>SH</b>: 4<br>

<b>Home</b>: Toughtown, Planet Earth
</div>

<div id="bio" align="left">
T-Mac is the first born child and twin. He is 13 minutes older than T-Boom. He is the strongest of the four children. He learned most of his fighting skills from his father as well as making up some new moves of his own. Mom made him go to school, and not just train all day. He trained with all his siblings, testing theirs and his abilities. Always trying to find a new level beyond that of which they was. T-Mac can perform the Kamehameha wave, the Destructo Disk, the Spirit Bomb, the Teleportation, the Death Cannon, and Fly

</div>

<?php
    include("footer.php");
?>