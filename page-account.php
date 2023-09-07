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
 * Template name: Аккаунт
 * @package learnit
 */

get_header();
?>

<div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h2 class="ip-logo display-4 col-12 text-center">Добро пожаловать</h2>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
    <div class="ip-main">

        <div class="account-page">
            <div class="welcome">
                <div class="container-fluid">
                    <div class="row">
                        <h4 class="col-12 text-center mt-4">Здесь вы можете изучать интересующие вас курсы</h4>
                    </div>
                </div>
            </div>

            <div class="recomended__courses">
                <div class="container-fluid mt-5 text-center">
                    <div class="row">
                        <h2 class="col-12 font-weight-normal text-left mb-4">Рекомендуемые и популярные курсы:</h2>
                        <div class="col-12 col-md-6 col-xl-6 img__course">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/images/nft.png" alt="">
                            <h2>Курс по NFT</h2>
                            <h4 class="col-12">Курс посвященный технологии NFT</h4>
                            <a class="col-4 btn waves-effect waves-light label-button" href="account-course">Подробнее</a>
                        </div>
                        <div class="col-12 col-md-6 col-xl-6 img__course">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/images/web.png" alt="">
                            <h2>Курс по Веб-дизайну</h2>
                            <h4 class="col-12">Курс посвященный основам веб-дизайна</h4>
                            <a class="col-4 btn waves-effect waves-light label-button">В разработке</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news__feed">
                <div class="container-fluid text-center">
                    <div class="row">
                        <div class="news col-12">
                            <h2 class="font-weight-normal text-left mb-5">Новости проекта</h2>
                        </div>
                        <div class="feed col-10 col-md-3 mr-5 mb-4">
                            <h4>Разработка нового курса!</h4>
                            <hr>
                            <p>В данный момент разрабатывается новый курс по веб-дизайну. Уже совсем скоро вы сможете его изучить и оценить! А пока что предлагаем вам ознакомиться с курсом по NFT.</p>
                        </div>
                        <div class="feed col-10 col-md-3 mr-5 mb-4">
                            <h4>Доступен курс NFT!</h4>
                            <hr>
                            <p>На нашем сервисе стал доступен курс по NFT. Вы можете ознакомиться с ним в разделе "Курсы". Приятного изучения</p>
                        </div>
                        <div class="feed col-10 col-md-3 mr-5 mb-4">
                            <h4>Открытие проекта</h4>
                            <hr>
                            <p>Привет мир! Проект наконец-то открыт! Приятного пользования нашим учебным ресурсом! 1010101</p>
                        </div>
                        <div class="newsline"><p></p></div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>

<?php
get_footer();
