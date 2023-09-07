<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package learnit
 */

?>

<footer>
    <div class="foot pt-5 pb-2" id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <a href="index"><img class="img-fluid" src="img/logo.png" alt=""></a>
                </div>
                <div class="col-md">
                    <ul>
                        <li class="item-foot"><a href="index#first">Главная</a></li>
                        <li class="item-foot"><a href="index#courses">Наши курсы</a></li>
                        <li class="item-foot"><a href="index#about">О нас</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="seconds-items">
                        <li class="item1-foot"><a href="index#contacts">Контакты</a></li>
                        <li class="item1-foot"><a href="">Войти в личный кабинет</a></li>
                    </ul>
                </div>
            </div>
           <div class="row">
            <div class="col-12">
                <div class="line"></div>
            </div>
           </div>
           <div class="row dev mt-4">
            <div class="col-12 justify-content-center text-center">
                <h4 class="font-weight-light">Все права защищены, 2022</h4>
            </div>
           </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="js/libs/swiper/swiper-bundle.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
