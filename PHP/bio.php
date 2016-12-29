<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Character Bio";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="hero" align="left">

<table>
<tr>
<td width="200px">
Heroes:<br>
<br>

</td>
<td width="100px">
Villains:<br><br>
</td>
</tr>
<tr>
<td>
<a href="bigdog.php">Big Dog</a><br>

<a href="mom.php">Mom</a><br>

<a href="t-mac.php">T-Mac</a><br>

<a href="t-boom.php">T-Boom</a><br>

<a href="mighty-one.php">Mighty-One</a><br>

<a href="snookie.php">Snookie</a>
</td>
<td>
<a href="spike.php">Spike</a><br>

<a href="zero.php">Zero</a><br>

<a href="cyborg.php">Cyborg</a><br>
<br>
<br>
<br>
</td>
</tr>
<tr>
<th colspan="2" align="center">
<br>
<br>
<a href="superhaven.php">Super Haven Transformations</a>
</th>
</tr>
</table>
</div>

<?php
    include("footer.php");
?>