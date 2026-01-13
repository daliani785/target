<?php
// koneksi database
$koneksi = mysqli_connect("localhost", "root", "root", "dbterget");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>