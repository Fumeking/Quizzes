<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION['User_name']))
	{ 
    echo "<script>window.open('../login.php','_self');</script>";
	}
	$sql="SELECT * FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
	$sql2="UPDATE questprogress SET QuestPause = '5' WHERE User_ID={$_SESSION["User_ID"]}";
	$res2=$db->query($sql2);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<html>

<head>
	<title> MINI-QUIZ 3 </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="../Css/adventure.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body onload="Compute()">


	<audio id="myaudio" controls autoplay hidden="true" > <source src="../Music/Chapter1.mp3"  type="audio/mp3"> </audio>
	<script>  var audio = document.getElementById("myaudio");  audio.volume = 0.6; </script>
 

	<div class ="main">	
		<div class = "Bar">	
			
			<?php echo str_repeat('&nbsp;', 20); ?>
		    <center><img src="../images/icon/QuizzestIcon.png" class="logo"></center>
		    <button  type="button"onclick="backpage()" >HOME</button>
		    <script> function backpage() {document.location = '../Loginhome.php';} </script>

	<div class="AdventureHome" >
		<div class="mainChap">
			<h1>MINI-QUIZ</h1>
			<h2>ADDITION #3</h2>
			<br>
			 <script>
				var total;
				function Compute()
				{
				var num1 = Math.floor(Math.random() * 101);
				var num2 = Math.floor(Math.random() * 101);
				total = num1 + num2;
				$("#var1").html(" <b>" + num1 + "</b> + <b>" + num2 + "</b>");

				}			
		    </script> 
		 	<div id="var1"> </div>
		 	<br>
		  	<center><input class = "Miniquiz" type="text" placeholder="0" id="Ans"/></center>
		  	<br>

		  	<script>
		  	$(document).ready(function()
		  	    {
   				 $("#EnterAns").click(function() 
   				  {
        			var answer = parseInt($("#Ans").val());
          			  if (answer === total) 
       				 {
       				 		swal({ title: "CONGRATULATIONS!", text: "You can now proceed to chapter 2", icon: "success", button: "Proceed", }) 
							.then((ConChoice)=> {if (ConChoice) { window.open('./Chapter1_Complete.php','_self')  }});
        			 }
        			 else
        			 {
        			 		swal({ title: "Wrong Answer!", text: "Please answer carefully", icon: "warning", button: "Try Again", })
       				 }       
                  });
               });
			</script>

			</br>
		 	<center><button  id ="EnterAns" class="Miniquiz" > Enter </button></center>
		</div>			
	 </div> 
</body>
</html>