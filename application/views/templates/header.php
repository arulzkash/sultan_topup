<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title><?= $judul ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url(); ?>assetx/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>assetx/assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assetx/assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assetx/assets/css/owl.css">
  <link rel="styleshe    et" href="<?= base_url(); ?>assetx/assets/css/lightbox.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assety/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= base_url(); ?>assety/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assety/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assety/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assety/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assety/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?= base_url(); ?>assety/assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?= base_url(); ?>assety/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= base_url(); ?>assety/assets/js/config.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>
    .meeting-item .thumb img {
      width: 100%;
      height: 200px;
      /* Sesuaikan dengan tinggi yang diinginkan */
      object-fit: cover;
    }

    .nft {
      user-select: none;
      max-width: 250px;
      margin: 0 auto;
      border: 1px solid #ffffff22;
      background-color: #282c34;
      background: linear-gradient(0deg, #282c34 0%, rgba(17, 0, 32, 0.5) 100%);
      box-shadow: 0 7px 20px 5px #00000088;
      border-radius: 8px;
      backdrop-filter: blur(7px);
      -webkit-backdrop-filter: blur(7px);
      overflow: hidden;
      transition: 0.5s all;
    }

    .nft .main {
      display: flex;
      flex-direction: column;
      padding: 1rem;
    }

    .nft .main .tokenImage {
      border-radius: 0.5rem;
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    .nft .main .description {
      margin: 0.5rem 0;
      color: #a89ec9;
      font-size: 14px;
    }

    .nft:hover {
      border: 1px solid #ffffff44;
      box-shadow: 0 7px 50px 10px #000000aa;
      transform: scale(1.015);
      filter: brightness(1.3);
    }

    .nft::before {
      position: fixed;
      content: "";
      box-shadow: 0 0 100px 40px #ffffff08;
      top: -10%;
      left: -100%;
      transform: rotate(-45deg);
      height: 60rem;
      transition: 0.7s all;
    }

    .nft:hover::before {
      filter: brightness(0.5);
      top: -100%;
      left: 200%;
    }

    .nft.freefire h2 {
      color: #000000;
      text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }

    .nft .main .game-title {
      margin-top: 10px;
      font-size: 25px;
    }

    .nft .main {
      width: 250px;
      height: 250px;
    }

    .nft .main .tokenImage {
      width: 100%;
      height: 80%;
      object-fit: cover;
    }
  </style>


  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is a popular <em>TOP UP SITE</em> in Indonesia</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="<?= base_url(); ?>" class="logo">
              Sultan Top Up
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="<?= base_url(); ?>" class="active">Home</a></li>
              <li><a href="<?= base_url(); ?>C_TopUp#games">Games</a></li>
              <li><a href="<?= base_url(); ?>#search">Search Receipt</a></li>
              <li><a href="<?= base_url(); ?>#contact">Contact Us</a></li>
              <li><a href="<?= base_url(); ?>C_Admin">Admin Pages</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->