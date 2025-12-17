<?php
include "koneksi.php";
$result = mysqli_query(mysql: $conn, query: "SELECT * FROM tengku_users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Latihan Database</title>
</head>
<body>
    <div class="bg-table">
        <table width="100%" border="1" cellspacing="0" cellpadding="8" align="center">
            <tr align="center">
                <th width="10%">Id User</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php
                if(mysqli_num_rows($result) > 0) {
                    while($data = mysqli_fetch_array($result)){
            ?>
            <tr align="center">
                <td><?php echo $data["id_user"]; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["username"]; ?></td>
                <td><?php echo $data["password"]; ?></td>
            </tr>
            <?php
                }
            }else{
            ?>
            <tr align="center">
                <td colspan="3">Belum Ada Data User</td>
            </tr>
            <?php
            }
            ?>
        </table>
        <center>
            <button><a href="tambah.php">Tambah User</a></button>
        </center>
    </div>
</body>
</html>