<?php
if(isset($_POST['action']))
{
	include('connectDb.php');

	$idMhs 		   = (int)$_POST['idMhs'];

	$sqlFetchMhs   = "SELECT * FROM mahasiswa WHERE id_mhs=$idMhs";
	$sqlFetchFkl   = "SELECT * FROM fakultas";

	$getDataFkl    = $connect->query($sqlFetchFkl);
	$getDataMhs    = $connect->query($sqlFetchMhs);
	$dataMahasiswa = $getDataMhs->fetch_assoc();
	$dataFkl       = $getDataFkl->fetch_all(MYSQLI_ASSOC);
}
else
{
	echo"<script>alert('anda tidak berhak mengedit!!');</script>";
	header('location:index.php');
}
 ?>

<!DOCTYPE HTML>

<html>

	<head>
    	<link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet" />
    	<script src="https://cdn.tailwindcss.com"></script>
	</head>

	<body>
		 <form method="POST" action="editMahasiswaProcess.php">
			<input type="hidden" name="idMhs" value=<?= $idMhs ?>>
			 <div class="p-6 space-y-6">
				 <div class="mb-5">
					 <label for="nrp" class="mb-3 block text-base font-medium text-[#07074D]">NRP</label>
					 <input type="text" name="nrp" id="nrp" placeholder="NRP" maxlength="12" value='<?= $dataMahasiswa["nrp"] ?>' class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
				 </div>

				 <div class="mb-5">
					 <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">Nama Mahasiswa</label>
					 <input type="text" name="name" id="name" placeholder="Nama Mahasiswa" value='<?= $dataMahasiswa["nama_mhs"] ?>' class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
				 </div>
				 <div class="mb-5">
					 <label for="alamat" class="mb-3 block text-base font-medium text-[#07074D]">Alamat Mahasiswa</label>
					 <textarea rows="4" name="alamat" id="alamat" placeholder="Alamat Mahasiswa" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"><?= $dataMahasiswa["alamat"] ?></textarea>
				 </div>

				 <div class="mb-5">
					 <label for="fakultas" class="mb-3 block text-base font-medium text-[#07074D]">Pilih Fakultas</label>
					 <select id="fakultas" name="fakultas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

						 <?php
						 foreach ($dataFkl as $dFkl) {
							 if($dFkl['id_fakultas'] == $dataMahasiswa['id_fakultas'])
							 {
							 	echo "<option selected value=" . $dFkl['id_fakultas'] . ">" . $dFkl['nama_fakultas'] . "</option>";
							 }
							 else
							 {
							 	echo "<option value=" . $dFkl['id_fakultas'] . ">" . $dFkl['nama_fakultas'] . "</option>";
							 }
						 }
						 ?>
					 </select>
				 </div>

				 <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400"> </p>

			 </div>

			 <!-- Modal footer -->

			 <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">

				 <button data-modal-toggle="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</button>

				 <a href="index.php" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Batal</a>

			 </div>
		 </form>

	</body>

</html>
