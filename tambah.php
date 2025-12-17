<?php
include "koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = htmlspecialchars($_POST["nama"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $query =" INSERT INTO tengku_users (nama, username, password) VALUES ('$nama', '$username', '$password')";

    if(mysqli_query($conn, $query)){
        echo "<script>
            alert('Data User Berhasil Ditambahkan.');
            window.location='index.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah User</title>
</head>
<body>
    <div class="form-container">
        <h2>TAMBAH USER</h2>
        <form action="tambah.php" method="post">
            <label>Nama</label>
            <input type="text" name="nama" required><br><br>
            <label>Username</label>
            <input type="text" name="username" required><br><br>
            <label>Password</label>
            <input type="text" name="password" required><br><br>
            <button type="submit"><a>Tambah</a></button>
        </form>
    </div>
</body>
</html>