<?php 
    session_start(); 

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Petugas</title>
     <link href="./style/main.css" rel="stylesheet" />
     <link href="./style/style.css" rel="stylesheet" />
</head>
<body>
    <div class="container clearfix addons">
        <nav class="navbar navbar-expand-lg navbar-light navbar-store " data-aos="fade-down" >
            <div class="container-fluid">
                <a href="./index.php" class="navbar-brand">
                <img src="./assets/logo.svg" alt="" />
                </a>
                <!-- <button
                    class="btn btn-secondary d-md-none mr-auto mr-2"
                    id="menu-toggle"
                    >
                    &laquo;Menu
                </button>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    >
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                    <!-- Desktop Menu -->
                    <ul class="navbar-nav d-none d-lg-flex ml-auto">
                        <li class="nav-item dropdown">
                        <a
                            href="#"
                            class="nav-link d-flex align-items-center"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <img
                            src="./assets/user-icon.png"
                            alt="User"
                            class="rounded-circle mr-2 profile-picture"
                            />
                            Hi, <?php echo $_SESSION['user']['petugas_nama']; ?>
                        </a>
                        </li>                  
                    </ul>

                    <!-- Mobile Menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                        <a href="" class="nav-link"> Hi, Elang </a>
                        </li>                      
                    </ul>
                </div>
            </div>
        </nav>
      
        <div class="sidebar pt-4">
            <ul>
                <li><a href="./kategori/list-kategori.php">Data Kategori</a></li>
                <li><a href="./buku/list-buku.php">Data Buku</a></li>
                <li><a href="./anggota/list-anggota.php">Data Anggota</a></li>
                <li><a href="./peminjaman/pinjam-data.php">Peminjaman</a></li>
                <li><a href="./pengembalian/list-pengembalian.php">Pengembalian</a></li>
                <li><a href="./logout.php" onclick="return confirm('anda yakin akan keluar?')">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Selamat datang, <?php echo $_SESSION['user']['petugas_nama']; ?></h1>
        </div>
    </div>
</body>
</html>
