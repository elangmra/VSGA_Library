<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="container clearfix addons">

        <?php include '../includes/nav.php' ?>
        <?php include '../includes/sidebar.php' ?>

        <div class="content">
            <h3>Tambah Data Kategori</h3>
            <form method="post" action="proses-tambah-kategori.php">
                <p>Kategori</p>
                <p><input type="text" name="kategori"></p>
                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
