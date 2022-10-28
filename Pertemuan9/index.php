<?php
include('connectDb.php');

$sqlFetchMhs   = "SELECT * FROM tbl_satria";

$getDataMhs    = $connect->query($sqlFetchMhs);
$dataMahasiswa = $getDataMhs->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Cobu CRUD</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>


	<section id="header">
		<button class="btn btn-primary" onclick="toggleComp()">Tambah Mahasiswa</button><br>
		<div class="frame-comp" id="frameInp" style="display:none;">
			<form action="insertMahasiswa.php" method="POST">

				<div class="input-field">
					<label for="name">Nama Mahasiswa</label>
					<input id="name" type="text" name="name">
				</div>
				<div class="input-field">
					<label for="alamat">Alamat</label>
					<textarea id="alamat" name="alamat"> </textarea>
				</div>
				<button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
			</form>
		</div>
	</section>

	<section id="content">
		<div class="data-mahasiswa">
			<div class="data-mahasiswa-container">
				<?php foreach ($dataMahasiswa as $dataMhs) { ?>

					<div class="card-data-mahasiswa">
						<div class="card-data-mahasiswa-container">
							<div class="data-id">
								<h1><?= $dataMhs["id_satria"] ?></h1>
							</div>
							<div class="biodata-mahasiswa">
								<div class="data-nama">
									<span><?= $dataMhs["nama_satria"] ?></span>
								</div>
								<div class="data-alamat">
									<p><?= $dataMhs["alamat_satria"] ?></p>
								</div>
								<div class="action-data">
									<div class="action-edit-data">
										<form action='editMahasiswa.php' method='POST'>
											<input type='hidden' name='idMhs' value="<?= $dataMhs['id_satria'] ?>">
											<input type='hidden' name='action' value='edit'>
											<button type='submit' class='btn btn-secondary'>Edit</button> </td>
										</form>
									</div>
									<div class="action-hapus-data">
										<form action='deleteMahasiswa.php' onsubmit='conf' method='POST'>
											<input type='hidden' name='idMhs' value="<?= $dataMhs['id_satria'] ?>">
											<input type='hidden' name='action' value='hapus'>
											<button type='submit' onclick='conf()' id='hapus' class='btn btn-alert'>Hapus</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				<?php } ?>

			</div>



		</div>


	</section>








	<script type="text/javascript">
		let frameInp = document.getElementById('frameInp');

		function toggleComp() {
			if (frameInp.style.display == "none") {
				frameInp.style.display = "inline-block";
			} else {
				frameInp.style.display = "none";
			}
		}

		function conf() {
			if (!confirm('apakah anda ingin menghapus data?')) {
				event.preventDefault();
			}
		}
	</script>
</body>

</html>