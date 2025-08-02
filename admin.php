<!DOCTYPE html>
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
<div class='conainer-fluid'>
<div class='row'>
	<div class='col-md-12'>
		<span class='display-4 ml-4 mt-4'>Welcome Admin</span>
		<a href="logout"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
	</div>
</div>
<div class='row'>
	<div class='col-md-1'></div>
	<div class='col-md-3'>
		<ul class="list-group">
  <li class="list-group-item active"><a href="admin.php" class='nav-link text-light'>Dashboard</a></li>
  <li class="list-group-item"><a href="customerlist.php" class='nav-link'>Customer</a></li>
  <li class="list-group-item"><a href="viewserboy.php" class='nav-link'>Delivery-Boy</a></li>
  <li class="list-group-item"><a href="report.php" class='nav-link'>Order</a></li>
  <li class="list-group-item"><a href="transaction.php" class='nav-link'>Transaction</a></li>
</ul>
	</div>
	<div class='col-md-7'></div>
	<div class='col-md-1'></div>
</div>


</div>
</body>
</html>