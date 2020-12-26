<?php
	include"database.php";
	//session_start();

	@$Uname="";
	@$UFname="";
	@$UMname="";
	@$ULname="";
	@$Umail="";
    $query="SELECT * FROM useraccounts";
	$result=$db->query($query);
		
	
?>

<html>

<head>
	<title>Admin </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/admin.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">	
		
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >LOGOUT</button>
		    <script> function backpage() {document.location = 'Logout.php';} </script>
	 
<?php

if(isset($_POST["updateacc"]))
{
	$check="SELECT * FROM useraccounts WHERE User_ID={$_POST["UID"]}";
	$checkresult=$db->query($check);

	if($checkresult->num_rows>0)
	{
		$sql="update useraccounts set User_name = '{$_POST["Uname"]}', First_name = '{$_POST["fname"]}', Middle_name = '{$_POST["mname"]}', Last_name = '{$_POST["lname"]}',User_mail = '{$_POST["umail"]}' WHERE User_ID={$_POST["UID"]}";
		if($db->query($sql))
		{
?>
		
		<script>swal({ title: "UPDATE SUCCESFULLY",icon: "success", button: "OK", }) 
		.then((ConChoice)=> {if (ConChoice) { window.open('adminpage.php','_self')  }});
		</script>
<?php

		}
   	}
   	else
   	{
?>
   		<script>swal({ title: "NO DATA FOUND",icon: "warning", button: "OK", }) 
		.then((ConChoice)=> {if (ConChoice) { window.open('adminpage.php','_self')  }});
		</script>
<?php
   	}
}

if(isset($_POST["deleteacc"]))
{   
	if($_POST['UID']=="")
	{
?>
		<script>swal({ title: "ENTER USER ID TO DELETE ACCOUNT",icon: "warning", button: "OK", }) 
		.then((ConChoice)=> {if (ConChoice) { window.open('adminpage.php','_self')  }});
		</script>
<?php
	}
	else
	{
		$delque = "DELETE FROM useraccounts WHERE User_ID={$_POST["UID"]}";
	    if($db->query($delque))
	
?>
		
		<script>swal({ title: "DELETE SUCCESFULLY",icon: "success", button: "OK", }) 
		.then((ConChoice)=> {if (ConChoice) { window.open('adminpage.php','_self')  }});
		</script>

<?php
	
	}
}
?>



	<div class="adminhome" >
	
		<form action="adminpage.php" method="POST">
			<br>
			<center><label>  USER ID</label><br></center>
			<center><input type="text"   name="UID" value="<?php echo @$_POST['UID'];?>0"><br></center><br>
			<center><label>  User Name</label><br></center>
			<center><input type="text"   name="Uname" value="<?php echo $Uname;?>"><br></center>
			<center><label>  First Name</label><br></center>
			<center><input type="text"   name="fname" value="<?php echo $UFname;?>"><br></center>
			<center><label>  Middle Name</label><br></center>
			<center><input type="text"   name="mname" value="<?php echo $UMname;?>"><br></center>
			<center><label>  Last Name</label><br></center>
			<center><input type="text"   name="lname" value="<?php echo $ULname;?>"><br></center>
			<center><label>  Email</label><br></center>
			<center><input type="Email"   name="umail" value="<?php echo $Umail;?>"><br></center>
			<br>
			<center><button  type="submit" name="updateacc" > Update Account</button>
			<button  type="submit" name="deleteacc" > Delete Account</button></center>
			<br>

		<center><table align="center" border="1px" style="width:600px; line-height:40px;"> 
		<tr>
			<th colspan="6"><h2>USER RECORD</h2></th>
		</tr>
		<t>
			<th>ID</th>
			<th>UserName</th>
			<th>FirstName</th>
			<th>MiddleName</th>
			<th>LastName</th>
			<th>Email</th>
		</t>
<?php
 		while($rows=mysqli_fetch_assoc($result))
 		{
?>
			<tr>
				<td><?php echo $rows['User_ID'];?></td>
				<td><?php echo $rows['User_name'];?></td>
				<td><?php echo $rows['First_name'];?></td>
				<td><?php echo $rows['Middle_name'];?></td>
				<td><?php echo $rows['Last_name'];?></td>
				<td><?php echo $rows['User_mail'];?></td>
			</tr>
<?php
		}
?>
		</table></center>
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