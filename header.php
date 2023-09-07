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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>LearnIT</title>
    <!-- styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Inter:wght@600&family=Oswald&family=Poppins:wght@600&family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/30c72dc692.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="index" class="col-4 col-md-4 col-lg-2 col-xl-2 navbar-brand logo"><img class="img-fluid" src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-12 col-md-12 col-lg-7 col-xl-6">
                <div class="collapse navbar-collapse" id="navContent">
                    <ul class="navbar-nav mr-auto mb-lg-0 nav-text">
                        <li class="nav-item"><a href="index#first" class="nav-link">Главная</a></li>
                        <li class="nav-item"><a href="index#courses" class="nav-link">Наши курсы</a></li>
                        <li class="nav-item"><a href="index#about" class="nav-link">О нас</a></li>
                        <li class="nav-item"><a href="index#contacts" class="nav-link">Контакты</a></li>
                        <li class="nav-item enter"><a href="account" class="nav-link">Войти в ЛК</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>