<?php
require_once('connectDb.php');

$nrp    = $_POST["nrp"];
$name   = $_POST["name"];
$alamat = $_POST["alamat"];
$idFkl  = $_POST["fakultas"];

$sqlFetchMhs   = "INSERT INTO mahasiswa(id_fakultas,nrp,nama_mhs,alamat) values($idFkl,'$nrp','$name','$alamat')";

$insertMhs    = $connect->query($sqlFetchMhs);


if ($insertMhs) {
    echo "Insert data Success";
    header('location:index.php');
} else {
    echo "error";
    echo "Error: " . $sqlFetchMhs . "<br>" . $connect->error;
}
mysqli_close($connect);
?>
