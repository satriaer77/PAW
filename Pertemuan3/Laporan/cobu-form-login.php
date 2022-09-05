<!DOCTYPE HTML>
<html>
<head>
    <title>Laporan 3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="content">
        <div class="form-container">
            <div class="base-card">
                <form action="cobu-form-process.php" method="POST">
                    <h2>FORM DATA DIRI</h2>
                    <div class="form-input">
                        <label for="nim">NIM</label>
                        <input id="nim" type="text" name="nim">
                    </div>
                    
                    <div class="form-input">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" name="nama">
                    </div>

                    <div class="form-input">
                        <label for="prodi">Prodi</label>
                        <input id="prodi" type="text" name="prodi">
                    </div>

                    <div class="form-input">
                        <button type="submit">Kirim Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
