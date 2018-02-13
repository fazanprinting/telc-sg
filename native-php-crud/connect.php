<?php
	// File Untuk membangun Koneksi
	$hostname = 'localhost';
	$username = 'root'; //'root'
	$password = ''; //''
	$database = 'telc_sg';

	$connect = mysqli_connect($hostname, $username, $password, $database);

	if (!$connect) {
		die('Ga Konek Woy!'.mysqli_error());
	}
	// echo "Yeay Berhasil Konek";
?>