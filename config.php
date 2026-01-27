<?php
// koneksi database
$koneksi = mysqli_connect("localhost", "root", "root", "dbtarget");

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>