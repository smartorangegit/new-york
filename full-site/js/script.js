
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
	function BlazyM(typ, cl='b-loaded b-lazy-m'){ var typ; var cl;
		  $(typ).each(function(i,elem) {
			  elem.src=$(elem).data('src2');
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
var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".saga-logo", {right:"24px"}).addTo(controller)

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

	  
/*
 Input Mask plugin for jquery
 http://github.com/RobinHerbots/jquery.inputmask
 Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 Version: 1.2.4
*/
(function(d){void 0==d.fn.inputmask&&(d.inputmask={defaults:{placeholder:"_",optionalmarker:{start:"[",end:"]"},escapeChar:"\\",mask:null,oncomplete:d.noop,onincomplete:d.noop,oncleared:d.noop,repeat:0,greedy:!0,autoUnmask:!1,clearMaskOnLostFocus:!0,insertMode:!0,clearIncomplete:!1,aliases:{},onKeyUp:d.noop,onKeyDown:d.noop,showMaskOnHover:!0,onKeyValidation:d.noop,numericInput:!1,radixPoint:".",definitions:{9:{validator:"[0-9]",cardinality:1},a:{validator:"[A-Za-z\u0410-\u044f\u0401\u0451]",cardinality:1},
"*":{validator:"[A-Za-z\u0410-\u044f\u0401\u04510-9]",cardinality:1}},keyCode:{ALT:18,BACKSPACE:8,CAPS_LOCK:20,COMMA:188,COMMAND:91,COMMAND_LEFT:91,COMMAND_RIGHT:93,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,MENU:93,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38,WINDOWS:91},ignorables:[8,9,13,16,17,18,20,27,33,34,35,36,37,38,
39,40,46,91,93,108]},val:d.fn.val},d.fn.inputmask=function(G,W){function P(c){return(c=a.aliases[c])?(c.alias&&P(c.alias),d.extend(!0,a,c),d.extend(!0,a,W),!0):!1}function Q(){var c=!1,b=0;1==a.mask.length&&0==a.greedy&&(a.placeholder="");for(var p=d.map(a.mask.split(""),function(p,e){var h=[];if(p==a.escapeChar)c=!0;else if(p!=a.optionalmarker.start&&p!=a.optionalmarker.end||c){var d=a.definitions[p];if(d&&!c)for(var l=0;l<d.cardinality;l++)h.push(E(b+l));else h.push(p),c=!1;b+=h.length;return h}}),
h=p.slice(),l=1;l<a.repeat&&a.greedy;l++)h=h.concat(p.slice());return h}function R(){var c=!1,b=!1,p=!1;return d.map(a.mask.split(""),function(h,d){var l=[];if(h==a.escapeChar)b=!0;else{if(h!=a.optionalmarker.start||b){if(h!=a.optionalmarker.end||b){var e=a.definitions[h];if(e&&!b){for(var g=e.prevalidator,k=g?g.length:0,q=1;q<e.cardinality;q++){var m=k>=q?g[q-1]:[],w=m.validator;m=m.cardinality;l.push({fn:w?"string"==typeof w?new RegExp(w):new function(){this.test=w}:/./,cardinality:m?m:1,optionality:c,
newBlockMarker:1==c?p:!1,offset:0,casing:e.casing,def:h});1==c&&(p=!1)}l.push({fn:e.validator?"string"==typeof e.validator?new RegExp(e.validator):new function(){this.test=e.validator}:/./,cardinality:e.cardinality,optionality:c,newBlockMarker:p,offset:0,casing:e.casing,def:h})}else l.push({fn:null,cardinality:0,optionality:c,newBlockMarker:p,offset:0,casing:null,def:h}),b=!1;p=!1;return l}c=!1}else c=!0;p=!0}})}function J(c,b,p,h){var d=!1;if(0<=c&&c<q()){d=c%k.length;for(var g=b?1:0,e="",m=k[d].cardinality;m>
g;m--)e+=B(p,d-(m-1));b&&(e+=b);d=null!=k[d].fn?k[d].fn.test(e,p,c,h,a):!1}setTimeout(a.onKeyValidation.call(this,d,a),0);return d}function C(c){c=k[c%k.length];return void 0!=c?c.fn:!1}function E(c){return a.placeholder.charAt(c%a.placeholder.length)}function q(){var c=g.length;!a.greedy&&1<a.repeat&&(c+=g.length*(a.repeat-1));return c}function D(c,a){var b=q();if(a>=b)return b;for(var d=a;++d<b&&!C(d););return d}function K(c,a){var b=a;if(0>=b)return 0;for(;0<--b&&!C(b););return b}function I(c,
a,p){var b=k[a%k.length],d=p;if(void 0!=d)switch(b.casing){case "upper":d=p.toUpperCase();break;case "lower":d=p.toLowerCase()}c[a]=d}function B(a,b,d){d&&(b=S(a,b));return a[b]}function S(a,b,d){if(d)for(;0>b&&a.length<q();)for(d=g.length-1,b=g.length;void 0!==g[d];)a.unshift(g[d--]);else for(;void 0==a[b]&&a.length<q();)for(d=0;void 0!==g[d];)a.push(g[d++]);return b}function F(a,b,d){a._valueSet(b.join(""));void 0!=d&&(L?setTimeout(function(){m(a,d)},100):m(a,d))}function T(a,b,d){for(var c=q();b<
d&&b<c;b++)I(a,b,B(g.slice(),b))}function M(a,b){I(a,b,B(g,b%k.length))}function t(c,b,p,h){var l=d(c).data("inputmask").isRTL,m=O(c._valueGet(),l).split("");if(l){var e=q(),u=m.reverse();u.length=e;for(var v=0;v<e;v++){var t=(e-(v+1))%k.length;null==k[t].fn&&u[v]!=B(g,t)?(u.splice(v,0,B(g,t)),u.length=e):u[v]=u[v]||B(g,t)}m=u.reverse()}T(b,0,b.length);b.length=g.length;var A=u=-1,w;e=q();var z=m.length;t=0==z?e:-1;for(v=0;v<z;v++)for(var x=A+1;x<e;x++)if(C(x)){var f=m[v];!1!==(w=J(x,f,b,!p))?(!0!==
w&&(x=w.pos||x,f=w.c||f),I(b,x,f),u=A=x):(M(b,x),f==E(x)&&(t=A=x));break}else if(M(b,x),u==A&&(u=x),A=x,m[v]==B(b,x))break;if(0==a.greedy)for(v=O(b.join(""),l).split("");b.length!=v.length;)l?b.shift():b.pop();p&&F(c,b);return l?a.numericInput?-1!=d.inArray(a.radixPoint,b)&&!0!==h?d.inArray(a.radixPoint,b):D(b,e):D(b,t):D(b,u)}function X(a){return a.replace(RegExp("(\\/|\\.|\\*|\\+|\\?|\\||\\(|\\)|\\[|\\]|\\{|\\}|\\\\)","gim"),"\\$1")}function O(a,b){return b?a.replace(new RegExp("^("+X(g.join(""))+
")*"),""):a.replace(new RegExp("("+X(g.join(""))+")*$"),"")}function U(a,b){t(a,b,!1);var c=b.slice();if(d(a).data("inputmask").isRTL)for(var h=0;h<=c.length-1;h++){var g=h%k.length;if(k[g].optionality)if(E(h)!=b[h]&&C(h))break;else c.splice(0,1);else break}else for(h=c.length-1;0<=h;h--)if(g=h%k.length,k[g].optionality)if(E(h)!=b[h]&&C(h))break;else c.pop();else break;F(a,c)}function Y(a,b){var c=a[0];if(!k||!0!==b&&a.hasClass("hasDatepicker"))return c._valueGet();var h=g.slice();t(c,h);return d.map(h,
function(a,b){return C(b)&&a!=B(g.slice(),b)?a:null}).join("")}function m(c,b,d){c=c.jquery&&0<c.length?c[0]:c;if("number"==typeof b){d="number"==typeof d?d:b;0==a.insertMode&&b==d&&d++;if(c.setSelectionRange)c.setSelectionRange(b,d);else if(c.createTextRange){var h=c.createTextRange();h.collapse(!0);h.moveEnd("character",d);h.moveStart("character",b);h.select()}c.focus()}else return h=L?h:null,null==h&&(c.setSelectionRange?(b=c.selectionStart,d=c.selectionEnd):document.selection&&document.selection.createRange&&
(h=document.selection.createRange(),b=0-h.duplicate().moveStart("character",-1E5),d=b+h.text.length),h={begin:b,end:d}),h}function V(c){function b(a){var e=!0;a=a._valueGet();for(var b=a.length,f=0;f<b;f++)if(C(f)&&a.charAt(f)==E(f)){e=!1;break}return e}function p(a,b,d){for(;!C(a)&&0<=a-1;)a--;for(var f=a;f<b&&f<q();f++)if(C(f)){M(e,f);var c=D(e,f),N=B(e,c);if(N!=E(c))if(c<q()&&!1!==J(f,N,e,!0)&&k[f%k.length].def==k[c%k.length].def)I(e,f,B(e,c)),M(e,c);else{if(C(f))break}else if(void 0==d)break}else M(e,
f);void 0!=d&&I(e,z?b:K(e,b),d);e=O(e.join(""),z).split("");0==e.length&&(e=g.slice());return a}function h(a,b,d,c){for(;a<=b&&a<q();a++)if(C(a)){var f=B(e,a);I(e,a,d);if(f!=E(a))if(d=D(e,a),d<q())if(!1!==J(d,f,e,!0)&&k[a%k.length].def==k[d%k.length].def)d=f;else if(C(d))break;else d=f;else break;else if(!0!==c)break}else M(e,a);c=e.length;e=O(e.join(""),z).split("");0==e.length&&(e=g.slice());return b-(c-e.length)}var l=d(c);if(l.is(":input")){a.greedy=a.greedy?a.greedy:0==a.repeat;var H=l.prop("maxLength");
q()>H&&-1<H&&(H<g.length&&(g.length=H),0==a.greedy&&(a.repeat=Math.round(H/g.length)),l.prop("maxLength",2*q()));l.data("inputmask",{tests:k,_buffer:g,greedy:a.greedy,repeat:a.repeat,autoUnmask:a.autoUnmask,definitions:a.definitions,isRTL:!1});(function(a){var b;Object.getOwnPropertyDescriptor&&(b=Object.getOwnPropertyDescriptor(a,"value"));b&&b.get?a._valueGet||(a._valueGet=b.get,a._valueSet=b.set,Object.defineProperty(a,"value",{get:function(){var a=d(this),b=d(this).data("inputmask");return b&&
b.autoUnmask?a.inputmask("unmaskedvalue"):this._valueGet()!=b._buffer.join("")?this._valueGet():""},set:function(a){this._valueSet(a);d(this).triggerHandler("setvalue.inputmask")}})):document.__lookupGetter__&&a.__lookupGetter__("value")?a._valueGet||(a._valueGet=a.__lookupGetter__("value"),a._valueSet=a.__lookupSetter__("value"),a.__defineGetter__("value",function(){var a=d(this),b=d(this).data("inputmask");return b&&b.autoUnmask?a.inputmask("unmaskedvalue"):this._valueGet()!=b._buffer.join("")?
this._valueGet():""}),a.__defineSetter__("value",function(a){this._valueSet(a);d(this).triggerHandler("setvalue.inputmask")})):(a._valueGet||(a._valueGet=function(){return this.value},a._valueSet=function(a){this.value=a}),1!=d.fn.val.inputmaskpatch&&(d.fn.val=function(){if(0==arguments.length){var a=d(this);if(a.data("inputmask")){if(a.data("inputmask").autoUnmask)return a.inputmask("unmaskedvalue");var b=d.inputmask.val.apply(a);return b!=a.data("inputmask")._buffer.join("")?b:""}return d.inputmask.val.apply(a)}var e=
arguments;return this.each(function(){var a=d(this),b=d.inputmask.val.apply(a,e);a.data("inputmask")&&a.triggerHandler("setvalue.inputmask");return b})},d.extend(d.fn.val,{inputmaskpatch:!0})))})(c);var e=g.slice(),u=c._valueGet(),v=!1,G=!1,A=-1,w=D(e,-1);K(e,q());var z=!1;if("rtl"==c.dir||a.numericInput)c.dir="ltr",l.css("text-align","right"),l.removeAttr("dir"),H=l.data("inputmask"),H.isRTL=!0,l.data("inputmask",H),z=!0;l.unbind(".inputmask");l.removeClass("focus.inputmask");l.bind("blur.inputmask",
function(){var c=d(this),N=this._valueGet();c.removeClass("focus.inputmask");N!=u&&c.change();a.clearMaskOnLostFocus&&(N==g.join("")?this._valueSet(""):U(this,e));b(this)||(c.trigger("incomplete"),a.clearIncomplete&&(a.clearMaskOnLostFocus?this._valueSet(""):(e=g.slice(),F(this,e))))}).bind("focus.inputmask",function(){var b=d(this);if(!b.hasClass("focus.inputmask")&&!a.showMaskOnHover){var c=this._valueGet().length;c<e.length&&(0==c&&(e=g.slice()),m(this,t(this,e,!0)))}b.addClass("focus.inputmask");
u=this._valueGet()}).bind("mouseleave.inputmask",function(){var b=d(this);a.clearMaskOnLostFocus&&(b.hasClass("focus.inputmask")||(this._valueGet()==g.join("")||""==this._valueGet()?this._valueSet(""):U(this,e)))}).bind("click.inputmask",function(){var a=this;setTimeout(function(){var b=m(a);b.begin==b.end&&(b=b.begin,A=t(a,e,!1),z?m(a,b>A&&(!1!==J(b,e[b],e,!0)||!C(b))?b:A):m(a,b<A&&(!1!==J(b,e[b],e,!0)||!C(b))?b:A))},0)}).bind("dblclick.inputmask",function(){var a=this;setTimeout(function(){m(a,
0,A)},0)}).bind("keydown.inputmask",function(b){v=!1;var c=this,f=b.keyCode,r=m(c);if(a.numericInput){var n=c._valueGet().indexOf(a.radixPoint);-1!=n&&(z=r.begin<=n||r.end<=n)}if(f==a.keyCode.BACKSPACE||f==a.keyCode.DELETE||Z&&127==f){n=q();if(0==r.begin&&r.end==n)e=g.slice(),F(c,e),m(c,t(c,e,!1));else if(1<r.end-r.begin||1==r.end-r.begin&&a.insertMode)T(e,r.begin,r.end),F(c,e,z?t(c,e,!1):r.begin);else{var k=r.begin-(f==a.keyCode.DELETE?0:1);k<w&&f==a.keyCode.DELETE&&(k=w);k>=w&&(a.numericInput&&
a.greedy&&f==a.keyCode.DELETE&&e[k]==a.radixPoint&&(k=D(e,k),z=!1),z?(k=h(w,k,E(k),!0),k=a.numericInput&&a.greedy&&f==a.keyCode.BACKSPACE&&e[k+1]==a.radixPoint?k+1:D(e,k)):k=p(k,n),F(c,e,k))}c._valueGet()==g.join("")&&d(c).trigger("cleared");return!1}if(f==a.keyCode.END||f==a.keyCode.PAGE_DOWN)return setTimeout(function(){var d=t(c,e,!1,!0);a.insertMode||d!=q()||b.shiftKey||d--;m(c,b.shiftKey?r.begin:d,d)},0),!1;if(f==a.keyCode.HOME||f==a.keyCode.PAGE_UP)return m(c,0,b.shiftKey?r.begin:0),!1;if(f==
a.keyCode.ESCAPE)return c._valueSet(u),m(c,0,t(c,e)),!1;if(f==a.keyCode.INSERT)return a.insertMode=!a.insertMode,m(c,a.insertMode||r.begin!=q()?r.begin:r.begin-1),!1;if(b.ctrlKey&&88==f)setTimeout(function(){m(c,t(c,e,!0))},0);else if(!a.insertMode){if(f==a.keyCode.RIGHT)return f=r.begin==r.end?r.end+1:r.end,f=f<q()?f:r.end,m(c,b.shiftKey?r.begin:f,b.shiftKey?f+1:f),!1;if(f==a.keyCode.LEFT)return f=r.begin-1,f=0<f?f:0,m(c,f,b.shiftKey?r.end:f),!1}a.onKeyDown.call(this,b,a);G=-1!=d.inArray(f,a.ignorables)}).bind("keypress.inputmask",
function(c){if(v)return!1;v=!0;var f=this,k=d(f);c=c||window.event;var g=c.which||c.charCode||c.keyCode;if(a.numericInput&&g==a.radixPoint.charCodeAt(a.radixPoint.length-1)){var n=f._valueGet().indexOf(a.radixPoint);m(f,D(e,-1!=n?n:q()))}if(c.ctrlKey||c.altKey||c.metaKey||G)return!0;if(g){k.trigger("input");c=m(f);g=String.fromCharCode(g);var l=q();T(e,c.begin,c.end);if(z){n=a.numericInput?c.end:K(e,c.end);var y;if(!1!==(y=J(n==l||B(e,n)==a.radixPoint?K(e,n):n,g,e,!1))){!0!==y&&(n=y.pos||c,g=y.c||
g);y=w;if(1==a.insertMode){if(1==a.greedy)for(var t=e.slice();B(t,y,!0)!=E(y)&&y<=n;)y=y==l?l+1:D(e,y);if(y<=n&&(a.greedy||e.length<l))e[w]!=E(w)&&e.length<l&&(l=S(e,-1,z),0!=c.end&&(n+=l),l=e.length),p(y,a.numericInput?K(e,n):n,g);else return!1}else I(e,a.numericInput?K(e,n):n,g);F(f,e,a.numericInput&&0==n?D(e,n):n);setTimeout(function(){b(f)&&k.trigger("complete")},0)}else L&&F(f,e,c.begin)}else if(n=D(e,c.begin-1),S(e,n,z),!1!==(y=J(n,g,e,!1))){!0!==y&&(n=y.pos||n,g=y.c||g);if(1==a.insertMode){c=
q();for(t=e.slice();B(t,c,!0)!=E(c)&&c>=n;)c=0==c?-1:K(e,c);if(c>=n)h(n,e.length,g);else return!1}else I(e,n,g);c=D(e,n);F(f,e,c);setTimeout(function(){b(f)&&k.trigger("complete")},0)}else L&&F(f,e,c.begin);return!1}}).bind("keyup.inputmask",function(c){var b=d(this),f=c.keyCode;a.onKeyUp.call(this,c,a);f==a.keyCode.TAB&&b.hasClass("focus.inputmask")&&0==this._valueGet().length&&(e=g.slice(),F(this,e),z||m(this,0),u=this._valueGet())}).bind(aa+".inputmask, dragdrop.inputmask, drop.inputmask",function(){var a=
this;setTimeout(function(){m(a,t(a,e,!0))},0)}).bind("setvalue.inputmask",function(){u=this._valueGet();t(this,e,!0);this._valueGet()==g.join("")&&this._valueSet("")}).bind("complete.inputmask",a.oncomplete).bind("incomplete.inputmask",a.onincomplete).bind("cleared.inputmask",a.oncleared);A=t(c,e,!0);try{var x=document.activeElement}catch(f){}x===c?(l.addClass("focus.inputmask"),m(c,A)):a.clearMaskOnLostFocus&&(c._valueGet()==g.join("")?c._valueSet(""):U(c,e));(function(a){var c=d._data(a).events;
d.each(c,function(c,b){d(a).bind(c+".inputmask",function(a){if(this.readOnly||this.disabled)return a.stopPropagation(),a.stopImmediatePropagation(),a.preventDefault(),!1});for(var e=b[b.length-1],f=b.length-1;0<f;f--)b[f]=b[f-1];b[0]=e})})(c)}}var a=d.extend(!0,{},d.inputmask.defaults,W),aa=function(a){var b=document.createElement("input");a="on"+a;var c=a in b;c||(b.setAttribute(a,"return;"),c="function"==typeof b[a]);return c}("paste")?"paste":"input",Z=null!=navigator.userAgent.match(/iphone/i),
L=null!=navigator.userAgent.match(/android.*mobile safari.*/i);if(L){var ba=navigator.userAgent.match(/mobile safari.*/i);L=533>=parseInt((new RegExp(/[0-9]+/)).exec(ba))}if("string"==typeof G)switch(G){case "mask":var g=Q(),k=R();return this.each(function(){V(this)});case "unmaskedvalue":return k=this.data("inputmask").tests,g=this.data("inputmask")._buffer,a.greedy=this.data("inputmask").greedy,a.repeat=this.data("inputmask").repeat,a.definitions=this.data("inputmask").definitions,Y(this);case "remove":return this.each(function(){var c=
d(this),b=this;setTimeout(function(){if(c.data("inputmask")){k=c.data("inputmask").tests;g=c.data("inputmask")._buffer;a.greedy=c.data("inputmask").greedy;a.repeat=c.data("inputmask").repeat;a.definitions=c.data("inputmask").definitions;b._valueSet(Y(c,!0));c.removeData("inputmask");c.unbind(".inputmask");c.removeClass("focus.inputmask");var d;Object.getOwnPropertyDescriptor&&(d=Object.getOwnPropertyDescriptor(b,"value"));d&&d.get?b._valueGet&&Object.defineProperty(b,"value",{get:b._valueGet,set:b._valueSet}):
document.__lookupGetter__&&b.__lookupGetter__("value")&&b._valueGet&&(b.__defineGetter__("value",b._valueGet),b.__defineSetter__("value",b._valueSet));delete b._valueGet;delete b._valueSet}},0)});case "getemptymask":return this.data("inputmask")?this.data("inputmask")._buffer.join(""):"";case "hasMaskedValue":return this.data("inputmask")?!this.data("inputmask").autoUnmask:!1;default:return P(G)||(a.mask=G),g=Q(),k=R(),this.each(function(){V(this)})}return"object"==typeof G?(a=d.extend(!0,{},d.inputmask.defaults,
G),P(a.alias),g=Q(),k=R(),this.each(function(){V(this)})):this})})(jQuery);


//========= maska
$(document).on('click', '.inputtelmask', function (e) {$('.inputtelmask').inputmask('+380(99)999-99-99')});

//=========/END maska	  
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
    touchEnabled: false,
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
