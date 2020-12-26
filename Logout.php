<?php
	include "database.php";
	session_start();
	unset ($_SESSION["User_name"]);
	unset ($_SESSION["User_password"]);
	unset ($_SESSION["Full_name"]);
	unset ($_SESSION["User_mail"]);
	unset ($_SESSION["User_contact"]);
	session_destroy();
	echo "<script>window.open('index.html','_self');</script>";
?>