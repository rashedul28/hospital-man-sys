<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="pres.php">Prescribed</a></li>
		<li class="dropdown">
			<a href="" class="dropbtn">Patient</a>
				<div class="dropdown-content">
				  <a href="addpatient.php">Add New patient</a>
			      <a href="showpatient.php">All Patient</a>
			      <a href="searchpatient.php">Search Patient</a>
			      <a href="deletepatient.php">Delete Patient</a>
			    </div>
		</li>
		<li><a href="profile.php">Profile</a></li>

		<li class="dropdown">
			<a href="" class="dropbtn">Nurse</a>
			<div class="dropdown-content">
				<a href="addnurse.php">Add Nurse</a>
				<a href="shownurse.php">Show Nurse</a>
			</div>
		</li>
<!-- 
		<li><a href="contuct.php">Contuct</a></li> -->
		<li><a href="login.php">Logout</a></li>
	</ul>
	
</body>
</html>