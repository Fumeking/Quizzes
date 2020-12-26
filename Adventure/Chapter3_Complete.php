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
	<title> Chapter 3 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">

</head>

<body>

	<audio id="myaudio" controls autoplay hidden="true" > <source src="../Music/Congrats.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<audio id="myaudio2" controls autoplay hidden="true" > <source src="../Music/Chapter3.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio2");  audio.volume = 0.1; </script>
 
	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >HOME</button>
		    <script> function backpage() {document.location = '../Loginhome.php';} </script>

	<div class="AdventureHome3" >
		<div class="mainChap2">
			 
			<h1 >CONGRATULATIONS ADVENTURER!</h1>
			<h3>"FOR COMPLETING CHAPTER THREE"</h3>
			<br>
			<center><a href="EndScreen.php">Continue</a></center>
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