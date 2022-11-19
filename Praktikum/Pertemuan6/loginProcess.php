<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    require "dataMahasiswa.php";

    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = $_POST["remember"];
    
   
    
    
    foreach($pengguna as $p)
    {
        if($p["username"] == $username && $p["password"] == sha1($password))
        {
            if($remember == 'on')
            {
                session_start();
                $_SESSION["id_user"] = $p["id_user"];
                $_SESSION["status"]  = "login";
                header('location:tabelMahasiswa.php');
            }
            else
            {
                $randId = sha1($username); 
                header('location:tabelMahasiswa.php?login='.$randId);
            }
           
        } 
        else
        {
            $_SESSION["status"]  = "no-login";
            header('location:index.php');

        }
    }
}
else
{
    header('location:index.php');

}



?>