<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM masyarakat WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_admin.php");
 
?>