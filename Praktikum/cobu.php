<?php 

echo "cobu php";
$kont = [[1,2,3,4],[7,5,3,1,3],[9,6,10,11]];
$i = 0;
$kk = 4.5;
$kk = (int) $kk;

echo"$kk";

foreach($kont as $ko)
{
  echo"ini adalah nomor $i\n";
  
  foreach ($ko as $k) 
  {
    echo"$k\n";
  }
  $i++;

}


///GLOBAL Variabel Cobu
$s = "kk";
function cobu()
{
  global $s;
  $s="landa";
}
cobu();
echo"$s";
/// END global variabel cobu

$kalimat = "ini adalah sebuah kalimat yang saya buat untuk mengetahui kata yang berakhiran ah";
$pattern = "/[A-Z][a-z]ah/i"; //regex pattern

$arr = explode(" ",$kalimat);
$arrOut = [];
foreach($arr as $ar )
{
  
  if(preg_match($pattern, $ar) == 1)
  {
    array_push($arrOut,$ar);
  }
}

echo"Character yang ditemukan : \n";

foreach($arrOut as $ao)
{
  echo"- $ao\n";
}


?>
