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
 * Template name: Внутренняя страница курса
 * 
 * @package learnit
 */

get_header();
?>

<div class="account-page">

    <div class="name-course">
        <div class="container-fluid d-flex justify-content-center">
            <div class="row">
                <h2 class="col-12 font-weight-bold text-center mt-4">Урок №1: Что такое NFT?</h2>
                <img class="col-5 mt-4 mb-4 img-fluid img__of__course" src="<?php echo get_template_directory_uri(); ?>/img/images/nft-image.jpeg" alt="">
                <h4 class="col-12 font-weight-normal text-center mt-2 ">Что же такое NFT?</h4>
                <p class="col-12 font-weight-normal mt-2">
                    NFT (non-fungible token) – это уникальный невзаимозаменяемый цифровой ключ, созданный на основе криптовалюты. NFT не может быть уничтожен или заменен на другой такой токен. Он представляет собой некий сертификат уникальности и неповторимости какого-либо цифрового объекта. Стоит отметить, что невзаимозаменяемый токен никак не влияет на копирование файла. Он только подтверждает, что тем или иным цифровым объектом обладает конкретный пользователь.
                    <br><br>При помощи технологии NFT можно продать или купить любой цифровой объект – музыку, изображение, 3D-модель, текст, игровой предмет и пр. Его суть состоит в регистрации некоего права собственности на конкретный виртуальный объект в блокчейне. Информацию о владельце невозможно заменить или удалить.
                    <br><br>Иными словами, это схоже с покупкой дорогой картины. То есть, она принадлежит вам, но при этом может быть выставлена в какой-то известной галерее на всеобщее обозрение любителей изобразительного искусства. Стоит также отметить, что фотографировать данную картину или использовать ее копию в интернете может любой желающий.
                    <br><br>Первые эксперименты с технологией NFT начались еще в 2013-2014 годах на скриптовом языке Bitcoin. В 2017 году компьютерный алгоритм для создания, контроля и предоставления информации о владении чем-либо был создан на блокчейне Ethereum.
                </p>
                <h4 class="col-12 font-weight-normal text-center">Чем NFT не являются</h4>
                <p class="col-12 font-weight-normal mt-2">
                    NFT — это не цифровые хранилища медиаконтента. Они не хранят цифровой контент (файл) в блокчейне. Если вы покупаете NFT изображения или песни, на самом деле вы получаете токен с URL-адресом песни или изображения, размещенный на случайном веб-сервере.
                    <br><br>NFT не препятствуют копированию, изменению, удалению или любым другим действиям в отношении любых цифровых или физических объектов, на которые они ссылаются.
                    <br><br>NFT по своей сути не предоставляют права собственности и не удостоверяют авторские права на какие-либо активы, с которыми они связаны.
                    <br><br>Давайте еще раз сделаем краткое резюме: NFT — это просто уникальные торгуемые клочки бумаги с небольшим количеством нацарапанной на них информации.   
                    <br><br>У NFT есть несколько потенциальных способов действительно что-то значить
                    <br><br>NFT может разблокировать функции при подключении к внешней системе. Пример — проект NBA Topshot. Токен имеет ценность благодаря взаимодействию с внешней системой, чтобы отображать «спортивный момент», который находится на веб-сайте. Если сайт закроется, токены немедленно станут бесполезными, так как достум к «моментам NBA» теряется. То же самое с CryptoKitties. Если сайт падает, токены CryptoKitty бессмысленны и не работают. В обоих случаях NFT — это просто торгуемый серийный номер, который связан с «моментом» или «котиком» на серверах владельцев проектов. Еще один пример: NFT, которые могут быть отправлены в приложение, которое затем сжигает (уничтожает) их в обмен на отправку вам какого-либо физического товара, например, футболки.
                    <br><br>Создатель цифрового объекта (или физической вещи) может продавать законные права на него вместе с NFT. Нет гарантии, что продавец NFT владеет правами на связанный объект. Чтобы юридически передать права/собственность, нужно оформить юридически значимый договор. Для крупных объектов, как дом или бизнес, потребуется значительная юридическая работа и оформление документации. Если вы хотите купить право собственности на актив с NFT, вы должны убедиться, что продавец является правообладателем и он дает письменное согласие на продажу вам прав вместе с NFT и прилагает всю документацию, если она требуется. Однако нет причин, по которым вы не можете продать права собственности независимо от NFT в будущем. Короче говоря, в настоящее время ничто юридически не связывает NFT с владением цифровыми правами. 
                    <br><br>Уникальные / секретные данные. В этом случае NFT содержит уникальные данные, видимые только адресу, которому он принадлежит, например, URL-адрес или пароль к секретному клубу. Если у покупателя есть основания полагать, что информация все еще секретна, покупка NFT становится способом ее получения. Проблема очевидна — это интернет, ничто не остается секретом надолго, и нет гарантии, что создатель или предыдущие владельцы не разгласили секретную информацию.
                </p>
                <h4 class="col-12 text-center mt-2">Теперь для закрепления знаний можете пройти тест</h4>
                <h4 class="col-12 font-weight text-center mt-4 mb-5"><a href="course-test">Начать тестирование</a></h4>
            </div>
        </div>
    </div>


</div>

<?php
get_footer();
