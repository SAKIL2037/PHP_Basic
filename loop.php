<?php 
include 'header.php';

$x = 0;

echo "while loop";
while ($x <= 10) {
	echo '<br>'.$x;
	$x++;
}

echo "Do while loop";
$x = 0;
do{
	
   if ($x%2!=0) {
    echo '<br>'.$x;
  
   }
  
 $x++;
}while ( $x<= 10);

echo "for loop";
$x = 0;
for ($i=0; $i < 10; $i++) { 
	if ($i %2==0){
	 echo '<br>'.$i;
	}
}

$color = array("Red","Blue","White");

foreach ($color as $value) {
	echo "<br> $value";
}



include 'footer.php'; ?>