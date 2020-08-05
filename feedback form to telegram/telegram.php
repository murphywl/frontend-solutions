<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "XXXXXXXXXXXXXXXXXXXXXXX"; /*token of your telegram bot*/
$chat_id = "-399030555";
$arr = array(
	'User name: ' => $name,
	'Mobile: ' => $phone,
	'Email' => $email,
	'Message:' => $message
);

foreach($arr as $key => $value) {
	$txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

$sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
	header('Location: success.html');
} else {
	echo "Error";
}
?>