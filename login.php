<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data petugas dengan username dan password yang sesuai
$petugas_login = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' and password='$password'");
$petugas_cek = mysqli_num_rows($petugas_login);

// menyeleksi data masyarakat dengan username dan password yang sesuai
$masyarakat_login = mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE username='$username' and password='$password'");
$masyarakat_cek = mysqli_num_rows($masyarakat_login);
 
// cek apakah username dan password di temukan pada database
if($petugas_cek){
 
	$petugas_data = mysqli_fetch_assoc($petugas_login);
 
	// cek jika user login sebagai admin
	if($petugas_data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['id'] = $petugas_data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:http://localhost/pengaduan-try/admin/halaman_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($petugas_data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['id'] = $petugas_data['id'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard petugas
		header("location:http://localhost/pengaduan-try/petugas/halaman_petugas.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
} else if($masyarakat_cek) {
	$masyarakat_data = mysqli_fetch_assoc($masyarakat_login);
	
	if($masyarakat_data['level']=="masyarakat"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "masyarakat";
		$_SESSION['nik'] = $masyarakat_data['nik'];
		// alihkan ke halaman dashboard masyarakat
		header("location:http://localhost/pengaduan-try/masyarakat/halaman_masyarakat.php");
	}
	
} else{
	header("location:index.php?pesan=gagal");
}
 
?>