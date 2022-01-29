<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>SISDITMAN</title>
    <!-- cdn -->
    <script src="https://kit.fontawesome.com/b4bb8e09b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="theme/css/style.css">
    <link rel="stylesheet" type="text/css" href="theme/css/content.css">
    <link rel="stylesheet" type="text/css" href="theme/css/mobile.css">
    <script src="theme/js/tes.js" defer></script>
</head>

<body>
    <div class="wrapper">
        <!-- header menu start -->
        <header>
            <div class="page-header">
                <div class="container">
                    <div class="d-flex flex-space-between">
                        <div id="Menumobile">
                            <i class="fa fa-bars"></i>
                        </div>
                        <ul class="nav-menu d-flex flex-start">
                            <li class="menu-items">
                                <span>DASHBOARD</span>
                            </li>

                        </ul>

                        <div class="MenuAccount d-flex">
                            <div class="Accounts">
                                <button>
                                    <img src="theme/img/avatar01.png" alt="Sys Admin">
                                    <span>Sys Admin</span>
                                </button>
                                <div class="dropdownAccount">
                                    <a href="biodata.php"><i class="fa fa-user"></i>Profile</a>
                                    <a href="lock-user.html"><i class="fa fa-user-lock"></i> Lock</a>
                                    <a href="login.html"><i class="fa fa-key"></i> Logout</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- header menu end -->

        <!-- side-bar menu start -->
        <div class="aside aside-menu-header">
            <div class="logo">
                <a href="#">
                    <img src="theme/img/LOGO-POLITEKNIK.png" alt="">
                </a>

                <div class="logo-toggle">
                    <i class="fa fa-angle-double-right"></i>
                </div>

                <div class="icon-toggle-mobile">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="aside-menu-wrapper">
                <div class="side-menu scroll-menu">
                    <ul class="menu-nav">
                        <li class="side-menu-item ">
                            <a href="index.php">
                                <span class="menu-icon"><i class="fa fa-tachometer-alt"></i></span>
                                <span class="menu-title">Dashboard</span>
                            </a>

                        </li>
                        <li class="side-menu-item">
                            <a href="sertifikat.php">
                                <span class="menu-icon"><i class="fas fa-certificate"></i></span>
                                <span class="menu-title">Sertifikat</span>
                            </a>
                        </li>
                        <li class="side-menu-item coll-level-1">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fa fa-donate"></i></span>
                                <span class="menu-title">SAS - PA</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="penilaian-sas.php">
                                        <span class="menu-icon-child"><i class="fa fa-donate"></i></span>
                                        <span class="menu-title">Penilian SAS - PA</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="#">
                                        <span class="menu-icon-child"><i class="fa fa-donate"></i></span>
                                        <span>Hasil SAS - PA</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item coll-level-1">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fas fa-book-reader"></i></span>
                                <span class="menu-title">Visitasi</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item ">
                                    <a href="penilaian-individu.php">
                                        <span class="menu-icon-child"><i class="fa fa-book-reader"></i></span>
                                        <span class="menu-title">Penilaian Individu</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="menu-icon-child"><i class="fas fa-book-reader"></i></span>
                                        <span>Hasil Visitasi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item coll-level-1">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fa fa-user-check"></i></span>
                                <span class="menu-title">Validasi</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="menu-icon-child"><i class="fa fa-user-check"></i></span>
                                        <span class="menu-title">Penilaian Validasi</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="javascript:void(0)">
                                        <span class="menu-icon-child"><i class="fa fa-user-check"></i></span>
                                        <span class="menu-title">Hasil Validasi</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="side-menu-item ">
                            <a href="informasi-lembaga.php">
                                <span class="menu-icon"><i class="fas fa-building"></i></span>
                                <span class="menu-title">Informasi Lembaga</span>
                            </a>
                        </li>
                        <li class="side-menu-item ">
                            <a href="marketing1.php">
                                <span class="menu-icon"><i class="fa fa-mail-bulk"></i></span>
                                <span class="menu-title">Marketing</span>
                            </a>
                        </li>
                        <li class="side-menu-item ">
                            <a href="finance1.php">
                                <span class="menu-icon"><i class="fa fa-file-invoice-dollar"></i></span>
                                <span class="menu-title">Finance</span>
                            </a>
                        </li>
                        <li class="side-menu-item ">
                            <a href="education1.php">
                                <span class="menu-icon"><i class="fa fa-university"></i></span>
                                <span class="menu-title">Education</span>
                            </a>
                        </li>
                        <li class="side-menu-item ">
                            <a href="it.php">
                                <span class="menu-icon"><i class="fa fa-laptop"></i></span>
                                <span class="menu-title">IT</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- side-bar menu end -->