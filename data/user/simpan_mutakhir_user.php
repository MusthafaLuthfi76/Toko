<?php
$a = $_POST['id'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['nama'];
$e = $_POST['alamat'];
$f = $_POST['telepon'];
$g = $_POST['level'];

include "../../config.php";

// Establish connection
$conn = mysqli_connect("localhost", "admin", "admin", "toko");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update query
$mutakhir = mysqli_query($conn, "UPDATE `user` SET `username`='$b',`password`='$c',`nama`='$d',`alamat`='$e',`no_tlp`='$f',`level`='$g' WHERE `id_user`='$a'");

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
