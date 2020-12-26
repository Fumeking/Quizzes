<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '7' WHERE User_ID={$_SESSION["User_ID"]}";
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

			<h1>Quest #2</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter2/C2Quest2Qq.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>During the afternoon, the town seemed lively, you head up town to see more of the area and you stumble upon an elderly woman, dark skinned and has silver hair. “Good afternoon young one” she greets’ and you greet her as well. “I see you’re new, I am the one in charge of this town and I welcome you” she notices the clothes you are wearing “Ah I see you’re an adventurer, and a novice, I have behind me are the famous leaves of alima, purple leaves that help in healing, I’m willing to offer you some but you have to answer this simple riddle  “At night they come without being called, by day they disappear without being noticed, what are they?</h3>
			<div class="img"><img src="../images/Quest/C2Q2.jpg"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C2Q2A" >  A. Stars</button>	
			<button  class="b" type ="submit" name="C2Q2B" >  B. Air</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C2Q2C" >  C. Cats</button>	
			<button  class="d" type ="submit" name="C2Q2D" >  D. Apples</button>	
			</div>
<?php


if(isset($_POST["C2Q2A"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q2C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer A!", text: "Well done! Stars are tricky things, beautiful and yet you can only see them in the dark where they shine the brightest, anyway here is your reward to help you on your journey 'She offers you the leaves and you continue on town'", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2quest3.php','_self')  }});
    </script>
<?php
	if ($row["quest_7"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_7 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+9  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C2Q2A"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q2C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer A!", text: "Well done! Stars are tricky things, beautiful and yet you can only see them in the dark where they shine the brightest, anyway here is your reward to help you on your journey 'She offers you the leaves and you continue on town'", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2quest3.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_7 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+9  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C2Q2B"]) or isset($_POST["C2Q2C"]) or isset($_POST["C2Q2D"]))
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