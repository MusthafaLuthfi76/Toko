<?php
$a 	= $_POST['id_barang'];
$b 	= $_POST['nama'];
$c	= $_POST['jenis'];
$d	= $_POST['ukuran'];
$e	= $_POST['warna'];
$f	= $_POST['id_supplier'];
$g	= $_POST['harga'];
$h	= $_POST['jumlah'];

include "../../config.php";

// Membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "toko");

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi MySQL gagal: " . mysqli_connect_error());
}

// Mengecek apakah data sudah ada
$barang = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$a'");
$jm_baris_query = mysqli_num_rows($barang);

if ($jm_baris_query > 0) {
    echo "Data Sudah Ada";
    exit;
} else {
    // Menyimpan data baru
    $simpan = mysqli_query($conn, "INSERT INTO barang (id_barang, nama_brg, jenis_barang, ukuran, warna, id_suplier, harga, jumlah) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')");

    if ($simpan) {
        ?>
        <script type="text/javascript">
            window.location='index.php';
        </script>
        <?php
    } else {
        echo "Gagal menyimpan data";
    }
}
?>
