<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Mighty-One's Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>Mighty-One</u>:

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

7<br>

8<br>

9
</td>
<td>
350 thousand<br>

960 thousand<br>

70 million<br>

420 million<br>

890 million<br>

60 billion<br>

320 billion<br>

990 billion<br>

275 trillion
</td>
</tr>
</table>
</div>

<?php
    include("footer.php");
?>