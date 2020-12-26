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
	<title> Inventory </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/shop.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">	
			<center style="font-family:Comic Sans MS;"><img   class="starlogo" class="startext" src = "images/icon/STAR.png"> = <?php echo $row["Star"] ?></center>
		    <center style="font-family:Comic Sans MS;" class="NameLogo" ><?php echo "INVENTORY" ?></center>
		    <button  type="button"onclick="backpage()" >Back</button>
		    <script> function backpage() {document.location = 'Userprofile.php';} </script>
	 


	<!-- <div class="shophome" > -->
		
		<form action="" method="POST" class="shophome">

		<button type ="submit" name="pengwin" class="samples"> <br><br><br><img src="images/UserProf/prof1.png" class="shoplogo" /> <br> <br><br></button>	
		<?php
    		if(isset($_POST["pengwin"]) && $row["inv_1"] != null  )
    		{
       	 			$sql2 = "UPDATE useraccounts SET AvatarImage = inv_1  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res2=$db->query($sql2);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
			}
			else if($row["inv_1"] == null && isset($_POST["pengwin"])) { echo '<font color="#FF0000" class="statimation"> NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_1"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="pensil" class="samples"> <br><br><br><img src="images/UserProf/prof2.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["pensil"]) && $row["inv_2"] != null  )
    		{
       	 			$sql3 = "UPDATE useraccounts SET AvatarImage = inv_2  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res3=$db->query($sql3);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
			}
			else if($row["inv_2"] == null && isset($_POST["pensil"]) ) { echo '<font color="#FF0000" class="statimation" >NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_2"] != null ) { echo '<font color="#34eb37" >AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="frog" class="samples"> <br><br><br><img src="images/UserProf/prof3.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["frog"]) &&  $row["inv_3"] != null  )
    		{
       	 			
       	 			$sql4 = "UPDATE useraccounts SET AvatarImage = inv_3  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res4=$db->query($sql4);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_3"] == null && isset($_POST["frog"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_3"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="rabbit" class="samples"> <br><br><br><img src="images/UserProf/prof4.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["rabbit"]) &&  $row["inv_4"] != null )
    		{
       	 			$sql5 = "UPDATE useraccounts SET AvatarImage = inv_4  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res5=$db->query($sql5);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_4"] == null && isset($_POST["rabbit"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_4"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="girl" class="samples"> <br><br><br><img src="images/UserProf/prof5.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["girl"]) &&  $row["inv_5"] != null  )
    		{
       	 			
       	 			$sql6 = "UPDATE useraccounts SET AvatarImage = inv_5  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res6=$db->query($sql6);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_5"] == null && isset($_POST["girl"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_5"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="bee" class="samples"> <br><br><br><img src="images/UserProf/prof6.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["bee"]) &&  $row["inv_6"] != null  )
    		{
       	 			
       	 			$sql7 = "UPDATE useraccounts SET AvatarImage = inv_6  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res7=$db->query($sql7);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_6"] == null && isset($_POST["bee"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_6"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="pig" class="samples"> <br><br><br><img src="images/UserProf/prof7.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["pig"]) &&  $row["inv_7"] != null  )
    		{
       	 			
       	 			$sql8 = "UPDATE useraccounts SET AvatarImage = inv_7  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res8=$db->query($sql8);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_7"] == null && isset($_POST["pig"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_7"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="cat" class="samples"> <br><br><br><img src="images/UserProf/prof8.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["cat"]) &&  $row["inv_8"] != null  )
    		{
       	 			
       	 			$sql9 = "UPDATE useraccounts SET AvatarImage = inv_8  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res9=$db->query($sql9);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_8"] == null && isset($_POST["cat"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_8"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="cute" class="samples"> <br><br><br><img src="images/UserProf/prof9.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["cute"]) &&  $row["inv_9"] != null  )
    		{
       	 			
       	 			$sql10 = "UPDATE useraccounts SET AvatarImage = inv_9  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res10=$db->query($sql10);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_9"] == null && isset($_POST["cute"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_9"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>

		<button type ="submit" name="boy" class="samples"> <br><br><br><img src="images/UserProf/prof10.png" class="shoplogo" /> <br> <br> <br></button>
		<?php
			if(isset($_POST["boy"]) &&  $row["inv_10"] != null  )
    		{
       	 			
       	 			$sql11 = "UPDATE useraccounts SET AvatarImage = inv_10  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res11=$db->query($sql11);
       	 			echo '<font color="#34eb37" class="statimation">UPDATE SUCCESSFULLY </font>';
       	 			
			}
			else if($row["inv_10"] == null && isset($_POST["boy"]) ) { echo '<font color="#FF0000" class="statimation">NOT AQUIRED CHECK SHOP</font>'; }
			else if($row["inv_10"] != null ) { echo '<font color="#34eb37">AVAILABLE</font>'; }
			else {echo str_repeat('&nbsp;', 5); }
		?>
		
		
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