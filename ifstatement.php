<?php 
$title="If Statement";
include 'includes/header.php' ?>
<h1><?php echo $title ?></h1>
<?php

//An if statement will carry out an action base on the value of the variable.

echo '<h2>IF Statment</h2>';

$grade =80;
//=== ,==,>,<,<=,>=,
if($grade >=50){
    echo '<h3 style="color:green">YOU HAVE PASSED</h3>';
}
else{
    echo '<h3 style="color:red">YOU HAVE FAILED</h3>';
}

$grade = 'C';

//IF-Else IF-Else

if($graded =='A'){

    echo '<h2 style="color:green">YOU ARE A SUPERSTAR</h2>';
}
elseif($grade == 'B'){

    echo '<h2 style="color=blue">YOU DID WELL!</h2>';
}
else{
    echo '<h2 style="color:red">YOU HAVE FAILED...</h2>';
}

?>
<?php include 'includes/footer.php' ?>