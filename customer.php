<!DOCTYPE html>
<?php 	session_start();
	$uname=$_SESSION['uname']; ?>
<html>
<head>
	<?php include("bootstrap.php"); ?>
<style type="text/css">


<style type="text/css">
	#id{
		margin: 100px 400px 500px 100px;
		height: 500px;width: 1100px;
		background-color: red;
	}

</style>
</head>
<body>
	<?php if (isset($_COOKIE['error'])): ?>
		<div class='container'><div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error !</strong> <?php echo $_COOKIE['error']; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
	<?php endif ?>

		<?php if (isset($_COOKIE['success'])): ?>
		<div class='container'><div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success !</strong> <?php echo $_COOKIE['success']; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
	<?php endif ?>
<div class='conainer-fluid'>
<div class='row'>
	<div class='col-md-12'>
		<span class='display-4 ml-4 mt-4'>Welcome Customer</span>
		<a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
	</div>
</div>
<div class='row mt-4'>
	<div class='col-md-1'></div>
	<div class='col-md-3'>
		<ul class="list-group">
  <li class="list-group-item active"><a href="customer.php" class='nav-link text-light'>Profile</a></li>
  <li class="list-group-item"><a href="order_form.php" class='nav-link'>Book Order</a></li>
  <li class="list-group-item"><a href="cusreport.php" class='nav-link'>Report</a></li>
<li class="list-group-item">Change Password</li>
  <li class="list-group-item text-center">
  	<form method='post'><input type="text" name="op" class='form-control' placeholder="Old Password"><hr>
  	<input type="text" name="np" class='form-control' placeholder="New Password"><hr>
  	<input type="text" name="cp" class='form-control' placeholder="Confirm Password">
  	<hr>
  	<button class='btn btn-primary' name='submit' type='submit' value='<?php echo $uname ?>'>Change</button></form>
  </li>
  
</ul>
	</div>
	<div class='col-md-7'>
		

		<table class='table table-bordered'>
	<?php 

	include ("conne.php");
	$sql="select * from registration where username='$uname'";
	$x=mysqli_query($conn,$sql);
if($r=mysqli_fetch_assoc($x)){
	?>
	<tr><td colspan="2"><span class='lead'>My Profile</span><a href="edit.php?uname=<?php echo $uname ?>">
		<button class='btn btn-sm btn-primary float-right'>Edit Profile</button></a></td></tr>
	<tr><th>Username</th>
	<td><?php echo $r['username']?></td></tr>
	<tr><th>Name</th>
	<td><?php echo $r['name']?></td></tr>
	<tr><th>Email</th>
	<td><?php echo $r['email']?></td></tr>
	<tr><th>Mobile</th>
	<td><?php echo $r['contact']?></td></tr>
	<tr><th>Address</th>
	<td><?php echo $r['address']?></td></tr>
	<tr><th>Pin Code</th>
		<td><?php echo $r['pin']?></td></tr>
	
<?php 
}
?>
</table>
	</div>
	<div class='col-md-1'></div>
</div>


</div>
</body>
</html>

<?php 

if (isset($_POST['submit'])) {
	$uname=$_POST['submit'];
	$op=$_POST['op'];
	$np=$_POST['np'];
	$cp=$_POST['cp'];
	if ($np==$cp) {
	
$sql2="select * from registration where username='$uname'";
$a=mysqli_query($conn,$sql2);
if($b=mysqli_fetch_assoc($a)){
$dbpswd=$b['password'];
if ($dbpswd==$op) {
	
	$sql3="update registration set password='$np' where username='$uname'";
	if (mysqli_query($conn,$sql3)) {
setcookie("success","Password Updated Successfully",time()+60);
//echo "ok";
	}
}
else {
setcookie("error","Old Password does not Match",time()+60);

}
}
else {
setcookie("error","New & Confirm Password does not Match",time()+60);	
}

}}


	?>

