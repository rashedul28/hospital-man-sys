<?php
session_start();
if(empty($_SESSION["username"]))
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../css/appoint.css">
	<title></title>

</head>
<body>

	<center><h1>  Pharmacy Informaton </h1> </center>
<div class="pharmaInfo"><table>
    <tr>  <td><b> NO </b></td>  <td><b>Pharmacy Name </b></td> <td><b>Drugs</b> </td> <td><b> Service Time</b></td> </tr>
   <tr> <td> 1</td>  <td>Lazz Pharma </td> <td>4070</td><td>24/7 Open</td></tr>
   <tr> <td> 1</td>  <td>Tazz Pharma </td> <td>4070</td><td>24/7 Open</td></tr>
   <tr> <td> 2</td> <td>Shanto Pharma </td><td>4000</td><td>24/7 Open</td></tr>
   <tr> <td> 3</td> <td>Nobin Pharma </td> <td>4023 </td><td>24/7 Open</td></tr>

   </table>
   <br>


   <a href="dashboard.php"><b>Go Back to dashboard </b></a>
   </div>


</body>
</html>
