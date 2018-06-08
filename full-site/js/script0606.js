
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
  infiniteLoop: false,
  responsive: true,
  touchEnabled: true,
   onSlideBefore: function(){
            BlazyM('img.b-lazy-m');
        }
});

$(".dropdown-button, .dropdown-button1").dropdown();
$('.tooltipped').tooltip({
  delay: 50
});


	//Lazy Load
	//$('.flat__table_list').bind('mouseover', function(){   BlazyM('img.b-lazy-m');});
	//$('#online-camera-btn').bind('click', function(){    BlazyM('iframe.b-lazy'); });
	function BlazyM(typ, cl='b-lazy-m'){ var typ; var cl;
		  $(typ).each(function(i,elem) {
			  elem.src=$(elem).data('src');
				$(elem).removeClass(cl);
				$(elem).addClass('b-lazy-m-load');
		});
	}

//modal_window
var w = $(window).width();
//if (w > 768) {
    //}
$('#callback, #callback1, #callback3').click(function(){
  $('.callback_overlay').fadeIn(500),
  $('.callback_modal').fadeIn(1000)
})
$('#rieltor_box_link').click(function(e){
  e.preventDefault();
  $('.callback_overlay').fadeIn(500),
  $('.callback-rieltor__modal').fadeIn(1000)
})
$('.callback_close, .callback_overlay').click(function(){
  $('.callback_modal').fadeOut(500),
  $('.callback-rieltor__modal').fadeOut(500),
  $('.callback_overlay').fadeOut(1000)
});


    $('#callback2,   #callback4').click(function(){
        $('.callback_overlay').fadeIn(500),
            $('.callback_modal').fadeIn(1000)
    })
    $('.callback_close, .callback_overlay').click(function(){
        $('.callback_modal').fadeOut(500),
        $('.callback_overlay').fadeOut(1000)

        // $('.countdown').final_countdown({
        //   'start': undefined,
        //   'end': undefined,
        //   'now': undefined
        // });

    });



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

//============= Mask and international number start ========
;(function(){
  jQuery(function($){
      $.mask.definitions['#']='[0-9]';
      $.mask.definitions['9'] = '';    
      $("form input[type='tel']").mask("+(38) ### ###-##-##",{placeholder:"_"});
  });
  
  var telInput = $("form input[type='tel']");
  
  telInput.intlTelInput({
      initialCountry: 'ua',
      preferredCountries: ['ua' ,'ru'],
      nationalMode: false
  });
  
  $(telInput).on("countrychange", function(e, countryData) {
      $(this).intlTelInput("setNumber", "");    
      $(this).trigger('blur');
      $(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
  });

})();
//============= Mask and international number start ========

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
  function telephone(id, color) {
      $(id).bind('click', function(e){
        var href = 'tel:' +'044'+ $('.ringo-phone').html();
        var elem = $(this);
        elem.find('.ringo-phone').css('color',color);
        elem.attr('href', href);
      });
    }
    telephone('#tT', '#000');
    telephone('#tt', '#fff');
    telephone('#main_page_form', '#000');
    telephone('#header_ringo', '#000');






});


