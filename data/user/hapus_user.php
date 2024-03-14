<?php
// Get the data from the URL parameter
$kiriman = $_GET["data"];

// Echo the data to ensure it's correct (optional)
echo $kiriman;

// Include the database connection file
include "../../../koneksi.php";

// Establish connection
$conn = mysqli_connect("localhost", "admin", "admin", "toko");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Delete user query using MySQLi
$hapus = mysqli_query($conn, "DELETE FROM `user` WHERE id_user = '".$kiriman."'");

if ($hapus) {
?>
    <!-- Alert user and redirect on success -->
    <script type="text/javascript">
        alert('Data Berhasil di Hapus');
        window.location='index.php';
    </script>
<?php
} else {
?>
    <!-- Alert user and redirect on failure -->
    <script type="text/javascript">
        alert('Data Gagal di Hapus');
        window.location='index.php';
    </script>
<?php
}

// Close the connection
mysqli_close($conn);
?>
