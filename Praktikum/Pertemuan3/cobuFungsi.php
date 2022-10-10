<?php

function Jumlah($x,$y)
{
	$hasil = $x+$y;
	echo "Jumlah x + y : ".$hasil;
}

function kali($x,$y)
{
	$hasil = $x*$y;
	echo "Jumlah x * y : ".$hasil;

}

function bagi($x,$y)
{
	$hasil = $x/$y;
	echo "Jumlah x / y : ".$hasil;
}

?>

<!DOCTYPE HTML>
<html>

  <head>
  </head>

  <body>

    <div class="info">
      <h1>Modul V Fungsi</h1>
      <p>Nama/NRP : Bima Satria Erlangga/210411100085</p>

    </div>


    <div class="hasil-bilangan">
      <b>Pemanggilan Fungsi Jumlah()</b><br>
	  <span><?php Jumlah(6,3) ?></span><br>
	  <span><?php Jumlah(9,7) ?></span><br>
	  <span><?php Jumlah(8,12) ?></span><br>

    </div>
	<div class="hasil-bilangan">
      <b>Pemanggilan Fungsi kali()</b><br>
	  <span><?php kali(6,3) ?></span><br>
	  <span><?php kali(9,7) ?></span><br>
	  <span><?php kali(8,12) ?></span><br>
    </div>
	<div class="hasil-bilangan">
      <b>Pemanggilan Fungsi bagi()</b><br>
	  <span><?php bagi(6,3) ?></span><br>
	  <span><?php bagi(9,7) ?></span><br>
	  <span><?php bagi(8,12) ?></span><br>
    </div>

  </body>

</html>
