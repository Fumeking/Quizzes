<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '9' WHERE User_ID={$_SESSION["User_ID"]}";
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

			<h1>Quest #4</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter2/C2Quest4Q.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.4; </script>
			<h3>You’re standing on a bridge, connecting between the forest and near the entrance of town, 
			one of the towns folk has set a request to catch 3 fish, tripled for his friends, how much fish should you catch</h3>
			<div class="img"><img src="../images/Quest/C2Q4.jpg"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C2Q4A" >  A. 6</button>	
			<button  class="b" type ="submit" name="C2Q4B" >  B. 9</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C2Q4C" >  C. 3</button>	
			<button  class="d" type ="submit" name="C2Q4D" >  D. 8</button>	
			</div>
<?php


if(isset($_POST["C2Q4B"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q4C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer is B!", text: "You need 9 total fish to help feed the towns folks and friend,With your bountiful catch the towns folk will surely be happy! ", icon: "success",button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2quest5.php','_self')  }});
    </script>
<?php
	if ($row["quest_9"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_9 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+8  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C2Q4B"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter2/Q4C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer is B!", text: "You need 9 total fish to help feed the towns folks and friend,With your bountiful catch the towns folk will surely be happy! ", icon: "success", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter2quest5.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_9 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+8  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C2Q3A"]) or isset($_POST["C2Q4C"]) or isset($_POST["C2Q4D"]))
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