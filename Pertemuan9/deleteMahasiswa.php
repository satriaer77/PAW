<?php
require_once('connectDb.php');

if (isset($_POST['action'])) {
	$idMhs  = $_POST["idMhs"];
	// var_dump($_POST);

	$sqlDeleteMhs   = "DELETE FROM tbl_satria WHERE id_satria=$idMhs ";

	$deleteMhs      = $connect->query($sqlDeleteMhs);


	if ($deleteMhs) {
		echo "delete data Success";
		header('location:index.php');
	} else {
		echo "error";
		echo "Error: " . $sqlDeleteMhs . "<br>" . $connect->error;
	}
	mysqli_close($connect);
} else {
	echo "<script>alert('anda tidak berhak menghapus!!');</script>";
	header('location:index.php');
}
