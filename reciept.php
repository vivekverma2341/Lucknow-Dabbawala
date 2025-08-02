<?php
      session_start();
  $uname=$_SESSION['uname'];
  $days=$_SESSION['days'];
      $no=$_SESSION['no'];
         $tt=$_SESSION['tt'];
            $ft=$_SESSION['ft'];
            $total=$_SESSION['total'];
            $date=$_SESSION['date'];
         $tt2=implode(",", $tt);
           
         ?>

<!DOCTYPE html>
<html>
<head><?php include("bootstrap.php"); ?></head>
<body>

<div class='container-fluid'>
  <div class='row'>
  <div class='col-md-12'>
    <span class='display-4 ml-4 mt-4'>Reciept</span>
    <a href="logout.php"><button class='btn btn-warning float-right mt-4 mr-4'>LOGOUT</button></a>
    <a href="customer.php"><button class='btn btn-dark float-right mt-4 mr-4'>BACK</button></a>
    <button class='btn btn-outline-info float-right mt-4 mr-4' onclick="window.print();">PRINT</button>
  </div>
</div>
  <div class='row mt-4'>
    <div class='col-md-3'></div>
    <div class='col-md-6 mt-4'>
   <table class='table'>
  <tr><th colspan="2" ><h2>Lucknow Dabbawala</h2></th><th>Invoice <br>
<?php echo $date;?>
  </th></tr>
   
  <tr>
    <th>Customer Name</th><td colspan="2"><?php echo $uname;?> </td> 
  </tr>
    <tr>
      <th>Food Type</th> <td colspan="2"><?php echo $ft;?> </td>
    
    </tr>
    <tr>
    <th>Tiffin Type</th><td colspan="2"><?php echo $tt2;?> </td>
   </tr>
   <tr>
    <th>No of Tiffin</th><td colspan="2"><?php echo $no;?> </td>
    
   </tr>
   
   <tr>
    <th>Days</th> <td colspan="2"><?php echo $days;?> </td>
   </tr>
   

   <tr>
    <th>Total</th> <td><?php echo $total;?>&nbsp; &#8377; </td>
   </tr>
</table>

      

    </div>
    <div class='col-md-3'></div>
  </div>
</div>
</body>
</html>
