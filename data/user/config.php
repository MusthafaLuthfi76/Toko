<?php
// Set the default timezone
date_default_timezone_set('Asia/Jakarta');

// Establish connection
$conn = mysqli_connect("localhost", "root", "", "toko");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
