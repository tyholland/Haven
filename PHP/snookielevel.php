<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Snookie's Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>Snookie</u>:

<br><br>
</th>

</tr>
<tr>
<td width="200px">
<b><u>Ages</u>:</b>
</td>
<td>
<b><u>Power Levels</u>:</b>
</td>
</tr>
<tr>
<td>
1<br>

2<br>

3<br>

4<br>

5<br>

6<br>

7
</td>
<td>
500 thousand<br>

990 thousand<br>

250 million<br>

875 million<br>

105 billion<br>

750 billion<br>

280 trillion
</td>
</tr>
</table>
</div>

<?php
    include("footer.php");
?>