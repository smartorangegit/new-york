<?php
include("../admin/bd.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ЖК New York Concept House - новый жилой комплекс в Киеве</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('../include/gtm1.php'); ?>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="New York Concept House, ЖК New York, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="ЖК New York Concept House лучшие традиции американской архитектуры. Отдел продаж: ☎ 044 290 33 90, Адрес г.Киев, ул.Антоновича 74/78">
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link href="/css/allstyle.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/news.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once('../include/gtm2.php'); ?>
    <?php include_once('../include/header.php'); ?>

          <div class="section_news">
            <div class="wrapper">
              <div class="trigger-0"></div>
              <div class="section_name"><h1>Новини</h1></div>
                <div class="news_block clearfix">
                    <ul class="news__list">
                    </ul>
                     <ul class="news__pagination">
                        <?
                        $news_per_page = 8;
                        $sel = $DB->query("SELECT COUNT(id) FROM `news` WHERE `isActive`='0' ORDER BY `date`");
                        $number_of_news = $sel->fetch_row();
                        $total_pages = ceil($number_of_news[0] / $news_per_page);
                        for($i = 1; $i <= $total_pages; $i++) { ?>
                            <li class="news__pagination-item">
                                <a class="news__pagination-item-link" data-page="<?=$i?>"><?=$i?></a>
                            </li>
                        <?}?>
                     </ul>
                  </div>
                </div>
              </div>



    <?php include_once('../include/footer.php'); ?>
    <script  async src="https://use.fontawesome.com/8f277e411d.js"></script>
    <script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script  async src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script type="text/javascript" src="/js/news.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
  </body>
</html>
