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
	<h3>TAMBAH DATA USER</h3>
	<form method="post" action="register_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			<tr>
			<tr>
				<td>Level</td>
				<td>
					<select name="level">
						<option value="admin">Admin</option>
						<option value="petugas">Petugas</option>
						<option value="masyarakat">Masyarakat</option>
					</select>
				</td>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>