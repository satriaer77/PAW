<?php
    session_start();
    $_SESSION["nama"]  = $_POST["nama"];
    $_SESSION["nim"]   = $_POST["nim"];
    $_SESSION["prodi"] = $_POST["prodi"];
    header('location:cobu-form-get-data.php');
    
?>
