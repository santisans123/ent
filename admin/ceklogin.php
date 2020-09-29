<?php
session_start();
include("../inc/koneksi.php");

if ($_POST['submit']){

    $username = mysqli_real_escape_string($connect,$_POST['usename']);
    $password = mysqli_real_escape_string($connect,$_POST['password']);

    $sql    = "SELLECT * FROM administrator WHERE username='".$username."'AND Pasword="

    // $result = mysqli_query($connect,$sql);
    // $numrow = mysqli_num_rows($result);

    $r = mysqli_fetch_array($result,MYSQL_ASSOC);

    if($numrow > 0)
    {

        $_SEESION['loginadmin'] = $r['username'];
        $_SEESION['loginadminid'] = $r['ID'];
        $_SEESION['loginadminemail'] = $r['email'];
        $_SEESION['loginadminnama'] = $r['Nama'];

    }else{
        $error = "User dan Pasword tidak cocok";

        header('Location: index.php?error='.$error.'');
        exit;
    }
}
if(empty($_SESSION['loginuser'])){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet"type="text/css" href="../assets/style.css">
</head>
<body>
    
    <div class="loginpage">
    </div>

    <form action="" aethod="POST"></form>
    <label for>Username</label>
    <input type="text" name="username" placeholder="username">

    <label>Pasword</label>
    <input type="pasword" name="password">

    <input type="submit" name="submit" value="login">

    </form>

</body>
</html>
<?php
}
exit;
?>