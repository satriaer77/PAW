<?php
include('connectDb.php');

$sqlFetchMhs   = "SELECT * FROM mahasiswa as m, fakultas as f WHERE m.id_fakultas = f.id_fakultas";
$sqlFetchFkl   = "SELECT * FROM fakultas";

$getDataFkl    = $connect->query($sqlFetchFkl);
$getDataMhs    = $connect->query($sqlFetchMhs);
$dataMahasiswa = $getDataMhs->fetch_all(MYSQLI_ASSOC);
$dataFkl       = $getDataFkl->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE HTML>

<html>

<head>
    <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Table -->

    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200 mb-5">

        <header class="px-5 py-4 border-b border-gray-100">

            <h2 class="font-semibold text-gray-800">Data Mahasiswa</h2>

        </header>

        <div class="p-3">

            <div class="overflow-x-auto">

                <table class="table-auto w-full">

                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <td>ID Mahasiswa</td>
                            <td>Fakultas</td>
                            <td>NRP</td>
                            <td>Nama Mahasiswa</td>
                            <td>Alamat</td>
							<td>Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        <?php
                        foreach ($dataMahasiswa as $dataMhs) {
                            //echo"ss";
                            echo "<tr>
                                <td>".$dataMhs['id_mhs']."</td>
                                <td>".$dataMhs['nama_fakultas']."</td>
                                <td>".$dataMhs['nrp']."</td>
                                <td>".$dataMhs['nama_mhs']."</td>
                                <td>".$dataMhs['alamat']."</td>
								<td>
									<form action='editMahasiswa.php' method='POST'>
										<input type='hidden' name='idMhs' value=".$dataMhs['id_mhs'].">
										<input type='hidden' name='action' value='edit'>
										<button type='submit' class='rounded-lg bg-cyan-700 focus:ring-4 px-2 py-1` text-center hover:bg-cyan-800'>Edit</button> </td>
									</form>
								</td>
								<td>
									<form action='deleteMahasiswa.php' onsubmit='conf' method='POST'>
										<input type='hidden' name='idMhs' value=".$dataMhs['id_mhs'].">
										<input type='hidden' name='action' value='hapus'>
										<button type='submit' onclick='conf()' id='hapus' class='rounded-lg bg-red-700 focus:ring-4 px-2 py-1` text-center hover:bg-red-800'>Hapus</button>
										<script>
											function conf()
											{
												if(!confirm('apakah anda ingin menghapus data?'))
												{
													event.preventDefault();
												}
											}
										</script>
									</form>
								</td>

                              </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="controlData max-w-2xl mx-auto">
        <!-- modal toggle -->
        <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="default-modal">Tambah Mahasiswa</button>

    </div>


    <!-- This is an example component -->

    <div class="max-w-2xl mx-auto">
        <!-- Main modal -->

        <div id="default-modal" data-modal-show="false" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">

            <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">

                <!-- Modal content -->

                <div class="bg-white rounded-lg shadow relative dark:bg-gray-700">

                    <!-- Modal header -->

                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">

                        <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white">Tambah Mahasiswa</h3>

                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">

                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>

                        </button>

                    </div>

                    <!-- Modal body -->
                    <form method="POST" action="insertMahasiswa.php">
                        <div class="p-6 space-y-6">
                            <div class="mb-5">
                                <label for="nrp" class="mb-3 block text-base font-medium text-[#07074D]">NRP</label>
                                <input type="text" name="nrp" id="nrp" placeholder="NRP" maxlength="12" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>

                            <div class="mb-5">
                                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">Nama Mahasiswa</label>
                                <input type="text" name="name" id="name" placeholder="Nama Mahasiswa" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="alamat" class="mb-3 block text-base font-medium text-[#07074D]">Alamat Mahasiswa</label>
                                <textarea rows="4" name="alamat" id="alamat" placeholder="Alamat Mahasiswa" class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            </div>

                            <div class="mb-5">
                                <label for="fakultas" class="mb-3 block text-base font-medium text-[#07074D]">Pilih Fakultas</label>
                                <select id="fakultas" name="fakultas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Fakultas</option>
                                    <?php
                                    foreach ($dataFkl as $dFkl) {
                                        echo "<option value=" . $dFkl['id_fakultas'] . ">" . $dFkl['nama_fakultas'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <p class="text-gray-500 text-base leading-relaxed dark:text-gray-400"> </p>

                        </div>

                        <!-- Modal footer -->

                        <div class="flex space-x-2 items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-600">

                            <button data-modal-toggle="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>

                            <button data-modal-toggle="default-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Batal</button>

                        </div>
                    </form>

                </div>

            </div>

        </div>


    </div>

    <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
</body>

</html>
