<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$isi_pengaduan = $_POST['isi_pengaduan'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE masyarakat SET nama='$nama', nik='$nik', tgl_pengaduan='$tgl_pengaduan', isi_pengaduan='$isi_pengaduan', status='$status' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:halaman_masyarakat.php");
 
?>