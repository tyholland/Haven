<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Invaders From Outer-Space";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

Now T-Mac and T-Boom are 11 years old, Mighty-One is 6, and Snookie is 4. Each extremely powerful for their age. In space, a star-ship is hovering over the planet earth. The commander of this ship is Zero. "Ohh look at this planet, it's probably full of nourishing nutrients that we can steal. Zakbar, what's the name of this planet?" says Zero. "It is the planet earth Lord Zero," says Zakbur. "Good, make a course setting for the planet earth," says Zero. So the star-ship is in a direct course for earth. Back at the Haven house, T-Mac, T-Boom, and Mighty-One are outside training. Snookie is inside reading with Mom. The three children finish training and head back home. Once at home they go and take showers. First was T-Mac, then T-Boom, and last was Mighty-One. Afterwards T-Mac and T-Boom decide to watch some TV, and Mighty-One takes a nap. The star-ship passes through the earth's atmosphere and lands in a town called Kanton. All the inhabitants of Kanton were freaked out, scared, and panicking. The door to the star-ship opened and Zero's henchmen came out. "Go and reck havoc on this planet, destroy all those who oppose you. Also gather some nutrients along the way," says Zero. "Yes sir, Lord Zero," reply the henchmen. So about 20 henchmen set off in the town of Kanton and start destroying things. Buildings are being demolished, people being obliterated, and all this for the pure enjoyment of the alien invaders. Zero goes back into his star-ship and decides to use his technology and do an energy scan of the planet. After doing so, he sees that there are no people on the planet that can pose a threat to him. But he leaves the machine running just in case. Some of the henchmen are now gathering nutrients from the planet and bringing them to the ship. The others are still having fun creating havoc all over the place. 
</div>



<div id="next">

<a href="zs1-2.php">Next</a>

</div>

<?php
    include("footer.php");
?>