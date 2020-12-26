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

<?php
	
	


	if(isset($_POST["login"]))
		{	
			$password = $_POST["pass"];
			
			$sql="select * from useraccounts where User_name ='{$_POST["name"]}'and User_password='{$_POST["pass"]}'";
			$sql2="select * from admin where Admin_name ='{$_POST["name"]}'and Admin_password='{$_POST["pass"]}'";
			$res=$db->query($sql);
			$res2=$db->query($sql2);
			if($res->num_rows>0)
			{
				$ro=$res->fetch_assoc();
				$hashed_password = 	$ro["HASHPASS"];
				if (password_verify($password , $hashed_password))
				{    
					
					 $_SESSION["User_ID"]=$ro["User_ID"];
					 $_SESSION["User_name"]=$ro["User_name"];
					 if(!empty($_POST["remember"]))
					{
					setcookie ("user_login",$_POST["name"],time()+ (10 * 365 * 24 * 60 * 60));
					}
					 echo "<script>window.open('Loginhome.php','_self');</script>";
				}
				
			}

			else if($res2->num_rows>0)
			{
				$row=$res2->fetch_assoc();
				$hashed_password = 	$row["AdminHashPass"];
				if (password_verify($password , $hashed_password))
				{
					 $_SESSION["Admin_ID"]=$row["Admin_ID"];
					 $_SESSION["Admin_name"]=$row["Admin_name"];
					  echo "<script>window.open('adminpage.php','_self');</script>";

				}
				else
				{
					if(isset($_COOKIE["user_login"])) 
					{
					setcookie ("user_login","");	
				    }
				    else
				    {	
					echo '<font color="#FF0000"><p align="center"> Wrong Password or Username </p></font>';
					}
				}
			}
			else if(!empty($_POST["name"]) && !empty($_POST["pass"]) )
			{
				echo '<font color="#FF0000"><p align="center"> SOME FIELDS ARE EMPTY </p></font>';
			}
			else
			{	
				if(isset($_COOKIE["user_login"])) 
				{
				setcookie ("user_login","");
				}
				else
				{
				echo '<font color="#FF0000"><p align="center"> Wrong Password or Username </p></font>';
			    }
			}
			
		}
	
?>

<div class="loginstart">
	 <center><img src ="images/icon/Login.png" class="loginimg"/></center>
	 
	<form action="" method="POST">
	<input type="Username" name="name" class="logintextbox" placeholder="Enter Username" value="<?php if(isset($_COOKIE["user_login"])) {echo $_COOKIE["user_login"];} ?>" /> <br/><input type="checkbox" name="remember" <?php if(isset($_COOKIE["user_login"])) {?> checked <?php } ?>/> Remember<br/>


	<input type="Password" name="pass" class="logintextbox" placeholder="Enter Password" /><br/><br/>
	<button type="submit" name="login" class="loginbutton">LOGIN</button><br/><br/>
	<button type="button" onclick="Forgotpass()" class="forgotpassbtn">FORGOT PASSWORD?</button><br/><br/>
	<script> function Forgotpass() {document.location = 'ForgotPassword.php';} </script>
	
</div>

	


	
</body>
</html>


