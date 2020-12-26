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
	<title> Account Settings </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/shop.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">	
			<!-- <center style="font-family:Comic Sans MS;"><img   class="starlogo" class="startext" src = "images/icon/STAR.png"> = <?php echo $row["Star"] ?></center> -->
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >Back</button>
		    <script> function backpage() {document.location = 'Userprofile.php';} </script>
	 


	<div class="Settinghome" >
		<form action="" method="POST">
		
			<table >
						
             	<tr><th style="font-family:Comic Sans MS;">FIRSTNAME</th> <td  style="font-family:Comic Sans MS;"><?php echo $row["First_name"] ?> </td></tr>
				<tr><th style="font-family:Comic Sans MS;">MIDDLENAME </th> <td style="font-family:Comic Sans MS;"><?php echo $row["Middle_name"] ?> </td></tr>
				<tr><th style="font-family:Comic Sans MS;">LASTNAME</th> <td style="font-family:Comic Sans MS;"><?php echo $row["Last_name"] ?> </td></tr>
				<tr><th style="font-family:Comic Sans MS;">EMAIL </th> <td style="font-family:Comic Sans MS;"><?php echo $row["User_mail"] ?> </td></tr>

			</table>	
<br>
			<center><button  type="button"onclick="logout()" >Click Here To Update Account</button></center>
		    <script> function logout() {document.location = 'UpdateAcc.php';} </script>
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