<?php
	include"database.php";
	session_start();
?>


<html>

<head>
	<title> Register </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/homeindex.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

<?php
if(isset($_POST["register"])) 
{		@$Uname=$_POST['name'];
		@$Upass=$_POST['pass'];
		@$Fname=$_POST['fname'];
		@$Mname=$_POST['mname'];
		@$Lname=$_POST['lname'];
		@$Umail=$_POST['mail'];
		$sql1= "select * from useraccounts where User_name = '{$_POST["name"]}'";
		$sql2= "select * from useraccounts where User_mail = '{$_POST["mail"]}'";
		$res=$db->query($sql1);
		$res2=$db->query($sql2);
		$password = $_POST["pass"];
		$email = $_POST["mail"];
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		if($res->num_rows>0 && $res2->num_rows>0)
		{
			echo '<font color="#FF0000"><p align="center"> USERNAME AND EMAIL IS NOT AVAILABLE </p></font>';	
		}
		else if($res->num_rows>0)
		{
		echo '<font color="#FF0000"><p align="center"> USERNAME IS NOT AVAILABLE </p></font>';	
	    }

	   else if ($res2->num_rows>0)
	   {
	   	echo '<font color="#FF0000"><p align="center"> EMAIL IS NOT AVAILABLE </p></font>';	
	   }
	   else if($Uname=="" || $Upass=="" || $Fname=="" || $Mname=="" || $Lname=="" || $Umail=="")
	   {
?>
	   			<script>swal({ title: "SOME FIELDS ARE EMPTY",icon: "warning", button: "OK", }) </script>			
<?php
	   }
	   else 
		{	
			$sql3= "insert into useraccounts(User_name,User_password,First_name,Middle_name,Last_name,User_mail,AvatarImage,HASHPASS) VALUES ('{$_REQUEST["name"]}','{$_REQUEST["pass"]}','{$_REQUEST["fname"]}','{$_REQUEST["mname"]}','{$_REQUEST["lname"]}','{$_REQUEST["mail"]}','images/Userprof/default.png','$hashed_password')";
		
			if($db->query($sql3))
				{
?>
					<script>swal({ title: "REGISTER SUCCESFULLY",icon: "success", button: "CONTINUE TO LOGIN", }) 
					.then((ConChoice)=> {if (ConChoice) { window.open('login.php','_self')  }});
					</script>
					
<?php
				}
				else
				{
					echo '<font color="#FF0000"><p align="center"> ERROR PLEASE TRY AGAIN LATER! </p></font>';	

				}
		} 
}
?>

<div class="loginstart">
	 <center><img src ="images/icon/Register.png" class="loginimg"/></center>
	<form action="" method="POST">
	<input type="Username" name="name" class="logintextbox" placeholder="Enter Username" /><br/><br/>
	<input type="Password" name="pass" class="logintextbox" placeholder="Enter Password" /><br/><br/>
	<input type="Name" name="fname" class="logintextbox" placeholder="Enter First Name" /><br/><br/>
	<input type="Name" name="mname" class="logintextbox" placeholder="Enter Middle Name" /><br/><br/>
	<input type="Name" name="lname" class="logintextbox" placeholder="Enter Last Name" /><br/><br/>
	<input type="Email" name="mail" class="logintextbox" placeholder="Enter Email" /><br/><br/>
	<button type="submit" name="register" class="loginbutton">SIGNUP</button><br/><br/>



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