<!DOCTYPE html>
<html>
<head>
">
  <?php include("bootstrap.php"); ?>
  <style>
		.nav-link{
			font-size: 20px;

		}
		.btn{
             margin-top: 10px;
			background: transparent;border: 2px solid blue;
			color: black;
		}
		.abc{
			height:330px;
			width: 290px;
			border:1px solid black;
			margin-left: 50px;
			position: relative;
			background: white;border-radius: 10px;
			
		}
		
			
		
		#modal2{
			     height: 250px;
			width: 200px;
			border:1px solid black;
			margin-top: 100px;
			background: white;
			border-radius: 10px;
		}
		.form-group{
		margin-left: 15px;position: absolute;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div style="height: 60px;width: 60px;border:1px solid black;border-radius: 60px;background-image: url(dabba.png);background-size: 70px 70px;"></div>
  <!--<a class="navbar-brand" href="adminlogin.php">Admin Login</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#" style="">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SERVISES</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment.php">Payment</a>
      </li>    
    </ul>
  </div>  
</nav>
	<div class="container-fulid">
		<div class="row">
		<div class="col-md-12">
			<div style="height: 400px;width: 100%;background-image:url(tiffin.png);background-repeat: no-repeat;background-size: 50% 400px; position: relative;">
					
 	<!-- ---------------------------------------------------- -->
 	<div class="text-right">
 <button type="button" class="btn align-center" data-toggle="modal" data-target="#myModal">SIGN UP</button>

    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      LOGIN
    </button>
    <div class="dropdown-menu" style="margin-right: 20px;background: black;">
       <a href="#" id="ab" class="dropdown-item" data-toggle="modal" data-target="#Modal" style="color: blue;">USER LOGIN</a>  	
      <a class="dropdown-item" style="color: blue;"
       href="login_delivery.php">DELIVERY BOY LOGIN </a>
      
    </div>
  </div>
  
 <div class="text-right" style="margin-top: 100px;">
 	<h2 style="font-family: Algerian;">LUCKNOW DABBA TIFFIN SERVICE</h2>
 	<h3 style="margin-right: 50px;font-family: Algerian;">TEDHHI PULIYA LUCKNOW</h3>
 </div>

</div>

</div>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
        	
          <h4 class="modal-title">Registration</h4>
      
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-center">
          <div class="abc">
          	 <form method="post" class="form-inline">
     	 	<div class="form-group" style="margin-top: 20px;">
     	 		<b>Name:</b>&nbsp &nbsp &nbsp &nbsp 
     	 		<input type="text" name="name" value="">
     	 	</div>
     	 	<div class="form-group" style="margin-top: 60px;">
     	 		<b>Username: </b>
     	 		<input type="text" name="uname" value="">
     	 	</div>
     	 	<div class="form-group"style="margin-top: 100px;">
     	 		<b>Password:</b>&nbsp 
     	 		<input type="text" name="password" value="">
     	 	</div>
     	 	<div class="form-group"style="margin-top: 140px;">
     	 		<b>Mob:</b>&nbsp &nbsp &nbsp &nbsp &nbsp 
     	 		<input type="text" name="mob" value="">
     	 	</div>
     	 	<div class="form-group"style="margin-top: 180px;">
     	 		<b>Email:</b>&nbsp &nbsp &nbsp &nbsp
     	 		<input type="text" name="email" value="">
     	 	</div>
     	 	<div class="form-group"style="margin-top: 220px;">
     	 		<b>Address:</b>&nbsp &nbsp 
     	 		<input type="text" name="address" value="">
     	 	</div>
     	 	<div class="form-group"style="margin-top: 260px;">
     	 		<b>Pin Code:</b>&nbsp 
     	 		<input type="text" name="pin" value="">
     	 	</div>
     	 	<div class="form-group "style="margin-top: 300px;margin-left: 200px;">
     	 	<input type="submit" name="submit" value="Register">
     	 	</div>
     	 </form>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" style="background: red;" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
<!-- ------------------------------------------------------- -->
 <div class="modal fade" id="Modal">
    <div class="modal-dialog modal-sm" style="margin-top: 100px;">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">USER LOGIN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
        	<div style="width: 200px;height: 150px;margin-left: 30px;position: relative;">
         <form method="post" class="form-inline">
         <div class="form-group" style="margin-top: 30px;margin-left: 0px;">         	
            <input type="text" name="uname" placeholder="Enter Username">
            </div>
            <div class="form-group" style="margin-top: 80px;margin-left: 0px;">
            <input type="password" name="password" placeholder="Enter Password">
        </div>
         <div class="form-group" style="margin-top: 120px;margin-left: 120px;">
            <input type="submit" name="submit" value="SUBMIT">
        </div>
         </form>
         </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: red;">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- --------------------------------------------------------- -->
			</div>
		</div>
		</div><br>
		<div class="row">
		<div class="col-md-12">
			<div style="width: 100%;">
				<h1 class="text-center">OUR SERVICES</h1><br>
               <div style="height: 350px;width: 400px;border: 1px solid black;float:left;background-image: url(tiffin2.jpeg);background-repeat: no-repeat;background-size: cover;"></div>
                <div style="height: 350px;width: 450px;border: 1px solid black;float:left;">
                	<a href="#"><h3 style="text-align: center;">Veg Tiffin Service</h3></a>
                	<h4 style="margin-left: 20px;">Rs 50/ Plate</h4>
                	<pre style="margin-left: 20px;font-size: 20px;color: grey;">Food Performance            Veg</pre>
                	<hr style="margin-top: -10px;">
                	<pre style="margin-left: 20px;font-size: 20px;color: grey;">Number of Person            2</pre>
                	<hr style="margin-top: -10px;">
                	<pre style="margin-left: 20px;font-size: 20px;color: grey;">Delivery Cycle     All Days in a Week</pre>
                    <p style="margin-left: 20px;font-size: 20px;">Tiwari Tiffin service, Food made by mom at home pure, hygienic, fresh now at your door step.Khana aisa ghar jaisa,Ghar jaisa swad Shudhta ka vishvas</p>
                </div>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-12">
			<div style="height: 400px;width: 100%;background:;"></div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-12">
			<div style="height: 400px;width: 100%;background:blue;"></div>
		</div>
		</div>
	</div>
</body>
</html>
<?php 
// Registration code:-
include("conne.php");
if(isset($_POST['name']))
{
	echo $name=$_POST['name'];
	echo $uname=$_POST['uname'];
	echo $password=$_POST['password'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$pin=$_POST['pin'];
	$sql="insert into registration values ('$name','$uname','$password','$mob','$email','$address','$pin')";
	if($conn->query($sql))
 	{
 		echo"Data insert successfully";
 		//header("location:userlogin.php?msg=wellcome user"); 
 	}
 	else{
 		echo "error";
 	}
}

//                      Login :-
if(isset($_POST['uname']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];
$sql2="select password from registration where username='$uname'";
$x=$conn->query($sql2);
	if ($r=$x->fetch_array()) {

$pswd=$r['password'];
        if($pswd==$password)
        {
        	session_start();
        	$_SESSION['uname']=$uname;
                $_SESSION['password']=$pswd;
        	header("location:order_form.php?msg=Welcome custmore");

        }
}
}



 ?>