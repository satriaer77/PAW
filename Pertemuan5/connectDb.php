<?php 
require '../../vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


krumo($GLOBALS);
error_reporting(E_WARNING);

$serverName = "localhost";
$username   = "root";
$password   = "234iwuope";

$connect    = mysqli_connect($serverName,$username,$password);


if(!$connect)
{
  die("Connection failed: ".mysqli_connect_error());
var_dump($GLOBALS);
}
else {
  echo "Connect Successfully";

}


?>
