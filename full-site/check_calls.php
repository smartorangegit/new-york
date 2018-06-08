<?php
include('DB.php');
$today = date("Y-m-d H:i:s",strtotime("-1 hour")); 
$check = $db->query("SELECT * FROM `york_call` WHERE `dates` >= DATE_SUB( CURRENT_DATE, INTERVAL 1 HOUR)");
$num = $_POST['tel'];
$name = $_POST['name'];
$dat = date("Y-m-d H:i:s");  
$good = 0;
while ($myrow = mysqli_fetch_array($check))
{
if (in_array("$num", $myrow)){
    //echo "Нашел номер";
		if($today <= $myrow["dates"])
		{
		//echo "Обращался за прошлый час! --- ";
		//print_r("Номер : ".$myrow["fhonenumber"]."  Время : ".$myrow["dates"]."<br/>");
		$good = 1;
		}
	}

}
if($good == 1){
// если 1 то номер есть в базе и за последний час человек оставлял заявку и мы его записываем в базу но не шлем в CRM
$DB = $db->query("INSERT INTO `york_call` (`name`, `fhonenumber`,`dates`) VALUES ('$name', '$num', '$dat')");
}
else{
//если такого номера нет или он не звонил за последний час, добавляем в базу и отправляем в CRM
}


