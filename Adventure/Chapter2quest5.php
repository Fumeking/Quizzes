<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '10' WHERE User_ID={$_SESSION["User_ID"]}";
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

			<h1>Quest #5</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter2/C2Quest5Q .mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>By the church, a crowd gathers, within the center of the crowd seems to be a sword stuck on an anvil; on top of a rock of all things. The sight is quite odd but people are captivated nonetheless, seeing a sword glowing with such radiance, people attempt it but seems to give up rather quick stating that lifting the sword seemed to be an impossible task. The people who tried said “It’s no use, it will not move, I wonder there’ll be anyone who will be able to pick up this sword”. You watching the event transpire think of lifting the blade yourself, you take your turn and try to lift the blade, it really is stuck but will you keep trying or will you give up as easily as all the others have? </h3>
			<div class="img"><img src="../images/Quest/C2Q5q.gif"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C2Q5A" >  A. Try harder to pick the sword up</button>	
			<button  class="b" type ="submit" name="C2Q5B" >  B. Leave it</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C2Q5C" >  C. Kick it</button>	
			<button  class="d" type ="submit" name="C2Q5D" >  D. Tell a joke</button>	
			</div>
<?php


if(isset($_POST["C2Q5A"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q5C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer A!", text: "As you give it your all to pick up the sword, it starts glowing stronger and becomes easier to pull. Success! with hard work and never giving up, Success will eventually be achieved ", icon: "success",button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2miniquiz1.php','_self')  }});
    </script>
<?php
	if ($row["quest_10"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_10 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+6  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C2Q5A"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q5C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer A!", text: "As you give it your all to pick up the sword, it starts glowing stronger and becomes easier to pull. Success! with hard work and never giving up, Success will eventually be achieved ", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2miniquiz1.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_10 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+6  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C2Q5B"]) or isset($_POST["C2Q5C"]) or isset($_POST["C2Q5D"]))
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