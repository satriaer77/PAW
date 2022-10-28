<?php
require_once('connectDb.php');

$name   = $_POST["name"];
$alamat = $_POST["alamat"];

$sqlFetchMhs   = "INSERT INTO tbl_satria(nama_satria,alamat_satria) values('$name','$alamat')";
$insertMhs     = $connect->query($sqlFetchMhs);


if ($insertMhs) {
    echo "Insert data Success";
    header('location:index.php');
} else {
    echo "error";
    echo "Error: " . $sqlFetchMhs . "<br>" . $connect->error;
}
mysqli_close($connect);
