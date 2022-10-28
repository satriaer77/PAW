<?php

$serverName = "localhost";
$username   = "root";
$password   = "234iwuope";
$database   = "db_085";

$connect    = mysqli_connect($serverName, $username, $password, $database);

if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
