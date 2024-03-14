<?php
$kiriman = $_GET["data"];

echo $kiriman;
 
include "../../../koneksi.php";
 
// Establish connection
$conn = mysqli_connect("localhost", "admin", "admin", "toko");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete query
$hapus = mysqli_query($conn, "DELETE FROM `suplier` WHERE id_sp = '".$kiriman."'");

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

// Close connection
mysqli_close($conn);
?>
