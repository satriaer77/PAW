<?php
require_once('connectDb.php');

$idMhs  = $_POST["idMhs"];
$name   = $_POST["name"];
$alamat = $_POST["alamat"];


$sqlUpdateMhs   = "UPDATE tbl_satria SET nama_satria='$name', alamat_satria='$alamat' WHERE id_satria=$idMhs ";

$updateMhs      = $connect->query($sqlUpdateMhs);


if ($updateMhs) {
    echo "edit data Success";
    header('location:index.php');
} else {
    echo "error";
    echo "Error: " . $sqlUpdateMhs . "<br>" . $connect->error;
}
mysqli_close($connect);
