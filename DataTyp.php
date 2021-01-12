<?php 
include 'header.php';


$name = "sakil mia";
$age  = 24;
$cgpa = 3.88;
$student = True;
$subject  = array('math' , 'testing','design');
$salary = null;

var_dump($name);
print "<br>";
var_dump($age);
print "<br>";
var_dump($cgpa);
print "<br>";
var_dump($student);
print "<br>";
var_dump($subject);
print "<br>";
var_dump($salary);
print "<br>";



class student{
	public $name;
	public function __construct($name)
	{
		$this->name =  $name;
	}

	public function view(){
		echo $this->name;
		
	}
}

$st = new student("SakilMia");
$st->view();



include 'footer.php';

?>