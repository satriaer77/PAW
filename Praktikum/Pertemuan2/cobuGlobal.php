<?php 

$x = 7;
$y = 5;
function tampilkanVar()
{
  global $x;
  $kk = 5;

  echo"\$kk adalah variabel local dengan value $kk";
  $x = 3;

}
tampilkanVar();

?>

<!DOCTYPE HTML>
<html>

  <head>
  </head>

  <body>

    <div class="info">
      <h2>Modul III PHP Variabel dan Tipe Data</h2>
      <p>Nama/NRP : Bima Satria Erlangga/210411100085</p> 
    
    </div>
    

    <div class="hasil-bilangan">
      <?= $x ?>
    </div>

  </body>

</html>



