<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '6' WHERE User_ID={$_SESSION["User_ID"]}";
	$res2=$db->query($sql2);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<html>

<head>
	<title> Quest#1 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

	<audio id="myaudio" controls autoplay hidden="true" > <source src="../Music/Chapter2.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.3; </script>
 	
 	

 

	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >HOME</button>
		    <script> function backpage() {document.location = '../Loginhome.php';} </script>


	<div class="AdventureHome2" >
	<form action="" method="POST" >
		<div class="mainChap2">

			<h1>Quest #1</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter2/C2Quest1Q.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>Early in the morning you set out on the forest near town, as you keep going deeper you notice that you’ve lost your way, you don’t recognize the area and you don’t know the direction you even came from. You hear a voice call out to you “Over here” and as you turn you notice a masked man sitting by the tree.
			<br><br>“Lost are we?” says the man “you’ve stumbled on the resting place of my friends”
			<br><br>As you look around you notice odd shaped stones. “Well you seem to be in a hurry so I’ll help you but in one condition, answer this simple riddle of mine” you nod, “very well then” 
			<br><br>“If you don’t keep me, I will break, what am I?” 
		    </h3>
			<div class="img"><img src="../images/Quest/C2Q1.jpg"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C2Q1A" >  A. Ice</button>	
			<button  class="b" type ="submit" name="C2Q1B" >  B. Promise</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C2Q1C" >  C. Heart</button>	
			<button  class="d" type ="submit" name="C2Q1D" >  D. Glass</button>	
			</div>
<?php


if(isset($_POST["C2Q1B"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q1C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer is B!", text: "Remember to keep the promises you make, people often time hold on to this promises to look forward to,I have broken a lot of promises myself and now I have nothing but these stones around me. You hear a bit of satisfied laugh,  Head right and keep going forward, that should send you back to town” he waves farewell to you", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2quest2.php','_self')  }});
    </script>
<?php
	if ($row["quest_6"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_6 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+7  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C2Q1B"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q1C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer is B!", text: "Remember to keep the promises you make, people often time hold on to this promises to look forward to, I have broken a lot of promises myself and now I have nothing but these stones around me. You hear a bit of satisfied laugh,  Head right and keep going forward, that should send you back to town” he waves farewell to you", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2quest2.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_6 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+7  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C2Q1A"]) or isset($_POST["C2Q1C"]) or isset($_POST["C2Q1D"]))
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