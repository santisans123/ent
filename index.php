<?php
    session_start();
    $_SESSION['status'] = "login";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <header>
        <div class="main">
            <ul>
                <li><a>SIGN UP</a></li> 
            </ul>
        </div>
        <center>
        <div class="button">
            <a href="admin\login.php" class="btn1">SIGN IN</a>
            <a href="baca.php" class="btn1">BACA</a>
        </div>
        </center>
        <center>
        <div class="title">
            <h1 align="center">WELCOME</h1>
            <h1 align="center">PORTAL BERITA PENS</h1>
        </center>
        </div>
    </header>

</body>
</html>
