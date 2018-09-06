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

<!-- <div class="animationload">
   <div class="loader"><img src="/img/icons/loader.gif"></div>
</div> -->
<? include('preloader.php'); ?>
<!-- end preloader -->
<!-- =========header========= -->

<div class="header">
  <div class="wrapper clearfix">
    <div class="logo">
      <a href="http://new-york.com.ua" role="banner">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="332.29 180.094 144.29 91.154"><path d="M368.362 271.25v-91.156h12.53l15.982 21.08v-21.08h12.533v91.155h-12.533v-50.97l-15.98-21.39v72.36z"/><path d="M405.686 180.094h12.39l11.032 22.24 10.9-22.24h12.523l-17.18 33.308v57.847h-12.53v-58.057zM332.29 233.313h19.633v12.47H332.29zM456.947 233.313h19.633v12.47h-19.633z"/></svg>
        <!-- <img src="/img/logo.svg" alt="logo NEW YORK Concept House" role="banner"> -->
      </a>
      </div>
        <div class="navigation">
        <ul>
          <li><a class="hvr-shutter-out-vertical dropdown-button" data-activates="dropdown1" href="/o-nas/" >Про нас<i class="material-icons right" style="font-size:16px;">&#9660;</i></a></li>
                                <ul id="dropdown1" class="dropdown-content" style="width:134px!important;">
                                  <li><a class="hvr-shutter-out-vertical" href="/o-nas/">Про нас</a></li>
                                  <li><a class="hvr-shutter-out-vertical" href="/developer/">Забудовник</a></li>
                                  <li><a class="hvr-shutter-out-vertical" href="/infrastructura/">Інфраструктура</a></li>
                                  <li><a class="hvr-shutter-out-vertical" href="/atmosfera/">SFERA Living System</a></li>
                                </ul>
          <li><a class="hvr-shutter-out-vertical" href="/location/">Розташування</a></li>
          <!-- <li><a class="hvr-shutter-out-vertical" href="/infrastructura/">Інфраструктура</a></li> -->
          <li><a class="hvr-shutter-out-vertical" href="/apartments/">Квартири</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/#genplan">Генплан</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/process/">Будівництво</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/contacts/">Контакти</a></li>
          <li><a class="hvr-shutter-out-vertical" href="/news/">Новини</a></li>
          <li>
            <div class="lang">
              <a href="<?= $ru_link; ?>">рос</a>
              <a href="<?= $ua_link; ?>">укр</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="phone">
        <div>
          <a id="callback1" href="#">
            <i class="fa" style="padding: 5px;display:inline-block;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -256 1792 1792"><path d="M1567.458 997.017q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5t-57.5-12.5q-32-9-47.5-14.5t-55.5-20.5q-40-15-49-18-98-35-175-83-128-79-264.5-215.5t-215.5-264.5q-48-77-83-175-3-9-18-49t-20.5-55.5q-5.5-15.5-14.5-47.5t-12.5-57.5q-3.5-25.5-3.5-52.5 0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5q16 28.5 31 53.5 3 4 17.5 25t21.5 35.5q7 14.5 7 28.5 0 20-28.5 50t-62 55q-33.5 25-62 53t-28.5 46q0 9 5 22.5t8.5 20.5q3.5 7 14 24t11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14q7 3.5 20.5 8.5t22.5 5q18 0 46-28.5t53-62q25-33.5 55-62t50-28.5q14 0 28.5 7t35.5 21.5q21 14.5 25 17.5 25 15 53.5 31t63.5 35q35 19 54 30 70 35 76 53 3 7 3 21z" fill="#ffffff"/></svg>
          </i>
        </a>

		</div>
        <div class="phone-number">
        <div class="min">044<a style="color: #000" id="header_ringo" href=""><span class="ringo-phone" style="letter-spacing:0px;">290 33 96</span></a></div>
        <a id="callback" href="#">замовити дзвінок</a>
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

<style media="screen">
  .hvr-shutter-out-vertical.dropdown-button{
    width:132px!important;
  }
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
  @media only screen and (max-width:1180px) {
    .hvr-shutter-out-vertical.dropdown-button{
      width:auto!important;
    }
    .header .logo {width: 88px;}
  }
</style>
