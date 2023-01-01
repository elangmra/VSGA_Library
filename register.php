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
    <link href="./style/main.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar -->
    <nav
      class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
      "
      data-aos="fade-down"
    >
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
            <li class="nav-item">
              <a href="./index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item active">
              <a href="register.php" class="nav-link">Sign Up</a>
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
    <div class="page-content page-auth" id="register">
      <section class="store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center justify-content-center row-login">
            <div class="col-lg-4">
              <h2>
                What you waiting for? <br />
                Literate Now
              </h2>
              <form class="mt-3" method="POST" action="./process/proses-register.php">
                <div class="form-group">
                  <label for="fullname">Full Name</label>
                  <input
                    type="text"
                    name="fullname"
                    class="form-control"
                    autofocus
                  />
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input
                    type="text"
                    name="username"
                    class="form-control "
                  />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" />
                </div>
                <input type="submit"
                  href="./dashboard.php"
                  class="btn btn-primary btn-block mt-4" value="Sign Up Now"
                />
                 
                <a href="./login.php" class="btn btn-signup btn-block mt-2">
                  Back to Sign In</a
                >
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>

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
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
  </body>
</html>
