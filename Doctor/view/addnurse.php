<?php include"navbar.php";
	include "../control/addnurseck.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<fieldset>
		<legend>Add Nurse</legend>

		<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="text" name="age"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" id="male" name="gender" value="male">Male
						<input type="radio" id="female" name="gender" value="female">Female
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="add" class="button green" value="Add">
						<input type="reset" name="clear" class="button red" value="Clear"> 
						<?php echo $error; ?>
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>