
<!DOCTYPE html>
<html>
<head>
  <?php include("bootstrap.php"); ?>
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

<div class='container-fluid'>
  <div class='row'>
  <div class='col-md-12'>
    <span class='display-4 ml-4 mt-4'>Edit Profile</span>
    <a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
    <a href="customer.php"><button class='btn btn-dark float-right mt-4 mr-4'>BACK</button></a>
  </div>
</div>
  <div class='row mt-4'>
    <div class='col-md-3'></div>
    <div class='col-md-6 mt-4'>
      <?php 
      include ("conne.php");
if (isset($_GET['uname'])) {
  $uname=$_GET['uname'];

  $sql="select * from registration where username='$uname'";
  $x=mysqli_query($conn,$sql);
if($r=mysqli_fetch_assoc($x)) {
?>
<form method="post">
<div class='form-group'>
<label>Name</label>
  <input type="text" name="name" value='<?php echo $r['name'] ?>' class='form-control'>
  </div>

<div class='form-group'>
  <label>Mobile </label>
    <input type="number" name="mob" value='<?php echo $r['contact'] ?>' class='form-control'>
  </div>
<div class='form-group'>
<label>Email</label>
    <input type="email" name="email" value='<?php echo $r['email'] ?>' class='form-control'>
  </div>
<div class='form-group'>
  <label>Address</label>
    <textarea  name="address" class='form-control'><?php echo $r['address'] ?></textarea>
  </div>
<div class='form-group'>
  <label>Pin </label>
    <input type="number" name="pin" value='<?php echo $r['pin'] ?>' class='form-control'>
  </div>

<div class='form-group text-center'>
    <button type='submit' class='btn btn-success' name='submit' value='<?php echo $uname ?>'>SUBMIT</button>
    <button type='submit' class='btn btn-warning'>RESET</button>
  </div>

<?php  
}

}
       ?>
</form>

    </div>
    <div class='col-md-3'></div>
  </div>
</div>
</body>
</html>
<?php 

if(isset($_POST['name']))
{
  session_start();
   $name=$_POST['name'];
   $mob=$_POST['mob'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $pin=$_POST['pin'];

  $sql="update registration set name='$name',username='$uname',contact='$mob',email='$email',address='$address',pin='$pin' where username='$uname'";
  if($conn->query($sql))
  {

setcookie("success","Updated Successfully",time()+60); 
header("location:customer.php");
  }
  else{
setcookie("error","Problem in updation",time()+60);
  }
}


 ?>