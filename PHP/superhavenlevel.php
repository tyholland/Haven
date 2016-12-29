<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Super Haven Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>Super Haven Levels</u>:

<br><br>
</th>

</tr>
<tr>
<td width="200px">
<b><u>Haven Levels</u>:</b>
</td>
<td>
<b><u>Power Levels</u>:</b>
</td>
</tr>
<tr>
<td>
Super Haven 1<br>

Super Haven 2<br>

Super Haven 3<br>

Super Haven 4<br>

Super Haven 5
</td>
<td>
150 million<br>

880 billion<br>

275 trillion<br>

240 zillion<br>

250 gazillion
</td>
</tr>
</table>
</div>

<?php
    include("footer.php");
?>