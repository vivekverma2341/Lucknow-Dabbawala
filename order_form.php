<!DOCTYPE html>
<?php 	
session_start();
	$uname=$_SESSION['uname']; 
$pin=$_SESSION['pin'];
	?>
<html>
<head>
	<?php include("bootstrap.php"); ?>
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
		<span class='display-4 ml-4 mt-4'>Book Order</span>
		<a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
	</div>
</div>
<div class='row mt-4'>
	<div class='col-md-1'></div>
	<div class='col-md-3'>
		<ul class="list-group">
  <li class="list-group-item "><a href="customer.php" class='nav-link '>Profile</a></li>
  <li class="list-group-item active"><a href="order_form.php" class='nav-link text-light'>Book Order</a></li>
  <li class="list-group-item"><a href="cusreport.php" class='nav-link'>Report</a></li>
  <li class="list-group-item">
  	<table class='table'>
		<tr><th colspan="2">Veg</th><th colspan="2">Nonveg</th></tr>
		<tr><td>Breakfast</td><td>50 &#8377;</td><td>Breakfast</td><td>80 &#8377;</td></tr>
		<tr><td>Lunch</td><td>120 &#8377;</td><td>Lunch</td><td>200 &#8377;</td></tr>
		<tr><td>Dinner</td><td>100 &#8377;</td><td>Dinner</td><td>150 &#8377;</td></tr>
	</table>

  </li>
  
</ul>
	</div>
	<div class='col-md-7'>

<form method="post" class='border p-4' >
<div class='form-group'>
	<label>User Name</label>
	<input type="text" name="uname" value='<?php echo $uname ?>'
	class='form-control'>
</div>
<div class='form-group'>
	<label>No. Of Tiffin</label>
	<input type="text" name="no" placeholder="No of Tiffin" class='form-control'>
</div>
<div class='form-group'>
	<label>Tiffin type</label>
		<div class='form-control'>
	Breakfast<input type="checkbox" name="tt[]" value="breakfast" class='ml-2 mr-4'>
	Lunch<input type="checkbox" name="tt[]" value="lunch" class='ml-2 mr-4'>
	Dinner<input type="checkbox" name="tt[]" value="dinner" class='ml-2 mr-4'><br>
</div>
</div>
<div class='form-group'>
	<label>Food type</label>
	<div class='form-control'>	
Veg<input type="radio" name="foodtype" value="veg" class='ml-2 mr-4'>
Non-Veg<input type="radio" name="foodtype" value="nonveg" class='ml-2'><br>
     </div>

</div>
<div class='form-group'>
	<label>No of Days </label>
	<input type="number" name="days" class='form-control'>
</div>
<div class='form-group'>
	<label>Date</label>
	<input type="text" name="date" value="<?php  echo date('Y-m-d');?>" class='form-control'>
</div>
<div class='form-group text-center'>
     <button type="submit" name="button" class='btn btn-primary'value='<?php echo $pin ?>'>Order Place</button>
</div>

</form>
		

	</div>
	<div class='col-md-1'></div>
</div>


</div>
</body>
</html>


<?php 

	include ("conne.php");
if(isset($_POST['button']))
{
	$pin=$_POST['button'];
	$uname=$_POST['uname'];
	$days=$_POST['days'];
	$d="+".$days."days";
	$no=$_POST['no'];
	$tt=$_POST['tt'];
	$date=$_POST['date'];
	$nextdate=date('Y-m-d',strtotime($d));
    $ft=$_POST['foodtype'];


	$cost=0;
	if($ft=="veg")
	{
		foreach ($tt as $key) {
		if($key=="breakfast")
		{
			$cost+=50;
		}
		else if($key=="lunch")
		{
			$cost+=120;
		}
		else {
			$cost+=100;
		}
		}
	}
	else {
		foreach ($tt as $key) {
		if($key=="breakfast")
		{
			$cost+=80;
		}
		else if($key=="lunch")
		{
			$cost+=200;
		}
		else {
			$cost+=150;
		}
		}
	}
	$tt1=implode(",", $tt);
    
   $perday= $cost*$no;
   $total=$perday*$days;
   $_SESSION['days']=$days;
      $_SESSION['no']=$no;
         $_SESSION['tt']=$tt;
            $_SESSION['ft']=$ft;
               $_SESSION['cost']=$cost;
                  $_SESSION['total']=$total;
                  $_SESSION['date']=$date;
echo "ok";
    $sql="insert into booking values ('$uname','$date','$nextdate','$no','$tt1','$ft','$perday','$total','null','null','null','null','null','$pin')";
     if($conn->query($sql))
 	{
 		echo"Data insert successfully";
 		header("location:payment.php?msg= Tiffin booked successfully");
 	 
 	}
 	else{
 		echo "error";
 	}
}



 ?>