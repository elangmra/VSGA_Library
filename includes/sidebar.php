<?php 
   

    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../login.php');
        exit();
    }
?>
<div class="sidebar pt-4">
    <ul>
        <li><a href="../kategori/list-kategori.php">Data Kategori</a></li>
        <li><a href="../buku/list-buku.php">Data Buku</a></li>
        <li><a href="../anggota/list-anggota.php">Data Anggota</a></li>
        <li><a href="../peminjaman/pinjam-data.php">Peminjaman</a></li>
        <li><a href="../pengembalian/list-pengembalian.php">Pengembalian</a></li>
        <li><a href="../logout.php" onclick="return confirm('anda yakin akan keluar?')">Logout</a></li>
    </ul>
</div>

