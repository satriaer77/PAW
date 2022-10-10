<?php 

$x = 7;
$y = 5;



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
      <?php 
        
         echo"<p>Hasil X+Y = ".($x+$y)."</p>";
         echo"\n<p>Hasil X*Y = ".($x*$y)."</p>";
         echo"\n<p>Hasil X-Y = ".($x-$x)."</p>";
         echo"\n<p>Hasil X/Y = ".($x/$y)."</p>";
      
      ?>
    </div>

  </body>

</html>



