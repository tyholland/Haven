<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Spike's Return";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

"Hey guys, and who do we have here," says Big Dog. Then suddenly shocked in aww, Big Dog realizes who this stranger is. The unknown stranger gives a deranged smile. "Ahh I see you remember who I am now," says the unknown stranger. "Yes I do remember you, Spike." replies Big Dog. "Spike, what a stupid name," says T-Mac. "I see your children are quick at the mouth, Big Dog," says Spike. "Don't pay them no attention," answers Big Dog. "Well I believe my stay is just about done. I was just stopping by to check up on an old friend, see ya." says Spike. And within a blink of an eye, Spike vanishes. "Hey dad, who is Spike," says T-Boom. "Someone who I beat in a tournament long ago. He still holds a grudge against me apparently. But he's no one to worry about. Just be aware of other people's presences for now on." answered Big Dog. "Right!!" reply the children. Back at his lair, Spike takes one of his injections and trains. "Just wait Big Dog, after a few months, more doses, and more training, I will definitely be ready to destroy you. In a couple of months you are going down!!" thinks Spike.

</div>


<div id="next">

<a href="ss.php">Spike Saga</a>

</div>

<?php
    include("footer.php");
?>