<?php
session_start();
unset($_SESSION['name']);

header("location:home.php");
exit();

?>