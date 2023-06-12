<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: ../loginpage/login.php");
  exit;
}

require ('../database/functions.php');
$user = query("SELECT * FROM databuku");

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Library Perkantas Sulut</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&family=Urbanist:ital,wght@1,300&family=Zen+Dots&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <h1>E-Library Perkantas Sulut</h1>
    <p>A Good Book Is A Good Friend</p>
    <div class="log-out">
      <a href="logout.php">Log Out</a>
    </div>
  </header>
  <navbar>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="../aboutpage/index.html">About Us</a></li>
      <li><a href="../contactpage/index.html">Contact</a></li>
    </ul>
  </navbar><br><br>
  
  <?php $i=1; ?>
  <main>
    <section>
      <?php $i= 1; ?>
      <?php foreach($user as $row) : ?>
      <div>
            <img src="../database/image/<?php echo $row["gambar_buku"]; ?>">
            <h2><?php echo $row["nama_buku"]; ?></h2>
            <p><?php echo $row["deskripsi_buku"]; ?></p>
            <form method="POST" action="../info-buku/index.php">
              <button class="btn-pinjam" id="btn-pinjam-1" name="btn-pinjam" value=<?php echo $i ?>>PINJAM</button>
            </form>
        </div>
      <?php $i++ ?>
      <?php endforeach; ?>
    </section>
  </main>
  <?php if ($i % 3==0)?>
  <?php $i++ ?>
  
  <footer>
    <p>&copy; Kelompok 4 - Pemrograman Web - TIK2032G</p>
  </footer>
  <script src="main.js"></script>
</body>

</html>