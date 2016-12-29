<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Zero";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="../Images/zero.jpg" height=300 width=300 alt="Zero">
</div>

<div id="local" align="left">
<b>Name</b>: Zero<br>

<b>Age</b>: 31<br>

<b>Sex</b>: Male<br>

<b>Status</b>: Villain<br>

<b>Height</b>: 6'2"<br>

<b>Home</b>: Planet Nerdia
</div>

<div id="bio" align="left">
Zero is the first to invade earth, but the second villain the havens have to face. This creature comes from the planet Nerdia. He has come to earth because of its beauty and plenty resources. To his knowledge this planet doesn't inhabit anyone who can compare with his power. But unknown to him are the havens and boy is he in for a big surprise.

</div>

<?php
    include("footer.php");
?>