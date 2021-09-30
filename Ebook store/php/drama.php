<?php
session_start();
error_reporting(0);

include '../includes/connection.php';
   
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_SESSION['name']))
  {
    if(isset($_POST['Add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Name');
            if(in_array($_POST['Name'],$myitems))
            {
                echo " 
                <script>
                alert('This item is already in cart!');
                window.location.href='cart.php';
                </script>
                ";
            }
 
           else{
           $count=count($_SESSION['cart']);
           $_SESSION['cart'][$count]=array(
            'Id'=>$_POST['Id'],
            'Name'=>$_POST['Name'],
            'Image'=>$_POST['Image'],
            'Author'=>$_POST['Author'],
            'Category'=>$_POST['Category'],
            'Language'=>$_POST['Language'],
            'Price'=>$_POST['Price'],
            'Quantity'=>$_POST['Quantity']
          );
         
        }
        }
        else
        {
           $_SESSION['cart'][0]=array(
            'Id'=>$_POST['Id'],
            'Name'=>$_POST['Name'],
            'Image'=>$_POST['Image'],
            'Author'=>$_POST['Author'],
            'Category'=>$_POST['Category'],
            'Language'=>$_POST['Language'],
            'Price'=>$_POST['Price'],
            'Quantity'=>$_POST['Quantity']
          );
         
         
         
        }
    }
  }
    else{
      $_SESSION['login']="login before using cart";
      echo " <script> 
      window.location.href = 'login.php';
      </script>";
    
    }
}





?>
<!DOCTYPE html>
<html>

<head>
  <title>Ebook store</title>

  <link href="../css/bootstrap.css" rel="stylesheet" />
  <link href="../css/style.css" rel="stylesheet" />
</head>

<body>
<nav>
    <ul class="breadcrumb">
      <li><a href="home.php">Home</a></li>
      <li><a href="home.php#categories">Categories</a></li>
      <li><a href="drama.php">Drama</a></li>
       
      <div style="margin-left :700px;">
       
     <a href="cart.php" class="btn btn-outline-dark"><i class="fas fa-shopping-cart"></i>Cart
             <?php
             if(isset($_SESSION['cart'])){
                 $count=count($_SESSION['cart']);?>
                   <span id="cart-count" class="btn btn-warning "><?php echo $count;?></span>
                 <?php
             }
             else{
                 ?>
                     <span id="cart-count" class="text-warning ">0</span>
                 <?php
               
             }
             
             
             ?></a>
    </ul>
            </div>
  </nav>
  <div class="box">
    <h3 class="book-heading">DRAMA BOOKS</h3>

    <br><br>

    <?php 
          
          
         
       
          $query="select * from book where category='Drama' ";
        
        
        $result=mysqli_query($conn,$query);
        $num=mysqli_num_rows($result);
        /*$row=mysqli_fetch_assoc($result);
       echo"<pre>";
        print_r($num);*/
      /*  while($row=mysqli_fetch_assoc($result)){
          print_r($row);}*/
      
        if($num>0)
        {
          while($row=mysqli_fetch_assoc($result)){
         
            $Id = $row['Id'];
            $Name= $row['Name'];
            $Author =$row['Author'];
            $Language=$row['Language'];
            $Description=$row['Description']; 
            $Price=$row['Price'];
            $Image=$row['Image'];
           

        
        
        ?>


    <div class="books-box" id="filter">
      <form action="drama.php" method="POST">


        <div class="book">


          <div class="book_img">
            <img src="<?php echo $Image;?>" style="margin-top:10px;margin-bottom:10px;">
          </div>
          <div class="book_content">
            <div style="padding-bottom:10px;padding-top:10px; ">
              <h6 style="color: red;"><b>
                  <?php echo $Name;?>
                </b></h6>
              <h6> <b>Author:
                  <?php echo $Author; ?>|Language:
                  <?php  echo $Language; ?>
                </b></h6>
              <p style="text-align: justify;"><b>Book description</b>:
                <?php echo $Description; ?>
              </p>
              <h6><b>Price:
                  <?php echo $Price; ?>
                </b><input type="number" name="Quantity" min="1" max="10" placeholder="Quantity"
                  style="width:100px; margin-left:20px;"></h6>

              <br>
            
              

             <button type="submit" class="btn btn-success" name="Add_to_cart" style="margin-left: 30px;">Add to cart</button> 
            
              <input type="hidden" name="Id" value="<?php echo $Id; ?> ">
              <input type="hidden" name="Name" value="<?php echo $row['Name']; ?>">
              <input type="hidden" name="Image" value="<?php echo $row['Image']; ?>">
              <input type="hidden" name="Author" value="<?php echo $row['Author']; ?>">
              <input type="hidden" name="Category" value="<?php echo $row['Category']; ?>">
              <input type="hidden" name="Language" value="<?php echo $row['Language']; ?>">
              <input type="hidden" name="Price" value="<?php echo $row['Price']; ?>">

             
            </div>
            </form>
           
         </div>
         

          
        </div>

        



    </div>
  

  </div>


    </div>
  </div>




  
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/filter.js"> </script>
  <script type="text/javascript" src="../js/google_api.js"> </script>

</body>

</html>

<?php
}
}?>
