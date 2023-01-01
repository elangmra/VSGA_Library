<?php 
   
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    //jika belum login, alihkan ke login
    if (empty($_SESSION['user'])) {
        header('Location: ../login.php');
        exit();
    }
?>
<nav class="navbar navbar-expand-lg navbar-light navbar-store " data-aos="fade-down" >
    <div class="container-fluid">
        <a href="../index.php" class="navbar-brand">
          <img src="../assets/logo.svg" alt="" />
        </a>
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
                    src="../assets/user-icon.png"
                    alt="User"
                    class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, <?php echo $_SESSION['user']['petugas_nama']; ?>
                </a>
                <div class="dropdown-menu">
                    <a href="/dashboard.html" class="dropdown-menu"
                    >Dashboard</a
                    >
                    <a href="/dashboard-account.html" class="dropdown-menu"
                    >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    <a href="/" class="dropdown-item">Logout</a>
                </div>
                </li>
            
            </ul>

            <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                <a href="" class="nav-link"> Hi, Elang </a>
                </li>
                <li class="nav-item">
                <a href="" class="nav-link d-inline-block"> Cart </a>
                </li>
            </ul>
        </div>
    </div>
</nav>