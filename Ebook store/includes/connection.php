<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="ebook_store";


$conn= new mysqli($hostname,$username,$password,$db_name);
if($conn->connect_error){
    echo "connection failed:".$conn->connect_error;
    exit;
}





?>