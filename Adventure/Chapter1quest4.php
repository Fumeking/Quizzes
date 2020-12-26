<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '4' WHERE User_ID={$_SESSION["User_ID"]}";
	$res2=$db->query($sql2);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<html>

<head>
	<title> Quest#4 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

	<audio id="myaudio" controls autoplay hidden="true" > <source src="../Music/Chapter1.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
 	
 	
	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >HOME</button>
		    <script> function backpage() {document.location = '../Loginhome.php';} </script>


	<div class="AdventureHome" >
	<form action="" method="POST" >
		<div class="mainChap">

			<h1>Quest #4</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter1/C1Quest4Q.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>After an entire day of walking you reach a small town, as you walk in an old woman calls for you, she tells you of a special reward if you answer this simple riddle "If i have 5 gold and give you me another 2 and i buy a bread worth of 4 gold with gold total of what you've given me, how many gold will i have left?</h3>
			<div class="img"><img src="../images/Quest/C1Q4.jpg"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C1Q4A" >  A. 6</button>	
			<button  class="b" type ="submit" name="C1Q4B" >  B. 4</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C1Q4C" >  C. 2</button>	
			<button  class="d" type ="submit" name="C1Q4D" >  D. 3</button>	
			</div>
<?php


if(isset($_POST["C1Q4D"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter1/Q4C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Correct Answer is D!", text: "For answering the riddle correctly she gives you 30 gold as reward.", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter1quest5.php','_self')  }});
    </script>  
<?php
	if ($row["quest_4"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_4 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+8  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C1Q4D"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter1/Q4C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Correct Answer is D!", text: "For answering the riddle correctly she gives you 30 gold as reward.", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter1quest5.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_4 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+8  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C1Q4B"]) or isset($_POST["C1Q4A"]) or isset($_POST["C1Q4C"]))
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