<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Cyborg";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="../Images/cyborg.jpg" height=300 width=300 alt="Cyborg">

</div>

<div id="local" align="left">
<b>Name</b>: Cyborg<br>

<b>Age</b>: No Age Permitted<br>

<b>Sex</b>: Male<br>

<b>Status</b>: Villain<br>

<b>Height</b>: 6"3"<br>

<b>Home</b>: Planet Earth
</div>

<div id="bio" align="left">
Cyborg was created by a mad man scientist. His name was Dr. Fergie, and he was totally insane. Unfortunately when Cyborg came to life, the first thing he did was kill Dr. Fergie. Then he set out to kill all living things, do to the fact that he was programmed wrong and all he understood was that he must destroy. He was the third to try and ruin the earth.

</div>

<?php
    include("footer.php");
?>