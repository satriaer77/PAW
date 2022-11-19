<?php

require "connectDB.php";

$queryData = $connect->query("SELECT * FROM tbl_mahasiswa");
$fetchData = $queryData->fetch_all(MYSQLI_ASSOC);
//print_r($fetchData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MODUL 5 PAW</title>
</head>
<body>
    <section id="header">
        <h1>MODUL VI PHP & MySQL</h1>
        <p>Nama/NRP : Bima Satria/210411100085</p>
    </section>
    <hr>

    <section id="content">
        
        <h2>Master Data Mahasiswa</h2>
        <div class="data-mahasiswa">
            <table border=1>
                <tr>
                    <th>No</th>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th colspan=2>Operasi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($fetchData as $fd) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $fd["nrp"] ?></td>
                    <td><?= $fd["nama"] ?></td>
                    <td><?= $fd["email"] ?></td>
                    <td><?= $fd["alamat"] ?></td>
                    <td><a href="updateMahasiswa.php?id=<?= $fd["nrp"] ?>">Edit</a></td>
                    <td><a href="deleteMahasiswa.php?id=<?= $fd["nrp"] ?>">Hapus</a></td>
                </tr>
                <?php $no++; } ?>

            </table>
        </div>
        <a href="insertMahasiswa.php">Tambah Data Mahasiswa</a>

    </section>
    
</body>
</html>
