<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data</title>
    <!-- <link rel="stylesheet" href="cssnya/style.css"> -->
     <link rel="stylesheet" href="cssnya/view.css">
    
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
        <a href="index.php" class="back-btn">Kembali</a>
    </div>

    <?php
    if (mysqli_num_rows($result) > 0): ?>
        <div class="container">
            <div class="table-card">
                <h2 class="title">Daftar Target</h2>

                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Bulan</th>
                            <th>Target</th>
                            <th>To Do</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td>
                                    <span class="badge">
                                        <?= htmlspecialchars($row['bulan']); ?>
                                    </span>
                                </td>
                                <td><?= htmlspecialchars($row['target1']); ?></td>
                                <td><?= htmlspecialchars($row['todo']); ?></td>
                                <td>
                                    <a class="btn edit" href="update.php?id=<?= urlencode($row['id']); ?>">Edit</a>
                                    <a class="btn delete" href="hapus.php?id=<?= urlencode($row['id']); ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>




        <?php else: ?>

            <p>Data tidak ditemukan</p>

        <?php endif; ?>

</body>

</html>