<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ЖК NEW YORK Concept House | Панорама 360 градусів | Вид з вікон</title>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="content-language" content="ua">
    <?php include_once('../../include/gtm1.php'); ?>
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content="ЖК NEW YORK Concept House, Панорама 360 градусів, Вид з вікон, вид на центр" />
		<meta name="description" content="Панорамний вид на центр Києва з вікон ЖК NEW YORK Concept House" />
    <link rel="alternate" hreflang="ru" href="http://new-york.com.ua<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="alternate" hreflang="ua" href="http://new-york.com.ua<?php echo  str_replace('/ru/', '/', $_SERVER['REQUEST_URI'])?>" />
    <link rel="canonical" href="http://new-york.com.ua<?php echo  $_SERVER['REQUEST_URI'];?>"/>
    <meta name="medium" content="mult" />
		<meta name="video_height" content="480"></meta>
		<meta name="video_width" content="640"></meta>
		<link rel="image_src" href="/NYdata/thumbnail.jpg" />
		<!-- <meta name="directory" content="PATH/"></meta> -->
		<!-- <link rel="target_url" href="../NY.html" /> -->
	  <meta name="generator" content="Panotour Pro V2.5.3 64bits" />
		<meta name="author" content="NY" />
		<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
    <script src="https://use.fontawesome.com/8f277e411d.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
			@-ms-viewport { width: device-width; }
			@media only screen and (min-device-width: 800px) { html { overflow:hidden; } }
			* { padding: 0; margin: 0; }
			html { height: 100%; }
			body { height: 100%; overflow:hidden; }
			div#container { height: 100%; min-height: 100%; width: 100%; margin: 0 auto; }
			div#tourDIV {
				height:100%;
				position:relative;
				overflow:hidden;
			}
			div#panoDIV {
				height:100%;
				position:relative;
				overflow:hidden;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}
		</style>
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <link href="/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/hoverphoto.css" rel="stylesheet">
    <link href="/css/modal.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/NYdata/lib/jquery-2.1.1.min.js"></script>
    <link type="text/css" href="/NYdata/lib/jquery-ui-1.11.1/jquery-ui.min.css" rel="stylesheet" />
		<script type="text/javascript" src="/NYdata/lib/jquery-ui-1.11.1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/NYdata/lib/jquery.ui.touch-punch.min.js"></script>
		<script type="text/javascript" src="/NYdata/lib/Kolor/KolorTools.min.js"></script>
		<script type="text/javascript" src="/NYdata/graphics/KolorBootstrap.js"></script>
    <style type="text/css">
			div#panoDIV.cursorMoveMode {
				cursor: move;
				cursor: url(/NYdata/graphics/cursors_move_html5.cur), move;
			}
			div#panoDIV.cursorDragMode {
				cursor: grab;
				cursor: -moz-grab;
				cursor: -webkit-grab;
				cursor: url(/NYdata/graphics/cursors_drag_html5.cur), default;
			}
		</style>
    <script type="text/javascript">
			function webglAvailable() {
				try {
					var canvas = document.createElement("canvas");
					return !!window.WebGLRenderingContext && (canvas.getContext("webgl") || canvas.getContext("experimental-webgl"));
				} catch(e) {
					return false;
				}
			}
			function getWmodeValue() {
				var webglTest = webglAvailable();
				if(webglTest){
					return 'direct';
				}
				return 'opaque';
			}
			function readDeviceOrientation() {
				// window.innerHeight is not supported by IE
				var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
				var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
				//force height for iframe usage
				if(!winH || winH == 0){
					winH = '100%';
				}
				// set the height of the document
				jQuery('html').css('height', winH);
				// scroll to top
				window.scrollTo(0,0);
			}
			jQuery( document ).ready(function() {
				if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
					if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
						jQuery('body').css('height', '100.18%');
					}
					// add event listener on resize event (for orientation change)
					if (window.addEventListener) {
						window.addEventListener("load", readDeviceOrientation);
						window.addEventListener("resize", readDeviceOrientation);
						window.addEventListener("orientationchange", readDeviceOrientation);
					}
					//initial execution
					setTimeout(function(){readDeviceOrientation();},10);
				}
			});

			function accessWebVr(){
				unloadPlayer();
				eventUnloadPlugins();
				setTimeout(function(){ loadPlayer(true); }, 100);
			}
			function accessStdVr(){
				unloadPlayer();
				resetValuesForPlugins();
				setTimeout(function(){ loadPlayer(false); }, 100);
			}
			function loadPlayer(isWebVr) {
				if (isWebVr) {
					embedpano({
						id:"krpanoSWFObject"
						,xml:"/NYdata/NY_vr.xml"
						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"
						,html5:"only+webgl"
						,vars:{skipintro:true,norotation:true}
					});
				} else {
					embedpano({
						id:"krpanoSWFObject"
						,swf:"/NYdata/NY.swf"
						,target:"panoDIV"
						,passQueryParameters:true
						,bgcolor:"#000000"
						,html5:"prefer"
						,wmode: getWmodeValue()

					});
				}
				//apply focus on the visit if not embedded into an iframe
				if(top.location === self.location){
					kpanotour.Focus.applyFocus();
				}
			}
			function unloadPlayer(){
				if(jQuery('#krpanoSWFObject')){
					removepano('krpanoSWFObject');
				}
			}
		    function isVRModeRequested() {
				var querystr = window.location.search.substring(1);
				var params = querystr.split('&');
				for (var i=0; i<params.length; i++){
					if (params[i].toLowerCase() == "vr"){
						return true;
					}
				}
				return false;
			}
		</script>
  </head>
  <body>
    <?php include_once('../include/header.php'); ?>
    <div class="trigger-0"></div>
    <div id="container">
      <div id="tourDIV">
        <div id="panoDIV">
          <noscript>
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="/NYdata/NY">
              <param name="movie" value="/NYdata/NY.swf"/>
              <param name="allowFullScreen" value="true"/>
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="/NYdata/NY.swf" width="100%" height="100%">
                <param name="movie" value="/NYdata/NY.swf"/>
                <param name="allowFullScreen" value="true"/>
                <!--<![endif]-->
                <a href="http://www.adobe.com/go/getflash">
                  <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player to visualize the Virtual Tour : NY (Virtual tour generated by Panotour)"/>
                </a>
              <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>

          </noscript>
        </div>

        <script type="text/javascript" src="/NYdata/NY.js"></script>
        <script type="text/javascript">
          if (isVRModeRequested()){
            accessWebVr();
          }else{
            accessStdVr();
          }
        </script>
      </div>
    </div>

    <?php include_once('../include/footer.php'); ?>
    <script src="/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.easing.js" type="text/javascript"></script>
    <script src="/js/jquery.bxslider.js"></script>
    <script src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script type="text/javascript" src="/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/ScrollMagic.js"></script>
    <script type="text/javascript" src="/js/animation.gsap.min.js"></script>
    <script src="/js/script.js"></script>
    <?php include_once('../../include/gtm2.php'); ?>
  </body>
</html>
