<!DOCTYPE html>
<?php   session_start();
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
        <span class='display-4 ml-4 mt-4'>Customer Details</span>
        <a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
    </div>
</div>
<div class='row mt-4'>
    <div class='col-md-1'></div>
    <div class='col-md-3'>
        <ul class="list-group">
  <li class="list-group-item "><a href="profileserboy.php" class='nav-link'>Profile</a></li>
  <li class="list-group-item active"><a href="delivery.php" class='nav-link text-light'>Customer</a></li>

  <li class="list-group-item text-center">

  	<table class='table'>
	<tr><th>Alloted Area</th></tr>
<?php 
$uname=$_SESSION['uname'];
include ("conne.php");

$sql="select * from service_boy where username='$uname'";
$x=mysqli_query($conn,$sql);
if($r=mysqli_fetch_assoc($x)) {
	global $allot;
	$allot=$r['allot'] ;
?>
<tr>
        <td><?php echo $r['allot'] ?></td>



    </tr>
</table>
<?php 
}
?>

      </li>
  
</ul>
    </div>
    <div class='col-md-7'>
        <table class='table'>
	<tr><th>Name</th> <th>Email</th><th>Username</th><th>Address</th><th>Mobile</th><th>Details</th></tr>
<?php 
include ("conne.php");

$pql="select * from registration where pin ='$allot'";
$p=mysqli_query($conn,$pql);
while ($n=mysqli_fetch_assoc($p)) {
?>


    <tr><td><?php echo $n['name'] ?></td>
        <td><?php echo $n['email'] ?></td>
                <td><?php echo $n['username'] ?></td>
        <td><?php echo $n['address'] ?></td>
        <td><?php echo $n['contact'] ?></td>
        <td><form action=""><button type="submit" name="btn" value='<?php echo $n['username'] ?>' class='btn btn-sm btn-primary'>Cust Details</button></form></td>


    </tr>
</table>
<?php 
}

if (isset($_GET['btn'])) {
    $email=$_GET['btn'];
    $sql="select * from `booking` where username='abc'";
   $s=mysqli_query($conn,$sql);
    if ($n=mysqli_fetch_assoc($s)) {
    
    $date=date('Y-m-d');
    $t=date('h:i:s a');
//$t=time();
  //  echo $t;
   // echo $date;
?>
<form action="" method="post">
<table class="table">
	<tr><td>Username</td><td><input type="" name="username" value="<?php echo $n['username']?>" class='form-control'></td></tr>
	<tr><td>Food Type</td><td><input type="" name="foodtype" value="<?php echo $n['food_type']?>"  class='form-control'> </td></tr>
    <tr><td>Tiffin Type</td><td><input type="" name="tiffintype" value="<?php echo $n['tiffin_type']?>" class='form-control'> </td></tr>
	<tr><td>No. Of Tiffin</td><td><input type="" name="tiffin" value="<?php echo $n['tiffin']?>"  class='form-control'></td></tr>
	<tr><td>Delivery Date</td><td><input type="" name="date" value="<?php echo $date ?>"  class='form-control'></td></tr>
	<tr><td>End Date</td><td><input type="" name="enddate" value="<?php echo $n['enddate'] ?>"  class='form-control'></td></tr>
	<tr><td>Food Delivery Time</td><td><input type="" name="time" value="<?php echo $t ?>"  class='form-control'></td></tr>
	<tr><td>Customer Email</td><td><input type="text" name="cemail" value="<?php echo $email?>"  class='form-control'></td></tr>
	
	<tr><td colspan="2" class="text-center">
    <button class='btn btn-primary' name='sname' value="<?php echo $uname ?>">SUBMIT</button></td></tr>
</table>



</form>
 <?php      

include ('conne.php');
if (isset($_POST['username'])) {
    $username=$_POST['username'];
    $foodtype=$_POST['foodtype'];
    $tiffintype=$_POST['tiffintype'];
    $tiffin=$_POST['tiffin'];
    $date=$_POST['date'];
    $enddate=$_POST['enddate'];
    $time=$_POST['time'];
    $cemail=$_POST['cemail'];
    $sname=$_POST['sname'];

    $rql="insert into `report` values('$username','$foodtype','$tiffintype','$tiffin','$date','$enddate','$time','$cemail','$sname') ";
     if(mysqli_query($conn,$rql)){

        echo "update success";
     }
     else{
        echo "failed";
     }
}

   }
}
?>


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
<?php
include 'conne.php';
if (isset($_POST['username'])) {
	$username=$_POST['username'];
	$foodtype=$_POST['foodtype'];
	$tiffintype=$_POST['tiffintype'];
	$tiffin=$_POST['tiffin'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	//echo $tiffin;

	$sql="insert into delivery values('$username','$foodtype','$tiffintype','$tiffin','$date','$time')";
	if (mysqli_query($conn,$sql)) {
		
		header("location:profileserboy.php?msg=data inserted successfully");
	}
	else{
		echo "error";
	}
}
?>
</body>
</html>