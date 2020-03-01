<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'hospital'; // Databas
$speciality ;
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

session_start();
if ( isset( $_SESSION['USER_VALUE'] ) ) {
	$USER_ID =$_SESSION['USER_VALUE'];
	//echo $USER_ID;
}

$sql = "(SELECT A.FIRSTNAME, A.LASTNAME, A.USERNAME, A.EMAIL, A.GENDER, P.PATIENT_USER_ID , P.APPOINTMENT_DATE , p.PROBLEM
		FROM  AUTH_USER AS A , APPOINTMENT AS P WHERE P.DOCTOR_USER_ID ='".$USER_ID."' AND P.PATIENT_USER_ID=A.ID)";

	
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}


?>

<html>
<head>
	<title>DISPLAYING MY GIVEN APPOINTMENT</title>
	<link rel="stylesheet" type="text/css" href="styleTable.css">
	
</head>

<body>
<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">MY GIVEN APPOINTMENT TO PATIENT </caption
		<thead>
			<tr>
			    <th>No</th>
				<th>Patient user id</th>
				<th>First name</th>
				<th>Last name</th>
				<th>User name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Patient Problem</th>
				<th>Appointment date</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['FIRSTNAME'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['PATIENT_USER_ID'].'</td>
					<td>'.$row['FIRSTNAME'].'</td>
					<td>'.$row['LASTNAME'].'</td>
					<td>'.$row['USERNAME'].'</td>
					<td>'.$row['GENDER'].'</td>
					<td>'.$row['EMAIL'].'</td>
					<td>'.$row['PROBLEM'].'</td>
					<td>'.$row['APPOINTMENT_DATE'].'</td>
					
					
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
		
</body>
</html>