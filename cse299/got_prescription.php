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

$sql = "SELECT D.SPECIALITY,P.DOCTOR_EMAIL, P.PATIENT_USER_ID, P.MEDICINE1, P.MEDICINE2,P.MEDICINE3, P.MEDICINE4,P.MEDICINE5,P.MEDICINE6,P.REMARK1,P.REMARK2,P.REMARK3,P.REMARK4,P.REMARK5,P.REMARK6,P.TEST1,P.TEST2,P.TEST3,P.TEST4,P.CC1,P.CC2,P.CC3,P.CC4,P.PRESCRIPTION_DATE 
		FROM PRESCRIPTIONS AS P,AUTH_USER AS A ,DOCTOR AS D WHERE P.PATIENT_USER_ID='".$USER_ID."' AND P.DOCTOR_EMAIL= A.EMAIL AND D.USER_ID=A.ID ";
	
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>


<html>
<head>
	<title>DISPLAYING DOCTOR INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="styleTable.css">
	
</head>

<body>
<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">MY INFO </caption
		<thead>
			<tr>
			    <th>No</th>
				<th>DOC_Speciality</th>
				<th>Doc email</th>
				<th>patient user id</th>
				<th>MEDICINE1</th>
				<th>MEDICINE2</th>
				<th>MEDICINE3</th>
				<th>MEDICINE4</th>
				<th>MEDICINE5</th>
				<th>MEDICINE6</th>
				<th>Ridirect1</th>
				<th>Ridirect2</th>
				<th>Ridirect3</th>
				<th>Ridirect4</th>
				<th>Ridirect5</th>
				<th>Ridirect6</th>
				<th>TEST1</th>
				<th>TEST2</th>
				<th>TEST3</th>
				<th>TEST4</th>
				<th>CC1</th>
				<th>CC2</th>
				<th>CC3</th>
				<th>CC4</th>
				<th>PRESCRIPTION_DATE</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['SPECIALITY'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['SPECIALITY'].'</td>
					<td>'.$row['DOCTOR_EMAIL'].'</td>
					<td>'.$row['PATIENT_USER_ID'].'</td>
					<td>'.$row['MEDICINE1'].'</td>
					<td>'.$row['MEDICINE2'].'</td>
					<td>'.$row['MEDICINE3'].'</td>
					<td>'.$row['MEDICINE4'].'</td>
					<td>'.$row['MEDICINE5'].'</td>
					<td>'.$row['MEDICINE6'].'</td>
					<td>'.$row['REMARK1'].'</td>
					<td>'.$row['REMARK2'].'</td>
					<td>'.$row['REMARK3'].'</td>
					<td>'.$row['REMARK4'].'</td>
					<td>'.$row['REMARK5'].'</td>
					<td>'.$row['REMARK6'].'</td>
					<td>'.$row['TEST1'].'</td>
					<td>'.$row['TEST2'].'</td>
					<td>'.$row['TEST3'].'</td>
					<td>'.$row['TEST4'].'</td>
					<td>'.$row['CC1'].'</td>
					<td>'.$row['CC2'].'</td>
					<td>'.$row['CC3'].'</td>
					<td>'.$row['CC4'].'</td>
					<td>'.$row['PRESCRIPTION_DATE'].'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
		
</body>
</html>