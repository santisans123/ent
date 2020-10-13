<?php
include('login/koneksilogin.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"SELECT * from berita where id='".$_GET['id']."'");
    $row = mysqli_fetch_array($query);
    header("Content-type: " . $row["gambar"]);
    echo $row["gambar"];
}
else
{
    header('location:berita.php');
}
?>