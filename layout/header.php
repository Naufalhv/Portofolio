<?php require_once __DIR__ . '/../helpers/helpers.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Naufal Havi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li>
          <a href="<?php echo base_url('/'); ?>"
            class="<?php echo (current_page() === 'index.php') ? 'active' : ''; ?>">
            <i class="bi bi-house navicon"></i><span>Home</span>
          </a>
        </li>
        <li><a href="<?php echo base_url('about.php'); ?>"
            class="<?php echo (current_page() === 'about.php') ? 'active' : ''; ?>"><i
              class="bi bi-person navicon"></i><span>About</span></a>
        </li>
        <li><a href="<?php echo base_url('portfolio.php'); ?>"
            class="<?php echo (current_page() === 'portfolio.php') ? 'active' : ''; ?>"><i
              class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
        <li><a href="<?php echo base_url('services.php'); ?>"
            class="<?php echo (current_page() === 'services.php') ? 'active' : ''; ?>"><i
              class="bi bi-hdd-stack navicon"></i><span>Services</span></a></li>
        <li><a href="<?php echo base_url('contact.php'); ?>"
            class="<?php echo (current_page() === 'contact.php') ? 'active' : ''; ?>"><i
              class="bi bi-envelope navicon"></i><span>Contact</span></a>
        </li>
      </ul>
    </nav>

  </header>