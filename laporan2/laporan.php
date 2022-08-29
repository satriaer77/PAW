<?php 
/*
 Mahasiswa mempu membuat file php yang berisi minimal 3 type data yang berbeda dan diterapkan pada aplikasi sederhana. 
 contoh menampilkan identitas diri yang disimpan dalam type data yang sesuai dan ditampilkan ke layar.
 */ 
//$students = []

$nama      = "Bima Satria Erlangga";
$umur      = 18;
$deskripsi = "Saya $nama berasal dari Sukoharjo Jawa Tengah";
$hobby     = ["Coding","Drawing"];

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Laporan 2</title>
    
  </head>
  <body>
    <section id="content"> 
      <div class="profile">
        
        <h2 class="nama"><?= $nama ?></h2>
        <span class="age"><?= $umur ?><span>
        <p class="description"><?= $deskripsi ?></p>
        <ul class="hobbies">
          <?php 
            foreach ($hobby as $hb) {
              echo"<li>$hb<li>";
            }
          ?>
        </ul>
      
      </div>
    </section>
  </body>
  
</html>



