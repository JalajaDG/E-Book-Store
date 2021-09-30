<?php
session_start();
include '../includes/connection.php';

if(isset($_POST['login_submit']))
{
    $lemail= $_POST['email'];
    $lpassword= $_POST['password'];
    
    $sql="select * from register where email='$lemail' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    
    
    
    if($num==1)
     {

        $sql1="select * from register where email='$lemail' And password='$lpassword'";
       
        $result1=mysqli_query($conn,$sql1);
        $num1=mysqli_num_rows($result1);
        while($row=mysqli_fetch_assoc($result)){
            $name=$row['Name'];
            $phone=$row['Phone_number'];
        }
        if($num1==1)
        {
            
           $_SESSION['phone']=$phone;
            $_SESSION['name']=$name;
            header('location:home.php');
            exit();
            
        }
    
        else{
            $_SESSION['pass_error']="incorrect password";
            header('location:login.php');
            exit();
        }

        
     }
     else{
        $_SESSION['email_error']="invalid";
        header('location:login.php');
        exit();
        
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
        
       <!---login modal-->
    <div class="modal" role="dialog" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 font-weight-bold">LOGIN</h4>
        

                </div>
                <div class="modal-body">
                    <form action="login.php" method="POST" style="width: 360px; height: 300px;">
                    <?php 
                    if(isset($_SESSION['email_error']))
                    {
                        ?>
                        <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:10px" >
               <strong>Failed!This email does not exists!.</strong> 
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['email_error']);

                }
                ?>


                     <?php 
                    if(isset($_SESSION['pass_error']))
                    {
                        ?>
                        <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:10px" >
               <strong>Failed!Invalid password.</strong> 
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['pass_error']);

                }
                ?>



                <?php 
                    if(isset($_SESSION['login']))
                    {
                        ?>
                        <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:60px" >
               <strong>Login before using cart</strong> 
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['login']);

                }
                ?>




<?php
    if(isset($_SESSION['up']))
    {
        ?>
    
       <!-- Success Alert -->
       <div>
       <div class="alert alert-success alert-dismissible fade show" >
       <strong>Password changed successfully.</strong>
       <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>
<?php
unset($_SESSION['up']);
    }
    ?>


                        <input type="email" name="email" placeholder="Enter Email"  required="required"><br><br>
                        <input type="password" name="password" placeholder="Enter password"  required="required"><br>
                        <a href="fpass.php" >Forgot password?</a><br><br>
                        
                        <button type="submit" class="btn btn-success" name="login_submit" style="margin:10px; ">Login</button>
                        <br><br>

                    </form>

                </div>
                <div class="modal-footer">
                    <p>Don't have an account?<a href="register.php" class="btn btn-outline-dark" >Register here</a></p>
<br><br>
                </div>
            </div>
        </div>
    </div>
   
    <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script>
    $(document).ready(function(){
        $('#login').modal('show');
    })
    </script>

    </body>
 </html>