<?php
require('functions.php');

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo
        "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'detailbuku.php';
        </script>";
    } else {
        echo
        "<script>
        alert('data tidak berhasil ditambahkan!');
        document.location.href = 'detailbuku.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>upload</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <main id="container">
        <h1>Tambah Data Buku</h1>
        <p>Harap masukan data dalam bentuk jpg,jpeg, atau png dan ukuran dibawah 5mb</p>
        <div>
            <form action="#" id="form-pinjam" method="POST" enctype="multipart/form-data">
                <p>
                    <label for="book">Nama Buku:</label>
                    <input type="text" name="book" id="book" placeholder="Masukkan nama buku" required />
                </p>
                <p>
                    <label for="desc">Deskripsi Buku:</label>
                    <input type="text" placeholder="Masukkan deskripsi buku" name="desc" id="desc" required><br>
                <p>
                <p>
                    <label for="image">Gambar Buku:</label><br>
                    <input type="file" name="image" id="image"><br>
                <p>
                    <input id="submit" type="submit" name="submit">
                </p>
            </form>
        </div>
</body>

</html>