<html>
<body>

<form action="" method="post">
    Nilai A: <input type="text" name="nilai-a"><br>
    +<br> 
    Nilai B: <input type="text" name="nilai-b">
<input type="submit">
</form>

<?php
$na = $_POST["nilai-a"];
$nb = $_POST["nilai-b"];
$jml= $na+$nb;

if(isset($_POST))
{
    echo $jml;
}



?>



</body>
</html>
