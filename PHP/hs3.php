<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Four Children";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

Mom tells Big Dog that she is pregnant. So in time Big Dog and Mom give birth to twins. A baby boy and a baby girl. The boy's name is T-Mac and the girl's name is T-Boom. T-Mac is the oldest of the two since he was born 13 minutes before T-Boom was. With the birth of his two new children, Big Dog is reenergized. He began training every day to get in shape to play with the children. Then he started taking T-Mac and T-Boom out to train with him. He just wanted to test their strength and make sure they inherited his Haven powers. And just as he hoped, they did. So Big Dog trained with them every single day, to build up their power. T-Mac especially like the training sessions, he picked up on the fighting styles and on the controlling of his abilities quickly. But there was T-Boom right behind him on every step. Five years pass by, and another child is born. This child is named Mighty-One, and he also possesses exceptional powers too. Now all three children and Big Dog train. Though Mighty-One is young he can train only so much. But Mom on the other hand has the children work on their studies and prepares them for school. Though when Big Dog works late sometimes, Mom would take the children out and spar with them. Then finally two years later, last but not least, Snookie is born. She is also equipped with powers, now it seemed that the family was complete. At this time now, T-Mac and T-Boom are 8 years old, Mighty-One is 3 years old, and Snookie is at the age of 1. Each child possessing enough strength to contend with most adult fighters. "Here are earth's new hope for survival", says Big Dog, speaking to himself.

</div>


<div id="next">

<a href="hs.php">History Saga</a>

</div>

<?php
    include("footer.php");
?>