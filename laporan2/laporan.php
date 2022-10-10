<?php 
/*
 Mahasiswa mempu membuat file php yang berisi minimal 3 type data yang berbeda dan diterapkan pada aplikasi sederhana. 
 contoh menampilkan identitas diri yang disimpan dalam type data yang sesuai dan ditampilkan ke layar.
 */ 


$nama      = "Bima Satria Erlangga";
$umur      = 18;
$deskripsi = "Saya $nama berasal dari Sukoharjo Jawa Tengah";
$hobby     = ["Coding","Drawing"];

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Laporan 2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section id="content"> 
      <div class="profile">
        <div class="profile-container">
           <div class="photo">
            <img src="foto.jpg" alt="Foto Diri"/>
           </div>    
           <h2 class="nama"><?= $nama ?> <span class="age"><?= $umur ?><span> </h2>
           <p class="description"><?= $deskripsi ?></p>
           
           <ul class="hobbies">
             <?php 
               foreach ($hobby as $hb) 
               {
                 echo   "<li>$hb</li>";
               }
             ?>
           </ul>
         </div>

      </div>
    </section>
  </body>
  
</html>



