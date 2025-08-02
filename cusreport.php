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
  
</ul>
	</div>
	<div class='col-md-7'>
		

		<table class='table table-bordered'>
			<tr>
				<th>Username</th>
<th>Foodtype</th><th>Tiffin Type</th>
<th>No. of Tiffin</th><th>date</th><th>Time</th><th>Service boy Name</th>
			</tr>
	<?php 

	include ("conne.php");
	$sql="select * from report where username='$uname'";
	$x=mysqli_query($conn,$sql);
while($r=mysqli_fetch_assoc($x)){
	?>

<tr><td><?php echo $r['username']?></td>
	
	<td><?php echo $r['foodtype']?></td>
	
	<td><?php echo $r['tiffintype']?></td>
	
	<td><?php echo $r['tiffin']?></td>
		<td><?php echo $r['date']?></td>
	<td><?php echo $r['time']?></td>
	
		<td><?php echo $r['sname']?></td>
	</tr>
	
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

