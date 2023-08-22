<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title>
</head>
<body>
	<?php
	include '../config.php';

	// mengaktifkan session
	session_start();
	
	// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
	if($_SESSION['status'] !="login"){
		header("location:../index.php");
	}
	
	// menampilkan pesan selamat datang
	echo "Hai, selamat datang ". $_SESSION['username'];
	?>
 
	<h2>Pengaduan Masyarakat</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PENGADUAN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIK</th>
			<th>Tgl Pengaduan</th>
			<th>Isi Pengaduan</th>
            <th>Status</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM masyarakat");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['tgl_pengaduan']; ?></td>
                <td><?php echo $d['isi_pengaduan']; ?></td>
                <td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>

			<?php 
		}
		?>
		<tr>
		<a href="logout.php">LOGOUT</a>
		</tr>		
	</table>
</body>
</html>