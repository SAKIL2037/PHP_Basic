<?php 
include 'header.php';

$numlist = array(5,10,60,35,40,80,70,-100,35);


echo pi().'<br>';
echo min($numlist).'<br>';
echo max($numlist).'<br>';
echo abs(-5.5).'<br>';
echo sqrt(60).'<br>';
echo round(3.60).'<br>';
echo round(3.50).'<br>';
echo round(3.40).'<br>';
echo rand().'<br>';
echo rand(1,10).'<br>';



include 'footer.php';
 ?>