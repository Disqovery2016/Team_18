<?php
include 'dbconn.php';
session_start();
$username=  filter_input(INPUT_POST,'username');
$pass=  filter_input(INPUT_POST,'password');
$query="select password,patient_name from patientdetail where email='$username'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_row($result);
	if($pass == $row[0])
	{
        $_SESSION['user_name']=$username;
        $_SESSION['user_pass']=$pass;
        $_SESSION['name']=$row[1];
        echo "success";
	}
	else
		echo "Invalid Password";
}
else
{
	echo "Invalid";
}

?>