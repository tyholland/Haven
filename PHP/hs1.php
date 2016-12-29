<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "The First Haven Fighter";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

On earth there is one person who fought to protect the earth and it's inhabitants. Big Dog is this man. Big Dog isn't an earthling though, his is a Haven. His father's, father's, father came to earth on a space pod before his planet was destroyed. So to be technical, you could say Big Dog is half earthling and half Haven, since his mother is an earthling. Big Dog is blessed with special powers, due to him being half Haven. He used his powers to protect the earth. Though his father never used his powers and has told Big Dog that the world isn't ready to see his special gifts yet. Since no one on earth has has the capacity to possess that kind of power. Nonetheless Big Dog felt the urge to help those in need. So with that, he did just that, as well as participate in martial arts tournaments. Big Dog never used his full power, but he always won the tournaments. But there was one tournament where he faced a man named Spike. Spike was from a competitive village, where he is considered the strongest in his clan. Big Dog and Spike fought each other in the championship round. This was one great battle, at which Big Dog was surprised to be fighting. Nevertheless he found it that much more thrilling. He was also surprised to be fighting someone who made him use more of his strength than he would normally. But in the end Big Dog defeated Spike, leaving Spike severely injured but living. Spike was in disgrace and was disowned by his village and family, exiled for the rest of his life. After fighting in many tournaments and protecting the earth from natural disasters, since there wasn"t any villains at the time. The was pretty much peaceful for many years, and Big would go onto finish up high school.

</div>


<div id="next">

<a href="hs.php">History Saga</a>

</div>

<?php
    include("footer.php");
?>