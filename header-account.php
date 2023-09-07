<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learnit
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет - LearnIT</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Inter:wght@600&family=Oswald&family=Poppins:wght@600&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/30c72dc692.js"></script>
</head>
<body>
    <header id="header">
        <div class="container-fluid hd-acc">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="index" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <img class="img-fluid logo-sidebar" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="account" class="nav-link align-middle px-0">
                                    <i class="fa fa-home" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Главная</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link px-0 align-middle" href="#submenu1" data-toggle="collapse" data-bs-toggle="collapse">
                                    <i class="fa fa-book" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Курсы</span> </a>

                                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                         <a href="account-course" class="nav-link px-2"><i class="fa fa-bookmark" aria-hidden="true"></i> <span class="d-none d-sm-inline">NFT</span></a>
                                        <a href="#" class="nav-link px-2"><i class="fa fa-bookmark" aria-hidden="true"></i> <span class="d-none d-sm-inline">WebDesign</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fa fa-gear fa-spin" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Настройки</span></a>
                            </li>
                            <li>
                                <a href="index" class="nav-link px-0 align-middle">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Выход</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">User</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
<script src="https://use.fontawesome.com/282a9fa6ed.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>