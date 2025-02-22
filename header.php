<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include_once('connect.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - Medilab Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">



  <header id="header" class="header sticky-top">



    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Medilab</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>

            <?php


            if (isset($_SESSION['id']) && $_SESSION['id'] >= 0) {
              echo '<div class="d-flex gap-2 justify-content-center text-center flex-column flex-lg-row gap-3"><li>
<a class="cta-btn  d-sm-block" href="./index.php">Make an Appointment</a> </li>
<li>
<a class="cta-btn  d-sm-block" href="./patients.php">View other patients </a> </li>
<li><form action="logout.php" method="post">
<button class="cta-btn  d-sm-block">Sign out</button>
</form></li></div>';
            } else {

              // Get current page filename
              $current_page = basename($_SERVER['PHP_SELF']);

              // Dynamically change the link
              if ($current_page == "signup.php") {
                echo '<div class="d-flex justify-content-center text-center"><a class="cta-btn  d-sm-block" href="login.php">Login</a></div>';
              } elseif ($current_page == "login.php") {
                echo '<div class="d-flex justify-content-center text-center"><a class="cta-btn  d-sm-block" href="signup.php">Signup</a></div>';
              }
            }
            ?>


          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


      </div>

    </div>

  </header>