<?php
	include"database.php";
	session_start();
?>

<html>

<head>
	<title> Login </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/homeindex.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">
		    <img src="images/icon/QuizzestIcon.png" class="logo">
		    <button  type="button"onclick="backpage()" >Back</button>
		    <script> function backpage() {document.location = 'index.html';} </script>
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
<div class="loginstart">
	 <center><img src ="images/icon/Login.png" class="loginimg"/></center>
	 
	<h2> PASSWORD HAS BEEN SENT CHECK YOUR EMAIL  </h2>
	<button type="button" onclick="backlog()" name="backlog" class="forgotpassbtn">BACK TO LOGIN</button><br/><br/>
	 <script> function backlog() {document.location = 'login.php';} </script>
	
</div>
<?php
	if(isset($_POST["login"]))
		{
			$sql="select * from useraccounts where User_name ='{$_POST["name"]}'and User_password='{$_POST["pass"]}'";
				$res=$db->query($sql);
				if($res->num_rows>0)
				{
					$ro=$res->fetch_assoc();
					$_SESSION["User_ID"]=$ro["User_ID"];
					$_SESSION["User_name"]=$ro["User_password"];
					echo "<script>window.open('Loginhome.php','_self');</script>";
				}
				else
				{

					echo '<font color="#FF0000"><p align="center"> Wrong Password or Username </p></font>';
					
				}
		}
?>

	


	
</body>
</html>


