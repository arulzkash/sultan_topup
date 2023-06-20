<?php
$active_database = $active_database ?? '';
$active_game = $active_game ?? '';
$active_metode = $active_metode ?? '';
$active_voucher = $active_voucher ?? '';
$active_struk = $active_struk ?? '';
?>

<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url(); ?>assety/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?= $judul ?></title>

    <meta name="description" content="" />

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
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="<?= base_url(); ?>C_Admin" class="app-brand-link">

                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sultan Admin</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <!-- Layouts -->
                    <li class="menu-item <?= $active_database ?>">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Database</div>
                        </a>

                        <ul class="menu-sub" <?= $active_game ?>>
                            <li class="menu-item">
                                <a href="<?= base_url(); ?>C_Admin/games" class="menu-link">
                                    <div data-i18n="Without menu">Games</div>
                                </a>
                            </li>
                            <li class="menu-item" <?= $active_metode ?>>
                                <a href="<?= base_url(); ?>C_Admin/metode" class="menu-link">
                                    <div data-i18n="Without navbar">Payment Method</div>
                                </a>
                            </li>
                            <li class="menu-item" <?= $active_voucher ?>>
                                <a href="<?= base_url(); ?>C_Admin/voucher" class="menu-link">
                                    <div data-i18n="Container">Voucher</div>
                                </a>
                            </li>
                            <li class="menu-item" <?= $active_struk ?>>
                                <a href="<?= base_url(); ?>C_Admin/pembayaran" class="menu-link">
                                    <div data-i18n="Fluid">Receipt</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= base_url(); ?>C_Admin/pesan" class="menu-link">
                                    <div data-i18n="Fluid">Message</div>
                                </a>
                            </li>

                        </ul>
                    </li>


            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right ml-auto d-flex justify-content-end" id="navbar-collapse">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-right" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-user-circle me-2"></i>
                                <span class="align-middle">Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="<?= base_url(); ?>C_Auth/logout">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- / Navbar -->