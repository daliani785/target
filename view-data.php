<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'config.php';
    ?>

    <!-- tampilkan data dari database -->

    <?php
    // query untuk mendapatkan data dari database
    $sql = "SELECT * FROM tbtarget";
    $result = mysqli_query($koneksi, $sql);
    ?>
    <div class="container">
        <!-- tombol kembali ke halaman input data -->
        <a href="index.php"><button> Kembali</button></a>
    </div>
    <?php
    if (mysqli_num_rows($result) > 0): ?>
        <div class="container">
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Target</th>
                            <th>To Do</th>
                            
                        </tr>
                    </thead>
                    
                </table>
            </div>



</body>

</html>