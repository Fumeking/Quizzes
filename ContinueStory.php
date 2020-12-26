<?php
include"database.php";
session_start();

$sql="SELECT QuestPause FROM questprogress WHERE User_ID={$_SESSION["User_ID"]}";
	$res=$db->query($sql);
		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}

if (isset($_POST['ContinueBtn']) && $row["QuestPause"] == 1) 
{
	echo "<script>window.open('Adventure/Chapter1quest1.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 2)
{
	echo "<script>window.open('Adventure/Chapter1quest2.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 3)
{
	echo "<script>window.open('Adventure/Chapter1quest3.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 4)
{
	echo "<script>window.open('Adventure/Chapter1quest4.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 5)
{
	echo "<script>window.open('Adventure/Chapter1quest5.php','_self');</script>";
}

else if (isset($_POST['ContinueBtn']) && $row["QuestPause"] == 6) 
{
	echo "<script>window.open('Adventure/Chapter2quest1.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 7)
{
	echo "<script>window.open('Adventure/Chapter2quest2.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 8)
{
	echo "<script>window.open('Adventure/Chapter2quest3.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 9)
{
	echo "<script>window.open('Adventure/Chapter2quest4.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 10)
{
	echo "<script>window.open('Adventure/Chapter2quest5.php','_self');</script>";
}

else if (isset($_POST['ContinueBtn']) && $row["QuestPause"] == 11) 
{
	echo "<script>window.open('Adventure/Chapter3quest1.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 12)
{
	echo "<script>window.open('Adventure/Chapter3quest2.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 13)
{
	echo "<script>window.open('Adventure/Chapter3quest3.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 14)
{
	echo "<script>window.open('Adventure/Chapter3quest4.php','_self');</script>";
}
else if(isset($_POST['ContinueBtn']) && $row["QuestPause"] == 15)
{
	echo "<script>window.open('Adventure/Chapter3quest5.php','_self');</script>";
}


?>

