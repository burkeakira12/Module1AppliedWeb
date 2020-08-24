<?php 
$title= "String Manipulation";
include 'includes/header.php' ?>
    <h1><?php echo $title ?></h1>

    <?php

        $phrase1 ="student who came late";
        $phrase2 ="in class, stand with Rock";
        $name = "akira burke";

        echo $phrase1 .", named Tiffany, ". $phrase2;
        
        echo '<br/>';
        echo '<hr/>';


        //string transformation
        echo 'Uppercase first letter: '. ucfirst($name). '<br/>'; 
        echo 'Uppercase first letter of each word: '. ucwords($name). '<br/>';
        echo 'Upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtoupper("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';

        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String: - Nested Function: ' . strtoupper(str_repeat('a',10))
        . '<br/>';
        echo 'Get A Substring: ' . substr($name, 3, 5).'<br/>';

        echo 'Get position of string: '. strpos($name,'w') .'<br/>';

        echo 'Find Character "A": ' . strchr($name,'A'). '<br/>';
        echo 'Find Character "B": ' . strchr($name,'B'). '<br/>';
        echo 'Find Character "i": ' . strchr($name,'i'). '<br/>';
        echo 'Find Character "a": ' . strchr($name,'a'). '<br/>';

        echo 'Find Length of String: '. strlen($name) .'<br/>';

        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces on the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces on the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: '. str_replace("stand","sit",
        $phrase2 ) . '<br/>'; 
       ?> 
<?php include 'includes/footer.php' ?>