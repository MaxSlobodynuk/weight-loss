<?php
$utm = $_POST['utmTags'];

$str_for_transaction = '790;UAH;Авторський курс - Схуднення;1;790';

$date_today = date("dmyHis");
$micro_date = microtime(true);
$micro_date = explode(".", $micro_date);

$unixDate = date_create();
$unixDate = date_timestamp_get($unixDate);

$IDpay = 'ID' . $date_today . $micro_date[1];

$IDpay = $utm ? $IDpay.'?'.$utm : $IDpay;

$string = "ungurian_site;www.ungurian.site/new;$IDpay;$unixDate;$str_for_transaction";

$key = "89b8ee1266961793e65fe001c2f71af3d4d80530";
$hash = hash_hmac("md5",$string,$key);

$arrayData = ['id_byuer' => $IDpay, 'date' => $unixDate, 'signature' => $hash];

print_r(json_encode($arrayData));
?>