<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hospital'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

session_start();

if ( isset( $_SESSION['USER_VALUE'] ) ) {
    //echo("USER_ID present\n");
	$USER_ID =$_SESSION['USER_VALUE'];
	//echo $USER_ID;
}

$patient_problem = $_POST['problem'];

$duser_id = $_POST['d_userid'];

$tow= "INSERT INTO APPOINTMENT(DOCTOR_USER_ID, PATIENT_USER_ID ,PROBLEM, APPOINTMENT_DATE)

VALUES ('".$duser_id."', '".$USER_ID."' , '".$patient_problem."', NOW())";

if ($conn->query($tow) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: ";
}
?>
