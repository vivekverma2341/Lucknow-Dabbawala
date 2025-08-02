<!DOCTYPE html>
<html>
<head>
	<title></title><?php include("bootstrap.php"); ?>
		
body{
	margin: 0px;padding: 0px;
	background-image: url(image/food5.jpg);background-size: cover
}

	</style>

</head>
<body>
	<?php if (isset($_SESSION['error'])): ?>
		<h1><?php echo $_SESSION['error'] ?></h1>
	<?php endif ?>
	<div class='container-fluid'>
		<div class='row'>
  <div class='col-md-12'>
    <span class='display-4 ml-4 mt-4'></span>
   
    <a href="index.php"><button class='btn btn-dark float-right mt-4 mr-4'>BACK</button></a>
  </div></div>
<div class='row'>
	<div class='col-md-12'>
		<h1 class='display-2 text-center'>REGISTRATION</h1>
	</div>
</div>
<div class="row">
<div class='col-md-4'>	</div>	
<div class='col-md-4 p-4 bg-dark'>	
		<form method="post">
<div class='form-group'>

	<input type="text" name="name" placeholder="Enter Name" class='form-control' required>
	</div>
<div class='form-group'>
	<input type="text" name="uname" placeholder="Enter User Name" class='form-control' required >
	</div>
<div class='form-group'>
	<input type="password" name="password" placeholder="Enter Password" class='form-control' required>
	</div>
<div class='form-group'>
		<input type="number" name="mob" placeholder="Enter Mobile No." class='form-control'>
	</div>
<div class='form-group'>

		<input type="email" name="email" placeholder="Enter Email-id" class='form-control'>
	</div>
<div class='form-group'>
		<textarea  name="address" placeholder="Enter Address" class='form-control'></textarea>
	</div>
<div class='form-group'>
		<input type="number" name="pin" placeholder="Enter Pincode" class='form-control'>
	</div>

<div class='form-group text-center'>
		<button type='submit' class='btn btn-success'>SUBMIT</button>
		<button type='submit' class='btn btn-warning'>RESET</button>
	</div>

</form></div>
<div class='col-md-4'>	</div>
</div>

</div>
</div>

</body>
</html>



<?php 
// Registration code:-
include("conne.php");
if(isset($_POST['name']))
{
	session_start();
	 $name=$_POST['name'];
	 $uname=$_POST['uname'];
	 $password=$_POST['password'];
	 $mob=$_POST['mob'];
	 $email=$_POST['email'];
	 $address=$_POST['address'];
	 $pin=$_POST['pin'];

	$sql="insert into registration values ('$name','$uname','$password','$mob','$email','$address','$pin')";
	if($conn->query($sql))
 	{
 		//echo"Data insert successfully";
 		header("location:userlogin.php?msg=wellcome user"); 
 	}
 	else{
 		$_SESSION['error']='Something went Wrong';
 	}
}
?>