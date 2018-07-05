<!-- preloader -->
<?php
$webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//action="http://einstein.house/application.php" method="POST"
?>

<div class="animationload">
   <div class="loader"><img src="/img/icons/loader.gif"></div>
</div>
<!-- end preloader -->
<!-- =========header========= -->

<div class="header">
  <div class="wrapper clearfix">
    <div class="logo">
      <a href="http://new-york.com.ua">
        <img src="/img/logo.svg" alt="logo NEW YORK Concept House" role="banner"></div>
      </a>
        <div class="navigation">
        <ul>
          <li><a class="hvr-shutter-out-vertical dropdown-button" data-activates="dropdown1" href="/o-nas/" >Про нас<i class="material-icons right">&#9660;</i></a></li>
                                <ul id="dropdown1" class="dropdown-content" style="width:132px!important;">
                                  <li><a class="hvr-shutter-out-vertical" href="/o-nas/">Про нас</a></li>
                                  <li><a class="hvr-shutter-out-vertical" href="/developer/">Забудовник</a></li>
                                  <li><a class="hvr-shutter-out-vertical" href="/infrastructura/">Інфраструктура</a></li>
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
              <a href="http://new-york.com.ua/ru/">рос</a>
              <a href="http://new-york.com.ua/">укр</a>
            </div>
          </li>
        </ul>
      </div>
      <div class="phone">
        <div>
          <a id="callback1" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
        </div>
        <div class="phone-number">
          <div class="min">044</span><span class="ringo-phone">338-88-28</div>
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
  @media only screen and (max-width:1180px) {
    .hvr-shutter-out-vertical.dropdown-button{
      width:auto!important;
    }

  }
</style>
