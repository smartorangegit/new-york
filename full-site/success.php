<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Дякуємо!</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <meta name="robots" content="noindex, follow">
    <?php include_once('include/gtm1.php'); ?>
    <meta name="keywords" content="New York Concept House, ЖК New York, ЖК Нью-Йорк, житловий комплекс, Київ, центр, Антоновича, Горького, купити квартиру, новобудова, апартаменти">
		<meta name="description" content="ЖК New York Concept House найкращі традиціі американської архітектури. Відділ продажу: ☎ 044 290 33 90, Адреса м.Київ, вул.Антоновича, 74/78">
    <link rel="alternate" hreflang="ua" href="<?php echo '/ru'.$_SERVER['REQUEST_URI'];?>" />
    <link rel="canonical" href="<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <script src="https://use.fontawesome.com/8f277e411d.js"></script>
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/modal.css" rel="stylesheet">
    <link href="/css/allstyle.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php include_once('include/gtm2.php'); ?>
    <?php include_once('include/header.php'); ?>
    <div class="section_404">
      <div class="trigger-0"></div>
      <div class="wrapper">
        <div class="one_slider">
          <p class="section_name">Дякуємо! </p>
          <p class="fr_1"><strong>Ваша заявка успішно відправлена!</strong></p><br>
          <p class="fr_2">Наш менеджер зв'яжеться з вами найближчим часом.</p><br>
          <p>
            Пропонуємо переглянути інші проекти компанії SAGA Development
          </p>

          <div class="developer_box clearfix">


          <ul class="proj_slider">
            <li class="logo_proj logo_proj_san">
              <a href="https://sanfrancisco.com.ua/" target="_blank">
                <img src="/img/logo/sanfrancisco_white.svg" alt="San Francisco Creative House" title="San Francisco Creative House" />
              </a>
            </li>
            <li class="logo_proj logo_proj_ryba">
              <a href="https://rybalsky.com.ua/" target="_blank">
                <img src="/img/logo/rybalsky_logo_white.svg" alt="Rybasky" title="Rybasky" />
              </a>
            </li>
            <li class="logo_proj logo_proj_bristol">
              <a href="https://bristol.house/" target="_blank">
                <img src="/img/logo/bristol_logo_white.svg" alt="BRISTOL Comfort House" title="BRISTOL Comfort House" />
              </a>
            </li>
            <li class="logo_proj logo_proj_chicago">
              <a href="https://chicago.kiev.ua/" target="_blank">
                <img src="/img/logo/chicago_logo_white.svg" alt="CHICAGO Central House" title="CHICAGO Central House"/>
              </a>
            </li>
            <li class="logo_proj logo_proj_einstein">
              <a href="http://einstein.house/" target="_blank">
                <img src="/img/logo/EINSTEIN-logoW.svg" alt="EINSTEIN Concept House" title="EINSTEIN Concept House" />
              </a>
            </li>
            <li class="logo_proj logo_proj_kandinskiy">
              <a href="http://kandinsky-residence.com.ua/" target="_blank">
                <img src="/img/logo/kandinsky_logo_white.svg" alt="KANDINSKY Odessa Residence" title="KANDINSKY Odessa Residence" />
              </a>
            </li>
            <li class="logo_proj logo_proj_resident">
              <a href="http://resident.house/" target="_blank">
                <img src="/img/logo/resident_logo_white.svg" alt="RESIDENT Concept House" title="RESIDENT Concept House" />
              </a>
            </li>
          </ul>

        </div>
        </div>
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
      padding-top: 120px;
    }
    .one_slider{
      width: 80%;
      height: auto;
      background: rgba(0,0,0,0.5);
      margin: 0 auto;
      color: white;
      text-align: center;
      border: none;
      padding-top: 1px;
      }
    .fr_1{
      font-size: 24px;
    }
    .bx-wrapper{margin: 30px auto;}
  	.logo_proj{
  		display: inline-block;
  		vertical-align: middle;
  		box-sizing: border-box;
      text-align: center;
      text-align: -webkit-center;
  	}
  	.bx-wrapper img{width: 85%;}
  	.proj_slider{
  		display: flex;
  		display: -webkit-flex;
  		align-items: center;
  		-webkit-align-items: center;
  	}
  	.logo_proj_einstein img{width: 65%;}
    .logo_proj_ryba img{width: 65%;}
  	.bx-wrapper .bx-controls-direction a{text-indent: 0; text-align: center;}
  	/* .bx-wrapper .bx-prev {left: -16px;}
  	.bx-wrapper .bx-next {right: -16px;} */
    @media only screen and (max-width:768px) {

    }
    </style>

  <?php include_once('include/footer.php'); ?>
    <script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script>

      var defaultSliderConfiguration = {
        slideWidth: 180,
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 1,
        auto: true,
        speed: 1000,
        pause: 3000,
        slideMargin: 20,
        infiniteLoop: true,
        easing: "ease-in-out",
        responsive: true,
        touchEnabled: true,
				nextText: '',
			  prevText: '',
        pager: false,
        // controls: false,
        onSliderResize: function() {
          var sliderConfiguration = getScreenSize();
          bxSlider.reloadSlider(sliderConfiguration)
        }
      };

      function getScreenSize() {
        var width = window.innerWidth;
        if(width > 1260) {
          return defaultSliderConfiguration;
        } else if(width > 1060 && width < 1260) {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 4 });
        } else if(width > 850 && width < 1060) {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 3 });
        } else if(width > 440 && width < 850) {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 2 });
        } else {
          return Object.assign({}, defaultSliderConfiguration, {maxSlides: 1 });
        }
      }

      var sliderConfiguration = getScreenSize();

      var bxSlider = $(".proj_slider").bxSlider(sliderConfiguration);

    </script>
    <script src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script src="/js/script.js?v=1.0"></script>
  </body>
</html>
