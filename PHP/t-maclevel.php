<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "T-Mac's Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>T-Mac</u>:

<br>
<br>
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
70 thousand<br>

300 thousand<br>

900 thousand<br>

15 million<br>

70 million<br>

260 million<br>

850 million<br>

10 billion<br>

55 billion<br>

150 billion<br>

860 billion<br>

10 trillion<br>

80 trillion<br>

265 trillion
</td>
</tr>
</table>

</div>

<?php
    include("footer.php");
?>