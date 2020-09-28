<?

include "layout/header.php";

$query = mysqli_query("SELECT * FORM berita order by id-berita DESC",$con);

$data = mysqli_fetch_assoc($query);

?>

<table border="1">

    <thead>
        <tr>
            <th>No.</th>
            <th>id</th>
            <th>kategori</th>
            <th>gambar</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $num = 0; do {$num++; ?>
        <tr>
            <td><?=$num;?></td>
            <td><?=$data['id'];?></td>
            <td><?=$data['kategori'];?></td>
            <td><?=$data['judul'];?></td>
            <td><?=$data['isi'];?></td>
            <td><?=$data['gambar'];?></td>
            <td>
                <a href="edit_berita.php?id=<?=$data['id'];?>">Edit</a> - 
                <a href="hapus_berita.php?id=<?=$data['id'];?>">Delete</a> 
            </td>
        </tr>
    <?php }while($data = mysqli_fetch_assoc($query)); ?> 
    </tbody>
    <