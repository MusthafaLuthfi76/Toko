<?php
	date_default_timezone_set('Asia/Jakarta');
	$mysqli = new mysqli("localhost", "root", "", "toko");

	// Periksa koneksi
	if ($mysqli->connect_error) {
	    die("Koneksi ke database gagal: " . $mysqli->connect_error);
	}
?>
