<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Masyarakat</title>
</head>
<body>
 
	<h2>Pengaduan Masyarakat</h2>
	<br/>
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td><input type="number" name="nik"></td>
			</tr>
			<tr>
				<td>Tgl Pengaduan</td>
				<td><input type="date" name="tgl_pengaduan"></td>
			</tr>
            <tr>
				<td>Isi Pengaduan</td>
				<td><input type="text" name="isi_pengaduan"></td>
			</tr>
            <tr>
				<td>Status</td>
				<td>
                    <select name="status">
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
</body>
</html>