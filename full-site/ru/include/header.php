<!-- preloader -->
<?php
$webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//action="http://einstein.house/application.php" method="POST"

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
if($pieces[3] == "ru") {
  $language = 'ru';
  $ua_link = str_replace('/ru', '', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  $ru_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $eng_link = "http://$_SERVER[HTTP_HOST]". '/en' ."$_SERVER[REQUEST_URI]";

} else if ($pieces[3] == "en") {
  $language = 'en';
  $ua_link = str_replace('/en', '', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  $ru_link = "http://$_SERVER[HTTP_HOST]". '/ru' ."$_SERVER[REQUEST_URI]";
  $eng_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
} else {
  $language = '';
  $ua_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $ru_link = "http://$_SERVER[HTTP_HOST]". '/ru' ."$_SERVER[REQUEST_URI]";
  $eng_link = "http://$_SERVER[HTTP_HOST]". '/en' ."$_SERVER[REQUEST_URI]";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?/*
<script async defer src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit"></script>
    <script>
         var reCaptcha1;
         var reCaptcha2;
        var myCallBack = function() {
        reCaptcha1 = grecaptcha.render('reCaptcha1', {
        'sitekey' : '6Le01hgUAAAAAEt62DDW0IVpp1uU5tEC7eeaXl5T', //Replace this with your Site key
        'theme' : 'light'
        });
        var element=document.getElementById('reCaptcha2');
        if(!element){} else {
                reCaptcha2 = grecaptcha.render('reCaptcha2', {
                  'sitekey' : '6Le01hgUAAAAAEt62DDW0IVpp1uU5tEC7eeaXl5T', //Replace this with your Site key
                  'theme' : 'light'
                });
        }
              };
                </script>
*/?>
<? include('preloader.php'); ?>

<!-- preloder -->
<!-- <div class="animationload">
   <div class="loader"><img src="/img/icons/loader.gif"></div>
</div> -->
<!-- end preloder -->
<!-- =========header========= -->
<div class="header">
  <div class="wrapper clearfix">
    <div class="logo">
      <a href="http://new-york.com.ua/ru/">
        <img src="/img/logo.svg" alt="logo NEW YORK Concept House" role="banner"></div>
      </a>
      <div class="navigation">
        <ul>
          <li><a class="hvr-shutter-out-vertical dropdown-button1" data-activates="dropdown2" href="#" style="min-width:134px;">О нас <i class="material-icons right" style="font-size:16px; margin-top:0px;">&#9660;</i></a></li>
                    <ul id="dropdown2" class="dropdown-content">
                      <li><a class="hvr-shutter-out-vertical" href="/ru/o-nas/">О нас</a></li>
                      <li><a class="hvr-shutter-out-vertical" href="/ru/developer/">Застройщик</a></li>
                      <!-- <li class="divider"></li> -->
                      <li><a class="hvr-shutter-out-vertical" href="/ru/infrastructura/">Инфраструктура</a></li>
                      <li><a class="hvr-shutter-out-vertical" href="/ru/atmosfera/">SFERA Living System</a></li>
                    </ul>
          <li><a class="hvr-shutter-out-vertical" href="/ru/location/">Расположение</a></li>
          <!-- <li><a class="hvr-shutter-out-vertical" href="#">Инфраструктура</a></li> -->
          <li><a class="hvr-shutter-out-vertical" href="/ru/apartments/">Квартиры</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/ru/#genplan">Генплан</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/ru/process/">Строительство</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/ru/contacts/">Контакты</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/ru/news/">Новости</a></li>
          <li>
            <div class="lang">
              <a href="<?= $ru_link; ?>">ру</a>
              <a href="<?= $ua_link; ?>">укр</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="phone">
        <div>
          <a id="callback3" href="#">
            <i class="fa" style="padding: 5px; display:inline-block;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -256 1792 1792"><path d="M1567.458 997.017q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5t-57.5-12.5q-32-9-47.5-14.5t-55.5-20.5q-40-15-49-18-98-35-175-83-128-79-264.5-215.5t-215.5-264.5q-48-77-83-175-3-9-18-49t-20.5-55.5q-5.5-15.5-14.5-47.5t-12.5-57.5q-3.5-25.5-3.5-52.5 0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5q16 28.5 31 53.5 3 4 17.5 25t21.5 35.5q7 14.5 7 28.5 0 20-28.5 50t-62 55q-33.5 25-62 53t-28.5 46q0 9 5 22.5t8.5 20.5q3.5 7 14 24t11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14q7 3.5 20.5 8.5t22.5 5q18 0 46-28.5t53-62q25-33.5 55-62t50-28.5q14 0 28.5 7t35.5 21.5q21 14.5 25 17.5 25 15 53.5 31t63.5 35q35 19 54 30 70 35 76 53 3 7 3 21z" fill="#ffffff"/></svg>
        </i></a>

        </div>
        <div class="phone-number">
        <div class="min">044<a style="color: #000" id="header_ringo" href=""><span class="ringo-phone" style="letter-spacing:0;">290 33 96</span></a></div>
        <a id="callback2" href="#">заказать звонок</a>
      </div>
    </div>
    <div class="mobile_menu">
      <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</div>
<!-- ======end header======= -->
<style>
.callback_modal form{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  display: -webkit-flex;
  -webkit-flex-wrap: wrap;
  -webkit-justify-content: space-between;
}
.callback_modal form input[type=submit] {
  width: 100%;
}
#footer_callback_form_phone {
    width: 100%;
}
  #callback3{display:inline-block;}

</style>
