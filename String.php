<?php 

include 'header.php';

$str = "my name is sakil";

echo "strlen: ".strlen($str)."<br>";
echo "str_word_count: ".str_word_count($str)."<br>";
echo "strrev: ".strrev($str)."<br>";
echo "strpos: ".strpos($str, "sakil")."<br>";
echo "str_replace: ".str_replace("sakil", "Sakil Mia", $str)."<br>";



#Constant

define("StringV", "Hi I am Sakil Mia",true);
echo Stringv;

include 'footer.php';




 ?>