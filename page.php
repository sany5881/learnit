<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template name: Главная
 * @package learnit
 */

get_header();
?>

<div id="first" class="view">
    <div class="mask rgba-black-strong">
        <div class="container-fluid d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center text-left no-gutters main">
                <div class="col-10 col-sm-6 col-md-6 col-lg-6 col-xl-6"><img class="img-pc img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/pc.png" alt=""></div>
                <div class="col-10 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 label">
                        LEARN IT Courses
                    </h2><br>
                    <h4 class="white-text-my-4 sign">Добро пожаловать в мир знаний</h4><br>
                    <button class="btn btn-outline-white waves-effect waves-light label-button" onclick="document.location='account'">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-12">
                <h2 class="display-4 font-weight-bold pt-5 mb-3 text-center">О нас</h2>
                <h4 class="font-weight-light text-center descriptions mb-5">Наш сайт - площадка для изучения различных курсов совершенно бесплатно. 
                    Большинство курсов представляются в текстовом формате, в виде теоретической и тестовой части. 
                     Всё что вам требуется для того, чтобы воспользоваться курсами на нашей площадке - зарегистрироваться на сайте
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="swiper slider slider_main slider_bg" id="courses">
    <div class="col-12"><h2 class="display-4 font-weight-bold text-center mb-5 mt-4">Наши курсы</h2></div>
    <div class="description">
        <p>В данный момент наш каталог имеет малое количество курсов, но в дальнейшем он, конечно же, будет пополняться. Желаем вам найти учебный курс, который будет интересен для изучения. <br><br> <b> Подсказка:</b> зажмите курсором для пролистывания каталога курсов</p>
        <div class="col-4"><img class="swipe_image" src="<?php echo get_template_directory_uri(); ?>/img/swipe.png" alt=""></div>
    </div>
    <div class="container swiper-wrapper slider__wrapper">
            <div class="col-12 col-md-5 col-xl-5 swiper-slide slider__item">
                <div class="slider__img" data-swiper-parallax="20%" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/images/1.jpg);"></div>
            </div>
            <div class="col-12 col-md-5 col-xl-5 swiper-slide slider__item">
                <div class="slider__img" data-swiper-parallax="30%" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/images/2.jpg);"></div>
            </div>
            <div class="col-12 col-md-5 col-xl-5 swiper-slide slider__item">
                <div class="slider__img" data-swiper-parallax="20%" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/images/3.jpg);"></div>
            </div>
    </div>
</div>

<div id="advantages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-12">
                <h2 class="display-4 font-weight-bold text-center mb-2 mt-4">Почему именно мы?</h2>
                <h3 class="font-weight-normal text-center">Какие преимущества нашего сервиса?</h3>
                <h3 class="font-weight-bold mb-4 mt-4 text-left">1. Абсолютно бесплатное обучение <p class="font-weight-light">Наш сервис не взимает какую-либо плату за курсы или регистрацию</p></h3>
                <h3 class="font-weight-bold mb-4 text-left">2. Доступный материал собранный в один блок <p class="font-weight-light">Большиство материала взята с различных источников интернета и собран в единый блок курса </p></h3>
                <h3 class="font-weight-bold mb-4 text-left">3. Курсы можно перепроходить множество раз <p class="font-weight-light">В сервисе нет ограничений на повторные попытки прохождения курсов</p></h3>
            </div>
        </div>
    </div>
</div>

<div id="contacts">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-xl-12 mb-2">
                <h2 class="display-4 font-weight-bold text-center mb-2 mt-4">Контакты</h2>
                <h2 class="font-weight-bold text-center mb-4 mt-4">Остались вопросы? Отправьте свою заявку</h2>
            </div>
            <div class="col-md-6 col-xs-8 mb-5" align="center">
                <form class="decor" id="decor" action="<?php echo get_template_directory_uri(); ?>/mail.php" method="post">   
                   <div class="form-inner">
                   <h3 class="mb-4">Написать нам</h3>
                   <input type="text" name="name" placeholder="Имя" required>
                   <input type="email" name="email" placeholder="Email" required>
                   <textarea placeholder="Сообщение" name="message" rows="3" required></textarea>
                   <input type="submit" value="Отправить">
                   </div>
               </form>
           </div>
           <div class="col-md-6 col-xs-4 mb-2" align="center">
               <h3 class="font-weight-normal text-center mb-2 mt-4">Наша корпоративная почта: <i>admin@learnit.com</i></h3>
               <h3 class="font-weight-normal text-center mb-2 mt-2">Номер телефона: <i>+79999999999</i></h3>
           </div>
        </div>
    </div>
</div>

<?php
get_footer();
