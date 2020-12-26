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
	<title> CONGRATULATIONS </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">

</head>

<body>

	
	<audio id="myaudio2" controls autoplay hidden="true" > <source src="../Music/Chapter3.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio2");  audio.volume = 0.2; </script>
 
	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <?php echo str_repeat('&nbsp;', 20); ?>
		    

	<div class="AdventureHome" >
		<div class="mainChap3">
			 
			<h1 >Thank you for playing Quizzest</h1>

			<br>
			<center><a href="../Loginhome.php">HOME</a></center>
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