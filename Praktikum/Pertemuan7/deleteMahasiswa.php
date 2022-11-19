<?php

    require "connectDB.php";

    if(isset($_GET["id"]))
    {
        $nrp = $_GET["id"];
        $deleteQuery = mysqli_query($connect,"DELETE FROM tbl_mahasiswa WHERE nrp='$nrp' ");
        if($deleteQuery)
        {
            header('location:index.php');
        }
    }

    
?>