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
<!-- preloder -->
<div class="animationload">
   <div class="loader"><img src="/img/icons/loader.gif"></div>
</div>
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
          <li><a class="hvr-shutter-out-vertical dropdown-button1" data-activates="dropdown2" href="#" style="min-width:134px;">О нас <i class="material-icons right">&#9660;</i></a></li>
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
          <a id="callback3" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
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
