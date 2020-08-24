
<?php 
$title = "Index";
include 'includes/header.php' ?>
<h1>Hello HTML - PHP Primer</h1>
<br/>
<?php
echo 'Hello PHP!';
echo '<br/>';
echo '<br/';

?>

<?php

$name = 'Akira Burke';
$age = 21;
echo $name;

echo '<h1>My Name Is: '.$name.' </h1>';
echo '<h1>My Age Is: '.$age.' </h1>';

echo "<h1>My Name Is: $name </h1>";

?>
<?php include 'includes/footer.php' ?>