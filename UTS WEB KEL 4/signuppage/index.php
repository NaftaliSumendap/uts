<?php
require '../database/functions.php';
if(isset($_POST["submit"])) {

  if(register($_POST)>0) {
    echo "<script> alert('user berhasil ditambahkan!'); </script>";
  } else {
    echo mysqli_error($conn);
  }

}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Library Perkantas Sulut</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- <script src="script.js"></script> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&family=Urbanist:ital,wght@1,300&family=Zen+Dots&display=swap"
    rel="stylesheet">
</head>
<body>
  <main id="container">
    <div>
      <form action="#" id="form-pinjam" method="POST">
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" placeholder="Enter Your Name" required />
        </p>
        <p>
            <label for="nomor">Nomor:</label>
            <input type="tel" name="nomor" id="nomor" placeholder="Enter Your Number" required />
        </p>
        <p>
            <label for="email">Email:</label> 
            <input type="text" placeholder="Enter Your E-mail" name="email" id="email" required><br>
        <p>
        <p>
            <label for="password">Password:</label> 
            <input type="password" placeholder="Enter Your Password" name="pass" id="pass" required><br>
        <p>
        <p>
            <label for="re-password">Repeat Password:</label> 
            <input type="password" placeholder="Re-enter Your Password" name="re-pass" id="re-pass" required><br>
        <p>
          <input id="myButton" type="submit" name="submit" onclick="myFunction()" value="Submit">
          <a href="../loginpage/login.php" class="log-in">Log in</a>
        </p>
      </form>
    </div>	
	</form>
</body>

</html>