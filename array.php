<?php 
$title = "Array";
include 'includes/header.php' ?>
<h1><?php echo $title ?></h1>

<?php
$num =3;

$numbers =array(1,2,3,4,5,6,7,8,9,10,100,101,120,130,150,160,170,180,190,200);
//Can access The value in a subscript of the array using the index
echo $number[5];
echo "<p>$numbers[9]</p>";

$size = count($numbers);
echo "<p>Array Numbers is size: $size</p>";

for($count=0; $count <$size; $count++){
    echo "<p>$numbers[$count]</p>";
}
?>
<?php include 'includes/footer.php' ?>