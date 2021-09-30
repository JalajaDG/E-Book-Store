<?php
error_reporting(0);



include "../includes/connection.php";

session_start();


?>
<!DOCTYPE html>
<html>

<head>
  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />

</head>

<body>


  <nav>
    <ul class="breadcrumb">
      <li><a href="home.php">Home</a></li>

      <li><a href="cart.php">cart</a></li>

      <div style="margin-left :900px;">

        <a href="cart.php" class="btn btn-outline-dark"><i class="fas fa-shopping-cart"></i>Cart
          <?php
             if(isset($_SESSION['cart'])){
                 $count=count($_SESSION['cart']);?>
          <span id="cart-count" class="btn btn-warning ">
            <?php echo $count;?>
          </span>
          <?php
             }
             else{
                 ?>
          <span id="cart-count" class="text-warning ">0</span>
          <?php
               
             }
             
             
             ?>
        </a>
    </ul>
    </div>
  </nav>
  <div class="cart-box">
  <?php
          if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
          {
          ?>
     <div class="items" style="margin-left: 40px;" >


       <div class="table" style="width:500px; ">

         <table class="table  text-center  table-hover  " >
          <thead>
            <tr>
              <th scope="col">Image </th>
              <th scope="col"> Name </th>
              <th scope="col"> Author </th>
              <th scope="col"> Category</th>
              <th scope="col"> Language </th>
              <th scope="col">Price <i class='fas fa-rupee-sign'></th>
              <th scope="col"> Quantity </th>
              <th>Total<i class="fas fa-rupee-sign"></i></th>


            </tr>
          </thead>
          <tbody>
            <?php 
                      if(isset($_SESSION['cart']))
              {
            
              foreach($_SESSION['cart'] as $key => $value){
                $Price=$value[Quantity]*$value[Price];
                echo "
                <tr>
                <td><img src='$value[Image]' style='width: 100px; '></td>  
                <td>$value[Name]</td> 
                <td>$value[Author]</td> 
                <td>$value[Category] </td> 
                <td>$value[Language]</td> 
                <td>$value[Price]<input type='hidden'class='iprice' value='$value[Price]'></td>
              
                <form action='cart.php' method='POST'>
                <td>
                <input type='hidden' name='Image'  value='$value[Image]'>
                <input type='number' style='width: 40px;'  onchange='this.form.submit()'  min='1' max='10' name='Mod_quantity' class='iquantity' value='$value[Quantity]'></td> 
                <input type='hidden' name='Name'  value='$value[Name]'>
                <input type='hidden' name='Id'  value='$value[Id]'>
                
               
               
                </form>
               
              
                <td class='itotal'> </td>
            
                <td>
                <form action='cart.php' method='POST'>
                <Button name='remove'  class='btn btn-danger remove '><i class='fas fa-trash-alt'></i></Button>
                <input type='hidden' name='Id'  value='$value[Id]'>
                <input type='hidden' name='Name'  value='$value[Name]'>

                </form>
                </td>
               
               
               <input type='hidden' name='Name'  value='$value[Name]'>
            <input type='hidden' name='Id'  value='$value[Id]'>
               
                
                
                
               
                
                
                     </tr> ";
                  
                          }
              
            
            
            
            
            
            
            
            
                     if(isset($_POST['remove']))
                   {
                     foreach ($_SESSION["cart"] as $key => $val) 
                     {
                        if($val["Id"] == $_POST['Id'])
                      {
                           unset($_SESSION["cart"][$key]);
                            $_SESSION["cart"] = array_values($_SESSION["cart"]);
                             echo "<script>
                              window.location.href = 'cart.php';
                            </script> ";
                      }
                     }
                    }
            
            
                       if(isset($_POST['Mod_quantity']))
                     {
                       foreach ($_SESSION["cart"] as $key => $val)
                       {
                         if($val["Id"] == $_POST['Id'])
                         {
                           
                             $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_quantity'];
                              echo "<script>
                                window.location.href = 'cart.php';
                              </script> ";
                         }
                        }
                      }
            
            
            
            }
            
            
            
            
            ?>


          </tbody>
        </table>







      </div> 
      
      <div class="buy-form" style="height: 470px; margin-left:400px;" >
    
        <table>
        <tr>
                <td style='padding-left:70px;'>
                  <h3 id='grand-total-heading' style='text-align:center; '>Grand Total <i class="fas fa-rupee-sign"></i>
                  </h3></td>
                 
              </tr>
              </td>
              <br>
              <tr style='text-align:left;'>

                <td style='padding-left:20px;'>Total</td>
                <td>:</td>
                <td id="gtotal"></td>
              </tr>
              <tr style='text-align:left;'>
                <td style='padding-left:20px;'>Delivery charges(COD)</td>
                <td>:</td>
                <td>Rs.40</td>
              </tr>


              <tr style='text-align:left; '>
                <td style='padding-left:20px;'>Grand-Total</td>
                <td>:</td>
                <td id="ggtotal"></td>


              </tr>

          </table>
         
<form action="buy.php" method="POST" >
          <div class="form-group" >
            <hr>
            <h5 style="text-align:center;"> Fill your Billing details</h5>
         
    <input type="text" class="form-control" value="<?php  echo $_SESSION['name'];?>" required="required" name="Name" style="width:260px;margin-left:30px;">
   
          <input type="hidden" name="Image" value="<?php echo "$value[Image]" ;?>">

    <input type="text" class="form-control" placeholder="Enter your Phone-number" required="required" name="Phone"style="width:260px;margin-left:30px;" >

   
    <textarea maxlength="50" placeholder="Enter your Address" name="Address" required="required" style="width:260px;margin-left:30px;"></textarea>
    <br>
    <input type="radio" name="COD" value="COD" style="margin-left:30px;" checked="">Cash on Delivery-(COD)
    <br>
 
    <Button type="submit" name="buy-all" class="btn btn-success" style="margin-left:80px;margin-bottom:20px;">Buy all in the cart</Button>

          </div>
         



      </form>
      <?php
          }
          else{
            ?>
            <div class="alert alert-danger" role="alert" style="width:20%;margin-left:auto;margin-right:auto; margin-top:100px; text-align:center;">
             Cart is empty!
             </div>
<?php
          }
      ?>



      </div>
    
    

      

    </div><!--end of div items-->

    


  </div>





  </div>





  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
    var gt=0;//total of all items
    var iquantity = document.getElementsByClassName('iquantity');
    var iprice = document.getElementsByClassName('iprice');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    var ggtotal = document.getElementById('ggtotal');
    function subTotal() {
      gt=0;
      for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt=gt+(iprice[i].value) * (iquantity[i].value);
        ggt=gt+40;
      }
      gtotal.innerText=gt;
      ggtotal.innerText=ggt;
    }

  

    subTotal();
  </script>

</body>

</html>
