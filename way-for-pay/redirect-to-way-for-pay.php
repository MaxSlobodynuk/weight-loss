<?php
$data = array(
	'merchantAccount' => "ungurian_site",
	'merchantDomainName' => "www.ungurian.site/new",
	'merchantSignature' => '',
	'serviceUrl' => 'https://ungurian.site/new/way-for-pay/way-for-pal-response-success.php',
	'orderReference' => '',
	'orderDate' => '',
	'amount' => '790',
	'currency' => 'UAH',
	'productName' => 'Авторський курс - Схуднення',
	'productPrice' => '790',
	'productCount' => '1',
	'language' => "UA"
);


/*$string = $data['merchantAccount'].';'.$data['merchantDomainName'].';'.$data['orderReference'].';'.$data['orderDate'].';1;UAH;Треніки;1;1';

$key = "flk3409refn54t54t*FNJRET";
$hash = hash_hmac("md5",$string,$key);
$data['merchantSignature'] = $hash;*/