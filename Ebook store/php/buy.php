<?php

session_start();
include "../includes/connection.php";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['buy-all']))
  {
    $Name=$_POST['Name'];
    $Phone=$_POST['Phone'];
    $Address=$_POST['Address'];
    $COD=$_POST['COD'];
    $Image=$_POST['Image'];
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
    {

      $Book_name=$value[Name];
      $Price=$value[Price];
      $Quantity=$value[Quantity];
      
    

    
    $sql="insert into orders (Book_name,Image, Price, Quantity, Name, Phone_number, Address, Payment_mode)values('$Book_name','$Image','$Price','$Quantity','$Name','$Phone','$Address','$COD')";
    if(mysqli_query($conn,$sql))
    {
      unset($_SESSION['cart']);
     header('location:myorder.php');
    }

  }



  }
   
  
  else
  {
    echo "<script>
    alert('sql query prep stmt error');
    window.location.href='cart.php';
    <script>";
  }
 } 
 
 
}
 