<?php 

include "../model/model.php";

$error = '';

if(isset($_POST['add']))
{
	if(empty($_POST['name'])  || empty($_POST['age'])  ||  empty($_POST['phone'])   ||  !isset($_POST['gender']))
	{
		$error = "Fill all info";
	}
	else{

		$dbobj = new db();
		$conobj = $dbobj->open();

		$dbobj->addpatient($_POST['name'], $_POST['age'], $_POST['phone'], $_POST['gender'], "patient", $conobj);

		$dbobj->close($conobj);

	}
}







 ?>