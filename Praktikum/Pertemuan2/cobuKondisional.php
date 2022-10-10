<?php 


function translateHari($day)
{
  $days = [
  "Monday"  => "Senin",
  "Tuesday" => "Selasa",
  "Wenesday"=> "Rabu",
  "Thursday"=> "Kamis",
  "Friday"  => "Jumat",
  "Saturday"=> "Sabtu",
  "Sunday"  => "Minggu"
  ];

  return $days[$day];
}
function translateBulan($month)
{
  $months = [
    "01" => "Januari",
    "02" => "Februari",
    "03" => "Maret",
    "04" => "April",
    "05" => "Mei",
    "06" => "Juni",
    "07" => "Juli",
    "08" => "Agustus",
    "09" => "September",
    "10" => "Oktober",
    "11" => "November",
    "12" => "Desember"
  ];
  return $months[$month];
}


$hr  = translateHari(date('l'));
$bln = translateBulan(date('m'));

?>

<!DOCTYPE HTML>
<html>

  <head>
  </head>

  <body>

    <div class="info">
      <h2>Modul IV PHP Kondisional</h2>
      <p>Nama/NRP : Bima Satria Erlangga/210411100085</p> 
    
    </div>
    <div class="hasil-bilangan">
      <b>Sekarang Hari <?php echo "$hr : Tanggal ".date('j')." $bln ".date('Y')   ?></p>
    </div>

  </body>

</html>



