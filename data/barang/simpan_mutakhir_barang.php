<?php
$a = $_POST['id_barang'];
$b = $_POST['nama'];
$c = $_POST['jenis'];
$d = $_POST['ukuran'];
$e = $_POST['warna'];
$f = $_POST['id_supplier'];
$g = $_POST['harga'];
$h = $_POST['jumlah'];

include "../../config.php";

// Membuat koneksi
$koneksi = new mysqli("localhost", "admin", "admin", "toko");

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Query untuk memperbarui data barang
$query = "UPDATE barang SET nama_brg='$b', jenis_barang='$c', ukuran='$d', warna='$e', id_suplier='$f', harga='$g', jumlah='$h' WHERE id_barang='$a'";
$result = $koneksi->query($query);

if ($result) {
    ?>
    <script type="text/javascript">
        alert('Data Berhasil di Mutakhirkan');
        window.location='index.php';
    </script>
    <?php
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}

// Menutup koneksi
$koneksi->close();
?>
