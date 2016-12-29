<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Parent's Power Levels";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="level1" align="left">
<table>
<tr>
<th colspan="2" align="center">
<u>Parents</u>:
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
Big Dog<br>

Mom
</td>
<td>
190 billion<br>

120 million
</td>
</tr>
</table>
</div>

<?php
    include("footer.php");
?>