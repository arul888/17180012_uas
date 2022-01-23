<?php

$host="localhost";
$user="arul";
$pass="123456789";
$dbname="web_programing";

$koneksi=mysqli_connect($host,$user,$pass,$dbname);
if($koneksi)
{
    echo "koneksi berhasil<br><br>";
}
else
{
    echo "koneksi gagal";
}

?>