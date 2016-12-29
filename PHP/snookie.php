<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Snookie";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<a onmouseover="switchImage5()" onmouseout="restoreImage5()"><img src="../Images/snookie.jpg" name="snookie" height=300 width=300 alt="Snookie" id="photo5"></a>

</div>

<div id="local" align="left">
<b>Name</b>: Snookie<br>

<b>Age</b>: 12<br>

<b>Sex</b>: Female<br>

<b>Status</b>: Daughter<br>

<b>Height</b>: 5'6"<br>

<b>SH</b>: 4<br>

<b>Home</b>: Toughtown, Planet Earth
</div>

<div id="bio" align="left">
Snookie the last of the four to be born. She was the third strongest of the children. She mainly watched how T-Mac and Mighty-One trained and tried to match them. She always liked doing big kid things, she was never one for doing things that consisted with her own age group. By the way she trained and tried to do everything, you actually don't know how strong she could be. For all we know she could surpass T-Mac and Mighty-One one day.
Snookie can perform the Kamehameha wave, the Masenkoha, the Burning Attack, the Atomic Blast, and Fly.

</div>

<?php
    include("footer.php");
?>