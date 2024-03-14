<?php
$a = $_POST['id'];
$b = $_POST['nama'];
$c = $_POST['alamat'];
$d = $_POST['telepon'];

include "../../config.php";

// Establish connection
$conn = mysqli_connect("localhost", "admin", "admin", "toko");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update query
$mutakhir = mysqli_query($conn, "UPDATE `suplier` SET `nm_sp`='$b',`alamat_sp`='$c',`tlp_sp`='$d' WHERE `id_sp`='$a'");

if ($mutakhir) {
?>
    <script type="text/javascript">
        alert('Data Berhasil di Mutakhirkan');
        window.location='index.php';
    </script>
<?php
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
