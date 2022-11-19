<?php

require "connectDB.php";

if(isset($_POST["nama"]))
{
    $nrp   = $_POST["nrp"];
    $nama  = $_POST["nama"];
    $email = $_POST["email"];
    $alamat= $_POST["alamat"];
    $insertQuery = mysqli_query($connect,"INSERT INTO tbl_mahasiswa VALUE('$nrp','$nama','$email','$alamat')");
    
    if($insertQuery)
    {
        header('location:index.php');
    }

}


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
        <div class="add-data">
            <form action="" method="POST">
                <div class="input-field">
                    <label for="nrp">NRP</label><br>
                    <input type="text" id="nrp" name="nrp">
                </div>

                <div class="input-field">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama">
                </div>

                <div class="input-field">
                    <label for="email">Email</label><br>            
                    <input type="email" id="email" name="email">
                </div>

                <div class="input-field">
                    <label for="alamat">Alamat</label><br>           
                    <textarea id="alamat" name="alamat"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

       

    </section>
    
</body>
</html>
