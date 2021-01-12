<?php 
include 'header.php';

#indexed Array

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

#associat Array

$age = array("Peter"=>35, "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
#multidimentional

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
);
    
for ($row = 0; $row < 2; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

include 'footer.php';
 ?>