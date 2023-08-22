<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title>
</head>
<body>
 
	<h2>Pengaduan Masyarakat</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PENGADUAN</h3>
 
	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIK</td>
					<td><input type="number" name="nik" value="<?php echo $d['nik']; ?>"></td>
				</tr>
				<tr>
					<td>Tgl Pengaduan</td>
					<td><input type="text" name="tgl_pengaduan" value="<?php echo $d['tgl_pengaduan']; ?>"></td>
				</tr>
                <tr>
					<td>Isi Pengaduan</td>
					<td><input type="text" name="isi_pengaduan" value="<?php echo $d['isi_pengaduan']; ?>"></td>
				</tr>
                <tr>
					<td>Status</td>
					<td>
                        <select name="status" value="<?php echo $d['status']; ?>">
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>

                        </select>
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>