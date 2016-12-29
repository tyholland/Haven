<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "T-Boom";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<a onmouseover="switchImage3()" onmouseout="restoreImage3()"><img src="../Images/t-boom.jpg" name="t-boom" height=300 width=300 alt="T-Boom" id="photo3"></a>
</div>

<div id="local" align="left">
<b>Name</b>: T-Boom<br>

<b>Age</b>: 19<br>

<b>Sex</b>: Female<br>

<b>Status</b>: Daughter<br>

<b>Height</b>: 5'8"<br>

<b>SH</b>: 3<br>

<b>Home</b>: Toughtown, Planet Earth
</div>

<div id="bio" align="left">
T-Boom was also the first child born, but she was technically 13 minutes after T-Mac was born. She was the least power of the four children, but do not doubt her power. T-Boom also participated in school, she trained with her siblings but it wasn't her favorite thing to do. She was into other things that went on in the school, which is why she may have been the weakest of the four. T-Boom can perform the Kamehameha wave, the Tri Beam Cannon, the Double Buster, the Galiick Gun, and Fly

</div>

<?php
    include("footer.php");
?>