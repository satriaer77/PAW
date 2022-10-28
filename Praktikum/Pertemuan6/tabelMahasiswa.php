<?php
    session_start();
    if(isset($_SESSION["id_user"]) && isset($_SESSION["status"]) )
    {
        if($_SESSION["status"] == "login")
        {
            require "dataMahasiswa.php";
            
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabel Mahasiswa</title>
</head>
<body>
    <section id="content">
        <div class="table-comp">
            <table border=1>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                </tr>
                <?php
                    foreach($dataMahasiswa as $dm)
                    { ?>
                        <tr>
                            <td><?= $dm["nama"] ?></td>
                            <td><?= $dm["nim"] ?></td>
                            <td><?= $dm["alamat"] ?></td>
                        </tr>
                    <?php }
                ?>
            </table>
        </div>
    </section>
</body>
</html>


<?php
        }
    }
    else
    {
        echo"Anda tidak berhak mengakses halaman ini";
        echo"<br><a href='index.php'>Kembali ke halaman utama</a>";
    }
?>