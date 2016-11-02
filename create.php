<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<p><a href="read.php">Beranda</a> / <a href="create.php">Tambah Data</a></p>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="prosesdaftar.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" size="30" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
						<option value="Multimedia">Multimedia</option>
						<option value="Akuntansi">Akuntansi</option>
						<option value="Perbankan">Perbankan</option>
						<option value="Pemasaran">Pemasaran</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>