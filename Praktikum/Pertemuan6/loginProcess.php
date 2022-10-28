<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    require "dataMahasiswa.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    
   
    
    
    foreach($pengguna as $p)
    {
        if($p["username"] == $username && $p["password"] == sha1($password))
        {
            session_start();
            $_SESSION["id_user"] = $p["id_user"];
            $_SESSION["status"]  = "login";
            header('location:tabelMahasiswa.php');
        } 
        else
        {
            $_SESSION["status"]  = "no-login";
        }
    }
}
else
{
    echo"Anda tidak berhak mengakses halaman ini";
    echo"<br><a href='index.php'>Kembali ke halaman utama</a>";
}



?>