<?php
    include '../inc/koneksi.php';

    if(isset($_POST['username'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = $connect->query("SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
        $cek = mysqli_num_rows($login);

        if($cek > 0){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:../index.php");
        }else{
            echo "Login gagal";
        }
    }
?>