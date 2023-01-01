<?php 
session_start();

// jika sudah login, alihkan ke halaman dashboard
if (isset($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>De' Library</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
    <link
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down">
      <div class="container">
        <a href="./index.php" class="navbar-brand">
          <img src="./assets/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="./index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="./register.php" class="nav-link">Sign Up</a>
            </li>
            <li class="nav-item">
              <a
                href="./login.php"
                class="btn btn-primary nav-link px-4 text-white"
                >Sign In</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="page-content page-home">
      <!-- Header -->
      <section class="header-hero ">
        <div class="container ">
            <div class="row">
                <div class="col-7 d-flex flex-column justify-content-center mt-5">
                <h1>Read, Learn and Explore your Favorite Books</h1>
                <h4 class="font-weight-lighter text-muted">Largest library in the world</h4>
                <a href="./dashboard.php" class="btn btn-primary mt-3 w-25 rounded-pill">Read Now</a>
                </div>
                <div class="col-5 mt-5">
                    <img class="img-fluid" src="./assets/stack of different books.svg" alt="">
                </div>
            </div>
        </div>
      </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row"></div>
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">
            2022 Copyright De' Library. All Rights Reserved.
          </p>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./script/navbar-scroll.js"></script>
  </body>
</html>
