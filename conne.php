<?php
$conn=new mysqli("127.0.0.1","root","","dabbawala");
if($conn===false)
{
 die(mysqli_connect_error());
 }
 else{
 //	echo "connected";
 }
 ?>