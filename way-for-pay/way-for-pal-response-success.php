<?php
$json = file_get_contents('php://input');
$response_payment = json_decode($json, true);

$order_reference = $response_payment['orderReference'];
$status_transaction = $response_payment['transactionStatus'];
$time = date_timestamp_get(date_create());

$generate_response_to_payment = "$order_reference;accept;$time";

$key = "89b8ee1266961793e65fe001c2f71af3d4d80530";
$merchant_signature = hash_hmac("md5",$generate_response_to_payment,$key);

/*send email to admin*/
if ($status_transaction === 'Approved'){
	//get utm
	$utm_with_id = parse_url($order_reference);
	$utm_arr = [];

	file_put_contents( 'way-for-pay.log', 'Тест id з ютм-кою: '.print_r($utm_with_id, true) . "\n \n \n \n", FILE_APPEND );

	if ( !empty($utm_with_id['query']) ){
		parse_str($utm_with_id['query'], $utm_arr);
	}

	$email_for_send = 'gumenyukilyaa@gmail.com';

	$phone = $response_payment['phone'];
	$client = $response_payment['clientName'];
	$email_client = $response_payment['email'];
	$amount = $response_payment['amount'];
	$message = "<b>Ім'я клієнта:</b> $client;<br><b>Номер телефону:</b> $phone;<br><b>Email:</b> $email_client;<br><b>Ціна:</b> $amount;";

	if (!empty($utm_arr)){
		foreach ($utm_arr as $utm => $val){
			$message.= "<b>$utm: </b>$val;<br>";
		}
	}

	function adopt($text) {
		return '=?UTF-8?B?'.Base64_encode($text).'?=';
	}

	$headers = "MIME-Version: 1.0" . PHP_EOL .
		"Content-Type: text/html; charset=utf-8" . PHP_EOL .
		'From: '.adopt('Way-for-pay-Vladislav-response').' <'.$email_for_send.'>' . PHP_EOL .
		'Reply-To: '.$email_for_send.'' . PHP_EOL;
	mail($email_for_send, adopt('Відповідь при успішному... ну кароче ти поняв'), $message, $headers );

	//Send data to table
	$data_for_google_sheets = [
		"Ім'я клієнта" => $client,
		"Телефон" => $phone,
		"Email" => $email_client,
		'Ціна' => $amount,
		'formGoogleSheetName' => 'lose-weight',
		'honeypot' => '',
	];


	if (!empty($utm_arr)){
		$data_for_google_sheets = array_merge($data_for_google_sheets, $utm_arr);
	}

	$curl_to_google_api = curl_init('https://script.google.com/macros/s/AKfycbzKW3Nt6iyeMsfLqS45aUWPhSz4_0fFJafHboDjCXlvvwRnv-fG0zFYGqC01EJBFVum/exec');
	curl_setopt($curl_to_google_api, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_to_google_api, CURLOPT_POST, true);
	curl_setopt($curl_to_google_api, CURLOPT_POSTFIELDS, http_build_query($data_for_google_sheets));

	$response_from_google_api = curl_exec($curl_to_google_api);

	curl_close($curl_to_google_api);

	/*if ($response_from_google_api === 'success') {
		file_put_contents( 'way-for-pay.log', 'УСПЫШНО В ТАБИЦЫЮ: '." \n \n", FILE_APPEND );
	} else {
		file_put_contents( 'way-for-pay.log', 'НЕ УСПІШНО В ТАБЛИЦЮ: '." \n \n", FILE_APPEND );
	}*/
}

/*response for payment system*/
$response_for_payment = [
	"orderReference" => $order_reference,
	"status" => "accept",
	"time" => $time,
	"signature" => $merchant_signature
];

$response_for_payment = json_encode($response_for_payment);

header('Content-Type: application/json');

http_response_code(200);
echo $response_for_payment;
exit;





