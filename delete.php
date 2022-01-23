<?php 



include 'index.php';


$id = $_GET['id'];


$hapus=mysqli_query($koneksi,"DELETE FROM tbl_siswa WHERE id_siswa = '$id'");



if($hapus)
{
    
    header ("refresh:0;index.php");
}
else
{
   
    header ("refresh:1;index.php");
}


?>