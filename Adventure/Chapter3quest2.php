<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '12' WHERE User_ID={$_SESSION["User_ID"]}";
	$res2=$db->query($sql2);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<html>

<head>
	<title> Quest#2 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

	<audio id="myaudio" controls autoplay hidden="true" > <source src="../Music/Chapter3.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.1; </script>
 	
 	

 

	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >HOME</button>
		    <script> function backpage() {document.location = '../Loginhome.php';} </script>


	<div class="AdventureHome3" >
	<form action="" method="POST" >
		<div class="mainChap2">

			<h1>Quest #2</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter3/C3Quest2Q.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>As you make your way through the forest you here voices call to you “Hey Adventurer! Over here” 
			<br><br>As you look towards where the voices are coming from you see Three friendly dragons “ Hey hey adventurer!” the second dragon calls “ Are you up for a riddle? This will only be quick” “Hey hey hey! And who knows!  you may even gain something from it!” the third dragon says. You nod happily in agreement and they begin
			<br><br>The first dragon says “ A small riddle for you, bright of hair and black of eyes” 
			<br><br>The second dragon says ” I follow my lord, watch him race through the sky”
			<br><br>The third dragon says “What am i?”  </h3>
			<div class="img"><img src="../images/Quest/C3Q2.jpg"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C3Q2A" >  A. Bird</button>	
			<button  class="b" type ="submit" name="C3Q2B" >  B. Sunflower</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C3Q2C" >  C. Stars</button>	
			<button  class="d" type ="submit" name="C3Q2D" >  D. Water</button>	
			</div>
<?php


if(isset($_POST["C3Q2B"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter3/Q2C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer B!", text: "That’s right indeed, dark of eyes definitely has the sunflower, so does it’s petals of hair are stunningly bright! And with that we give to you a blessing *you start to shine and feel bubbly* this will help you or it may not, only time will tell. You give thanks and take your leave.", icon: "success",button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter3quest3.php','_self')  }});
    </script>
<?php
	if ($row["quest_12"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_12 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+9  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C3Q2B"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter3/Q2C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer B!", text: "That’s right indeed, dark of eyes definitely has the sunflower, so does it’s petals of hair are stunningly bright! And with that we give to you a blessing *you start to shine and feel bubbly* this will help you or it may not, only time will tell. You give thanks and take your leave.", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter3quest3.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_12 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+9  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C3Q2A"]) or isset($_POST["C3Q2C"]) or isset($_POST["C3Q2D"]))
{
?>
 <audio id="NarrateWrong"controls autoplay hidden="true" > <source src="../Music/Narration/Chapter1/Wrong.mp3"  type="audio/mp3"> </audio>
 <script>  var audio = document.getElementById("NarrateWrong");  audio.volume = 0.4; </script>
 <script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>
 <script>  var pau2 = document.getElementById("NarrateCorrect");  pau2.pause(); </script>	
 <script>  swal({ title: "Wrong Answer!", text: "Incorrect! Please choose again", icon: "warning", button: "Continue!", })  </script>

<?php
}
?>


</body>
</html>