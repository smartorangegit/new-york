<!-- ==========footer========= -->
<script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/js/intlTelInput.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<div class="footer">
  <div class="wrapper clearfix">
    <div itemscope itemtype="http://schema.org/Organization">
      <div class="foot_info">
        <p><span itemprop="name">2017  ЖК NEW YORK Concept House</span></p>
        <p>
          <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="addressLocality">г.Киев центр</span>,
          <span itemprop="streetAddress">ул.Антоновича, 74 </span>, тел.
          <span itemprop="telephone" style="color:white;"><a id="tt" href="tel:123123" style="color:white;">(044) <span class="ringo-phone">498-01-00</span></a></span>
          </span>
        </p>
      </div>
    </div>
    <div class="foot_icons">
      <a href="https://www.facebook.com/NewYorkConceptHouse/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
      <!-- <a href="https://plus.google.com/117958249387903137166" title="Twitter" target="_blank"><i class="fa fa-google-plus"></i></a>
      <a href="https://ru.pinterest.com/newyorkconcept/" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a> -->
    </div>
  </div>
</div>

<!-- =============<end footer>============ -->

<!-- callbackform -->
 <div class="callback_overlay"></div>
    <div class="callback_modal">
      <div class="callback_inner">
        <div class="callback_close"><img src="/img/icons/close_b.svg" alt="close" width="40"></div>
        <div class="form_name">
            Чтобы заказать обратный звонок,
            <span>
              пожалуйста, оставьте контактную информацию:
            </span>
          </div>


			<form id="form" class="" action="<?php  $_SERVER['DOCUMENT_ROOT'] ?>/application.php" method="post">
              <input name="name" type="text"value="" id="footer_callback_form_name" placeholder="Ваше имя" required>
              <input name="tel" type="tel" value="" placeholder="Номер телефона" required id="footer_callback_form_phone">
              <textarea tabindex="4" onkeyup="javascript:countme2();" rows="8" cols="80" placeholder="Текст сообщения" required></textarea>
              <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
              <input  name="metka" class="metka" type="hidden" value="New-York callback"/>
              <input  name="inn" class="userInn" type="hidden" value="New-York callback"/>
              <input  name="language"type="hidden" value="<?= $language; ?>">
              <?/* <div class="not" id="reCaptcha1"></div>*/?>
              <input class="button" type="submit" name="" value="Отправить">
            </form>
      </div>
	  <div id="mob-phone" class="min" style="text-align:center;width:100%;">044<a class="ringo-phone" style="color:#000;padding-left: 6px;" href="tel:0444980100"><span class="ringo-phone" style="letter-spacing:0;">498 01 00</span></a></div>
    </div>
	<a href="http://saga-development.com.ua/" class="saga-logo <?if(count(explode("/", $_SERVER['REQUEST_URI']))>3){echo 'saga_logo_off';}?>" target="_blank">
<img src="/img/saga-logo.svg">
</a>
<style>
.saga-logo {
    position: fixed;
    top: 111px;
    right: 113px;
    display: block;
    width: 60px;
    z-index: 20;
    text-align: center;
    overflow: hidden;
}
@media screen and (max-width: 768px){
	.saga-logo {
		right: 30px;
	}
	.saga_logo_off {display:none;}
}
</style>
<style>
#mob-phone{display:none;}
  @media only screen and (max-width: 1180px){
	#mob-phone{display:inline-block;}  
  }
</style>

<script>
    var element1 = document.getElementById('form2');
    var element2 = document.getElementById('form');
    if(!element1) {
    }
    else {
        var ct = 0;
        var addCount = document.createElement('input');
        addCount.type = "hidden";
        addCount.id = "count";
        addCount.name = "count";
        addCount.value = "0";
        document.getElementById('form2').appendChild(addCount);
        function countme() {
            document.getElementById('count').value = ++ct;
        }
    }
    if(!element2) {
    }
    else {
        var ct2 = 0;
        var addCount2 = document.createElement('input');
        addCount2.type = "hidden";
        addCount2.id = "count2";
        addCount2.name = "count2";
        addCount2.value = "0";
        document.getElementById('form').appendChild(addCount2);
        function countme2() {
            document.getElementById('count2').value = ++ct2;
        }
    }
</script>
<!-- end callbackform -->
