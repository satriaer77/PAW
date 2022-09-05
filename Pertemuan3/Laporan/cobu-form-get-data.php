<?php 
    session_start();
    $nim   = $_SESSION["nim"];
    $nama  = $_SESSION["nama"];
    $prodi = $_SESSION["prodi"];

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Laporan 3 Get Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="content">
        <div class="form-container">
            <div class="base-card">
                <h2>DATA ANDA</h2>
                  <div class="form-input">
                      <label for="nim">NIM</label>
                      <p><?= $nim ?></p>
                  </div>
                    
                  <div class="form-input">
                     <label for="nama">Nama</label>
                     <p><?= $nama ?></p>
                  </div>

                  <div class="form-input">
                    <label for="prodi">Prodi</label>
                    <p><?= $prodi ?></p>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>
