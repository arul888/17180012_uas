
<?php

$host="localhost";
$user="arul";
$pass="123456789";
$dbname="web_programing";


$koneksi=mysqli_connect($host,$user,$pass,$dbname);

$result = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="input.php">tambah data</a>

    <h2>DAFTAR SISWA YANG TERDAFTAR</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID Siswa</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Hoby</th>
            <th>Action</th>
        </tr>

        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row["id_siswa"]; ?></td>
            <td><?= $row["nama_siswa"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["hoby"]; ?></td>
            <td>
                <a href="edit.php?id=<?= $row["id_siswa"]?>">edit</a> |
                <a href="delete.php?id=<?= $row["id_siswa"]?>">delete</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
    
</body>
</html>