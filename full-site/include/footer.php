<?php
$webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
//action="http://einstein.house/application.php" method="POST"
?>
<script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="/js/intlTelInput.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- ==========footer========= -->
<div class="footer">
  <div class="wrapper clearfix">
    <div itemscope itemtype="http://schema.org/Organization">
      <div class="foot_info">
        <p><span itemprop="name">2017  ЖК NEW YORK Concept House</span></p>
        <p>
          <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="addressLocality">м.Київ центр</span>,
          <span itemprop="streetAddress">вул.Антоновича, 74 </span>,тел.
          <span itemprop="telephone" style="color:white;"><a id="tt" href="tel:123123" style="color:white;">(044) <span class="ringo-phone">498-01-00</span></a></span>
          </span>
        </p>
      </div>
    </div>
    <div class="foot_icons">
      <a href="https://www.facebook.com/NewYorkConceptHouse/" title="Facebook" target="_blank"><i class="fa">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><path fill="#6C6662" d="M301.5 84.8h70V0h-98.9c-79.7 16.1-80.7 89-80.7 89v86.4h-63.5v84.1h63.5V500h88.5V259.3h83.4l7.9-84.1H281v-61.7c-.1-27.1 20.5-28.7 20.5-28.7z"/></svg>
      </i></a>
      <!-- <a href="https://plus.google.com/117958249387903137166" title="Twitter" target="_blank"><i class="fa">
        <svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M317.686 229.75a159.492 159.492 0 0 1 2.71 29.398C320.395 339.125 266.85 396 186 396c-77.35 0-140-62.65-140-140s62.65-140 140-140c37.803 0 69.385 13.91 93.627 36.487l-39.47 39.465v-.09c-14.696-14-33.332-21.174-54.157-21.174-46.198 0-83.736 39.024-83.736 85.227 0 46.194 37.538 85.312 83.736 85.312 41.913 0 70.436-23.977 76.307-56.875H186V229.75h131.686zm104.564 8.75v-43.75h-35v43.75H343.5v35h43.75v43.75h35V273.5H466v-35h-43.75z" fill="#666666"/></svg>
      </i></a>
      <a href="https://ru.pinterest.com/newyorkconcept/" title="Pinterest" target="_blank"><i class="fa">
        <svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M256 597q0-108 37.5-203.5T397 227t152-123 185-78T936 0q158 0 294 66.5T1451 260t85 287q0 96-19 188t-60 177-100 149.5-145 103-189 38.5q-68 0-135-32t-96-88q-10 39-28 112.5t-23.5 95-20.5 71-26 71-32 62.5-46 77.5-62 86.5l-14 5-9-10q-15-157-15-188 0-92 21.5-206.5T604 972t52-203q-32-65-32-169 0-83 52-156t132-73q61 0 95 40.5T937 514q0 66-44 191t-44 187q0 63 45 104.5t109 41.5q55 0 102-25t78.5-68 56-95 38-110.5 20-111 6.5-99.5q0-173-109.5-269.5T909 163q-200 0-334 129.5T441 621q0 44 12.5 85t27 65 27 45.5T520 847q0 28-15 73t-37 45q-2 0-17-3-51-15-90.5-56t-61-94.5-32.5-108T256 597z" fill="#666666"/></svg>
      </i></a> -->
    </div>
    <style media="screen">
      .fa{display: inline-block; padding: 6px;} .fa svg{width: 100%; height: 100%}
    </style>
  </div>
</div>

<!-- =============<end footer>============ -->

<!-- callbackform -->
 <div class="callback_overlay"></div>
    <div class="callback_modal">
      <div class="callback_inner">
        <div class="callback_close"><img src="/img/icons/close_b.svg" alt="close" width="40"></div>
        <div class="form_name">
            Щоб замовити зворотній дзвінок,
            <span>
              будь ласка, залиште контактну інформацію:
            </span>
          </div>

            <form id="form" class="" action="<?php  $_SERVER['DOCUMENT_ROOT'] ?>/application.php" method="post">
              <input name="name" type="text"value="" id="footer_callback_form_name" placeholder="Ваше ім&prime;я" required>
              <?/*<input name="tel" type="tel" value="" placeholder="Номер телефону" required id="callback_form_phone_input" onkeyup="javascript:mask('callback_form_phone_input', '(000)000-00-00', event);" value="(___)___-__-__">*/?>
              <input name="tel" type="tel" value="" placeholder="Номер телефону" required id="footer_callback_form_phone" required>
              <textarea tabindex="4" onkeyup="javascript:countme2();" rows="8" cols="80" placeholder="Текст повідомлення" required></textarea>
              <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
              <input  name="metka" class="metka" type="hidden" value="New-York callback"/>
              <input  name="inn" class="userInn" type="hidden" value="New-York callback"/>
              <input  name="language"type="hidden" value="<?= $language; ?>">
              <input class="button" type="submit" name="" value="Надіслати">
            </form>
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
      </div>
	  <div id="mob-phone" class="min" style="text-align:center;width:100%;">044<a class="ringo-phone" style="color:#000;padding-left: 6px;" href="tel:0444980100"><span class="ringo-phone" style="letter-spacing:0;">498 01 00</span></a></div>
    </div>
<a href="http://saga-development.com.ua/" class="saga-logo <?if(count(explode("/", $_SERVER['REQUEST_URI']))>2){echo 'saga_logo_off';}?>" target="_blank">
<img src="/img/saga-logo.svg">
</a>



<style>
.saga-logo {
    position: fixed;
    top: 111px;
    right: 70px;
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

@media screen and (min-width: 320px) and (max-width: 600px){
  .saga-logo {
    position: absolute;
    left: 10px;
    top: 260px;
  }
}
</style>
	<style>
#mob-phone{display:none;}
  @media only screen and (max-width: 1180px){
	#mob-phone{display:inline-block;}  
  }
</style>
