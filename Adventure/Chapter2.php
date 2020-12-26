<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}

?>

<html>

<head>
	<title> Chapter 2 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">

</head>

<body>
	<audio id="myaudio" controls autoplay hidden="true" > <source src="../Music/Chapter2.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.3; </script>
 
	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >HOME</button>
		    <script> function backpage() {document.location = '../Loginhome.php';} </script>

	<div class="AdventureHome2" >
		<div class="mainChap">
			 
			<h1 >CHAPTER 2</h1>
			<h3>"Dawn of a new horizon"</h3>
			<br>
			<center><a href="Chapter2quest1.php">Let's Begin!</a></center>
			</script>
		</div>
			
	 </div> 
		

	
	<div class ="bubbles">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
		<img src = "../images/icon/bubble.png">
	</div>


</body>
</html>