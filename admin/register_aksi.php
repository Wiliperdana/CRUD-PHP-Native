<?php 
// koneksi database
include 'admin/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$username', '$password', '$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>