<?php
	include"../database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '13' WHERE User_ID={$_SESSION["User_ID"]}";
	$res2=$db->query($sql2);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<html>

<head>
	<title> Quest#3 </title>
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

			<h1>Quest #3</h1>
			<center><audio id="narratequest" controls autoplay  > <source src="../Music/Narration/Chapter3/C3Quest3Q.mp3"  type="audio/mp3"> </audio></center>
		    <script>  var audio = document.getElementById("narratequest");  audio.volume = 0.7; </script>
			<h3>A new day a new adventure! Deep within the forest you are! Taking your toad friend with you to help carry essential items, as you pass by a dark tree, a voice calls out from it! “You there young one” you look towards the tree in amazement! “Well now, it has been a while since I’ve seen one of your kind, they don’t go this far deep into the forest you see. Say, are you okay with humoring this old tree and answer this little question of mine” you nod happily in agreement “Splendid! Now listen close, there was a gnome named Ruri who had six brothers, there was Jack, Tim, Hibby, Rek, Strunk, and Sibel, who was the 7th brother? </h3>
			<div class="img"><img src="../images/Quest/C3Q3.gif"></div>
			<br>
			<div class="ans1">

			<button  class="a" type ="submit" name="C3Q3A" >  A. Jack</button>	
			<button  class="b" type ="submit" name="C3Q3B" >  B. The tree</button>	
			
			<br>
			<div class="ans2">
			<button  class="c" type ="submit" name="C3Q3C" >  C. Rek</button>	
			<button  class="d" type ="submit" name="C3Q3D" >  D. Ruri</button>	
			</div>
<?php


if(isset($_POST["C3Q3D"]) && $res->num_rows>0)
{	

?>
	<audio  id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter3/Q3C.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.7; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer D!", text: "Haha! You have a sharp ear and a sharp mind! Well done! You should always be attentive, you can learn a lot of things just by observing, now I leave you to your activities", icon: "success",button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter3quest4.php','_self')  }});
    </script>
<?php
	if ($row["quest_13"] == null) 
	{
	$sql3="UPDATE questprogress SET quest_13 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res3=$db->query($sql3);
    $sql4 = "UPDATE useraccounts SET Star = Star+5  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res4=$db->query($sql4);
    
	}
}

else if (isset($_POST["C3Q3D"]) && $res->num_rows<=0)
{	
?>
	<center><audio id="NarrateCorrect" controls autoplay hidden="true" > <source src="../Music/Narration/Chapter3/Q3C.mp3"  type="audio/mp3"> </audio></center>
	<script>  var audio = document.getElementById("NarrateCorrect");  audio.volume = 0.4; </script>
	<script>  var pau = document.getElementById("narratequest");  pau.pause(); </script>	
	<script>  swal({ title: "Answer D!", text: "Haha! You have a sharp ear and a sharp mind! Well done! You should always be attentive, you can learn a lot of things just by observing, now I leave you to your activities.", icon: "success", button: "Continue!", }) 
	.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter3quest4.php','_self')  }});
    </script>
<?php	
	$sql5="insert into questprogress(User_ID) values ('{$_SESSION["User_ID"]}')";
	$res5=$db->query($sql5);
	$sql6="UPDATE questprogress SET quest_13 = '1' WHERE User_ID={$_SESSION["User_ID"]}";
	$res6=$db->query($sql6);
	$sql7 = "UPDATE useraccounts SET Star = Star+5  WHERE User_ID='{$_SESSION["User_ID"]}'";
    $res7=$db->query($sql7);
}
else if(isset($_POST["C3Q3C"]) or isset($_POST["C3Q3B"]) or isset($_POST["C3Q3A"]))
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