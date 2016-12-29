<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Dr. Fergie";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

Cyborg's retinal eyes sensors detect that Mighty-One is human and he precedes to take out his flame thrower. Mighty-One turns his head to look at the burning mountain and Cyborg says, "Die human." Cyborg unleashes a devastating ball of unbearably hot fire at Mighty-One. "What!!!" is all that is heard from Mighty-One as the fire blast came at him. Cyborg scans the area and senses no more life and walks away. Back at the Haven house, "Hey Mighty-One has been gone for a while," says T-Mac. "I'll go check on him," replies Snookie. Snookie then heads out and sees smoke in the distance. She heads over and sees a good portion of the woods burnt to a crisp. Then she hears a yell from below. The grounds shakes and light shines from the ground. Bomb!!! Mighty-One blows all the debris and rubble from on top of him, with his normal power up. "Snookie, what are you doing here," says Mighty-One. "You were gone for a long time," replied Snookie. "Hey did you by any chance see a guy around here," asks Mighty-One. "No, why?" answers Snookie. "Darn it, because there was a guy who burnt the woods and attacked me," said Mighty-One. Snookie looks around and tries to see if she can sense a life presence but is unable to. "I tried to sense someone, but there's no one here. But anyways lets go home because everyone"s looking for you," says Snookie. "Alright lets go," replies Mighty-One. They head back home and Cyborg moves onto the first city in reach. Getting ready to start his destruction of the earth and the human race. Who is this new foe? Where will he strike first?

</div>


<div id="next">

<a href="cs.php">Cyborg Saga</a>

</div>

<?php
    include("footer.php");
?>