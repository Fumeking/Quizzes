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
?>
<html>

<head>
	<title> Profile </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/Userpage.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">	
		    <center><img src="images/icon/QuizzestIcon.png" class="logo"></center>
	</div> 
	
	<div class ="Userhome1">	

	</div>

	<div class ="Userhome2">
	<center style="font-family:Comic Sans MS;"><?php echo $row["First_name"] , $row["Last_name"] ?></center>	
    <img class="profilelogo" src=<?php echo $row["AvatarImage"] ?>> 
	
		
	</div>
	<div class ="Userhome3">	
		<button type="button" onclick="acc()">ACCOUNT SETTINGS</button>
		<script> function acc() {document.location = 'AccountSetting.php';} </script>

	<button type="button" onclick="bag()"> AVATAR INVENTORY</button>
	<button type="button" onclick="Home()">BACK TO HOMEPAGE</button>
	<script> function bag() {document.location = 'Inventory.php';} </script>
	<script> function Home() {document.location = 'Loginhome.php';} </script>
	
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