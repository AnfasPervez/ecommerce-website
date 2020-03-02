<?php   
session_start();
echo "heloo";
session_destroy();
header('location:index.php');


?>