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
                <li><a href="kontak\kontak.html">contact</a></li> 
            </ul>
        </div>
        <center>
        <div class="button">
            <a href="admin\login.php" class="btn1">LOGIN</a>
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

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>