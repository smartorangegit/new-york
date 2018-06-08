<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include ("../../../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$check = $DB->query("SELECT * FROM `users`");
while ($myrow = mysqli_fetch_array($check)) {

    $sec_k = $myrow['sec_code'];
}
//echo '<pre>'; print_r($_SERVER); echo '</pre>';
$uri = explode("/",$_SERVER['PHP_SELF']);
//print_r($uri);
$kod = $uri[3];

$sel = $DB->query("SELECT * FROM `news` WHERE `news_code`='$kod'");
while ($myrow = mysqli_fetch_array($sel))
{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$myrow['title_ru'];?></title>
    <meta property="og:title" content="<?=$myrow['title_ru'];?>" />
    <meta property="og:description" content="<?=$myrow['description_ru'];?>" />
    <meta property="og:image" content="<?=$_SERVER['HTTP_HOST'].$myrow['img_path'].'/'.$myrow['img_name'];?>" />
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ru">
    <?php include_once('../../../include/gtm1.php'); ?>
    <meta name="keywords" content="New York Concept House, ЖК New York, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="<?=$myrow['description_ru'];?>">
    <link rel="alternate" hreflang="en" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <script src="https://use.fontawesome.com/8f277e411d.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link href="/css/intlTelInput.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/hoverphoto.css" rel="stylesheet">
    <link href="/css/modal.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/news.css" rel="stylesheet">
</head>
<body>
<?php include_once('../../../include/gtm2.php'); ?>
<?php include_once('../../include/header.php'); ?>

<div class="section_news__list">
    <div class="wrapper">
        <div class="trigger-0"></div>
        <h1 class="section_name">Новости</h1>
        <div class="news-container">
            <p class="news_date"><?=$myrow['date'];?> <?=$myrow['time'];?></p>
            <h2 class="news_name"><?=$myrow['name_news_ru'];?></h2>

            <div class="blok_article">
                <img <?LazyLoad($myrow['img_path'].'/'.$myrow['img_name']);?> />
                <div class="text_blok_left">

                    <p class="section_text">
                        <?=$myrow['full_text_ru'];?>
                    </p>

                </div>
            </div>
            <style>
                .section_text{
                    margin-top: 32px;
                }
            </style>
        </div>


    </div>
    <a class="button waves-effect btn" href="/ru/news/">Вернуться к новостям</a>
</div>
</div>

<style>
    .text_blok_left{
        display: inline;
    }
    .section_news__list img {
        float:left;
        width: 40%;
        margin-top: 30px;
        padding: 0 10px ;
    }

    .blok_article{
        overflow: hidden;
    }
    .no_float_img {
        float: none !important;
        width: 100% !important;
    }
</style>

<?php include_once('../../include/footer.php'); ?>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.easing.js" type="text/javascript"></script>
<script src="/js/jquery.bxslider.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/TweenMax.min.js"></script>
<script type="text/javascript" src="/js/ScrollMagic.js"></script>
<script type="text/javascript" src="/js/animation.gsap.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>
<?}?>