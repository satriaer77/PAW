<?php
session_start();

$_SESSION["cobu"]="Emyu";
$_SESSION["pic"] ="cobu.webp";



?>

<!DOCTYPE HTML>
<html>
<head>

    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>

<div id="header">
    <div class="profile">
        <img class="profile-pic" src="s/<?= $_SESSION["pic"] ?>" alt="">    
        <div class="profile-username"><?= $_SESSION["cobu"] ?></div>
    </div>

</div>



<div id="content">

   <div class="calc-container">
     
        <form action="cobu-form-get.php" method="post">
            Nilai A: <input type="text" name="nilai-a"><br>
            <input type="radio" name="operation" value="+">+
            <input type="radio" name="operation" value="-">-
            <input type="radio" name="operation" value="*">x
            <input type="radio" name="operation" value="/">/
            <br>
        
            Nilai B: <input type="text" name="nilai-b"><br>
        
        <input type="submit">
        
        <input type="checkbox" name="hh[]" value="kurang">Kurang
        <input type="checkbox" name="hh[]" value="tambah">Tambah
        
        </form>
   </div>

</div>





</body>
</html>
