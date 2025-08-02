<!DOCTYPE html>
<html>
<head>
<?php include("bootstrap.php"); ?>
</head>
<body>
<div class="container-fluid">
	<div class='row'>
  <div class='col-md-12'>
    <span class='display-4 ml-4 mt-4'>Add Delivery Boy</span>
    <a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
    <a href="admin.php"><button class='btn btn-dark float-right mt-4 mr-4'>BACK</button></a>
  </div></div>

	<div class="row">
		<div class='col-md-3'></div>
		<div class="col-md-6">
			<form method="post"  enctype="multipart/form-data">
				<div class="form-group">

					<input type="text" name="name" placeholder="Enter Name" class='form-control'>
				</div>
				<div class="form-group">
					<input type="text" name="uname" placeholder="Enter Username"class='form-control'>
				</div>
				<div class="form-group">
					<input type="password" name="password" class='form-control' placeholder="Enter Password">
				</div>
				<div class="form-group">
					<input type="text" name="mob" placeholder="Enter Mobile" class='form-control'>
				</div>
				<div class="form-group">
					<input type="text" name="email" class='form-control' placeholder="Enter Email">
				</div>
				<div class="form-group">
					<input type="text" name="aadhar" placeholder="Enter Aadhar No."class='form-control'>
				</div>
				<div class="form-group">
<textarea placeholder="Enter Address" name='address' class='form-control'></textarea>
				</div>
				<div class="form-group">
					<label>Photo:</label>
					<input type="file" name="p" class='form-control'>
				</div>
				<div class='form-group text-center'>
				<button type="submit" name="submit" class='btn btn-primary'>SUBMIT</button>
				    <button type='submit' class='btn btn-warning'>RESET</button>
				</div>
			</form>
		
		</div>

		<div class='col-md-3'></div>
	</div>
</div>
</body>
</html>
<?php 

include "conne.php";
if(isset($_POST['name']))
{
 $name=$_POST['name'];
 $uname=$_POST['uname']; 
 $password=$_POST['password'];
 $mob=$_POST['mob']; 
$email=$_POST['email'];
 $aadhar=$_POST['aadhar']; 
 $address=$_POST['address'];
  $folder="image";
    move_uploaded_file($_FILES['p']['tmp_name'],"$folder/".basename($_FILES['p']['name']));
    $path="$folder/".basename($_FILES['p']['name']); 
    $sql="insert into service_boy values('$name','$uname','$password','$mob','$email','$aadhar','$address','$path','null')";
    if($conn->query($sql))
 	{
 		echo"Data insert successfully";
 		
 	}
 	else{
 		echo "error";
 	}

 }

?>