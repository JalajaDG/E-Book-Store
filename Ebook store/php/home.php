<?php
session_start();
?>



<!DOCTYPE html>
<html>

<head>
    <title>Ebook store</title>

    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
</head>

<body>
    <div class="logo">
        <img src="../img/logo.png">
        
   
    <b>E-BOOK STORE</b>


    </div>
    <div class="navbar">
        <ul>

             
            <?php if(isset($_SESSION['name'])){?> <li class="btn btn-light"> <i class="fas fa-user"></i>&nbsp;<?php echo $_SESSION['name']; ?></li><?php } ?>
            <li><a href="#" class="btn btn-dark">Home</a></li>
            <li><a href="../aboutus.html" class="btn btn-outline-dark">About-Us</a></li>
            <?php if(isset($_SESSION['name'])){?> <li><a href="cart.php" class="btn btn-outline-dark"><i class="fas fa-shopping-cart"></i>Cart
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
             
             
             ?></a></li> <?php }
             ?>


            <?php if(!isset($_SESSION['name'])){?><li><a href="register.php" class="btn btn-outline-dark" > Register</a></li> <?php } ?>
            <?php if(isset($_SESSION['name'])){?><li><a href="myorder.php" class="btn btn-outline-dark" > My order</a></li> <?php } ?>
            <?php if(!isset($_SESSION['name'])){?><li><a  href="login.php" class="btn btn-outline-dark" >Login</a></li><?php } ?>
       
        <?php if(isset($_SESSION['name'])){?><li><a  href="logout.php" class="btn btn-outline-dark" >Logout</a></li><?php } ?>
     

            </ul>

    </div>
         <br><br>
    <hr />
    <?php
    if(isset($_SESSION['regstatus']))
    {
        ?>
    
       <!-- Success Alert -->
       <div>
       <div class="alert alert-success alert-dismissible fade show" style="margin-left:450px">
       <strong>Success!</strong> Registration done successfully!.
       <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
<?php
unset($_SESSION['regstatus']);
    }
    ?>



<?php
   if(isset($_SESSION['pls_login'])){
       ?>
       <div>
       <div class="alert alert-success alert-dismissible fade show" style="margin-left:450px">
       <strong>Success!</strong> Login to open cart!.
       <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
    <?php
          unset($_SESSION['pls_login']);
    }

   

?>

















    <div class="categories-box" id="categories">
        <h3>Categories</h3>
        <br>
       
        <div>
            <div class="categories">
              <div>

                <a href="drama.php"><img src="../img/drama.jpg"></a>
                <p>Drama</p>

            </div>
            <div>

                <a href="horror.php"><img src="../img/horror.jpg"></a>
                <p>Horror </p>

            </div>
            <div>

                <a href="health.php"><img src="../img/health.png"></a>
                <p>Health </p>

            </div>
            
            <div>

                <a href="mystery_thriller.php"><img src="../img/m&t.jpg"></a>
                <p>Mystery and thriller </p>

            </div>
            <div>

                <a href="science_fiction.php"><img src="../img/sf.jpg"></a>
                <p>Science fiction</p>

            </div>
            <div>

                <a href="poetry.php"><img src="../img/poetry.jpg"></a>
                <p>Poetry </p>

            </div>

         </div>

        </div>
    </div>
</div>
 
 
    <script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>