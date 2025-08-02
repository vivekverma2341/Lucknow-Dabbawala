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
		<span class='display-4 ml-4 mt-4'>Order Details</span>
		<a href="logout"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
	</div>
</div>
<div class='row mt-4'>
	<div class='col-md-1'></div>
	<div class='col-md-3'>
		<ul class="list-group">
  <li class="list-group-item"><a href="admin.php" class='nav-link'>Dashboard</a></li>
  <li class="list-group-item"><a href="customerlist.php" class='nav-link '>Customer</a></li>
  <li class="list-group-item"><a href="viewserboy.php" class='nav-link'>Delivery-Boy</a></li>
  <li class="list-group-item active"><a href="report.php" class='nav-link text-light'>Order</a></li>
  <li class="list-group-item"><a href="transaction.php" class='nav-link '>Transaction</a></li>
</ul>
	</div>
	<div class='col-md-7'>
		

	<table class='table table-bordered'>
		<tr><th colspan="9">ORDER DETAILS</th></tr>
	<tr><th>User Name</th><th>Tiffin no</th><th>Tiffin Type</th><th>Food Type</th><th>Cost per Day</th><th>Total</th><th>Booking Date</th><th>Service End date </th></tr>

<?php 
include ("conne.php");
$sql="select * from `booking`";
$x=mysqli_query($conn,$sql);
while ($r=mysqli_fetch_assoc($x)) {
	?>

	<tr><td><?php echo $r['username']?></td>

        <td><?php echo $r['tiffin']?></td>
	    <td><?php echo $r['tiffin_type']?></td>
        <td><?php echo $r['food_type']?></td>
        <td><?php echo $r['cost']?>&#8377;</td>
	    <td><?php echo $r['total']?>&#8377;</td>
	    <td><?php echo $r['date']?></td>
	    <td><?php echo $r['enddate']?></td>

 
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>

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


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--	<form>
		
<select name="username">
	<?php 
include ("conne.php");
$sql="select distinct(username) as un from `booking`";
$x=mysqli_query($conn,$sql);
while ($r=mysqli_fetch_assoc($x)) {
	?>
	<option value="<?php echo $r['un'] ?>"><?php echo $r['un'] ?></option>
<?php 
}
?>
</select>


	</form>
-->
	
</body>
</html>




