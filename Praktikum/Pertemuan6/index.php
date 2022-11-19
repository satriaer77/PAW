<?php
session_start();
if(isset($_SESSION["id_user"]) && isset($_SESSION["status"]) )
{
    if($_SESSION["status"] == "login")
    {
        header('location:tabelMahasiswa.php');
    }
}
else 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <section id="contents">
        <form method="POST" action="tabelMahasiswa.php">
            <div class="form-field">
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter Username" name="username">
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter Password" name="password">
                </div>
                <div class="form-action">
                    <button type="submit">Login</button>
                </div>
                <div class="checkbox-field">
                    <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember Me</label>
                </div>
            </div>
        </form>
    </section>


</body>
</html>


<?php
}
?>