<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Big Dog's Despair";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

"Dad's power level isn't the one winning, it's the other person. I think dad's in trouble," respond T-Mac. "Don't worry, your father can handle himself," says Mom. T-Mac agrees with Mom and heads into his room. There he sees Mighty-One laying on the bed watching TV. "Hey bro, I'm going to need you to cover for me. I'm going outside," says T-Mac. "Sure no problem. Where you going," replied Mighty-One. "I'm going to check on dad, I think he might be in trouble," answers T-Mac. "Do you want me to go too," says Mighty-One. "No you stay here and watch over things here. Alright man, see ya," says T-Mac. "Ok bye," says Mighty-One. T-Mac sneaks out the bedroom window and heads to where he senses the fighters. Now it is Big Dog who seems to be on the losing end of the fight. With Spike's new upgrade in power, there's no way he can lose. Spike is just playing with Big Dog now, beating him to a pulp. Will Big Dog be able to survive? Is Spike going to fulfill his long awaited dream? Or will T-Mac make it in time?

</div>


<div id="next">

<a href="ss.php">Spike Saga</a>

</div>

<?php
    include("footer.php");
?>