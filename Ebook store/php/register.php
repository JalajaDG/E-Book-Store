<?php
session_start();
include '../includes/connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone_no=$_POST['phn'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    
    if(strlen($phone_no)<10)
        {
            
            $_SESSION['phn_error']="invalid number";
            header("location:register.php");
            exit();

        }
    if(strlen($password)<6)
    {
        $_SESSION['pass_error']="Password is less than 6 characters";
        header("location:register.php");
        exit();
    }
   
                    
        


        else{
             $sql="insert into Register (name,phone_number,gender,email,password) values(?,?,?,?,?)";
               /*to avoid sql injection(hacking)prepared statement is used ie values r giving seperately in 2 steps*/
              $stmt=$conn->prepare($sql);
             $stmt->bind_param("sssss",$name,$phone_no,$gender,$email,$password);
              $result=$stmt->execute();
              if($result){
                $_SESSION['regstatus']="Registered scuccessfully";
            
                header("location:home.php");
                exit();
            }
            else{
                $_SESSION['email_error']="email_error";
                header("location:register.php");
                exit();

            }
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
        <!--register modal-->

    
<div class="modal" role="dialog" id="register">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">


                <h3 class="modal-title w-100 font-weight-bold">CREATE AN ACCOUNT</h3>
                

            </div>
            <div class="modal-body">
                <form action="register.php" method="POST" style="width: 400px; height: 500px;">
                <?php
                if(isset($_SESSION['phn_error']))
                {
                    ?>
                     <!-- failure Alert-phn no -->
                <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:10px" >
               <strong>Failed!</strong>Invalid Phone number.
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['phn_error']);

                }
                ?>


               <?php
                if(isset($_SESSION['pass_error']))
                {
                    ?>
                     <!-- failure password -->
                <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:10px" >
               <strong>Failed!</strong>Password is less than 6 characters.
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['pass_error']);

                }
                ?>




                <?php
                if(isset($_SESSION['email_error']))
                {
                    ?>
                     <!-- failure password -->
                <div>
               <div class="alert alert-danger alert-dismissible fade show"  style="margin-right:10px" >
               <strong>Failed!</strong>This email is already registered.
              <button type="button" class="close" data-dismiss="alert">&times;</button>
               </div>
             </div>
               <?php
                 unset($_SESSION['email_error']);

                }
                ?>


                 


               
                   
                    <input type="text" placeholder="Enter name " name="name" required="required"><br><br>
                    <input type="text" placeholder="Enter  Phone Number" name="phn" required="required" maxlength="10"><br><br>
                    <label style="margin: 10px;">Gender:</label><br>
                    <input type="radio" name="gender" value="Male" required="required"> Male &nbsp;
                    <input type="radio" name="gender" value="Female"> Female &nbsp;
                    <input type="radio" name="gender" value="Others"> Others<br><br>
                    <input type="email" placeholder="Enter  email" name="email" required="required"><br><br>
                    <input type="password" name="password" placeholder="Enter Password" required="required"><br><br>
                    <input type="checkbox" required="required">I agree to all terms & conditions<br><br>
                    <button  type ="submit" class="btn btn-success" name="submit">REGISTER</button>
                    <br><br>


                </form>

            </div>
            <div class="modal-footer">
                <p>Have already an account?<a href="login.php" class="btn btn-outline-dark" >Login here</a></p>

            </div>
        </div>
    </div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#register').modal('show');
    })
    </script>

    </body>
</html>