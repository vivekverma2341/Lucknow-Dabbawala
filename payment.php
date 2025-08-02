<?php
			session_start();
				$total=$_SESSION['total'];
				$days=$_SESSION['days'];
      $no=$_SESSION['no'];
         $tt=$_SESSION['tt'];
            $ft=$_SESSION['ft'];
            $total=$_SESSION['total'];
            $date=$_SESSION['date'];
				 ?>

<!DOCTYPE html>
<html>
<head>
	<?php include("bootstrap.php"); ?>
</head>
<body>

<div class='container-fluid'>
	<div class='row'>
	<div class='col-md-12'>
		<span class='display-4 ml-4 mt-4'>Payment</span>
		<a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
		<a href="customer.php"><button class='btn btn-dark float-right mt-4 mr-4'>BACK</button></a>
	</div>
</div>
	<div class='row mt-4'>
		<div class='col-md-1'></div>
		<div class='col-md-5 mt-4'>
		<img src="image/pay.jpg" style='height: 500px;width:600px' class='img-thumbnail'> 
		</div>
		<div class='col-md-5'>
			
			<form method="post" class='border p-4'>
<div class='form-group'>
	<label class='mr-4'>Card Type</label>
	<div class='form-control'>
	 Debit<input type="radio" name="type" value="debit" class='ml-2 mr-4'>
	 Credit<input type="radio" name="type" value="credit" class='ml-2 mr-4' ></div>
</div>

<div class='form-group'>
	<label>Card Number</label>
	<input type="number" name="cno" placeholder="Enter Card no" class='form-control'>
</div>

<div class='form-group'>
	<label>Card-Holder Name</label>
	<input type="text" name="cname" placeholder="Enter Card holder name" class='form-control'>
</div>

<div class='form-group'>
	<label>Card Expiry</label>
	<input type="month" name="expiry" class='form-control'>
</div>

<div class='form-group'>
	<label>CVV No.</label>
	<input type="number" pattern= "[0-9]" title="you can not type characher only use numbers"name="cvv" maxlength="3" class='form-control'>
</div>

<div class='form-group'>
	<label>Amount</label>
	<input type="number" name="amount" value="<?php echo$total ?>"
	class='form-control'>
</div>

<div class='form-group text-center'>
	    <button type="submit" class='btn btn-primary'>PAY</button>
</div>
	
</form>

		</div>
		<div class='col-md-1'></div>
	</div>
</div>
</body>
</html>

<?php
$uname=$_SESSION['uname'];
$date=$_SESSION['date'];
include('conne.php');
   if (isset($_POST['type'])) {

 $type=$_POST['type'];
 echo $type;
 $cname=$_POST['cname'];
 $cno=$_POST['cno'];
 $expiry=$_POST['expiry'];
 $cvv=$_POST['cvv'];


 $sql="update `booking` set ctype='$type',cardnumber='$cno',cname='$cname',expiry='$expiry',cvv='$cvv' where username='$uname' and date='$date'";
if (mysqli_query($conn,$sql)) {
   	echo "user details update successfully";
   	header("location:reciept.php?msg=booked successfully");
   }
   else{
   	echo "error";
   }
}
?>




?>