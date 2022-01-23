<a href="index.php">lihat inputan</a>
<?php

    include_once("koneksi.php");

    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $hoby=$_POST['hoby'];
    

$sql="INSERT INTO tbl_siswa VALUE ('$id_siswa','$nama_siswa','$jenis_kelamin','$alamat','$hoby')";


$hasil=mysqli_query($koneksi ,$sql);
if ($hasil)
{
    echo "berhasil input data";
    exit;
}

else 
{
    echo "<br>gagal input data";
    exit;
}




?>