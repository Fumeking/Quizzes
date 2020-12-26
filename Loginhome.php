<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('login.php','_self');</script>";
	}
	$sql="SELECT * FROM useraccounts WHERE User_ID={$_SESSION["User_ID"]}";
		$res=$db->query($sql);		
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
	$sql2="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
		$res2=$db->query($sql2);
		if($res2->num_rows>0)
		{
			$row2=$res->fetch_assoc();
		}
?>




<html>

<head>
	<title> Home </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/LogPage.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
 
 


	<div class ="main">	
		<div class = "Bar">
			<img src="images/icon/QuizzestIcon.png" class="logo">
			<button  type="button"onclick="logout()" >LOGOUT</button>
		    <script> function logout() {document.location = 'Logout.php';} </script>
		    <button  type="button"onclick="Userprofile()" >Profile</button>
			<script> function Userprofile() {document.location = 'Userprofile.php';} </script>
			
			
			<button type="button" onclick="shop()">SHOP</button>
			<center style="font-family:Comic Sans MS;"><img   class="starlogo" src = "images/icon/STAR.png"> = <?php echo $row["Star"] ?></center>
			<script> function shop() {document.location = 'Shop.php';} </script>

			

			
		
		   
	</div> 
  
	<div class ="loginhome">	
		<h1 style="font-family:Comic Sans MS;"> LET'S BEGIN </h1>
		<h2 style="font-family:Comic Sans MS;"> "Click the button below to start "</h2>
		<center><button type="button" onclick="adven()">BEGIN ADVENTURE</button></center>
		<script> function adven() {document.location = "Adventure/Adventure.php";} </script></br>

		<form action="ContinueStory.php" method="POST">
		<center><input name= "ContinueBtn" type="submit" value="CONTINUE" class="ConBtn"></input></center>

	</div>
	


	<div class ="bubbles">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
		<img src = "images/icon/bubble.png">
	</div>

</body>

</html>
