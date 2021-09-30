<?php 
session_start();
error_reporting(0);

include "../includes/connection.php";

$query="select * from orders where Name='$_SESSION[name]'";
  $result=mysqli_query($conn,$query);
  
 
    
?>
<!DOCTYPE html>
<html>
  <head>
  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

  <style>
.order{
  display:block;
}
.order-heading
{
  display:block;
}
.order-heading h3{
  text-align:center;

}
.order-table{
  width:50%;
 margin-left:140px;
}
.order table{
  border:1px solid black;
	border-collapse:collapse;
	width:700px;

	font-family:aerial;
	font-size:20px;

}
.order th{
	background-color:black;
  color:white;
  width:300px;
  text-align:center;

  padding:10px 30px;
}
	.order td{
  
    text-align:center;
  }
  
	

    </style>
    
   
</head>
<body>


<nav>
    <ul class="breadcrumb">
      <li><a href="home.php">Home</a></li>

      <li><a href="myorder.php">My Orders</a></li>
</ul>

     
  </nav>
  <div class="order">
    <div class="order-heading" ><h3 >My Orders &nbsp;<i class="fas fa-shopping-bag"></i></h3>
 
  
  </div>
   

    <div class="order-table ">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Order_id</th>
      <th scope="col" rowspan="5" >Book_name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col"> Address</th>
      <th scope="col">Payment_mode</th>
      <th scope="col"  cellspacing="20px"class="status">Status</th>
    </tr>
  </thead>
  <tbody>
  
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
     
      $iprice=$row[Quantity]*$row[Price];
    echo "
    <tr>
      <td >$row[Order_id]</td>

      <td >$row[Book_name]</td>
      <td>$row[Quantity]</td>
      <td>$iprice</td>
      <td>$row[Address]</td>
      <td>$row[Payment_mode]</td>
      <td >$row[Status]</td>
      
    </tr>

    ";
   
    
    }
    ?>
   
      
      
 
   
    
  </tbody>
</table>
    </div>












  </div>

 




  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/filter.js"> </script>
  <script type="text/javascript" src="../js/google_api.js"></script>
  
</body>
</html>