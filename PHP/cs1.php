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

A couple more years pass by. These years were peaceful and joyous of times. T-Mac and T-Boom enter their freshmen year of high school. Mighty-One and Snookie are still in elementary school. We enter in a lab located inside of a mountain. The owner of this laboratory is Dr. Fergie. Here Dr. Fergie is creating an android, named Cyborg, to take over the world. Dr. Fergie plans to use Cyborg as his right hand man as he rules the world. Many years of work and isolation has brought Dr. Fergie to this day where he is finally finished building Cyborg. Cyborg"s eyes open and he looks around the lab and says, "Where am I." "You are here with I, Dr. Fergie, your master. I created you and you are to do everything that I command you to do," replies Dr. Fergie. "That's sounds nice and all, but I don"t take orders from anyone," says Cyborg. Meanwhile after a boring day of school, Mighty-One decides to go play outside. "Hey I'm going to train outside for a little while, anyone want to come," says Mighty-One. "Nah, I got homework," replies T-Mac. "Me too," replies T-Boom. "I'm watching TV," replies Snookie. "Alright, see you guys in a few," responds Mighty-One. "Bye," they all reply. Mighty-One goes off and trains. Back at the secret laboratory, "But I'm your creator, you have to obey me," says Dr. Fergie. "That is true, you are my creator. But I"ve been programmed for destruction and nothing else. So bye," replies Cyborg as he starts blowing up the laboratory. Mighty-One sees one of the mountains explode and heads towards it. Cyborg is walking around in the fire and Mighty-One sees him as he flies above the mountain. Mighty-One floats down and grabs Cyborg and takes him to a safe clearing. "You ok sir," says Mighty-One. "I'm good," replies Cyborg. "was there anyone else in there," said Mighty-One. "No," responds Cyborg. 

</div>



<div id="next">

<a href="cs1-1.php">Next</a>

</div>

<?php
    include("footer.php");
?>