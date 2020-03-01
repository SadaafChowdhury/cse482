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

$speciality=$_POST['special'];

$sql = "(SELECT A.FIRSTNAME, A.LASTNAME, A.USERNAME, A.EMAIL, A.GENDER, D.USER_ID, D.SPECIALITY ,D.TIME_FOR_GIVING_APP  
		FROM DOCTOR AS D, AUTH_USER AS A  WHERE D.SPECIALITY ='".$speciality."' AND D.USER_ID =A.ID)";

	
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
		<caption class="title">INFO ACCORDING TO SPECIALITY </caption
		<thead>
			<tr>
			    <th>No</th>
				<th>DOC_USER_ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>User name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Speciality</th>
				<th>Appointment time</th>
				
				
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
					<td>'.$row['USER_ID'].'</td>
					<td>'.$row['FIRSTNAME'].'</td>
					<td>'.$row['LASTNAME'].'</td>
					<td>'.$row['USERNAME'].'</td>
					<td>'.$row['GENDER'].'</td>
					<td>'.$row['EMAIL'].'</td>
					<td>'.$row['SPECIALITY'].'</td>
					<td>'.$row['TIME_FOR_GIVING_APP'].'</td>
					
					
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
		
</body>
</html>