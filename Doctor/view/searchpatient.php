<?php


	 include"navbar.php";
	 // include "../control/ajax.php";

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
	<script src="../js/searchpat.js"></script>
<!-- 
	<fieldset>
		<legend>Serch By Patient Name-</legend> -->

		<form action="" method="post">
			<table align="center">
				<tr>
					<td>
						<input type="text" name="searchdata" id="searchdata" placeholder="SEARCH BY NAME" onkeyup="searchmydata()">
						<!-- <input type="submit" name="search" class="button black" value="Search"> -->
					</td>
				</tr>
			</table>
		</form>

		<p id="show"></p>

		<!-- <?php

		echo $msg;

		?> -->
<!-- 	</fieldset> -->

	
</body>
</html>