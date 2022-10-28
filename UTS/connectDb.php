<?php

$serverName = "localhost";
$username   = "root";
$password   = "234iwuope";
$database   = "dataKampus";

$connect    = mysqli_connect($serverName,$username,$password,$database);

if(!$connect)
{
  die("Connection failed: ".mysqli_connect_error());
}
else {
	//connect suc
  echo "Connect Successfully";

}


?>
