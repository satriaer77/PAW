<html>
<?php 
session_start();
echo $_SESSION["cobu"];

?>

<body>
<h2>Hasil</h2>
<?php 
$nilaiA = $_POST["nilai-a"];
$nilaiB = $_POST["nilai-b"];
$total  = 0;

$operation = $_POST["operation"];


switch ($operation) {
  case "+":
    $total = $nilaiA+$nilaiB;
    break;
  case "-":
    $total = $nilaiA-$nilaiB;
    break;
  case "*":
    $total = $nilaiA*$nilaiB;
    break;
  case "/":
    $total = $nilaiA/$nilaiB;
  default:
    $total = "Hasil Salah";
}

var_dump($_POST["hh"]);

?>

    Nilai A = <?= $nilaiA ?><br>
    Nilai B = <?= $nilaiB ?><br>
    -------------------------+<br>
    Jumlah  = <?= $total ?>


</body>
</html>
