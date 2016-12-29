<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Creater";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

My name is Tyrone Holland, and the name of my little story is called "Haven Fighters". This is based off of the TV show Dragonball Z, though the names and most of the story is different. I got the characters from my family. Usually I would day dream of being a super hero, and this is what i normally dream about. I would fight evil villains with the help of my siblings who had their own powers. The ages of the four children are current with my siblings and I as of the year 2006. All the other ages for the villains and the parents are made up. The setting takes place on earth, of course, but in Stoughton, MA, which is my hometown. I created this entire site. I also drew all of the characters here. With the exception of Cyborg, which was drawn by James Rogers, a friend of mine. All the logos I created by myself. Well I hope you enjoy the stories.

</div>

<?php
    include("footer.php");
?>