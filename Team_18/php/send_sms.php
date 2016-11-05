<?php
function send_sms($num,$msg)
{
	$user = "Keerthi123";
	$senderid = "SMSBRS";
	$channel = "1";
	$DCS = "0";
	$flashsms = "0";	
	$mob = $num; 
	$message = rawurlencode($msg);
	$route = "1";
	
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey=Keerthi123&senderid=SMSBRS&channel=1&DCS=0&flashsms=0&number='.$mob.'&text='.$message.'&route=1');
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);

	$data = curl_exec($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	
	return $httpcode;
}
?>
