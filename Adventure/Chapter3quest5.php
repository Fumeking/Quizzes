<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '15' WHERE User_ID={$_SESSION["User_ID"]}";
	$res2=$db->query($sql2);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<html>

<head>
	<title> Quest#5 </title>
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

			<h1>Quest #5</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter3/C3Quest5Q.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>A sense of urgency in the air, it is in the middle of the day and the view shows you with a dragon, a battle seems to be happening between you and the dragon and yet it doesn’t seem intent in harming you. With your knowledge of dragons, you try to reason with it and ask why it is angry. The dragon replies “Your people bothered me first! I only went in this direction because I felt a familiar presence!” As you listen, you realize that you have also felt a familiar presence, the dragon’s presence. In this current situation, if you can beat the dragon, you will be celebrated by the people but you can still reason with it and avoid even more conflict, what will you do?</h3>
			<div class="img"><img src="../images/Quest/C3Q5.jpg"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C3Q5A" >  A. Fight the dragon</button>	
			<button  class="b" type ="submit" name="C3Q5B" >  B. Feed the dragon</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C3Q5C" >  C. Reason with the dragon</button>	
			<button  class="d" type ="submit" name="C3Q5D" >  D. Flee from the dragon</button>	
			</div>
<?php


if(isset($_POST["C3Q5C"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter3/Q5C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer C!", text: "You start explaining to the dragon what it felt and say you have met other dragons that gave you the gift “I see, so my little brothers gave you a gift” You are surprised to find out that this dragon in front of you is actually the eldest out of the four siblings “Very well then, I have no reason to stay any longer, I may cause even more panic, thank you adventurer for not resorting into any further violence” The dragon takes off and you’re left standing, with a satisfied smile on your face.", icon: "success",button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter3miniquiz1.php','_self')  }});
    </script>
<?php
	if ($row["quest_15"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_15 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+6  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C3Q5C"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter3/Q5C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer C!", text: "You start explaining to the dragon what it felt and say you have met other dragons that gave you the gift “I see, so my little brothers gave you a gift” You are surprised to find out that this dragon in front of you is actually the eldest out of the four siblings “Very well then, I have no reason to stay any longer, I may cause even more panic, thank you adventurer for not resorting into any further violence” The dragon takes off and you’re left standing, with a satisfied smile on your face.", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter3miniquiz1.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_15 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+6  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C3Q5A"]) or isset($_POST["C3Q5B"]) or isset($_POST["C3Q5D"]))
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