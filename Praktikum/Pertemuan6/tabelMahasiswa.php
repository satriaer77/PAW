<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    require "dataMahasiswa.php";


    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = 'off';
    if(isset($_POST["remember"])) $remember = "on";

    $found    = false;

    foreach($pengguna as $p)
    {
        if($p["username"] == $username && $p["password"] == sha1($password))
        {
            $found = true;
        } 
        
    }

    if($found)
    {
        if($remember == 'on')
        {
            $_SESSION["id_user"] = $p["id_user"];
            $_SESSION["status"]  = "login";
        }
    }
    else
    {
        header('location:index.php');
    }
}
?>

<?php
    if(isset($_SESSION["id_user"]) && isset($_SESSION["status"]) || isset($found) && $found == true)
    {
            require "dataMahasiswa.php";
            if(isset($_POST["logout"]))
            {
                session_destroy();
                header('location:index.php');
            }
        
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
    <section id="header">
        
    </section>
    <section id="contents">
    <h2>Daftar Mahasiswa</h2>
        <div class="table-comp">
            <table>
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
                        
        <div class="form-field">
            <form action="" method="POST">
                <input type="hidden" name="logout" value="true">
                <button type="submit">Logout</button>
            </form>
        </div>
    </section>
</body>
</html>


<?php
       
    }
    else
    {
        echo"Anda tidak berhak mengakses halaman ini";
        echo"<br><a href='index.php'>Kembali ke halaman utama</a>";
    }
?>