
$(document).ready(function(){

  // preloader
  $(window).on('load', function () {
  	var $preloader = $('.animationload'),
  			$svg_anm   = $preloader.find('.animationload .loader');
  			$preloader.delay(300).fadeOut('slow');
  			$svg_anm.delay(1500).fadeOut();
  	});


//изменение логотипа в зависимости от разрешения
// var w = $(window).width();
//    if (w <= 1180) {
//     $('.header .logo img').attr('src','/img/logoNewYork.svg');
//   }

//инициализация скроллмаджика

  var controller = new ScrollMagic.Controller();
  new WOW().init({

  });

//Слайдер, главная страница, первая секция
  $('.bxslider').bxSlider({
    controls: true,
    nextText: '',
    prevText: '',
    auto: true,
    autoHover: true,
    pager: false,
    pause: 12000,
    infiniteLoop: true,
    responsive: true,
    touchEnabled: true,
    // nextSelector: null,
    // prevSelector: null
  });

// паралакс
$('.parallax').parallax();

// галерея
$('.slider1').bxSlider({
  slideWidth: 160,
  minSlides: 4,
  maxSlides: 6,
  slideMargin: 10,
  responsive: true,
  touchEnabled: true
});

$(".dropdown-button, .dropdown-button1").dropdown();

//modal_window
var w = $(window).width();
if (w > 768) {
$('#callback, #callback1, #callback2').click(function(){
  $('.callback_overlay').fadeIn(500),
  $('.callback_modal').fadeIn(1000)
})

};
$('.callback_close, .callback_overlay').click(function(){
  $('.callback_modal').fadeOut(500),
  $('.callback_overlay').fadeOut(1000)
});
$('#callback3').click(function(e){
	e.preventDefault();
	console.log(111);
  $('.callback_overlay').fadeIn(500),
  $('.callback_modal').fadeIn(1000)
})

//callback_form_window
$('.modal_close, .main_overlay').click(function(){
  $('.main_modal').hide(500),
  $('.main_overlay').fadeOut(1000);
});

// изменение картинки в окошке "Благоустройство"
$('.interactive_link').hover(function(){
  var image = this.dataset.image;
  $('.four_interactive_select img').attr('src','/img/blag/'+ image + '.jpg');
});

// уменьшение хедера
if (w >= 1180) {
var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".header", {height:"50px", padding:"0"}).addTo(controller)
var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".phone", {transform:"scale(0.8)"}).addTo(controller)
var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".header .logo", {padding:"6px"}).addTo(controller)
};

//изменение картинки  в зависимости от разрешения
var w = $(window).width();
if (w <= 768) {
  $('.section_six .parallax img').attr('src','/img/plan_mob.jpg');
};

var w = $(window).width();
if (w <= 768) {
  $('.section_five .parallax img').attr('src','/img/ny360_mob.jpg');
};

var w = $(window).width();
if (w <= 768) {
  $('.section_four .parallax img').attr('src','/img/frontDownNY_mob.jpg');
};
// мобильное меню

// $('#nav-icon3').click(function(){
// 		$(this).toggleClass('open'),
//     $('.header .navigation').toggleClass('open')
//   })
$('#nav-icon3').click(function() {
    if($(this).hasClass('open')) {
    $(this).removeClass('open'),
    $('.header .navigation').css('height','0');
    } else {
    $(this).addClass('open'),
    $('.header .navigation').css('height','400px')
      ;
    }
  });


  // ringo-phone
  function telephone(id) {
      $(id).bind('click', function(e){
        var href = 'tel:' +'044'+ $('.ringo-phone').html();
        var elem = $(this);
        //elem.find('.ringo-phone').css('color',color);
        elem.attr('href', href);
      });
    }
	$(window).on('resize', function (){
		
			if ($(window).width() < 768) {
				$('#callback1').off();
				telephone('#callback1');	
			} 
	});
	if ($(window).width() < 768) {
		telephone('#callback1');	
	}
	


//каптча
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



});



// ============================================================================
