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
 * Template name: Страница курса в аккаунте
 * 
 * @package learnit
 */

get_header();
?>

<div class="account-page">

    <div class="name-course">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row">
                <h2 class="col-12 font-weight-bold text-center mt-4">Курс технологии NFT</h2>
                <h4 class="col-12 font-weight-normal text-center">Вы можете ознакомиться с программой курса и изучить её</h4>
                <img class="col-5 mt-4 img-fluid img__of__course" src="<?php echo get_template_directory_uri(); ?>/img/images/nft.png" alt="">
                <h4 class="col-12 font-weight-normal text-center mt-2">Что такое NFT и с чем его "едят"?</h4>
            </div>
        </div>
    </div>

    <div class="programm__of__course">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    
                    <div class="accordion" id="accordionInformation">
                        <div class="card">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Урок 1: Что такое NFT?
                            </button>
                            </h2>
                        </div>
                    
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionInformation">
                            <div class="card-body">
                            Вводный урок, посвященный описанию технологии NFT простыми словами. После теоретической части вас ожидает тест, для закрепления знаний.
                            <br><br>
                            <a href="course-page">Перейти к уроку</a>
                            </div>
                        </div>
                        </div>
                    

                        <div class="card">
                            <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Урок 2: Где используется и как приобрести?
                                </button>
                            </h2>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionInformation">
                            <div class="card-body">
                                Некоторый заполнитель для второй панели аккордеона. По умолчанию эта панель скрыта.
                            </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Урок 3: Как создавать самому NFT?
                                </button>
                            </h2>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionInformation">
                            <div class="card-body">
                                Некоторый заполнитель для второй панели аккордеона. По умолчанию эта панель скрыта.
                            </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading4">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Урок 4: Где продавать свои NFT?
                                </button>
                            </h2>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionInformation">
                            <div class="card-body">
                                Некоторый заполнитель для второй панели аккордеона. По умолчанию эта панель скрыта.
                            </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading5">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Урок 5: Как создавать самому NFT?
                                </button>
                            </h2>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionInformation">
                            <div class="card-body">
                                Некоторый заполнитель для второй панели аккордеона. По умолчанию эта панель скрыта.
                            </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

<?php
get_footer();
