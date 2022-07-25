<?php

include "../control/loginck.php";


?>


<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
		<link rel="stylesheet" href="../css/style.css">

		<script src="../js/password.js"></script>
	</head>
	<body>
		<center>
			<fieldset>
				<legend>Log in as Doctor</legend>
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
				<!-- <div> -->
				<table>
					<tr>
						<!-- <td colspan="2" align="center"><font size="6">Doctor</font></td>
						<td></td> -->
					</tr>
					<tr>
						<!-- <td>Username:</td> -->
						<td><input type="text" name="uname" placeholder="USERNAME" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"></td>
					</tr>
					<tr>
						<!-- <td>Password:</td> -->
						<td><input type="text" name="pass" id="pass" onkeyup="checkpass()"placeholder="PASSWORD" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"></td>
						<td><p id="passerror" ></p></td>
					</tr>
					<tr>
						<!-- <td><input class="button red" type="reset" name="reset"></td> -->
						<td><input class="button red" type="reset" name="reset"><input class="button green" type="submit" name="submit"></td>
						
						
					</tr>
					<tr>
						<td><input type="checkbox" name="remember">Remember me</td>
					</tr>
					<tr>
						<td><?php echo $error; ?></td>
						<!-- <td></td> -->
					</tr>
					<tr>
						<td>I have new here <a href="reg.php">REGISTER NOW</a></td>
						      <td><a href="/Hospital Management System/main.php">Change User</a></td>

						<!-- <td></td> -->
					</tr>
				</table>
			<!-- </div> -->
			</form>
			</fieldset>
		</center>
	</body>
</html>