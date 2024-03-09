<?php
include "../../config.php";

// Membuat koneksi
$conn = mysqli_connect("localhost", "root", "", "toko");

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi MySQL gagal: " . mysqli_connect_error());
}

$kiriman = $_GET["data"];

echo $kiriman;

// Menghapus data barang berdasarkan id_barang
$hapus = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '".$kiriman."'");

if ($hapus) {
    ?>
    <script type="text/javascript">
        alert('Data Berhasil di Hapus');
        window.location='index.php';
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert('Data Gagal di Hapus');
        window.location='index.php';
    </script>
    <?php
}
?>
