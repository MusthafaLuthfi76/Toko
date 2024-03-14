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

$supplier = mysqli_query($conn, "SELECT * FROM suplier WHERE id_sp='$a'");

$jm_baris_query = mysqli_num_rows($supplier);

if ($jm_baris_query == 1) {
    echo "Data Sudah Ada";
    exit;
} else {
    $simpan = mysqli_query($conn, "INSERT INTO `suplier`(`id_sp`, `nm_sp`, `alamat_sp`, `tlp_sp`) VALUES ('$a','$b','$c','$d')");

    if ($simpan) {
?>
        <script type="text/javascript">
            alert('Data berhasil disimpan');
            window.location='index.php';
        </script>
<?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
