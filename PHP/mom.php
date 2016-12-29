<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Mom";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="pic" align="left">

<img src="../Images/mom.jpg" height=300 width=300 alt="Mom">

</div>

<div id="local" align="left">
<b>Name</b>: Mom<br>

<b>Age</b>: 47<br>

<b>Sex</b>: Female<br>

<b>Status</b>: Mother<br>

<b>Height</b>: 5'9"<br>

<b>Home</b>: Toughtown, Planet Earth<
</div>

<div id="bio" align="left">
Mom was a regular fighter. She was stronger than any normal women on earth. She met Big Dog at a fighting tournament and instantly fell in love. They had four children together. The first children born were twins. T-Mac and T-Boom, then was Mighty-One and last was Snookie.
Mom only knew one technique and it was the Kamehameha Wave and she could fly.

</div>

<?php
    include("footer.php");
?>