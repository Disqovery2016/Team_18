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
			$message="Dear Patient, your Heart Rate is Decreasing, please consult a doctor soon";
			$status=1;
		}
		else if($svalue >100)
		{
			$message="Dear Patient, your Heart Rate is Increasing, please make your self relax";
			$status=1;
		}
		else{}
	}
	else if($stype === "bp")
	{
		
	}
	else if($stype === "pulserate")
	{
		
	}
	
	if($status == 1)
		send_sms("7709844134",$message);	
}
?>