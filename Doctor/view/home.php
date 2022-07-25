
<?php 

include "navbar.php"; 



?>


<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="slideshow-container">
		<div class="mySlides fade">

			<img class="slideimg" src="../img/img1.jpg">
			<div class="numbertext" align="center">1 / 3</div>
		</div>

		<div class="mySlides fade">
			
			<img  class="slideimg" src="../img/img2.jpg">
			<div class="numbertext" align="center">2 / 3</div>	  
		</div>

		<div class="mySlides fade">
			
			<img  class="slideimg"height=" " src="../img/img3.jpg">
			<div class="numbertext" align="center">3 / 3</div>
		</div>
	</div>

	<script src="../js/slideShow.js"></script>

	<?php  include "footer.php"; ?>


</body>
</html>