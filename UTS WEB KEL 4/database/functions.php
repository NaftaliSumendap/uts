<?php 
$conn = mysqli_connect("localhost","root","","datauser");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;


    $nama = htmlspecialchars($data["book"]);
    $desc = htmlspecialchars($data["desc"]);

    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO `databuku` VALUES (null,'$nama','$desc','$gambar')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload() {
    $namafile = $_FILES["image"]["name"];
    $size = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    if($error === 4) {
        echo "<script>alert('pilih gambar terlebih dahulu!'); </script>";
        return false;
    }

    $ekstensigambar=['jpg','jpeg','png'];
    $ekstensi = explode('.', $namafile);
    $ekstensi = strtolower(end($ekstensi));
    if (!in_array($ekstensi, $ekstensigambar)) {
        echo "<script>alert('upload format yang benar!'); </script>";
        return false;
    }

    if($size > 5000000) {
        echo "<script>alert('ukuran gambar terlalu besar!'); </script>";
        return false;
    }

    move_uploaded_file($tmp_name, 'image/'.$namafile);
    return $namafile;
}


//registrasi
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["nama"]));
    $number = $data["nomor"];
    $password = mysqli_real_escape_string($conn, $data["pass"]);
    $password2 = mysqli_real_escape_string($conn, $data["re-pass"]);
    $email = $data["email"];

    if($password !== $password2) {
        echo "<script> alert('password tidak sesuai!'); </script>";
        return false;
    } 

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO sign_up VALUES(null, '$username', $number, '$password', '$email')");

    return  mysqli_affected_rows($conn);
}

function test($data) {
    
}

?>