/*
 hey, [be]Lazy.js - v1.8.2-my - 2016.10.25
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
(function(n,l){"function"===typeof define&&define.amd?define(l):"object"===typeof exports?module.exports=l():n.Blazy=l()})(this,function(){function n(b){var c=b._util;c.elements=E(b.options);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&p(b.options.container,function(a){q(a,"scroll",c.validateT)}),q(window,"resize",c.saveViewportOffsetT),q(window,"resize",c.validateT),q(window,"scroll",c.validateT));l(b)}function l(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a];
a:{var f=d,h=b.options;var m=f.getBoundingClientRect();if(h.container&&y&&(f=f.closest(h.containerClass))){var r=f.getBoundingClientRect();if(t(r,e)){var f=r.top-h.offset,g=r.right+h.offset,k=r.bottom+h.offset,h=r.left-h.offset;m=t(m,{top:f>e.top?f:e.top,right:g<e.right?g:e.right,bottom:k<e.bottom?k:e.bottom,left:h>e.left?h:e.left})}else m=!1;break a}m=t(m,e)}if(m||u(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function t(b,c){return b.right>=c.left&&
b.bottom>=c.top&&b.left<=c.right&&b.top<=c.bottom}function z(b,c,a){if(!u(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight)){c=b.getAttribute(v)||b.getAttribute(a.src);var d=b.getAttribute("data-option");if(c){c=c.split(a.separator);var f=c[A&&1<c.length?1:0],h=b.getAttribute(a.srcset),m="img"===b.nodeName.toLowerCase(),e=(c=b.parentNode)&&"picture"===c.nodeName.toLowerCase();if(m||void 0===b.src){var g=new Image,l=function(){a.error&&a.error(b,"invalid");w(b,a.errorClass);
k(g,"error",l);k(g,"load",n)},n=function(){m?e||B(b,f,h):d?b.style.background='url("'+f+'") '+d+"":b.style.backgroundImage='url("'+f+'")';x(b,a);k(g,"load",n);k(g,"error",l)};e&&(g=b,p(c.getElementsByTagName("source"),function(b){var c=a.srcset,f=b.getAttribute(c);f&&(b.setAttribute("srcset",f),b.removeAttribute(c))}));q(g,"error",l);q(g,"load",n);B(g,f,h)}else b.src=f,x(b,a)}else"video"===b.nodeName.toLowerCase()?(p(b.getElementsByTagName("source"),function(b){var c=a.src,f=b.getAttribute(c);f&&
(b.setAttribute("src",f),b.removeAttribute(c))}),b.load(),x(b,a)):(a.error&&a.error(b,"missing"),w(b,a.errorClass))}}function x(b,c){w(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);b.removeAttribute(c.srcset);p(c.breakpoints,function(a){b.removeAttribute(a.src)})}function B(b,c,a){a&&b.setAttribute("srcset",a);b.src=c}function u(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function w(b,c){u(b,c)||(b.className+=" "+c)}function E(b){var c=[];b=b.root.querySelectorAll(b.selector);
for(var a=b.length;a--;c.unshift(b[a]));return c}function C(b){e.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;e.right=(window.innerWidth||document.documentElement.clientWidth)+b}function q(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,{capture:!1,passive:!0})}function k(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,{capture:!1,passive:!0})}function p(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],
d);d++);}function D(b,c,a){var d=0;return function(){var f=+new Date;f-d<c||(d=f,b.apply(a,arguments))}}var v,e,A,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,e,g){g=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(e=g.length;e--;)g[e].currentStyle.k&&b.push(g[e]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||
{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.root=a.options.root||document;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.containerClass=a.options.container;a.options.container=a.options.containerClass?document.querySelectorAll(a.options.containerClass):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=
a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.saveViewportOffsetDelay=a.options.saveViewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=v=a.options.src||"data-src";a.options.options=a.options.options||"data-options";y=Element.prototype.closest;A=1<window.devicePixelRatio;e={};e.top=0-a.options.offset;e.left=0-a.options.offset;a.revalidate=function(){n(a)};a.load=
function(a,b){var c=this.options;a&&void 0===a.length?z(a,b,c):p(a,function(a){z(a,b,c)})};a.destroy=function(){var b=a._util;a.options.container&&p(a.options.container,function(a){k(a,"scroll",b.validateT)});k(window,"scroll",b.validateT);k(window,"resize",b.validateT);k(window,"resize",b.saveViewportOffsetT);b.count=0;b.elements.length=0;b.destroyed=!0};d.validateT=D(function(){l(a)},a.options.validateDelay,a);d.saveViewportOffsetT=D(function(){C(a.options.offset)},a.options.saveViewportOffsetDelay,
a);C(a.options.offset);p(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return v=a.src,!1});setTimeout(function(){n(a)})}});

  (function() {
    // Initialize
    var bLazy = new Blazy();
	  })();

// (function(){
//     //Валидация
//     $("#cont").submit(function(event) {
//       if(!validateForm($("#yourName").val(), $('#yourPhone').val())) {
//         return false;
//       } else {
//         $("#cont").submit();
//       }
//     });

//     function validateForm(name, phone, email) {
//         var nameReg = /^[A-Za-z]+$/;
//         var numberReg =  /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
//         var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

//         var inputVal = [name, phone, email];
//         var inputMessage = ["І&prime;МЯ", "ТЕЛЕФОН", "E-MAIL"];

//         $('.error_callback').hide();

//         if (inputVal[1] == "") {
//             $('#yourPhone').after('<span class="error_callback"> Введіть будь ласка Ваш ' + inputMessage[1] + '</span>');
//             return false;
//         } else if(!numberReg.test(inputVal[1])) {
//             $('#yourPhone').after('<span class="error_callback"> Неправильний формат ' + inputMessage[1] + 'У</span>');
//             return false;
//         }
//         return true;
//     }
// })();

// (function(){
//     //Валидация
//     $("#form").submit(function(event) {
//       if(!validateForm($("#yourName").val(), $('#yourPhone').val())) {
//         return false;
//       } else {
//         $("#form").submit();
//       }
//     });

//     function validateForm(name, phone, email) {
//         var nameReg = /^[A-Za-z]+$/;
//         var numberReg =  /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
//         var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

//         var inputVal = [name, phone, email];
//         var inputMessage = ["І&prime;МЯ", "ТЕЛЕФОН", "E-MAIL"];

//         $('.error_callback').hide();

//         if (inputVal[1] == "") {
//             $('#callback_form_phone_input').after('<span class="error_callback"> Введіть будь ласка Ваш ' + inputMessage[1] + '</span>');
//             return false;
//         } else if(!numberReg.test(inputVal[1])) {
//             $('#callback_form_phone_input').after('<span class="error_callback"> Неправильний формат ' + inputMessage[1] + 'У</span>');
//             return false;
//         }
//         return true;
//     }
// })();

(function() {
  // Карусель других проекто застройщика
  var defaultSliderConfiguration = {
    slideWidth: 160,
    minSlides: 1,
    maxSlides: 5,
    moveSlides: 1,
    slideMargin: 10,
    auto: true,
    infiniteLoop: true,
    responsive: true,
    touchEnabled: true,
    pager: false,
    onSliderResize: function() {
      var sliderConfiguration = getScreenSize();
      bxSliderProjects.reloadSlider(sliderConfiguration)
    }
  }

  function getScreenSize() {
    var width = window.innerWidth;
    if(width > 1200) {
      return defaultSliderConfiguration;
    } else if(width > 1060 && width < 1200) {
      return Object.assign({}, defaultSliderConfiguration, {maxSlides: 4 });
    } else if(width > 850 && width < 1060) {
      return Object.assign({}, defaultSliderConfiguration, {maxSlides: 3 });
    }
    //  else if(width > 440 && width < 850) {
    //   return Object.assign({}, defaultSliderConfiguration, {maxSlides: 2 });
    // } 
    else {
      return Object.assign({}, defaultSliderConfiguration, {maxSlides: 1 });
    }
  }

  var sliderConfiguration = getScreenSize();

  // главная инициализапция
  var bxSliderProjects = $(".developer_logo-bxslider").bxSlider(sliderConfiguration);

})();