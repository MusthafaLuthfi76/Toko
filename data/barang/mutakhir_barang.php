<?php
// Asumsi $conn adalah koneksi yang sudah dibuat ke database MySQL
// Include file konfigurasi database
include "../../config.php";

// Mendapatkan kiriman data
$kiriman = $_GET['data'];

// Menyiapkan dan menjalankan query dengan menggunakan MySQLi
$query = $conn->prepare("SELECT * FROM barang WHERE id_barang = ?");
$query->bind_param("s", $kiriman);
$query->execute();

// Mendapatkan hasil query
$result = $query->get_result();
$data_barang = $result->fetch_array(MYSQLI_NUM);

// Pastikan untuk mengecek apakah $data_barang tidak false sebelum mencoba mengakses indeks array
if ($data_barang !== false) {
    echo "
    <br/><br/><br/><br/>
    <center>
    <form action=simpan_mutakhir_barang.php method=post>
    <table style='font-family:sans-serif'; class='table table-bordered'>
    ...
    // Sisanya tetap sama, hanya pastikan Anda escape output yang diperoleh dari pengguna
    ";
} else {
    // Handle kasus dimana data barang tidak ditemukan atau query gagal
    echo "Data barang tidak ditemukan.";
}

// Jangan lupa untuk menutup statement dan koneksi jika sudah tidak digunakan lagi
$query->close();
$conn->close();
?>
