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
	<title> UpdateAccount </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/shop.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">	

			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >Back</button>
		    <script> function backpage() {document.location = 'Userprofile.php';} </script>
	 


	<div class="Updatehome" >

		<form action="" method="POST">
			
			
<?php
		
		if(isset($_POST["updateacc"]) && $row["User_password"] == $_POST["currpass"]  )
		{ 
		$password = $_POST["uppass"];	
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		$sql="update useraccounts set First_name='{$_POST["fname"]}',Middle_name = '{$_POST["mname"]}',Last_name = '{$_POST["lname"]}',User_mail = '{$_POST["upmail"]}',User_password = '{$_POST["uppass"]}',HASHPASS ='$hashed_password' where User_ID='{$_SESSION["User_ID"]}'";
		$db->query($sql);
		echo '<font color="#34eb37"><p align="center">UPDATE SUCCESSFULLY </p></font>';
		}
		else if (isset($_POST["updateacc"]) && $row["User_password"] != $_POST["currpass"])
		{
		echo '<font color="#FF0000"><p align="center">CURRENT PASSWORD IS WRONG </p></font>';
		}
?>

<br>

			<table >
	
             	<tr><th style="font-family:Comic Sans MS;">FIRSTNAME</th> <td  style="font-family:Comic Sans MS;"><?php echo $row["First_name"] ?> </td></tr>
				<tr><th style="font-family:Comic Sans MS;">MIDDLENAME </th> <td style="font-family:Comic Sans MS;"><?php echo $row["Middle_name"] ?> </td></tr>
				<tr><th style="font-family:Comic Sans MS;">LASTNAME</th> <td style="font-family:Comic Sans MS;"><?php echo $row["Last_name"] ?> </td></tr>
				<tr><th style="font-family:Comic Sans MS;">EMAIL </th> <td style="font-family:Comic Sans MS;"><?php echo $row["User_mail"] ?> </td></tr>

			
		    <form action="" method="POST" class>
			<label>  First Name</label><br>
			<input type="text"   name="fname"><br>
			<label>  Middle Name</label><br>
			<input type="text"   name="mname"><br>
			<label>  Last Name</label><br>
			<input type="text"   name="lname"><br>
			<label>  Email</label><br>
			<input type="text"   name="upmail"><br>
			<label>  New Password </label><br>
			<input type="text"   name="uppass"><br>
			<br>
			  <label>  CURRENT PASSWORD</label> 
			  <br>
			  <input type="text"   name="currpass">
			  <br><br>
			  <button  type="submit" name="updateacc" > Update Account</button>
			  <br><br>
		</table>

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