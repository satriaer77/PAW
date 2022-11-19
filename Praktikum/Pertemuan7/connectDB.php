<?php
    $server   = "localhost";
    $username = "root";
    $password = "234iwuope"; 
    $database = "cobuPAW";

    $connect  = mysqli_connect($server,$username,$password,$database);
    if(!$connect)
    {
        die(mysqli_error());
    }
      
?>
