<?php
$DB = mysql_connect ("localhost","smart","KIVhbSKA");
mysql_select_db ("york_calls",$DB);
mysql_query("SET NAMES 'utf8'");

if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 
?>
