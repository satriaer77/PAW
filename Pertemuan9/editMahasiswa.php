<?php
if (isset($_POST['action'])) {
	include('connectDb.php');

	$idMhs 		   = (int)$_POST['idMhs'];

	$sqlFetchMhs   = "SELECT * FROM tbl_satria WHERE id_satria=$idMhs";

	$getDataMhs    = $connect->query($sqlFetchMhs);
	$dataMahasiswa = $getDataMhs->fetch_assoc();
} else {
	echo "<script>alert('anda tidak berhak mengedit!!');</script>";
	header('location:index.php');
}
?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Edit Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
	<form method="POST" action="editMahasiswaProcess.php">
		<input type="hidden" name="idMhs" value=<?= $idMhs ?>>
		<div class="input-field">
			<label for="name">Nama Mahasiswa</label>
			<input type="text" name="name" id="name" placeholder="Nama Mahasiswa" value='<?= $dataMahasiswa["nama_satria"] ?>' />
		</div>
		<div class="input-field">
			<label for="alamat">Alamat Mahasiswa</label>
			<textarea rows="4" name="alamat" id="alamat" placeholder="Alamat Mahasiswa"><?= $dataMahasiswa["alamat_satria"] ?></textarea>
		</div>


		<button type="submit" class="btn btn-primary">Edit</button>

		<a href="index.php" class="btn btn-secondary">Batal</a>
	</form>

</body>

</html>