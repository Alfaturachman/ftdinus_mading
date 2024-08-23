<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title?></title>
    <link rel="shortcut icon" href="<?= base_url('') ?>assets/images/logo/udinus.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('') ?>assets/css/tailwind.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="<?= base_url('') ?>assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .ud-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        /* Default state */
        #homeBtn {
            color: white;
            transition: color 0.05s ease, background-color 0.05s ease;
        }

        /* Change state when scrolled */
        .scrolled #homeBtn {
            color: black;
        }
    </style>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.ud-header').addClass('scrolled');
                } else {
                    $('.ud-header').removeClass('scrolled');
                }
            });
        });
    </script>
</head>

<body>
    <!-- ====== Navbar Section Start -->
    
    <!-- ====== Navbar Section End -->