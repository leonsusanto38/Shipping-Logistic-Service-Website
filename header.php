<?php
require_once 'phps/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-store" />

    <meta name="description" content="Andre Cepat">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /> -->

    <!-- <title>Andre Cepat Express</title> -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- For apple devices -->
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- lib -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- jquery confirm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <!-- data table -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    </script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>

<script>
    jQuery(function($) {
        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 200) {
                $('.navbar').addClass('fixed-top');
            } else if ($(this).scrollTop() == 0) {
                $('.navbar').removeClass('fixed-top');
            }
        });

        function adjustNav() {
            var winWidth = $(window).width(),
                dropdown = $('.dropdown'),
                dropdownMenu = $('.dropdown-menu');

            if (winWidth >= 768) {
                dropdown.on('mouseenter', function() {
                    $(this).addClass('show')
                        .children(dropdownMenu).addClass('show');
                });

                dropdown.on('mouseleave', function() {
                    $(this).removeClass('show')
                        .children(dropdownMenu).removeClass('show');
                });
            } else {
                dropdown.off('mouseenter mouseleave');
            }
        }

        $(window).on('resize', adjustNav);

        adjustNav();
    });
</script>

<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700,800');
    @import url('https://fonts.googleapis.com/css?family=Lobster');

    html {
        font-size: 62.5%;
        scroll-behavior: smooth !important;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 1.6rem;
        font-weight: 400;
    }

    h1 {
        margin-bottom: 0.5em;
        font-size: 3.6rem;
    }

    p {
        margin-bottom: 0.5em;
        font-size: 1.6rem;
        line-height: 1.6;
    }

    .button {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 25px;
        border-radius: 4px;
    }

    .button-primary {
        position: relative;
        /* background-color: #c0ca33; */
        background-color: orange;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease-in;
        z-index: 1;
    }

    .button-primary:hover {
        color: orange;
        text-decoration: none;
    }

    .button-primary::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: #fff;
        border-radius: 4px;
        opacity: 0;
        -webkit-transform: scaleX(0.8);
        -ms-transform: scaleX(0.8);
        transform: scaleX(0.8);
        transition: all 0.3s ease-in;
        z-index: -1;
    }

    .button-primary:hover::after {
        opacity: 1;
        -webkit-transform: scaleX(1);
        -ms-transform: scaleX(1);
        transform: scaleX(1);
    }

    .button-primary-history {
        position: relative;
        background-color: #35db35;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 700;
        transition: color 0.3s ease-in;
        z-index: 1;
    }

    .button-primary-history:hover {
        color: #35db35;
        text-decoration: none;
    }

    .button-primary-history::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: #fff;
        border-radius: 4px;
        opacity: 0;
        -webkit-transform: scaleX(0.8);
        -ms-transform: scaleX(0.8);
        transform: scaleX(0.8);
        transition: all 0.3s ease-in;
        z-index: -1;
    }

    .button-primary-history:hover::after {
        opacity: 1;
        -webkit-transform: scaleX(1);
        -ms-transform: scaleX(1);
        transform: scaleX(1);
    }

    .overlay::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(0, 0, 0, .3);
    }

    .header-area {
        position: relative;
        height: 100vh;
        /* background: #5bc0de; */
        background-image: url("assets/background.jpg");
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .banner {
        display: flex;
        align-items: center;
        position: relative;
        height: 100%;
        color: #fff;
        text-align: center;
        z-index: 1;
    }

    .banner h1 {
        font-weight: 800;
    }

    .banner p {
        font-weight: 700;
    }

    .navbar {
        position: absolute;
        left: 0;
        top: 0;
        padding: 0;
        width: 100%;
        transition: background 0.6s ease-in;
        z-index: 99999;
    }

    .navbar .navbar-brand {
        font-family: 'Arial', cursive;
        font-size: 2.5rem;
    }

    .navbar .navbar-toggler {
        position: relative;
        height: 50px;
        width: 50px;
        border: none;
        cursor: pointer;
        outline: none;
    }

    .navbar .navbar-toggler .menu-icon-bar {
        position: absolute;
        left: 15px;
        right: 15px;
        height: 2px;
        background-color: #fff;
        opacity: 0;
        -webkit-transform: translateY(-1px);
        -ms-transform: translateY(-1px);
        transform: translateY(-1px);
        transition: all 0.3s ease-in;
    }

    .navbar .navbar-toggler .menu-icon-bar:first-child {
        opacity: 1;
        -webkit-transform: translateY(-1px) rotate(45deg);
        -ms-sform: translateY(-1px) rotate(45deg);
        transform: translateY(-1px) rotate(45deg);
    }

    .navbar .navbar-toggler .menu-icon-bar:last-child {
        opacity: 1;
        -webkit-transform: translateY(-1px) rotate(135deg);
        -ms-sform: translateY(-1px) rotate(135deg);
        transform: translateY(-1px) rotate(135deg);
    }

    .navbar .navbar-toggler.collapsed .menu-icon-bar {
        opacity: 1;
    }

    .navbar .navbar-toggler.collapsed .menu-icon-bar:first-child {
        -webkit-transform: translateY(-7px) rotate(0);
        -ms-sform: translateY(-7px) rotate(0);
        transform: translateY(-7px) rotate(0);
    }

    .navbar .navbar-toggler.collapsed .menu-icon-bar:last-child {
        -webkit-transform: translateY(5px) rotate(0);
        -ms-sform: translateY(5px) rotate(0);
        transform: translateY(5px) rotate(0);
    }

    .navbar-dark .navbar-nav .nav-link {
        position: relative;
        color: #fff;
        font-size: 1.6rem;
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #fff;
    }

    .navbar .dropdown-menu {
        padding: 0;
        background-color: rgba(0, 0, 0, .9);
    }

    .navbar .dropdown-menu .dropdown-item {
        position: relative;
        padding: 10px 20px;
        color: #fff;
        font-size: 1.4rem;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
        transition: color 0.2s ease-in;
    }

    .navbar .dropdown-menu .dropdown-item:last-child {
        border-bottom: none;
    }

    .navbar .dropdown-menu .dropdown-item:hover {
        background: transparent;
        color: #c0ca33;
    }

    .navbar .dropdown-menu .dropdown-item::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        top: 0;
        width: 5px;
        background-color: #c0ca33;
        opacity: 0;
        transition: opacity 0.2s ease-in;
    }

    .navbar .dropdown-menu .dropdown-item:hover::before {
        opacity: 1;
    }

    .navbar.fixed-top {
        position: fixed;
        -webkit-animation: navbar-animation 0.6s;
        animation: navbar-animation 0.6s;
        background-color: rgba(0, 0, 0, .9);
    }

    .navbar.fixed-top.navbar-dark .navbar-nav .nav-link.active {
        color: #c0ca33;
    }

    .navbar.fixed-top.navbar-dark .navbar-nav .nav-link::after {
        background-color: #c0ca33;
    }

    .content {
        padding: 120px 0;
    }

    @media screen and (max-width: 768px) {
        .navbar-brand {
            margin-left: 20px;
        }

        .navbar-nav {
            padding: 0 20px;
            background-color: rgba(0, 0, 0, .9);
        }

        .navbar.fixed-top .navbar-nav {
            background: transparent;
        }
    }

    @media screen and (min-width: 767px) {
        .banner {
            padding: 0 150px;
        }

        .banner h1 {
            font-size: 5rem;
        }

        .banner p {
            font-size: 2rem;
        }

        .navbar-dark .navbar-nav .nav-link {
            padding: 23px 15px;
        }

        .navbar-dark .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 15px;
            left: 30%;
            right: 30%;
            height: 1px;
            background-color: #fff;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            transition: transform 0.1s ease-in;
        }

        .navbar-dark .navbar-nav .nav-link:hover::after {
            -webkit-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }

        .dropdown-menu {
            min-width: 200px;
            -webkit-animation: dropdown-animation 0.3s;
            animation: dropdown-animation 0.3s;
            -webkit-transform-origin: top;
            -ms-transform-origin: top;
            transform-origin: top;
        }
    }

    @-webkit-keyframes navbar-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes navbar-animation {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @-webkit-keyframes dropdown-animation {
        0% {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }

        75% {
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1);
        }

        100% {
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    }

    @keyframes dropdown-animation {
        0% {
            -webkit-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }

        75% {
            -webkit-transform: scaleY(1.1);
            -ms-transform: scaleY(1.1);
            transform: scaleY(1.1);
        }

        100% {
            -webkit-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    }
</style>

<script>
    function login() {
        $.confirm({
            title: 'LOGIN',
            type: 'orange',
            typeAnimated: true,
            theme: 'modern',
            columnClass: "col-md-5",
            buttons: {
                confirm: {
                    text: 'LOGIN',
                    btnClass: 'btn-green',
                    action: function() {
                        var username = this.$content.find('#username').val();
                        var password = this.$content.find('#password').val();
                        if (username && password) {
                            $.ajax({
                                url: "phps/ceklogin.php",
                                method: "POST",
                                data: {
                                    username: username,
                                    password: password
                                },
                                success: function(data) {
                                    // alert(data);
                                    if (data == 'true') {
                                        window.location.href = "user.php";
                                    } else if (data == 'admin') {
                                        window.location.href = "admin.php";
                                    } else {
                                        $.alert('<b style="color: red;">Username atau Password salah!</b>');
                                    }
                                },
                                error: function() {
                                    alert('An error occurred.');
                                },
                            });
                        } else {
                            $.alert('<b style="color: red;">Username dan password harus diisi!</b>');
                            return false;
                        }
                    }
                },
                cancel: {
                    text: 'Cancel',
                    btnClass: 'btn-red',
                    action: function() {}
                }
            },
            content: '' +
                '<form id="myForm" enctype="multipart/form-data">' +
                '<div class="form-group">' +
                '<label for="username" style="font-size: 12pt;"><b>Username</b></label>' +
                '<input type="text" class="form-control" id="username" name="username" style="font-size: 14pt; height: 40px; text-align: center;" required>' +
                '</div><br>' +
                '<div class="form-group">' +
                '<label for="password" style="font-size: 12pt;"><b>Password</b></label>' +
                '<input type="password" class="form-control" id="password" name="password" style="font-size: 14pt; height: 40px; text-align: center;" required>' +
                '</div><br>' +
                '<div class="form-group">' +
                '<a onclick="signup()" style="cursor: pointer; color: blue; font-size: 12pt;"><b>Belum memiliki akun?</b></a>' +
                '</div>' +
                '</form>'
        });
    }

    function signup() {
        var x =
            $.confirm({
                title: 'SIGN UP',
                type: 'orange',
                typeAnimated: true,
                theme: 'modern',
                columnClass: "col-md-5",
                lazyOpen: true,
                buttons: {
                    confirm: {
                        text: 'Sign Up',
                        btnClass: 'btn-green',
                        action: function() {
                            var username = this.$content.find('#username').val();
                            var password = this.$content.find('#password').val();
                            var email = this.$content.find('#email').val();
                            if (username && password) {
                                $.ajax({
                                    url: "phps/signup.php",
                                    method: "POST",
                                    data: {
                                        username: username,
                                        password: password,
                                        email: email
                                    },
                                    success: function(data) {
                                        // $.alert(data);
                                        if (data == 'true') {
                                            window.location.href = "user.php?status=2";
                                        } else if (data == 'falseusername') {
                                            $.alert('<b style="color: red;">Mohon maaf, username telah terdaftar!</b>');
                                            signup();
                                        } else {
                                            $.alert('<b style="color: red;">Mohon maaf, email telah terdaftar!</b>');
                                            signup();
                                        }
                                    },
                                    error: function() {
                                        alert('An error occurred.');
                                    },
                                });
                            } else {
                                $.alert('<b style="color: red;">Tolong isi semua kolom yang tersedia!</b>');
                                return false;
                            }
                        }
                    },
                    cancel: {
                        text: 'Cancel',
                        btnClass: 'btn-red',
                        action: function() {}
                    }
                },
                content: '' +
                    '<form id="myForm" enctype="multipart/form-data">' +
                    '<div class="form-group">' +
                    '<label for="username" style="font-size: 12pt;"><b>New Username</b></label>' +
                    '<input type="text" class="form-control" id="username" name="username" style="font-size: 14pt; height: 40px; text-align: center;" required>' +
                    '</div><br>' +
                    '<div class="form-group">' +
                    '<label for="password" style="font-size: 12pt;"><b>New Password</b></label>' +
                    '<input type="password" class="form-control" id="password" name="password" style="font-size: 14pt; height: 40px; text-align: center;" required>' +
                    '</div><br>' +
                    '<div class="form-group">' +
                    '<label for="email" style="font-size: 12pt;"><b>E-mail</b></label>' +
                    '<input type="email" class="form-control" id="email" name="email" style="font-size: 14pt; height: 40px; text-align: center;" required>' +
                    '</div>' +
                    '</form>'
            });
        x.open();
    }
</script>

<body>
    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand"><img src="assets/logo.png" alt="andrecepat" style="width:170px;"></a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="index.php" class="nav-item nav-link">Home</a></li>
                        <li><a href="index.php#content" class="nav-item nav-link">About Us</a></li>
                        <li><a href="index.php#services" class="nav-item nav-link">Services</a></li>
                        <li><a href="cekresi.php" class="nav-item nav-link">Cek Resi</a></li>
                        <li><a href="cekongkir.php" class="nav-item nav-link">Cek Ongkir</a></li>
                        <li><a href="#contactus" class="nav-item nav-link">Contact Us</a></li>

                        <?php if (!isset($_SESSION['username'])) {
                            echo '<li><a onclick="login()" class="nav-item nav-link" style="cursor: pointer;">Login</a></li>';
                        } else {
                            if ($_SESSION['username'] == 'admin') {
                                echo '<li><a href="admin.php" class="nav-item nav-link" style="cursor: pointer;">Pick Up Request</a></li>';
                            }
                            else {
                                echo '<li><a href="user.php" class="nav-item nav-link" style="cursor: pointer;">Request Pick Up</a></li>';
                            }
                            echo '<li><a href="phps/logout.php" class="nav-item nav-link" style="cursor: pointer;">Log Out</a></li>';
                        } ?>

                    </ul>
                </div>
            </div>
        </nav>