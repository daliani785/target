<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Target </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Koneksi ke database
    include 'config.php';
    ?>

    <div class="card">
        <h1>My Target Planner</h1>
        <p>Mudahkan dengan mencatat setiap targetmu</p>

        <!-- form inputan -->
        <form action="prosesinput.php" method="post">
            <label>Bulan</label>
            <input type="date" name="bulan"><br><br>
            <label>Target</label>
            <input type="text" name="target1"><br><br>
            <label>To Do</label>
            <input type="text" name="todo"><br><br>

            <input type="submit" value="Kirim">
        </form>

    </div>
    
</body>

</html>