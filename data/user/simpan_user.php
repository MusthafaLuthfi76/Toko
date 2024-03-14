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

// Check if user exists
$user_query = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$a'");
$jm_baris_query = mysqli_num_rows($user_query);

if ($jm_baris_query == 1) {
    echo "Data Sudah Ada";
    exit;
} else {
    // Insert user
    $simpan = mysqli_query($conn, "INSERT INTO `user`(`id_user`, `username`, `password`, `nama`, `alamat`, `no_tlp`, `level`) VALUES ('$a','$b','$c','$d','$e','$f','$g')");

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
