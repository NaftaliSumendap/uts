<?php
session_start();

require '../database/functions.php';
if(isset($_SESSION["login"])) {
    header("Location: ../homepage/homepage.php");
    exit;
}

// if (isset($_POST["btn"])) {
//     if ($_POST["username"] == "kelompok-4" && $_POST["pass"] == "website") {
//         $_SESSION["login"] = true;
//         header("Location: ../homepage/homepage.php");
//         exit;
//     } else {
//         $error = true;
//     }
// }

if(isset($_POST["btn"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    $result = mysqli_query($conn, "SELECT * FROM sign_up WHERE nama='$username'");

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: ../homepage/homepage.php");
            exit;
        } else {
            $error = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <?php if (isset($error)) : ?>
            <h3>Username / password salah</h3>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="user-box">
                <input type="text" id="username" name="username" required>
                <label>username</label>
            </div>
            <div class="user-box">
                <input type="password" id="pass" name="pass" required>
                <label>Password</label>
            </div>
            <div class="sign-up">
                <a href="../signuppage/index.php">Sign Up Akun</a>
            </div>
            <button id="btn" name="btn">Login</button>
        </form>
    </div>
</body>

</html>