<?php
 if(!isset($_SESSION['email']))
 {
   header('location:loginpage.php');
 }
 else
 {
  header('location:checkout.php');
 }
?>