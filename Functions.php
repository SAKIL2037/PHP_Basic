<?php 
include 'header.php';

function name(){
	echo "Sakil Mia";
}


function sum($a,$b){
	return $a+$b;
}


$x = 10;
$y = 15;
name();
echo sum($x,$y);


include 'footer.php';
?>