<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../loginpage/login.php");
  exit;
}

// require ('../database/functions.php');
// $i = null;

// if(isset($_POST["btn-pinjam"])) {
//     var_dump($_POST["btn-pinjam"]);
//     $i= $_POST["id"];
// }

// $user = query("SELECT * FROM databuku");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Info Buku</title>
</head>
<body>
    <header>
        <h1>E-Library Perkantas Sulut</h1>
        <p>A Good Book Is A Good Friend</p>
    </header>
    <nav>
        <a href="../homepage/homepage.php">Home</a>
        <a href="../aboutpage/index.html">About</a>
        <a href="../contactpage/index.html">Contact</a>
    </nav>

    <main>
    <div class="item">
            <h3><?php echo $user["nama_buku"]; ?></h3>
            <figure>
                <img src="../database/image/<?php echo $user["gambar_buku"]; ?>">
                <!-- full size image at: https://images.unsplash.com/photo-1560072810-1cffb09faf0f -->
            </figure>
            <!-- <p class="price">Berisi pengalaman pribadi penulis ketika melewati titik-titik terendah dalam hidupnya sebagai penderita bipolar disorder, tetapi kemudian dikuatkan oleh Tuhan untuk terus tegar dan kuat. harapan dan pengalaman ditulis agar setiap orang yang mengalami pergumulan mental atau ganguan mental tetap percaya bahwa Tuhan selalu ada pengharapan.</p> -->
            <p class="special">Berisi pengalaman pribadi penulis ketika melewati titik-titik terendah dalam hidupnya sebagai penderita bipolar disorder, tetapi kemudian dikuatkan oleh Tuhan untuk terus tegar dan kuat. harapan dan pengalaman ditulis agar setiap orang yang mengalami pergumulan mental atau ganguan mental tetap percaya bahwa Tuhan selalu ada pengharapan.</p>
            <label for="size-select">Lama Peminjaman</label>
            <select name="select" id="select">
                <option value=""></option>
                <option value="6">1 Hari</option>
                <option value="6">2 Hari</option>
                <option value="6">3 Hari</option>
                <option value="6">4 Hari</option>
                <option value="6">5 Hari</option>
                <option value="6">6 Hari</option>
                <option value="6">7 Hari</option>
                <option value="6">8 Hari</option>
                <option value="6">9 Hari</option>
                <option value="6">10 Hari</option>
                <option value="6">11 Hari</option>
                <option value="6">12 Hari</option>
                <option value="6">13 Hari</option>    
                <option value="6">14 Hari</option>
                <option value="6">15 Hari</option>
                <option value="6">16 Hari</option>
                <option value="6">17 Hari</option>
                <option value="6">18 Hari</option>
                <option value="6">19 Hari</option>
                <option value="6">20 Hari</option>
                <option value="6">21 Hari</option>
                <option value="6">22 Hari</option>
                <option value="6">23 Hari</option>
                <option value="6">24 Hari</option>
                <option value="6">25 Hari</option>
                <option value="6">26 Hari</option>
                <option value="6">27 Hari</option>
                <option value="6">28 Hari</option>
                <option value="6">29 Hari</option>
                <option value="6">30 Hari</option>
            </select>
            
            <button type="button" onclick="buktiPeminjaman()">Pinjam Sekarang</button>
        </div>
        
        
    </main>

    <footer>
        <p>&copy; Kelompok 4 - Pemrograman Web - TIK2032G</p>
    </footer>
    <script src="main.js"></script>
</body>
</html>