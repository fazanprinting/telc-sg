<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
</head>
<body>
	<h1>Formulir Pendaftaran Study Group TEL-C</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>E-Mail</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="date" name="ttl"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jk" value="Laki-laki">Laki-laki 
					<input type="radio" name="jk" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="number" name="nohp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat"></textarea>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi" value="makan">Makan<br>
					<input type="checkbox" name="hobi" value="tidur">Tidur<br>
					<input type="checkbox" name="hobi" value="mandi">Mandi<br>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan">
						<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
						<option value="S1 Ilmu Komputasi">S1 Ilmu Komputasi</option>
						<option value="S1 Teknologi Informasi">S1 Teknologi Informasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button type="submit" name="submit">Submit</button><button type="reset">Reset</button></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	// ini kodingan insert
	if (isset($_POST['submit'])) {
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";

		require_once 'connect.php';

		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$ttl = $_POST['ttl'];
		$jenis_kelamin = $_POST['jk'];
		$nohp = $_POST['nohp'];
		$alamat = $_POST['alamat'];
		$hobi = $_POST['hobi'];
		$jurusan = $_POST['jurusan'];		

		$query = "INSERT INTO peserta VALUES ('', '$nama', '$username', '$password', '$email', '$ttl', '$jenis_kelamin', '$nohp', '$alamat', '$hobi', '$jurusan')";

		$sql = mysqli_query($connect, $query);

		if (!$sql) {
			die('Gagal Insert');
		}
		echo "Insert Berhasil";


	}
?>