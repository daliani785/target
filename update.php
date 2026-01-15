<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'config.php';

    $id = $_GET['id'];

    // ambil data lama
    $sql = mysqli_query($koneksi, "SELECT * FROM tbtarget WHERE id='$id'");
    $siswa = mysqli_fetch_assoc($sql);

    // proses update
    if (isset($_POST['update'])) {
        $nama = $_POST['bulan'];
        $kelas = $_POST['target1'];
        $umur = $_POST['todo'];
        

        mysqli_query($koneksi, "UPDATE tbtarget 
        SET bulan='$bulan', target1='$target1', todo='$todo'
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    

</body>

</html>