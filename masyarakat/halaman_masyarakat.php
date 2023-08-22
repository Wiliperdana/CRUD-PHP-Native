<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title>
</head>
<body>
<?php
	include '../koneksi.php';

	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	<h1>Halaman Masyarakat</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="../logout.php">LOGOUT</a>
 
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