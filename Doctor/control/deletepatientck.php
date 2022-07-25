<?php 


include "../model/model.php";




if($_POST['phone'] == "")
{
	echo "no data given";
}

else
{
	$dbobj = new db();
	$conobj = $dbobj->open();
	$info = $dbobj->searchtodelete( $_POST['phone'], "patient", $conobj);


	if($info->num_rows > 0)
	{

		echo "<fieldset><legend>Result found</legend>";
		echo "<table border='1'>";
		echo "<td>NAME</td><td>AGE</td><td>PHONE</td><td>GENDER</td>";
		while ($row = $info->fetch_assoc()) {
			
			

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

		if(isset($_POST['submit'])) $dbobj->deleteData( $_POST['phone'], "patient", $conobj);



		
	}

	else
	{

		echo "no results found";
	}


	$dbobj->close($conobj);
}











?>