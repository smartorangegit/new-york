<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include ("../../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$check = $DB->query("SELECT * FROM `users`");
while ($myrow = mysqli_fetch_array($check)) {

    $sec_k = $myrow['sec_code'];
}
//echo '<pre>'; print_r($_SERVER); echo '</pre>';
$uri = explode("/",$_SERVER['PHP_SELF']);
//print_r($uri);
$kod = $uri[2];

$sel = $DB->query("SELECT * FROM `news` WHERE `news_code`='$kod'");
while ($myrow = mysqli_fetch_array($sel))
{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$myrow['title_ua'];?></title>
    <meta property="og:title" content="<?=$myrow['title_ua'];?>" />
    <meta property="og:description" content="<?=$myrow['description_ua'];?>" />
    <meta property="og:image" content="<?=$_SERVER['HTTP_HOST'].$myrow['img_path'].'/'.$myrow['img_name'];?>" />
    <meta name="robots" content="index, follow"/>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('../../include/gtm1.php'); ?>
    <meta name="keywords" content="New York Concept House, ЖК New York, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="<?=$myrow['description_ua'];?>">
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <script src="https://use.fontawesome.com/8f277e411d.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
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
<?php include_once('../../include/gtm2.php'); ?>
<?php include_once('../../include/header.php'); ?>

<div class="section_news__list">
    <div class="wrapper">
        <div class="trigger-0"></div>
        <h1 class="section_name">Новини</h1>
        <div class="news-container">
          <div class="news_img_box">
            <div class="img_inner">
              <img <?LazyLoad($myrow['img_path'].'/'.$myrow['img_name']);?> />
            </div>
            <div class="news_gallery_mini" >
              <div class="gallery_mini_item" data-pictures="/img/2017-05-29_10:52:27/news2.jpg">
                <img src="/img/2017-05-29_10:52:27/news2.jpg" alt="">
              </div>
            <div class="gallery_mini_item" data-pictures="https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&h=350">
              <img src="https://images.pexels.com/photos/373912/pexels-photo-373912.jpeg?auto=compress&cs=tinysrgb&h=350" alt="">
            </div>
            <div class="gallery_mini_item" data-pictures="https://images.pexels.com/photos/373965/pexels-photo-373965.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
              <img src="https://images.pexels.com/photos/373965/pexels-photo-373965.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </div>
            <div class="gallery_mini_item" data-pictures="https://images.pexels.com/photos/378570/pexels-photo-378570.jpeg?auto=compress&cs=tinysrgb&h=350">
              <img src="https://images.pexels.com/photos/378570/pexels-photo-378570.jpeg?auto=compress&cs=tinysrgb&h=350" alt="">
            </div>
            <div class="gallery_mini_item" data-pictures="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&h=350">
              <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&h=350" alt="">
            </div>
            </div>
          </div>
          <div class="blok_article">
            <h2 class="news_name"><?=$myrow['name_news_ua'];?></h2>
            <p class="news_date"><?=$myrow['date'];?> <?=$myrow['time'];?></p>

                <div class="text_blok_left">

                    <p class="section_text">
                        <?=$myrow['full_text_ua'];?>
                    </p>

                </div>
                <div class="video">
                    <?=$myrow['video'];?>
                </div>
            </div>

        </div>


    </div>
    <a class="button waves-effect btn" href="/news/">Повернутись до новин</a>
</div>
</div>



<?php include_once('../../include/footer.php'); ?>

<script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('.gallery_mini_item').click(function(){
  var newSrc = this.dataset.pictures;
  $('.img_inner img').attr('src', newSrc);
})

</script>
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
