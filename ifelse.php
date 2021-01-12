<?php 
include 'header.php';

$mark = 71;

if ($mark > 80) {
	echo "A+";
}
elseif ($mark >70) {
	echo "A";
}
elseif ($mark >=60) {
	echo "Pass";
}
else{
	echo "Fail";
}

include 'footer.php';
 ?>