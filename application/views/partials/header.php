<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Home
    </title>
    <link
        rel="shortcut icon"
        href="<?= base_url('') ?>assets/images/favicon.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/tailwind.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- ==== WOW JS ==== -->
    <script src="<?= base_url('') ?>assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <div class="ud-header fixed top-0 left-0 z-40 w-full bg-transparent">
        <div class="container mx-auto px-4">
            <div class="relative flex items-center justify-between">
                <div class="w-60 max-w-full px-4">
                    <a class="navbar-logo block w-full py-5" href="<?= site_url('home') ?>">
                        <img
                            src="<?= base_url('') ?>assets/images/logo/logo-white.svg"
                            alt="logo"
                            class="header-logo w-full" />
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-4">
                    <div class="flex items-center w-full">
                        <!-- Menu navigasi dan tombol Cari -->
                        <div class="flex space-x-4 w-full items-center justify-end">
                            <!-- Menu navigasi -->
                            <nav class="flex space-x-4 mr-3 items-center gap-4">
                                <a href="<?= site_url('daftar') ?>"
                                    class="text-white hover:text-gray-300 duration-300 ease-in-out">
                                    Home
                                </a>
                                <a
                                    href="<?= site_url('home') ?>"
                                    class="signUpBtn rounded-md bg-white bg-opacity-20 px-6 py-2 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark flex items-center space-x-2">
                                    <i class="fas fa-search mr-3"></i>
                                    <span>Cari</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Navbar Section End -->

    <style>
        .ud-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }
    </style>