<?php

include '../includes/connection.php';

$k=$_POST['id'];
$k=trim($k);
$sql="select * from Book where Language='{}'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
  ?>
    





<div class="book_img">
  <img src="<?php echo $row['Image'];?>" style="margin-top:10px;margin-bottom:10px;">
</div>
<div class="book_content">
<div style="padding-bottom:10px;padding-top:10px; ">
  <h6 style="color: red;"><b>A <?php echo $Name;?></b></h6>
  <h6> <b>Author:<?php echo $row['Author']; ?>|Language:<?php  echo $row['Language']; ?></b></h6>
  <p style="text-align: justify;"><b>Book description</b>:<?php echo $row['Description']; ?></p>
    <h6 ><b>Price:<?php echo $row['Price']; ?></b></h6><br>
  <button class="btn btn-success" style="margin-left: 20px;">Buy now</button>
  <button class="btn btn-success" style="margin-left: 30px;">Add to cart</button>
  </div>
</div>

</div>






    
   
<?php
}
echo $sql;
?>
  





?>