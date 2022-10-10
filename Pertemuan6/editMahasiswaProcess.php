<?php
require_once('connectDb.php');

$idMhs  = $_POST["idMhs"];
$nrpMhs = $_POST["nrp"];
$name   = $_POST["name"];
$alamat = $_POST["alamat"];
$idFkl  = $_POST["fakultas"];


$sqlUpdateMhs   = "UPDATE mahasiswa SET nama_mhs='$name', nrp='$nrpMhs', alamat='$alamat', id_fakultas=$idFkl WHERE id_mhs=$idMhs ";

$updateMhs      = $connect->query($sqlUpdateMhs);


if ($updateMhs) {
    echo "edit data Success";
    header('location:index.php');
} else {
    echo "error";
    echo "Error: " . $sqlUpdateMhs . "<br>" . $connect->error;
}
mysqli_close($connect);
?>
