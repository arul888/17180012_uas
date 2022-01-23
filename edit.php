<?php
// include database connection file
include_once("koneksi.php");
 

if(isset($_POST['update']))
{    
    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $hoby=$_POST['hoby'];
        
    
    
    $result = mysqli_query($koneksi, "UPDATE tbl_siswa SET id_siswa='$id_siswa',nama_siswa='$nama_siswa',jenis_kelamin='$jenis_kelamin',alamat='$alamat',hoby='$hoby' WHERE id_siswa='$id_siswa'");
    
    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
 

$result = mysqli_query($mysqli, "SELECT * FROM tbl_siswa WHERE id_siswa='$id'");
 
while($row = mysqli_fetch_assoc($result))
{
    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $hoby=$_POST['hoby'];
}
?>
<html>
<head>    
    <title>Edit User Data</title>
</head>
 
<body>
<form action="simpan.php" method="post">
    <table widhe="25%" border="0">
    <tr>
        <td>id siswa</td><td><input type="text" name="id_siswa"></td>
    </tr>
    <tr>
        <td>nama siswa</td><td><input type="text" name="nama_siswa"></td>
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td>
            <input type="radio" name="jenis_kelamin" value="pria">Pria
            <input type="radio" name="jenis_kelamin" value="wanita">perempuan
        </td>
    </tr>
    <tr>
        <td>Alamat</td><td><input type="text" name="alamat"></td>
    </tr>
    <td>Hoby</td>
    <td><input type="text" name="hoby"></td>
    <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id_siswa'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
    
        </table>
    </form>
</body>
</html>
