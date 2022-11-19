<?php

require "connectDB.php";

function setFieldData($inputData)
{
	if (isset($inputData)) {
		echo $inputData;
	}
}

if(isset($_GET["id"]))
{
    $nrp       = $_GET["id"];
    $queryData = $connect->query("SELECT * FROM tbl_mahasiswa WHERE nrp='$nrp'");
    $fetchData = $queryData->fetch_assoc();
}


if(isset($_POST["nama"]))
{
    $nama   = $_POST["nama"];
    $email  = $_POST["email"];
    $alamat = $_POST["alamat"];

    $updateQuery = mysqli_query($connect,"UPDATE tbl_mahasiswa SET nrp='$nrp', nama='$nama', email='$email', alamat='$alamat' WHERE nrp = '$nrp' ");
    if($updateQuery)
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
                    <input type="text" id="nrp" name="nrp" value="<?php setFieldData($fetchData["nrp"]); ?>">
                </div>

                <div class="input-field">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" value="<?php setFieldData($fetchData["nama"]); ?>">
                </div>

                <div class="input-field">
                    <label for="email">Email</label><br>            
                    <input type="email" id="email" name="email" value="<?php setFieldData($fetchData["email"]); ?>">
                </div>

                <div class="input-field">
                    <label for="alamat">Alamat</label><br>           
                    <textarea id="alamat" name="alamat"><?php setFieldData($fetchData["alamat"]); ?></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

       

    </section>
    
</body>
</html>
