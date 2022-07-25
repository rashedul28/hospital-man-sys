<?php

include "../model/model.php";

$msg = "";
$name = $age = $phone = $gender = "";



$dbobj = new db();
$conobj = $dbobj->open();
$mydata = $dbobj->showallpatient("patient", $conobj);
if($mydata->num_rows > 0)
{
	echo "<fieldset><legend>All Pateint</legend>";
	echo "<table border='1'>";
	echo "<td>NAME</td><td>AGE</td><td>PHONE</td><td>GENDER</td>";
	while ($row = $mydata->fetch_assoc()) {
		
		

		// $name = $row['name'];
		// $age = $row['age'];
		// $phone = $row['phone'];
		// $gender = $row['gender'];
		// $msg = "result found.";

		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['gender']."</td>";
		echo "</tr>";



	}
	echo "</table>";
	echo "</fieldset>";
	
	
}
else{
	$msg = "result dosen't fount";
}

$dbobj->close($conobj);


?>