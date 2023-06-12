<?php
require ('functions.php');
$user = query("SELECT * FROM databuku");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>

</head>

<body>
    <h1>Daftar Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama buku</th>
            <th>deskripsi buku</th>
            <th>gambar buku</th>
        </tr>
        
        <?php $i= 1; ?>
        <?php foreach($user as $row) : ?>
        <tr>
            <td><?php echo $row["id"]= $i; ?></td>
            <td><?php echo $row["nama_buku"]; ?></td>
            <td><?php echo $row["deskripsi_buku"]; ?></td>
            <td><img src="image/<?php echo $row["gambar_buku"]; ?>" width="100"></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    <a href="tambah.php">Tambah data</a>
</body>
</html>