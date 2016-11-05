<?php

include 'send_sms.php';
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$stype=$_POST['stype'];
	$svalue=$_POST['svalue'];
	$message="";
	$status = 0;
	
	if($stype === "heartrate")
	{
		if($svalue >=60 && $svalue<=100)
		{
			$message="Dear Patient, your HEART RATE is Decreasing, please consult a doctor soon - DigiCare";
			$status=1;
		}
		else if($svalue > 100)
		{
			$message="Dear Patient, your HEART RATE is Increasing, please make your self relax - DigiCare";
			$status=1;
		}
		else{}
	}
	else if($stype === "bloodglucose")
	{
		if($svalue < 70 || $svalue >100)
		{
			$message="Dear Patient, your BLOOd Glucose value is abnormal, please consult a doctor soon - DigiCare";
			$status=1;
		}
		else{}
	}
	else if($stype === "bp")
	{
		
	}
	else if($stype === "pulseoximeter") // spo2
	{
		if($svalue < 70 || $svalue >100)
		{
			$message="Dear Patient, your PULSe Oximeter value is abnormal, please consult a doctor soon - DigiCare";
			$status=1;
		}
		else{}
	}
	
	if($status == 1){
		$sms_status=send_sms("9566248374",$message);	
	}
		
		if($sms_status == 200){
			echo "Emergency Alert Sent";
		}else{
			echo "Error in Sending the SMS";
		}
}

?>