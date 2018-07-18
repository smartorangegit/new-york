<?php include_once('../include/utm.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>≡ ЖК Нью Йорк 》 Контакти житлового комплексу NEW YORK Concept House</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
      <?php include_once('../include/gtm1.php'); ?>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="NEW YORK Concept House, ЖК NEW YORK, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="【Контакти】 NEW YORK Concept House - це Американське якість за українську ціну в центрі! ✅【NEW YORK】 7 хвилин пішки до найближчих 2-х станцій метро, ​​20 хвилин до Хрещатика  ✅【NEW YORK】 Затишний сад у дворі, два дитячих та один баскетбольний майданчики! .... ✅【NEW YORK】 - це частинка Манхеттена в українській столиці!">
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
	  <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link href="/css/intlTelInput.css" rel="stylesheet">
    <link href="/css/allstyle.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/more.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once('../include/gtm2.php'); ?>
    <?php include_once('../include/header.php'); ?>
    <!-- ========== section contact=============== -->
    <div class="section_contact">
      <div class="wrapper">
        <div class="trigger-0"></div>
        <div class="section_name"><h1 style="background: #FAF8F6;padding:0 10px; opacity: 0.7;display: inline;">Контакти</h1></div>
        <div data-wow-delay="0.5ms" class="contact_form wow bounceInLeft">

          <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s6"><a href="#form1">Для покупців</a></li>
                <li class="tab col s6"><a href="#form2">Для ріелторів</a></li>
              </ul>
            </div>
            <div id="form1" class="col s12">
              <div class="form_name">
                Щоб отримати додаткову інформацію,
                <span>
                  будь ласка, зв&prime;яжіться із нами:
                </span>
              </div>
              <form id="cont" class="custom_page_callback_form" action="<?php  $_SERVER['DOCUMENT_ROOT'] ?>/application.php" method="post">
                <input type="text" name="name" value="" placeholder="Ваше ім&prime;я" id="yourName">
                <input type="tel" name="tel" value="" placeholder="Номер телефону" id="yourPhone" required class="custom_page_callback_form_phone">
                <textarea tabindex="4" onkeyup="javascript:countme();" rows="8" cols="80" placeholder="Текст повідомлення"></textarea>
                <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
                <input  name="metka" class="metka" type="hidden" value="New-York callback"/>
                <input  name="inn" class="userInn" type="hidden" value="New-York callback"/>
                <input  name="language"type="hidden" value="<?= $language; ?>">
                <?//<div class="not" id="reCaptcha2"></div>?>
                <input class="button" type="submit" name="" value="Надіслати">
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
                Співпраця для <br>
                ріeлторів
              </div>
              <form id="form" class="rieltor" action="/application.php" method="post">
                <input name="name_an"  class="rieltor__input" type="text" id="footer_callback_form_name" placeholder="Назва АН" required>
                <input name="name" class="rieltor__input footer_callback_form_name" type="text" value="" class="footer_callback_form_name" placeholder="Ваше ім&prime;я" required>
                <input name="email" class="rieltor__input" type="text"value="" id="footer_callback_form_name" placeholder="Email" required>
                <input name="tel" class="rieltor__input" type="tel" value="" placeholder="Номер телефону" required id="footer_callback_form_phone" required>
                <textarea tabindex="4" class="rieltor__input" onkeyup="javascript:countme2();" rows="8" cols="80" placeholder="Текст повідомлення" required></textarea>
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
          <span>Відділ продажу</span>
         (044)<a style="color: black;" class="ringo-phone" href="tel:0444980100"><span class="ringo-phone">498-01-00</span></a>
          <p>Київ, вул.Антоновича, 74</p>
          <p>Пн-пт: 9.00 - 19.00</p>
          <p>Сб-нд: 10.00 - 18.00</p>
          <span>Відділ післяпродажного обслуговування:</span>
          <p>(044) 4940400   (067) 6167538</p>
          <p>Пн-пт: 9.00 - 18.00</p>
          <p>Сб: 10.00 - 18.00</p>
          <p>Нд: вихідний</p>
          <p>Для попередньої домовленності про зустріч необхідний попередній запис.</p>
          <p>info@new-york.com.ua</p>
          <span>Відділ маркетингу</span>
          <p>marketing@saga-development.com.ua </p>
        </div>
      </div>
    </div>

      <style>
          ::-webkit-input-placeholder {color: #000 ;}
          ::-moz-placeholder {color: #000 ;}
          :-ms-input-placeholder {color: #000 ;}
          :-moz-placeholder {color: #000 ;}

      </style>

    <!-- ======= end section contact====== -->

    <?php include_once('../include/footer.php'); ?>
    <script src="https://use.fontawesome.com/8f277e411d.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <!-- <script src="/js/jquery.fancybox.js"></script> -->
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.tabs').tabs();
  });

    </script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script src="/js/script.js?v=1.0"></script>
  </body>
</html>
