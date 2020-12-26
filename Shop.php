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
	<title> Shop </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./Css/shop.css">
</head>

<body>
<audio id="myaudio" controls autoplay hidden="true" volume ="40" loop ="true"> <source src="Music/WelcomeAndHomepage.mp3"  type="audio/mp3"> </audio>
<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
	<div class ="main">	
		<div class = "Bar">	
			<center style="font-family:Comic Sans MS;"><img   class="starlogo" class="startext" src = "images/icon/STAR.png"> = <?php echo $row["Star"] ?></center>
		    <center style="font-family:Comic Sans MS;" class="NameLogo" ><?php echo " AVATAR SHOP" ?></center>
		    <button  type="button"onclick="backpage()" >Back</button>
		    <script> function backpage() {document.location = 'Loginhome.php';} </script>
	 


	<!-- <div class="shophome" > -->
		
		<form action="" method="POST" class="shophome">

		<button type ="submit" name="pengwin" class="samples"> <br><br><br><img src="images/UserProf/prof1.png" class="shoplogo" /> <br> <br>10</button>	
		<?php
    		if(isset($_POST["pengwin"]) && $row['Star']>=10 && $row["inv_1"] == null  )
    		{
       	 			$sql3 = "UPDATE useraccounts SET Star = Star-10  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res3=$db->query($sql3);
       	 			$sql4 = "UPDATE useraccounts SET inv_1 = ('images/Userprof/prof1.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res4=$db->query($sql4);
       	 			echo '<font color="#34eb37"class="statimation">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<10 && $row["inv_1"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_1"] != null) { echo '<font color="#34eb37">PURCHASED</font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}

			
		?>

		<button type ="submit" name="pensil" class="samples"> <br><br><br><img src="images/UserProf/prof2.png" class="shoplogo" /> <br> <br>7</button>
		<?php
			if(isset($_POST["pensil"]) && $row['Star']>=7 && $row["inv_2"] == null  )
    		{
       	 			$sql5 = "UPDATE useraccounts SET Star = Star-7  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res5=$db->query($sql5);
       	 			$sql6 = "UPDATE useraccounts SET inv_2 = ('images/Userprof/prof2.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res6=$db->query($sql6);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<7 && $row["inv_2"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_2"] != null) { echo '<font color="#34eb37">PURCHASED</font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="frog" class="samples"> <br><br><br><img src="images/UserProf/prof3.png" class="shoplogo" /> <br> <br>13</button>
		<?php
			if(isset($_POST["frog"]) && $row['Star']>=13 && $row["inv_3"] == null  )
    		{
       	 			$sql7 = "UPDATE useraccounts SET Star = Star-13  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res7=$db->query($sql7);
       	 			$sql8 = "UPDATE useraccounts SET inv_3 = ('images/Userprof/prof3.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res8=$db->query($sql8);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<13 && $row["inv_3"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_3"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="rabbit" class="samples"> <br><br><br><img src="images/UserProf/prof4.png" class="shoplogo" /> <br> <br>9</button>
		<?php
			if(isset($_POST["rabbit"]) && $row['Star']>=9 && $row["inv_4"] == null  )
    		{
       	 			$sql9 = "UPDATE useraccounts SET Star = Star-9  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res9=$db->query($sql9);
       	 			$sql10 = "UPDATE useraccounts SET inv_4 = ('images/Userprof/prof4.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res10=$db->query($sql10);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";

			}
			else if($row['Star']<9 && $row["inv_4"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_4"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="girl" class="samples"> <br><br><br><img src="images/UserProf/prof5.png" class="shoplogo" /> <br> <br>8</button>
		<?php
			if(isset($_POST["girl"]) && $row['Star']>=8 && $row["inv_5"] == null  )
    		{
       	 			$sql11 = "UPDATE useraccounts SET Star = Star-8  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res11=$db->query($sql11);
       	 			$sql12 = "UPDATE useraccounts SET inv_5 = ('images/Userprof/prof5.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res12=$db->query($sql12);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
       	 			
			}
			else if($row['Star']<8 && $row["inv_5"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_5"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="bee" class="samples"> <br><br><br><img src="images/UserProf/prof6.png" class="shoplogo" /> <br> <br>14</button>
		<?php
			if(isset($_POST["bee"]) && $row['Star']>=14 && $row["inv_6"] == null  )
    		{
       	 			$sql13 = "UPDATE useraccounts SET Star = Star-14  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res13=$db->query($sql13);
       	 			$sql14 = "UPDATE useraccounts SET inv_6 = ('images/Userprof/prof6.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res14=$db->query($sql14);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<14 && $row["inv_6"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_6"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="pig" class="samples"> <br><br><br><img src="images/UserProf/prof7.png" class="shoplogo" /> <br> <br>5</button>
		<?php
			if(isset($_POST["pig"]) && $row['Star']>=5 && $row["inv_7"] == null  )
    		{
       	 			$sql15 = "UPDATE useraccounts SET Star = Star-5  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res15=$db->query($sql15);
       	 			$sql16 = "UPDATE useraccounts SET inv_7 = ('images/Userprof/prof7.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res16=$db->query($sql16);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<5 && $row["inv_7"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_7"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="cat" class="samples"> <br><br><br><img src="images/UserProf/prof8.png" class="shoplogo" /> <br> <br>6</button>
		<?php
			if(isset($_POST["cat"]) && $row['Star']>=6 && $row["inv_8"] == null  )
    		{
       	 			$sql17 = "UPDATE useraccounts SET Star = Star-6  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res17=$db->query($sql17);
       	 			$sql18 = "UPDATE useraccounts SET inv_8 = ('images/Userprof/prof8.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res18=$db->query($sql18);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<6 && $row["inv_8"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_8"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="cute" class="samples"> <br><br><br><img src="images/UserProf/prof9.png" class="shoplogo" /> <br> <br>15</button>
		<?php
			if(isset($_POST["cute"]) && $row['Star']>=15 && $row["inv_9"] == null  )
    		{
       	 			$sql19 = "UPDATE useraccounts SET Star = Star-15  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res19=$db->query($sql19);
       	 			$sql20 = "UPDATE useraccounts SET inv_9 = ('images/Userprof/prof9.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res20=$db->query($sql20);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<15 && $row["inv_9"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_9"] != null) { echo '<font color="#34eb37">PURCHASED</font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
		?>

		<button type ="submit" name="boy" class="samples"> <br><br><br><img src="images/UserProf/prof10.png" class="shoplogo" /> <br> <br>8</button>
		<?php
			if(isset($_POST["boy"]) && $row['Star']>=8 && $row["inv_10"] == null  )
    		{
       	 			$sql21 = "UPDATE useraccounts SET Star = Star-8  WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res21=$db->query($sql21);
       	 			$sql22 = "UPDATE useraccounts SET inv_10 = ('images/Userprof/prof10.png') WHERE User_ID='{$_SESSION["User_ID"]}'";
       	 			$res22=$db->query($sql22);
       	 			echo '<font color="#34eb37">already have </font>';
       	 			echo "<meta http-equiv='refresh' content='0'>";
			}
			else if($row['Star']<8 && $row["inv_10"] == null) { echo '<font color="#FF0000">Not Enough Star </font>'; }
			else if($row["inv_10"] != null) { echo '<font color="#34eb37">PURCHASED </font>';}
			else {echo '<font color="#dfeb34"class="statimation">AVATAR AVAILABLE </font>';}
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