<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ЖК New York Concept House - 404 помилка</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('include/gtm1.php'); ?>
    <meta name="keywords" content="New York Concept House, ЖК New York, ЖК Нью-Йорк, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
		<meta name="description" content="ЖК New York Concept House найкращі традиціі американської архітектури. Відділ продажу: ☎ 044 290 33 90, Адреса м.Київ, вул.Антоновича, 74/78">
    <link rel="alternate" hreflang="ua" href="<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
    <link rel="canonical" href="<?php echo  $_SERVER['REQUEST_URI'];?>"/>
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
    <link href="/css/appart.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once('include/gtm2.php'); ?>
    <?php include_once('include/header.php'); ?>
    <div class="section_404">
      <div class="trigger-0"></div>
      <div class="wrapper">
        <p class="text404">Ваш запит не відправлено</p>
        <p class="text404m">Не всі дані заповнені, надішліть запит повторно.</p>
        <!-- <div class="one_slider"> -->
          <div data-wow-delay="0.5ms" class="contact_form clearfix wow bounceInDown">
            <div class="form_name">
              Щоб отримати додаткову інформацію,
              <span>
                будь-ласка, зв&prime;яжіться із нами:
              </span>
            </div>
                <form id="fail" class="appart_callback_form" action="application.php" method="post">
                <input type="text" name="name" value="" placeholder="Ваше і&prime;мя">
                <input type="text" name="tel" value="" placeholder="Номер телефону">
                <textarea onkeyup="javascript:countme();"  rows="8" cols="80" placeholder="Текст повідомлення"></textarea>
            <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
            <input  name="metka" class="metka" type="hidden" value="New-York callback"/>
            <input  name="inn" class="userInn" type="hidden" value="New-York callback"/>
                <?//<div class="not" id="reCaptcha2"></div> ?>
                <input class="button" type="submit" name="" value="Надіслати">
              </form>
              <script type="text/javascript">
                  var ct = 0;
                  var addCount = document.createElement('input');
                  addCount.type = "hidden";
                  addCount.id = "count";
                  addCount.name = "count";
                  addCount.value = "0";
                  document.getElementById('fail').appendChild(addCount);
                  function countme() {
                      document.getElementById('count').value = ++ct;
                  }
              </script>
          </div>
        <!-- </div> -->
      </div>
    </div>
    <style media="screen">
    body, html{
      height: 100%;
    }
    .section_404{
      min-height: 100%;
      background: url('/img/404.jpg');
      background-size: cover;
      box-sizing: border-box;
      padding-top: 130px;
      padding-bottom: 110px;
    }
    .contact_form {
    float: none;
    margin: 0 auto;
    }
    p.text404, p.text404m{
      text-align: center;
      font-size: 50px;
      color: white;
      text-shadow: 0px 0px 6px rgba(255,255,255,0.7);
    }
    p.text404m{
      font-size: 26px;
    }
    .one_slider{
      width: 80%;
      height: 150px;
      margin: 0 auto;
      text-align: center;
    }
    .fr_1{
      font-size: 26px;
    }
    @media only screen and (max-width:768px) {
      p.text404{
        font-size: 22px;
      }
      p.text404m{
        font-size: 18px;
      }
      .one_slider{
        height: 170px;
      }
    }
    </style>

  <?php include_once('include/footer.php'); ?>
    <script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script src="/js/script.js?v=1.0"></script>
  </body>
</html>
