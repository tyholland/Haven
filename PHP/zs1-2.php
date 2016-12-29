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

T-Boom is flicking through the channels, when she comes upon the news station. Her and T-Mac see all the devastation occurring on earth when the news report starts. "Hey there I'm John Redhere, on the Channel 3 News.  We are live from the city Kanton where it seems that we are under attack by invaders from outer space. They are destroying buildings as well as people. They're also taking parts of the planet, such as grass, soil, grains, and etc.. and taking them back to their ship," says the news reporter. Big Dog walks in the door, coming home from work. "Hey dad, Kanton is under attack from space invaders," says T-Mac. "Well I didn't train you guys to just sit around as the earth is being destroyed. Now you guys are all stronger than me except for Snookie, so go out there and show me what you got." says Big Dog. "Right," shout the twins. "Be careful, Ok," says Mom. "Ok mom," reply the twins. Then they suit up and fly off. Flying at top speeds, they rush to get to Kanton in time. "Yo come on we gotta speed this up," says T-Mac. "Alright, ready set go," replies T-Boom. They both increase their speed and continue their voyage. "Yes planet earth is basically mine now, I think I'll destroy it now," says Zero. Alert Alert Alert, rings Zero's power level machine. "Detection, two high power levels," the machine reports. "Ohh I see we're going to have some fun after all," says Zero. Zero walks over to the intercom and announces that there are two fighters on the way. The henchmen return to the star-ship and wait for their foes to arrive. "Hey look there's the star-ship," says T-Boom. "Yeah, lets go land and introduce ourselves," replies T-Mac. The twins slow down and slowly float down to the ground, landing right in front of the henchmen.

</div>


<div id="next">

<a href="zs.php">Zero Saga</a>

</div>

<?php
    include("footer.php");
?>