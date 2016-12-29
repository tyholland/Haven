<?php
    ob_start();
    include("header.php");
    $output = ob_get_contents();
    ob_end_clean();
    $title = "Encounter Of Mom";

    $output = str_replace('%title%', $title, $output);
    echo $output;
?>

<div id="main" align="left">

Big Dog finally finishes high school and has a big graduation with family and friends. He enters himself in one last tournament before heading onto college. Hoping that some new opponents would test his might. At this tournament he meets a young lady named Mom. Mom was also a fighter, but she was fighting in the women"s division. Mom was exceptionally strong for a female, as well as a few of the men. She won her division with ease and so did Big Dog. Big Dog was disappointed in the outcome of the tournament, but not of the new person he found. Astonished by beauty and strength, he convinced himself to ask her out. And so he did, and then Big Dog and Mom started dating. Though some of their dates ended up being sparring sessions. Big Dog and Mom both went onto college and continued to date. After the long and troublesome college years, according to Big Dog, Big decided to make the big move. He asked Mom to marry him and she said yes. So they got married and moved into a nice new home. They ended up getting jobs, shortly after and worked most of the time. Big Dog worked so much that he lost sight of the training that he hasn"t done. He was also feeling like he has lost the thrill and joy in fighting nor training. But two to three years pass by when Mom tells Big Dog some exciting news.

</div>


<div id="next">

<a href="hs.php">History Saga</a>

</div>

<?php
    include("footer.php");
?>