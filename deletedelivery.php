<?php 
include("conne.php");
if (isset($_GET['delete'])) {
	$uname=$_GET['delete'];
	$sql="delete from service_boy where username='$uname'";
	if (mysqli_query($conn,$sql)) {
		setcookie("success","deleted Successfully",time()+60);
		header("location:viewserboy.php");
	}
	else {
	setcookie("error","Deletion Problem",time()+60);
			header("location:viewserboy.php");
	}
}



 ?>