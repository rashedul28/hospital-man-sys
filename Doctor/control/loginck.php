<?php
session_start();

include "../model/model.php";


$error = "";

if(isset($_POST['submit']))
{
	if(empty($_POST['uname']) || empty($_POST['pass']))
	{
		$error = "Fill the input first";
		// alert("hhhh");
	}
	else
	{
		$dbobj = new db();
		$conobj = $dbobj->open();
	    $cr = $dbobj->login($_POST['uname'], $_POST['pass'], "doctor", $conobj);
	    if($cr->num_rows > 0)
	    {
	    	$row = $cr->fetch_assoc();
	    	if($row['uname'] == $_POST['uname'] && $row['pass'] == $_POST['pass'])
	    	{

				
				

	    		if(!empty($_POST["remember"]))   
			   {  
				    setcookie ("username",$row['uname'],time()+ 3600);  
				    setcookie ("password",$row['pass'],time()+ 3600);
				    // $_SESSION["username"] = $row['uname'];
			   } 

			    else  
			   {  
				    if(isset($_COOKIE["username"]))   
				    {  
				     	setcookie ("username","");  
				    }  
				    if(isset($_COOKIE["password"]))   
				    {  
				     	setcookie ("password","");  
				    }  
			   } 

			  	 $_SESSION["username"] = $row['uname'];
				$_SESSION["password"] = $row['pass'];


	    		header("location: ../view/home.php");
	    	}
	    	else
	    	{
	    		 // session_destroy();
	    		$error = "Username or password is incorrect";
	    	}
	    }

		$dbobj->close($conobj);
	}
}

?>