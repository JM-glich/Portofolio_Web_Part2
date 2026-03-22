<?php
$conn = mysqli_connect("localhost", "root", "", "music_portfolio");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>