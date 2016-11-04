<?php
function send_sms($num,$msg)
{
	$user = "Keerthi123";
	$senderid = "SMSBRS";
	$channel = "1";
	$DCS = "0";
	$flashsms = "0";	
	$mob = $num; //ERROR IN YOUR $number variable. please check it this is not get any value with parameters.
	$message = $msg;
	$route = "1";
	
//	$ch=curl_init("http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey=Keerthi123&senderid=SMSBRS&channel=1&DCS=0&flashsms=0&number='.$mob.'&text='.$message.'&route=1");
	echo'wait...!<meta http-equiv="refresh" content="10;url=http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey=Keerthi123&senderid=SMSBRS&channel=1&DCS=0&flashsms=0&number='.$mob.'&text='.$message.'&route=1">';
//	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//	curl_setopt($ch,CURLOPT_POST,1);
//	curl_setopt($ch,CURLOPT_POSTFIELDS,"");
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
//	$data = curl_exec($ch);
//	print($data); /* result of API call*/
}
?>
