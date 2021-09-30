<?php
session_start();
include '../includes/connection.php';

if(isset($_POST['submit']))
{
   
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $sql="select * from register where email='$email' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
     {
        
        
        
           $sql1=" update register set password='$password' where email='$email' ";
            $result1=mysqli_query($conn,$sql1);
                    if($result && $password==$cpassword)
                      {
                        $_SESSION['up']="pass changed success";
                       header('location:login.php');
                        exit();
                    }
                    else{
                        $_SESSION['pass_error']="dont match";
                        header('location:fpass.php');
                        exit();
                    }
                   
           
            
          
        
       
    }
    else{
        $_SESSION['email_error']="invalid";
        header('location:fpass.php');
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
        <!--forgot password modal-->
 <div class="modal" role="dialog" id="fpass">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title w-100 font-weight-bold">FORGOT PASSWORD</h4>
                   

                </div>
                <div class="modal-body">
                    <form action="fpass.php" method="POST" style="width: 400px;height:400px;" >

                    
                <?php 
                    if(isset($_SESSION['email_error']))
                    {
                        ?>
                        <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:10px" >
               <strong>Failed!- This email-id does not exists!</strong>
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
               <strong>Failed!Re-Enter password correctly!</strong>
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['pass_error']);

                }
                ?>


                
                        <input type="email" name="email" placeholder="Enter Registered Email-id"  required="required"><br><br>
                        <input type="password" name="password" placeholder="Enter new password"  required="required"><br><br>
                        <input type="password" name="cpassword" placeholder="Re-Enter new password"  required="required"><br><br>
                        <button class="btn btn-success" name="submit" style="margin: 10px;" >Change password</button>


                    </form>

                </div>
                
            </div>
        </div>
    </div>
      
   
    <script src="../js/jquery.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script>
    $(document).ready(function(){
        $('#fpass').modal('show');
    })
    </script>

    </body>
 </html>

























 