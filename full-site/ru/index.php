<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ЖК NEW YORK Concept House - новый жилой комплекс в Киеве</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('../include/gtm1.php'); ?>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="NEW YORK Concept House, ЖК NEW YORK, ЖК Нью-Йорк, жилой комплекс, Киев, центр, Антоновича, Горького, купить квартиру, новостройка, аппартаменты">
    <meta name="description" content="ЖК NEW YORK Concept House лучшие традиции американской архитектуры. Отдел продаж: ☎ 044 290 33 90, Адрес г.Киев, ул.Антоновича 74/78">
	<link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <script src="https://use.fontawesome.com/8f277e411d.js"></script>
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link href="/css/allstyle.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/more.css" rel="stylesheet">
  </head>
  <body wow fadeIn>
    <div class="animationload" style="display:none;">
       <div class="loader"><img src="/img/icons/loader.gif"></div>
    </div>
    <!-- =========header========= -->
    <?php include_once('../include/gtm2.php'); ?>
    <?php include_once('include/header.php'); ?>
    <!-- ======section video======= -->
    <div class="video_container">
      <div class="video__box">
        <video class="video_desk" autoplay loop muted class="main-video-bg">
          <source src="/SAGA_NEW YORK.mp4" type="video/mp4">
        </video>
        <video  class="is__mobile" src="/SAGA_NEW YORK.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' playsinline loop muted autoplay controls></video>
      </div>
      <div class="sound">
        <img id="sound_on" onclick="sound_off ()" src="/img/sound_on.svg" style="display:none;">
        <img id="sound_off" onclick="sound_on ()" src="/img/sound_off.svg" style="display:block;">
      </div>
      <div class="arrow_dance">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" fill="#000000" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
        <g><path d="M500,755.9L14.7,270.6c-6.2-6.2-6.2-15.6,0-21.8c6.2-6.2,15.6-6.2,21.8,0L500,712.3l463.6-463.6c6.2-6.2,15.6-6.2,21.8,0c6.2,6.2,6.2,15.6,0,21.8L500,755.9z"/></g>
        </svg>

      </div>
      <style media="screen">
      .video_container{position: relative; display:none;}
      .is__mobile{display: none;}
      video{
        width: 100%;
        margin-bottom: -3px;
        }
      .sound{
        position: absolute;
        left: 30px;
        top: 90%;
        margin-top: -100px;
      }
      .sound img{  width: 40px;}
      .arrow_dance{
        width: 60px;
        position: absolute;
        left: 50%;
        top: 90%;
        margin-top: -100px;
        margin-left: -30px;
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
      }
      @-webkit-keyframes bounce {
         0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);
           transform: translateX(0);}
         40% {-webkit-transform: translateY(-30px);
           transform: translateY(-30px);}
         60% {-webkit-transform: translateY(-15px);
           transform: translateY(-15px);}
       }
       @-moz-keyframes bounce {
         0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
         40% {transform: translateY(-30px);}
         60% {transform: translateY(-15px);}
       }
       @keyframes bounce {
         0%, 20%, 50%, 80%, 100% {-ms-transform: translateY(0);
           transform: translateY(0);}
         40% {-ms-transform: translateY(-30px);
           transform: translateY(-30px);}
         60% {-ms-transform: translateY(-15px);
           transform: translateY(-15px);}
       }
     @media only screen and (min-width: 1368px) {
         video{width: 100%;}
       }
    @media only screen and (max-width: 768px) {
        .video_container{
          margin-top: 50px;
          height: auto;
        }
        .is__mobile{
          display: block;
          width: 100%;
          height: auto;
        }
        .video_desk{display: none;}
        .sound{display: none;}
        .arrow_dance{display: none;}
        video{margin: 0;}
      }
      </style>
      <script>

      function sound_on () {
        var video = document.querySelector("video");
        var sound_on = document.getElementById("sound_on");
        var sound_off = document.getElementById("sound_off");
        video.removeAttribute("muted");
        video.muted = false;
        sound_on.setAttribute("style", "display:block;");
        sound_off.setAttribute("style", "display:none;");
        }
      function sound_off () {
        var video = document.querySelector("video");
        var sound_on = document.getElementById("sound_on");
        var sound_off = document.getElementById("sound_off");
        video.muted = true;
        sound_on.setAttribute("style", "display:none;");
        sound_off.setAttribute("style", "display:block;");
        }



      </script>

    </div>

    <!-- ======end section video======= -->
    <!-- ======section one======= -->
    <div class="section_one">
      <div class="wrapper">
        <div class="one_logo">
         <img <?LazyLoad("/img/logoNewYork.svg");?>alt="Логотип ЖК New York Concept House">
          <h1 style="font-size:0; height:0;">Жилой комплекс NEW YORK Concept House</h1>
          <span wow bounceInLift data-wow-delay="5s">Американское качество</span>
          <span wow slideLeft data-duration="1000">Украинская цена</span>
        </div>
      </div>
      <div class="trigger-0"></div>
      <div class="one_slider">
        <ul class="bxslider">
            <li>
              <p class="section_name">Дом</p>
              <p class="section_text">
                 ЖК NEW YORK Concept House &minus; частичка Манхэттена в украинской столице. Этот уникальный жилой комплекс полностью отвечает мировым
                 стандартам строительства и воплощает в себе фирменный нью-йоркский стиль. Главная изюминка дома &minus; впечатляющий кирпичный фасад и
                 перепады этажности. ЖК NEW YORK Concept House &minus; это отказ от напускной роскоши в пользу стиля, удобства и свободы выбора. NEW YORK
                 Concept House &minus; идеальный выбор для тех, кто разделяет американские ценности и мечтает о комфортной жизни в центре Киева.
              </p>
            </li>
            <li>
              <p class="section_name">Философия</p>
              <p class="section_text">
                 Наступило время разумного и комфортного жилья. Теперь выбрать уникальный стиль жизни большого города стало гораздо проще, ведь ЖК New
                 York Concept House &minus; это отличная возможность создавать вокруг себя пространство, которое соответствует вашим потребностям. Это стильный
                 комфорт, функциональность и внимание к деталям. Это нью-йоркский стиль жизни в самом центре Киева.
              </p>
              <p class="section_text desktop">
                 В нашем новом проекте мы постарались воплотить лучшие черты Манхэттена: его уникальное сочетание центрального месторасположения и
                 возможности вести размеренную жизнь в самом центре мира. Наш жилой комплекс станет для жильцов островком спокойствия, безопасным и
                уютным местом, где они смогут набраться сил для дальнейших свершений. И все это в двух шагах от делового центра Киева. Над ЖК New
                York Concept House работали лучшие архитекторы, чтобы придать новому жилому пространству черты, свойственные американскому стилю архитектуры.
                Наш дом &minus; соединение гармонии архитектурных форм и комфорта жилого пространства для самых избирательных жителей столицы.
              </p>
            </li>
            <li>
              <p class="section_name">Ценности</p>
              <p class="section_text">
                 Мы выбрали несколько ценностей, которые вместе составляют формулу 3S:
              </p>
              <ul>
                <li class="section_text"><strong>STYLE</strong> &minus; ваши уникальные черты жизни &minus; то, что отличает вас от других</li>
                <li class="section_text"><strong>SMART</strong> &minus; разумное отношение к финансам, к себе и окружающему миру</li>
                <li class="section_text"><strong>SOCIETY</strong> &minus; круг равных, общество соседей. Здесь вы действительно почувствуете себя, как дома, &minus; в полном смысле этого слова.</li>
              </ul>
              <p class="section_text">
                 ЖК NEW YORK Concept House &minus; это возможность следовать американскому стилю жизни прямо в центре Киева. Это разумные цены и высочайшее качество жилья для тех, кто ценит комфорт.
              </p>
            </li>
          </ul>
      </div>
    </div>
    <!-- ====== end section one===== -->


    <!-- ====== end section two===== -->
    <div class="section_two">
      <div class="wrapper wow fadeIn">
        <h2 class="section_name wow fadeIn">Расположение</h2>
        <div class="section_text wow fadeIn">
          ЖК NEW YORK Concept House располагается в самом центре Киева, на улице Антоновича (Горького). Этот район сочетает в себе расположение в самом
          центре города и вместе с тем &minus; рядом с тихими, уютными улочками. Добраться до самого центра Киева, Крещатика, можно всего за 5 минут на машине.
          Удобная транспортная развязка центральных улиц позволяет не стоять долго в пробке и доехать практически в любую точку города в течение получаса.
          Также дом находится недалеко от станций метро «Олимпийская» и «Дворец Украина», до которых вы доберетесь всего за 10 минут неспешным шагом.
          Столько же времени понадобится, чтобы попасть в крупнейший торгово-развлекательный центр Ocean Plaza. В двух минутах от ЖК находится зеленый сквер
          и один из знаковых символов Киева &minus; Костел Святого Николая. Также приятная особенность расположения заключается в том, что всего несколько минут
          ходьбы отделяют ЖК NEW YORK Concept House от национального спорткомплекса «Олимпийский».
        </div>
      </div>
    </div>
    <!-- ====== end section two=== -->

    <!-- ====== section three===== -->
    <div class="section_three" id="infrastructure">
      <div class="three_box">
        <div class="three_grid clearfix">
          <div class="three_item">
            <div class="three_number">1<span>минута пешком</span></div>
            <p>до супермаркета</p>
          </div>
          <div class="three_item">
            <div class="three_number">2<span>минуты пешком</span></div>
            <p>до ближайшего парка</p>
          </div>
          <div class="three_item">
            <div class="three_number">2<span>минуты пешком</span></div>
            <p>до <span class="desktop">одного из архитектурных символов города - </span>Костела Святого Николая</p>
          </div>
          <div class="three_item">
            <div class="three_number">7<span>минут пешком</span></div>
            <p>до <span class="desktop">ближайших </span>торговых<span class="desktop"> и развлекательных </span> центров, кафе и ресторанов</p>
          </div>
          <div class="three_item">
            <div class="three_number">7<span>минут пешком</span></div>
            <p>до двух ближайших станций метро</p>
          </div>
          <div class="three_item">
            <div class="three_number">20<span>минут пешком</span></div>
            <p>до Крещатика</p>
          </div>
        </div>
      </div>
      <div id="map" class="three_map">
      </div>
    </div>
    <!-- ===== end section three==== -->


    <!-- ======  section four======= -->
    <div class="section_four">
      <div class="four_render parallax-container">
        <h2 class="section_name">Инфраструктура</h2>
         <div class="parallax"><img <?LazyLoad("/img/frontDownNY.jpg");?>    alt="ЖК New York (Нью-Йорк) Concept House Киев - фронтальний вид"></div>
    </div>
      <div class="four_info">
        <div class="wrapper">
          <div class="section_text wow fadeIn">
            В пешей доступности от жилого комплекса находятся лучшие школы, крупные супермаркеты, государственные и частные поликлиники,
            бутики известных брендов. В любое время дня и ночи в этом районе можно найти все, что необходимо &minus; круглосуточную аптеку, уютное кафе,
            продуктовый магазин, и многое другое. Кроме того, вокруг ЖК NEW YORK Concept House организован зеленый бульвар для прогулок и неторопливого
            отдыха. Также нашими дизайнерами предусмотрен уютный внутренний двор, в котором приятно проводить время, отдыхать от городской суеты и
            гулять с детьми, ведь ЖК NEW YORK Concept House дарит своим жителям не только быстрый ритм жизни, но и умение наслаждаться отдыхом.
          </div>
          <div id="genplan" class="four_interactive clearfix">
            <div class="section_name">Генеральный план</div>
            <div class="four_interactive_main wow bounceInLeft" data-wow-delay="0.5ms">
               <img <?LazyLoad("/img/blag/blag-text.jpg");?> alt="ЖК Нью-Йорк Concept House генплан благоустройства территории"/>
              <!-- <img src="/img/blag/blag-text.jpg" alt="ЖК Нью-Йорк Concept House генплан благоустройста территории"> -->
              <div data-image="img1" class="interactive_link int_link1">ул.Антоновича</div>
              <div data-image="img2" class="interactive_link int_link2">Вход в дом</div>
              <div data-image="img3" class="interactive_link int_link3">Парковка на <br>газонной решетке</div>
              <div data-image="img4" class="interactive_link int_link4">Мусорники</div>
              <div data-image="img5" class="interactive_link int_link5">Спортивная площадка</div>
              <div data-image="img6" class="interactive_link int_link6">Бульвар</div>
              <div data-image="img7" class="interactive_link int_link7" alt="ЖК NEW YORK Concept House - скульптура Love Київ">Скульптура</div>
              <div data-image="img8" class="interactive_link int_link8">Детская площадка</div>
              <div data-image="img9" class="interactive_link int_link9">Настольный теннис</div>
            </div>
            <div class="inter_arrow wow shake desktop" data-wow-duration="2s">
               <img <?LazyLoad("/img/icons/double-arr.png");?> alt="arr">
            </div>
            <div class="four_interactive_select wow bounceInRight" data-wow-delay="0.5ms">
               <img <?LazyLoad("/img/blag/img1.jpg");?> alt="blag">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== end section four=============== -->

    <!-- ========== section five=============== -->
    <div class="section_five">
      <div class="parallax-container">
        <div class="section_name">
          <h2 class="section_name">Вид с Вашего окна</h2>
          <a href="/ru/panorama/">
            <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/360.png" alt="ЖК NEW YORK (Нью-Йорк) Concept House Киев - панорамний вид на 360 градусов"/>
            <!-- <img src="/img/360.png" alt="panorama"> -->
          </a>
        </div>
        <div class="parallax">
          <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/ny360.jpg" alt="ЖК NEW YORK (Нью-Йорк) Concept House Киев - панорамний вид на 360 градусов"/>
          <!-- <img src="/img/ny360.jpg" alt="ЖК New York (Нью-Йорк) Concept House Киев - панорамний вид на 360 градусов"></div> -->
      </div>
    </div>
    <!-- ========== end section five=============== -->

    <!-- ========== section six=============== -->
    <div class="section_six">
      <div class="six_info">
        <div class="wrapper">
          <h2 class="section_name wow fadeIn">Квартиры</h2>
          <div class="section_text wow fadeIn">
            Мы предлагаем разные планировки 1-, 2- и 3-комнатных квартир. Вы можете самостоятельно создать любой дизайн и планировку квартиры,
            в которой вам будет комфортно жить. Благодаря монолитно-каркасной технологии, вы можете создать собственный дизайн и планировку, исходя
            из потребностей вашей семьи. Обладайте уникальной квартирой, наслаждайтесь свободой и меняйтесь вместе с ЖК NEW YORK Concept House.
          </div>
          <a class="button waves-effect btn" href="/ru/apartments/">Выбрать квартиру</a>
        </div>
      </div>
        <div class="six_select parallax-container">
          <div class="select_box grid clearfix">
            <figure class="effect-julia wow fadeDown">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/1k.png" alt="1-комнатная квартира ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/1k.png" alt="1-комнатная квартира ЖК NEW YORK Concept House"/> -->
              <figcaption>
                <div>
                  <p>1-комнатные квартиры</p>
                  <p>41 -56 м<sup>2</sup></p>
                </div>
                <a href="/ru/apartments/"></a>
              </figcaption>
            </figure>

            <figure class="effect-julia wow fadeDown">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/2k.png" alt="2-комнатная квартира ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/2k.png" alt="2-кімнатная квартира ЖК NEW YORK Concept House"/> -->
              <figcaption>
                <div>
                  <p>2-комнатные квартиры</p>
                  <p>61 -87 м<sup>2</sup></p>
                </div>
                <a href="/ru/apartments/"></a>
              </figcaption>
            </figure>

            <figure class="effect-julia wow fadeDown">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/3k.png" alt="3-комнатная квартира ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/3k.png" alt="3-кімнатная квартира ЖК NEW YORK Concept House"/> -->
              <figcaption>
                <div>
                  <p>3-комнатные квартиры</p>
                  <p>91 м<sup>2</sup></p>
                </div>
                <a href="/ru/apartments/"></a>
              </figcaption>
            </figure>
        </div>
        <div class="parallax">
          <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/plan.jpg" alt="plan" title="plan"/>
          <!-- <img src="/img/plan.jpg" alt="plan"> -->
        </div>
      </div>
    </div>
    <!-- ========== end section six=============== -->

    <!-- ========== section seven=============== -->
    <div class="section_seven">
      <div class="wrapper">
        <h2 class="section_name">Застройщик</h2>
        <div class="section_text">
          Девелопером ЖК NEW YORK Concept House является компания <a href="http://www.riverside-development.ua" target="_blank" style="color:black; text-decoration:underline;">Riverside Development</a> известная такими жилыми проектами в Киеве,
          как жилой район RYBALSKY, Chicago Central House, Einstein Concept House и BRISTOL Comfort House. Застройщиком и генподрядчиком
          выступает KDD Engineering, инвестором и заказчиком объекта &minus; ООО «Оболоньторгстандарт». Строительство ведется в партнерстве с
          группой компаний «ХК Киевгорстрой» &minus; надежным застройщиком с 60-летним опытом и богатым портфолио.
        </div>

         <div class="developer_logo clearfix">
          <img style="max-width: 250px;border-radius: 50%;margin: 0 auto;background: radial-gradient(farthest-side ellipse at top left, white, #aaaaaa);box-shadow: 0px 2px 20px rgba(0,0,0,0.3), -5px -10px 20px rgba(255,255,255,0.5);"  <?LazyLoad("/img/saga-logo.svg");?>   alt="SAGA">
       <?php /*  <img src="/img/logoKDD.svg" alt="KDD"> */?>
        </div>

        <h2 class="section_name">Другие проекты застройщика</h2>
  		<div class="developer_logo clearfix">
  		  <a href="https://rybalsky.com.ua/">
          <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/rybalsky-logo-.svg" alt="RYBALSKY space for living"  title="RYBALSKY space for living" style="width: 160px;"/>
          <!-- <img src="img/rybalsky-logo-.svg" alt="RYBALSKY space for living"  title="RYBALSKY space for living" style="width: 200px;"> -->
        </a>
  		  <a href="https://bristol.house">
          <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/BRISTOL_logo.svg" alt="BRISTOL comfort house" title="BRISTOL comfort house" style="width: 160px;"/>
          <!-- <img src="img/BRISTOL_logo.svg" alt="BRISTOL Comfort House" title="BRISTOL Comfort House" style="width: 200px;"> -->
        </a>
  		  <a href="http://einstein.house/">
          <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/EINSTEIN-logo-blue.svg" alt="EINSTEIN concept house" title="EINSTEIN concept house" style="width: 160px;"/>
          <!-- <img src="img/EINSTEIN-logo-blue.svg" alt="EINSTEIN concept house" title="EINSTEIN concept house" style="width: 200px;"> -->
        </a>
  		  <a href="https://chicago.kiev.ua/">
          <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/Chikago.svg" alt="CHICAGO central HOUSE" title="CHICAGO central HOUSE" style="width: 160px;"/>
          <!-- <img src="/img/Chikago.svg" alt="CHICAGO central HOUSE" title="CHICAGO central HOUSE" style="width: 200px;"> -->
        </a>
        <a href="http://sanfrancisco.com.ua/" target="_blank"><img src="/img/logoSanFr.svg" alt="SAN FRANCISCO Creative House" title="SAN FRANCISCO Creative House" style="width: 160px; margin-bottom:20px;"/></a>
  		  </div>

        <h3 class="section_name wow fadeIn">Правовая информация</h3>
        <div class="section_text wow fadeIn">
          Вы можете быть уверены в законности строительства ЖК NEW YORK Concept House &minus; мы имеем всю необходимую разрешительную документацию и
          строго придерживаемся норм действующего законодательства Украины. Земельный участок по адресу ул. Антоновича, 74-78, где возводится жилой
          комплекс, принадлежит Генеральной прокуратуре Украины. Между Генпрокуратурой и ООО «Оболоньторгстандарт» составлен договор о долевом участии
          в возведении жилого дома. «Оболоньторгстандарт» полностью выполнила все обязательства перед Генпрокуратурой за счет передачи недвижимости в
          других строительных проектах, поэтому вы можете быть спокойны &minus; наше строительство абсолютно законно и юридически безопасно.
        </div>

        <div class="document clearfix">
          <div class="document_item wow fadeIn">
            <a href="/img/docs/land_vityag1_b.jpg" data-fancybox="group" data-caption="Выдержка из госреестра, Акт постоянного пользования земельным участком и распоряжение об изменении целевого назначения">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/docs/land_vityag1.jpg" alt="Документи на землю ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/docs/land_vityag1.jpg" alt="Документи на землю ЖК NEW YORK Concept House"> -->
            </a>
            <a href="/img/docs/land_vityag2.jpg" data-fancybox="group" data-caption="Выдержка из госреестра, Акт постоянного пользования земельным участком и распоряжение об изменении целевого назначения"></a>
            <a href="/img/docs/land.jpg" data-fancybox="group" data-caption="Выдержка из госреестра, Акт постоянного пользования земельным участком и распоряжение об изменении целевого назначения"></a>
            <a href="/img/docs/zmina.jpg" data-fancybox="group" data-caption="Выдержка из госреестра, Акт постоянного пользования земельным участком и распоряжение об изменении целевого назначения"></a>
            <p>Выдержка из госреестра, Акт постоянного пользования земельным участком и распоряжение об изменении целевого назначения</p>
          </div>
          <div class="document_item wow fadeIn">
            <a href="/img/docs/mby_b.jpg" data-fancybox="group1" data-caption="Градостроительные условия и ограничения">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/docs/mby.jpg" alt="Містобудівні умови і обмеження ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/docs/mby.jpg" alt="Містобудівні умови і обмеження ЖК NEW YORK Concept House"> -->
            </a>
            <p>Градостроительные условия и ограничения</p>
          </div>
          <div class="document_item wow fadeIn">
            <a href="/img/docs/expert1_b.jpg" data-fancybox="group2" data-caption="Заключение экспертизы">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/docs/expert1.jpg" alt="Експертиза ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/docs/expert1.jpg" alt="Експертиза ЖК NEW YORK Concept House"></a> -->
            <a href="/img/docs/expert2.jpg" data-fancybox="group2" data-caption="Заключение экспертизы"></a>
            <p>Заключение экспертизы</p>
          </div>

          <div class="document_item wow fadeIn">
            <a href="/img/docs/dozvil1_b.jpg" data-fancybox="group3" data-caption="Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)">
              <img class="b-lazy" src=data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==  data-src="/img/docs/dozvil1.jpg" alt="Дозвіл на виконання будівельних робіт ЖК NEW YORK Concept House"/>
              <!-- <img src="/img/docs/dozvil1.jpg" alt="Дозвіл на виконання будівельних робіт ЖК New York Concept House"> -->
            </a>
            <a href="/img/docs/dozvil2.jpg" data-fancybox="group3" data-caption="Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)"></a>
            <a href="/img/docs/dabi1.jpg" data-fancybox="group3" data-caption="Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)"></a>
            <a href="/img/docs/dabi2.jpg" data-fancybox="group3" data-caption="Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)"></a>
            <a href="/img/docs/list1.jpg" data-fancybox="group3" data-caption="Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)"></a>
            <a href="/img/docs/list2.jpg" data-fancybox="group3" data-caption="Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)"></a>
            <p>Разрешение на выполнение строительных работ (внесены изменения ИИ 120160421552 от 11.02.2016)</p>
          </div>

        </div>
        <div class="section_text">
          Профессионалы своего дела трудятся над строительством нашего жилого комплекса, а в ходе работ используются самые современные технологии
          строительства. Мы тщательно следим за соблюдением всех строительных норм и требований. Мы используем только экологические материалы, безопасные
          для вашего здоровья. Сдача объекта запланирована на 3 квартал 2017 года. Закладка фундамента была выполнена в феврале 2016 года.
        </div>
        <a class="button waves-effect btn" href="/ru/process/">Ход строительства</a>
      </div>
    </div>
    <!-- ========== end section seven=============== -->

    <!-- ========== section gallery=============== -->
    <div class="section_gallery">
      <h3 class="section_name">Галерея</h3>
	  <style media="screen">
        .bx-viewport{height: auto!important;}
      </style>
      <div class="slider1">
          <a class="slide" data-fancybox="group4" href="/img/gal/1b.jpg"><img <?LazyLoad("/img/gal/1.jpg");?>  ></a>
          <a class="slide" data-fancybox="group4" href="/img/gal/2b.jpg"><img  <?LazyLoad("/img/gal/2.jpg");?> ></a>
          <!-- <a class="slide" data-fancybox="group4" href="/img/gal/3b.jpg"><img  <?LazyLoad("/img/gal/3.jpg");?> ></a> -->
			    <a class="slide" data-fancybox="group4" href="/img/gal/4b.jpg"><img <?LazyLoad("/img/gal/4.jpg");?>  ></a>
         <!-- <a class="slide" data-fancybox="group4" href="/img/gal/5b.jpg"><img <?/* LazyLoad("/img/gal/5.jpg"); */?> ></a> -->
          <!--<a class="slide" data-fancybox="group4" href="/img/gal/6b.jpg"><img <?/* LazyLoad("/img/gal/11.jpg"); */?> ></a> -->
          <a class="slide" data-fancybox="group4" href="/img/gal/7b.jpg"><img  <?LazyLoad("/img/gal/7.jpg");?> >
          </a>
          <a class="slide" data-fancybox="group4" href="/img/gal/8b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/8.jpg" ></a>
          <a class="slide" data-fancybox="group4" href="/img/gal/9b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/9.jpg" ></a>
          <a class="slide" data-fancybox="group4" href="/img/gal/10b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/10.jpg" ></a>
          <!--<a class="slide" data-fancybox="group4" href="/img/gal/11b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/6.jpg"></a>-->
		      <a class="slide" data-fancybox="group4" href="/img/gal/12b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/12.jpg"></a>
          <a class="slide" data-fancybox="group4" href="/img/gal/13b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/13.jpg"></a>
          <a class="slide" data-fancybox="group4" href="/img/gal/14b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/14.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/15b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/15.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/16b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/16.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/17b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/17.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/18b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/18.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/19b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/19.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/20b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/20.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/21b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/21.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/22b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/22.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/23b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/23.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/24b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/24.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/25b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/25.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/26b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/26.jpg"></a>
		  <a class="slide" data-fancybox="group4" href="/img/gal/27b.jpg"><img src="" class="b-lazy-m" data-src="/img/gal/27.jpg"></a>
      </div>
    </div>
    <!-- ========== end section gallery=============== -->

    <!-- ========== section contact=============== -->
    <!-- <div class="section_contact">
      <div class="wrapper">
        <h3 class="section_name"><span style="background: #FAF8F6;padding:0 10px; opacity: 0.7;">Узнать цену</span></h3>
        <div data-wow-delay="0.5ms" class="contact_form wow bounceInLeft">
          <div class="form_name">
            Чтобы получить дополнительную информацию,
            <span>
              пожалуйста, свяжитесь с нами:
            </span>
          </div>
          <form id="form2" class="" action="<?php  $_SERVER['DOCUMENT_ROOT'] ?>/application.php" method="post">
              <input id="mF" type="text" name="name" value="" placeholder="Ваше имя" required>
              <input type="text" name="tel" value="" placeholder="Номер телефона" required>
              <textarea onkeyup="javascript:countme();"  rows="8" cols="80" placeholder="Текст сообщения" required></textarea>
              <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
              <input  name="metka" class="metka" type="hidden" value="New-York callback"/>
              <input  name="inn" class="userInn" type="hidden" value="New-York callback"/>
              <input class="button" type="submit" name="" value="Отправить">
            </form>
        </div>
        <div class="contact_info form_name wow bounceInRight" data-wow-delay="0.5ms">
          <span>Отдел продаж</span>
          <p>(044) <span class="ringo-phone">332 01 00</span></p>
          <p>Киев, ул.Антоновича, 74-78</p>
          <p>Пн - Пт: 10.00 - 20.00</p>
          <p>Сб - Вс: 10.00 - 18.00</p>
          <p>info@new-york.com.ua</p>
          <span>Отдел маркетинга</span>
          <p>marketing@saga-development.com.ua</p>
        </div>
      </div>
    </div> -->
    <!-- ======= end section contact====== -->
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
              <form id="form" class="rieltor" action="/application.php" method="post">
                <input name="name_an"  class="rieltor__input" type="text" id="footer_callback_form_name" placeholder="Название АН" required>
                <input name="name" class="rieltor__input footer_callback_form_name" type="text" class="footer_callback_form_name" placeholder="Ваше имя" required>
                <input name="email" class="rieltor__input" type="text"value="" id="footer_callback_form_name" placeholder="Email" required>
                <input name="tel" class="rieltor__input" type="tel" onkeyup="javascript:countme2();"  placeholder="Номер телефона" required id="footer_callback_form_phone" required>
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

    <?php include_once('include/footer.php'); ?>

  <!-- =====<modal>======== -->
 <? /*  <div class="main_overlay">
      <div class="main_modal">
        <div class="modal_content">
          <div class="modal_close"><img src="/img/icons/close_b.svg" alt="" width="40"></div>
          <div class="modal_text">
          СТРОИТЕЛЬСТВО ЗАВЕРШЕНО! <br>
          Новый год - новые квартиры!
         <!-- <a href="/contacts/">Узнайте больше в отделе продаж!</a>-->
          </div>
        </div>
      </div>
    </div> */ ?>
  <!-- ======<end modal>======== -->

    <script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script async defer src="map.js" type="text/javascript"></script>
    <script>
      var script = '<script src="/js/infobubble';
      if (document.location.search.indexOf('compiled') !== -1) {
        script += '-compiled';
        }
        script += '.js"><' + '/script>';
        document.write(script);
    </script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <!-- <script async defer async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_XaLtOX8vgeRAIeqgdfHh9q1lNTIS3Y0&callback=initMap&language=ru&region=RU"></script> -->
    <script src="/js/script.js?v=1.1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
		<script>
		$(function(){
			  $("#callback_form_phone_input").mask("(999) 999-99-99");
        $("#yourPhone").mask("(999) 999-99-99");
		});
		</script>
  </body>
</html>
