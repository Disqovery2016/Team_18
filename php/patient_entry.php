<?php
include 'dbconn.php';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email1=$_POST['email1'];
	$dob=$_POST['dob'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$contact_number=$_POST['contact_number'];
	$gender=$_POST['gender'];
	
	$smoke=$_POST['smoke'];
	$bp=$_POST['bp'];
	$heart_issues=$_POST['heart_issues'];
	$diabetes=$_POST['diabetes'];
	
	$rname=$_POST['rname'];
	$remail=$_POST['remail'];
	$rcontact_number=$_POST['rcontact_number'];
	$relationship=$_POST['relationship'];
	
	$dname=$_POST['dname'];
	$demail=$_POST['demail'];
	$dcontact_number=$_POST['dcontact_number'];
	$hospital_address=$_POST['hospital_address'];
	
	
	$query="insert into patientdetail(patient_name,email,dob,weight,height,gender,contact_number)values('$name','$email1',STR_TO_DATE('$dob','%d-%m-%Y'),'$weight','$height','$gender','$contact_number')";
	
	if(mysqli_query($con,$query))
	{
		$patient_id = mysqli_insert_id($con);
		$query1="insert into patientmedicaldetail(patient_id,smoke,bp,heart_issues,diabetes)values('$patient_id','$smoke','$bp','$heart_issues','diabetes')";
		
		mysqli_query($con,$query1) or die("Error Inserting the patient Medical Details");
		
		$query2="insert into patientrelativedetail(patient_id,patient_rname,patient_rcontact_number,patient_relationship)values('$patient_id','$rname','$rcontact_number','$relationship')";
		
		mysqli_query($con,$query2) or die("Error Inserting the patient Relationship Details");
		
		$query3="insert into patientdoctordetail(patient_id,patient_dname,patient_demail,patient_rcontact_number,patient_hospital_address)values('$patient_id','$dname','$demail','$dcontact_number','$hospital_address')";
		
		mysqli_query($con,$query3) or die("Error Inserting the patient Doctor Details");
	}
	
}
?>