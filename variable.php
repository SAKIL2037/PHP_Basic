<?php

include 'header.php';


$name = 'sakil mia';

echo "My Name is $name <br>";


$age = 23;

$cgpa = 3.88;

echo "Age: $age <br>";
echo "CGPA: $cgpa <br>";



$a = 10;
$b = 30;

echo $a + $b ."<br>";


function sum(){
	$GLOBALS['a'] = $GLOBALS['a'] + $GLOBALS['b'];
}

sum();

print($a);



include 'footer.php'

?>