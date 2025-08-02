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
		<span class='display-4 ml-4 mt-4'>Delivery-Boy</span>
		<a href="logout"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
	</div>
</div>
<div class='row mt-4'>
	<div class='col-md-1'></div>
	<div class='col-md-3'>
		<ul class="list-group">
  <li class="list-group-item"><a href="admin.php" class='nav-link'>Dashboard</a></li>
  <li class="list-group-item"><a href="customerlist.php" class='nav-link '>Customer</a></li>
  <li class="list-group-item active"><a href="viewserboy.php" class='nav-link text-light'>Delivery-Boy</a></li>
  <li class="list-group-item"><a href="report.php" class='nav-link'>Order</a></li>
  <li class="list-group-item"><a href="transaction.php" class='nav-link '>Transaction</a></li>
</ul>
	</div>
	<div class='col-md-7'>
		
<table class='table table-bordered'>
	<tr><td class='text-right' colspan="10">
		<a href="addboy.php"><button class='btn btn-primary btn-sm'>Add Delivery Boy</button></a>
	</td></tr>
	<tr><th>Name</th><th>Username</th><th>Contact</th><th>Email</th><th>Address</th> <th>Allot Area</th><th>Update</th><th>Delete</th></tr>
	<?php 
	include ("conne.php");
	$sql="select * from service_boy where allot='null'";
	$x=mysqli_query($conn,$sql);
while($r=mysqli_fetch_assoc($x)){
	?>
	<tr><td><?php echo $r['name']?></td>
	<td><?php echo $r['username']?></td>

	<td><?php echo $r['contact']?></td>
	<td><?php echo $r['email']?></td>
	<td><?php echo $r['address']?></td>
	<td>
<form action="" method="get"><button name='sb' value='<?php echo $r['username']?>' class='btn btn-sm btn-primary'>Allot </button></form>
		</td>
		<td>
<form action="updatedelivery.php" method="get"><button type='submit' name='update' value='<?php echo $r['username']?>' class='btn btn-sm btn-info'>Update </button></form>
		</td>
<td>
<form action="deletedelivery.php" method="get"><button type='submit' name='delete' value='<?php echo $r['username']?>' class='btn btn-sm btn-danger'>Delete </button></form>
		</td>


	</tr>
<?php 
}
?>
</table>
<?php if (isset($_GET['sb'])) {

?>
<form><input type="text" class='form-control' name="serboy" value="<?php echo $_GET['sb'] ?>"><br>
<select name="pinallot" class='form-control'>
<?php 

$sql="select distinct(pin) as pin from `booking`";
$x=mysqli_query($conn,$sql);
while ($r=mysqli_fetch_assoc($x)) {
	?>
	<option value="<?php echo $r['pin'] ?>"><?php echo $r['pin'] ?></option>
<?php 
}
?></select>
<button type="submit" name="btn" class='btn btn-info mt-4'>SUBMIT</button></form>
<?php } ?>

	</div>
	<div class='col-md-1'></div>
</div>


</div>
</body>
</html>

<?php 
include ('conne.php');
if (isset($_GET['serboy'])) {
	echo $area=$_GET['serboy'];
	echo $pin=$_GET['pinallot'];

	$pql="update service_boy set allot='$pin' where username='$area'";
	if (mysqli_query($conn,$pql)) {

	echo "data updated successfully";
		}
		else{
			echo "error";
		}
	

}


 ?>