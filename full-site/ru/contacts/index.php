<?php include_once('../../include/utm.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>≡ ЖК Нью Йорк 》 Контакты жилого комплекса NEW YORK Concept House</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('../../include/gtm1.php'); ?>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="NEW YORK Concept House, ЖК NEW YORK, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="【Контакты】NEW YORK Concept House - это Американское качество за украинскую цену! ... ✅【NEW YORK】7 минут пешком до ближайших 2х станций метро, 20 минут до Крещатика ...  ✅【NEW YORK】Бульвар во дворе, уютный сад, две детских и одна баскетбольная площадки! ✅【NEW YORK】- это частичка Манхэттена в украинской столице!">
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua<?php echo  str_replace('/ru/', '/', $_SERVER['REQUEST_URI'])?>" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link href="/css/intlTelInput.css" rel="stylesheet">
    <link href="/css/allstyle.css" rel="stylesheet">
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
        <div class="section_name"><h1 style="background: #FAF8F6;padding:0 10px; opacity: 0.7;display: inline;">Контакты</h1></div>
        <div data-wow-delay="0.5ms" class="contact_form wow bounceInLeft">

          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s6"><a href="#form1">Для покупателей</a></li>
                <li class="tab col s6"><a href="#form2">Для риелторов</a></li>
              </ul>
            </div>
            <div id="form1" class="col s12">
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
                <input  name="language"type="hidden" value="<?= $language; ?>">
                 <?//<div class="not" id="reCaptcha2"></div>?>
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

            <div id="form2" class="col s12">
              <div class="form_name">
              Сотрудничество для <br>
                риелторов
              </div>
              <form id="form3" class="rieltor" action="/application.php" method="post">
                <input name="name_an"  class="rieltor__input" type="text" id="footer_callback_form_name" placeholder="Название АН" required>
                <input name="name" class="rieltor__input footer_callback_form_name" type="text" class="footer_callback_form_name" placeholder="Ваше имя" required>
                <input name="email" class="rieltor__input" type="text"value="" id="footer_callback_form_name" placeholder="Email" required>
                <input name="tel" class="rieltor__input" type="tel" onkeyup="javascript:countme3();"  placeholder="Номер телефона" required id="footer_callback_form_phone" required>
                <textarea tabindex="4"  name="textarea" class="rieltor__input" rows="8" cols="80" placeholder="Текст сообщения" required></textarea>
                <input  name="typ" class="webad" type="hidden" value="8" >
                <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                <input  name="metka" class="metka" type="hidden" value="Сотрудничество для риелторов - New-York"/>
                <input  name="inn" class="userInn" type="hidden" value="New-York"/>
                <input  name="language"type="hidden" value="<?= $language; ?>">
                <input class="button footer_callback_form_name" type="submit" name="" value="Надіслати">
              </form>
            </div>
          </div>
        </div>

        <div class="contact_info form_name wow bounceInRight" data-wow-delay="0.5ms">
          <span>Отдел продаж</span>
          (044)<a style="color: black;" class="ringo-phone" href="tel:0444980100"><span class="ringo-phone">498-01-00</span></a>
          <p>Киев, ул.Антоновича, 74</p>
          <p>Пн-пт: 9.00 - 19.00</p>
          <p>Сб-вск: 10.00 - 18.00</p>
          <span>Отдел послепродажного обслуживания:</span>
          <p>(044) 4940400  (067) 6167538 </p>
          <p>Пн-пт: 9.00 - 18.00</p>
          <p>Сб: 10.00 - 18.00</p>
          <p>Вс: выходной</p>
          <p>Для предварительной договоренности о встрече необходима предварительная запись.</p>
          <p>info@new-york.com.ua</p>
          <span>Отдел маркетинга</span>
          <p>marketing@saga-development.com.ua</p>
        </div>
      </div>
    </div>


        <style media="screen">

        .rieltor__input::-webkit-input-placeholder { color:#000; }
        .rieltor__input::-moz-input-placeholder { color:#000; }
        .rieltor__input::-ms-input-placeholder { color:#000; }

        </style>

    <!-- ======= end section contact====== -->


	<?php include_once('../include/footer.php'); ?>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.tabs').tabs();
  });

    </script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>
