<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ЖК NEW YORK Concept House - контакты</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('../../include/gtm1.php'); ?>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="NEW YORK Concept House, ЖК NEW YORK, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="ЖК NEW YORK Concept House лучшие традиции американской архитектуры. Отдел продаж: ☎ 044 290 33 90, Адрес г.Киев, ул.Антоновича 74/78">
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua<?php echo  str_replace('/ru/', '/', $_SERVER['REQUEST_URI'])?>" />
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
    <link href="/css/more.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once('../../include/gtm2.php'); ?>
    <?php include_once('../include/header.php'); ?>
    <!-- ========== section contact=============== -->
    <div class="section_contact">
      <div class="wrapper">
        <div class="trigger-0"></div>
        <div class="section_name"><span style="background: #FAF8F6;padding:0 10px; opacity: 0.7;">Узнать цену</span></div>
        <div data-wow-delay="0.5ms" class="contact_form wow bounceInLeft">
          <div class="form_name">
            Чтобы получить дополнительную информацию,
            <span>
              пожалуйста, свяжитесь с нами:
            </span>
          </div>
		   <form id="cont" class="custom_page_callback_form" action="../../application.php" method="post">
              <input type="text" name="name" value="" placeholder="Ваше имя">
              <input type="tel" name="tel" value="" placeholder="Номер телефона" id="yourPhone" required class="custom_page_callback_form_phone">
              <textarea onkeyup="javascript:countme();"   rows="8" cols="80" placeholder="Текст сообщения"></textarea>
    <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
    <input  name="metka" class="metka" type="hidden" value="New-York callback"/>
    <input  name="inn" class="userInn" type="hidden" value="New-York callback"/>
              <div class="not" id="reCaptcha2"></div>
              <input class="button" type="submit" name="" value="Отправить">
            </form>
            <script type="text/javascript">
                var ct = 0;
                var addCount = document.createElement('input');
                addCount.type = "hidden";
                addCount.id = "count";
                addCount.name = "count";
                addCount.value = "0";
                document.getElementById('cont').appendChild(addCount);
                function countme() {
                    document.getElementById('count').value = ++ct;
                }
            </script>
        </div>
        <div class="contact_info form_name wow bounceInRight" data-wow-delay="0.5ms">
          <span>Sales Department</span>
          <p><a style="color: #000" id="main_page_form" href="">(044) <span class="ringo-phone">338-88-28</span></a></p>
          <p>74–78, Antonovycha Street Kyiv</p>
          <p>Mon - Fri: 9.00 - 19.00</p>
          <p>Sat - Sun: 10.00 - 18.00</p>
          <span>After sales service:</span>
          <p>(067) 2304265</p>
          <p>(067) 6167538 </p>
          <p>Mon - Fri: 9.00 - 18.00</p>
          <p>Sat: 10.00 - 18.00</p>
          <p>Sun: weekend</p>
          <p>Visit to the construction by appointment only.</p>
          <p>info@new-york.com.ua</p>
          <span>Marketing Department</span>
          <p>marketing@riverside.net.ua</p>
        </div>
      </div>
    </div>
    <!-- ======= end section contact====== -->
    <?php include_once('../include/footer.php'); ?>
    <style media="screen">
      @media only screen and (max-width:768px) {
        .section_contact{box-sizing: content-box;}
      }
    </style>
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
