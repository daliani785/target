<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Target </title>
    <link rel="stylesheet" href="cssnya/style.css">
    
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
            <label>Bulan</label><br> 
            <input type="date" name="bulan"  required>
            <label></label>
            <input type="text" placeholder="Target" name="target1"  required>
            <label></label>
            <input type="text" placeholder="To Do"name="todo"  required><br><br>

            <div class="btn-center">
                <input type="submit" value="Kirim">
            </div>

        </form>

    </div>
    
</body>

</html>