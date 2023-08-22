<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$isi_pengaduan = $_POST['isi_pengaduan'];
$status = $_POST['status'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO masyarakat VALUES('','$nama','$nik', '$tgl_pengaduan', '$isi_pengaduan', '$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>