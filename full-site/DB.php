<?php
$DB = mysqli_connect ("localhost","smart","KIVhbSKA");
mysqli_select_db ("york_calls",$DB);
mysqli_query("SET NAMES 'utf8'");

if (mysqli_connect_errno()) { 
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
} 
?>
