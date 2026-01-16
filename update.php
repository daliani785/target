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

    <div class="container">
        <!-- update data -->
        <h2>Update Data Siswa</h2>

        <form method="post">
            <label>Bulan</label>
            <input type="date" name="bulan" value="<?= htmlspecialchars($siswa['bulan']); ?>" required>

            <label>Target</label>
            <input type="text" name="target1" value="<?= htmlspecialchars($siswa['target1']); ?>" required>

            <label>To Do</label>
            <input type="text" name="todo" value="<?= htmlspecialchars($siswa['todo']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <br>
        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>