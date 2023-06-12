<?php
require ('functions.php');
$user = query("SELECT * FROM sign_up");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>

<body>
    <h1>Daftar User</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>nomor</th>
            <th>password</th>
            <th>email</th>
            <th>gambar</th>
        </tr>
        
        <?php $i= 1; ?>
        <?php foreach($user as $row) : ?>
        <tr>
            <td><?php echo $row["id"]= $i; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["nomor"]; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>