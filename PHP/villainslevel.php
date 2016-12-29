<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Villain's Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>Villains</u>:

<br><br>
</th>


</tr>
<tr>
<td width="200px">
<b><u>Names</u>:</b>
</td>
<td>
<b><u>Power Levels</u>:</b>
</td>
</tr>
<tr>
<td>
Spike<br>

Zero<br>

Cyborg
</td>
<td>
200 billion<br>

5 trillion<br>

270 trillion
</td>
</tr>
</table>
</div>

<?php
    include("footer.php");
?>