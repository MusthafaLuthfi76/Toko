<?php
date_default_timezone_set('Asia/Jakarta');

// Membuat koneksi
$Open = mysqli_connect("localhost", "root", "");

// Memeriksa koneksi
if (!$Open) {
    die("Koneksi MySQL gagal: " . mysqli_connect_error());
}

// Memilih database
$Koneksi = mysqli_select_db($Open, "toko");

// Memeriksa pemilihan database
if (!$Koneksi) {
    die("Pemilihan database gagal !");
}
?>
