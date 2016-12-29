<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "T-Boom's Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>T-Boom</u>:

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

9<br>

10<br>

11<br>

12<br>

13<br>

14
</td>
<td>
60 thousand<br>

200 thousand<br>

600 thousand<br>

950 thousand<br>

20 million<br>

100 million<br>

390 million<br>

640 million<br>

1 billion<br>

120 billion<br>

880 billion<br>

6 trillion<br>

70 trillion<br>

150 trillion
</td>


</tr>
</table>
</div>

<?php
    include("footer.php");
?>