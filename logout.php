<?php 

session_start();
if (session_destroy()) {
	header("location:index.php");
	setcookie("logout","Logout Successfully",time()+60);
}


 ?>