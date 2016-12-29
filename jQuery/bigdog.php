<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Big Dog";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="/Haven/Images/bigdog.jpg" name="bigdog" height=300 width=300 alt="Big Dog" id="photo1">

</div>

<div id="local" align="left">
<b>Name</b>: Big Dog<br>

<b>Age</b>: 47<br>

<b>Sex</b>: Male<br>

<b>Status</b>: Father<br>

<b>Height</b>: 6'3"<br>

<b>SH</b>: 1<br>

<b>Home</b>: Toughtown, Planet Earth
</div>

<div id="bio" align="left">
Big Dog is the original Haven Fighter. He was the protector of earth. He was blessed with special powers most likely passed down from his father and his fathers. Nonetheless he protected the earth, but then came times of peace. Here he fell in love with a woman. Her name is Mom, and they had four children. The first children born were twins. T-Mac and T-Boom, then was Mighty-One and last was Snookie. He trained each and everyone of his children to protect the world. And each of his children became stronger than he. Big Dog can perform the Kamehameha wave, the Big Bang Attack, and Fly.

</div>

<?php
    include("footer.php");
?>