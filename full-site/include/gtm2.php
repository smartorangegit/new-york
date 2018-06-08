<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJCJDQL"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
function LazyLoad ($src='', $option=''){
//echo '<pre>'; print_r($option['class']); echo '</pre>';	
$t='';
	if (!empty($option['option'])) {$t='data-option="'.$option['option'].'"'; } else {$option['option']='';}
	if (empty($option['class']))  {$option['class']='';}

		echo 'class="'.$option['class'].' b-lazy" '.$t.' src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="'.$src.'"';
}
?>