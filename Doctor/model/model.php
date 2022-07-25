<?php

class db
{
	function open()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hms";

		$con = new mysqli($servername, $username, $password, $dbname);

		return $con;

	}
// 1
	function registration($name, $email, $phone, $dob, $bio, $uname, $pass, $tname, $con)
	{
		$sql = "INSERT into $tname (name, email, phone, dob, bio, uname, pass) values ('$name', '$email', '$phone', '$dob', '$bio', '$uname', '$pass')";
		$con->query($sql);
	}
// 2
	function login($uname, $pass, $tname, $con)
	{
		
		$sql = "select * from $tname where uname = '$uname' and pass = '$pass' ";
		$result = $con->query($sql);
		return $result;
	}

	function close($con)
	{
		$con->close();
	}
// 3
	function profile($con, $tname, $uname, $pass)
	{
		$sql = "select * from $tname where uname = '$uname' and pass = '$pass'";
		$result = $con->query($sql);
		return $result;
	}
// 4
	function upprof($name, $email, $phone, $dob, $bio, $uname, $pass, $tname, $con)
	{
		$sql = "update $tname set name = '$name', email = '$email', phone = '$phone', dob = '$dob', bio = '$bio', uname = '$uname', pass = '$pass' where uname = '$uname' and pass = '$pass'";
		$con->query($sql);
	}
// 5
	function addpatient($name, $age, $phone, $gender, $tname, $con)
	{
		$sql = "INSERT into $tname(name, age, phone, gender)values('$name', '$age', '$phone', '$gender')";
		$con->query($sql);
	}
// 6
	function showallpatient($tname, $con)
	{
		$sql = "SELECT * from $tname";
		$result = $con->query($sql);
		return $result;

	}
// 7
	function searchpatient($name, $tname, $con)
	{
		$sql = "select * from $tname where name = '$name'";
		$result = $con->query($sql);
		return $result;
	}
// 8
	function searchtodelete($phone, $tname, $con)
	{
		$sql = "select * from $tname where phone = '$phone'";
		$result = $con->query($sql);
		return $result;
	}
// 8
	function addnurse($name, $age, $phone, $gender, $tname, $con)
	{
		$sql = "INSERT into $tname(name, age, phone, gender)values('$name', '$age', '$phone', '$gender')";
		$result = $con->query($sql);
		return $result;
	}
// 9
	function showallnurse($tname, $con)
	{
		$sql = "SELECT * from $tname";
		$result = $con->query($sql);
		return $result;

	}
// 10
	function deleteData($phone, $tname, $con)
	{
		$sql = "DELETE  FROM $tname WHERE phone = '$phone'";
		$con->query($sql);
	}

}


?>