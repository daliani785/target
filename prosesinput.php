<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bulan = $_POST['bulan'];
    $target1 = $_POST['target1'];
    $todo = $_POST['todo'];
    

    $sql = "INSERT INTO tbtarget(bulan, target1, todo, ) VALUE ('$bulan', '$terget1', '$todo')";
    $result = mysqli_query($koneksi, $sql);

    mysqli_close($koneksi);

    //redirec ke halaman index.php
    header("location: view-data.php");
    exit();
}
    
?>