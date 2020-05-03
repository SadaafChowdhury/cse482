<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'groceryshop'; // Database Name

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

$sql = "(SELECT A.FIRSTNAME, A.LASTNAME, A.USERNAME, A.EMAIL, A.GENDER, A.ID, A.CONTACT , A.LOCATION
		FROM AUTH_USER AS A WHERE A.ID='".$USER_ID."')";
	
$query = mysqli_query($conn, $sql);


if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>


<html>
<head>
	<title>DISPLAYING MY INFORMATION</title>
	<link rel="stylesheet" type="text/css" href="styleTable.css">
	
</head>

<body>
<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">MY INFO </caption
		<thead>
			<tr>
			    <th>No</th>
				<th>MY USER ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>User name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Contact</th>
				<th>Location</th>
				
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
					<td>'.$row['ID'].'</td>
					<td>'.$row['FIRSTNAME'].'</td>
					<td>'.$row['LASTNAME'].'</td>
					<td>'.$row['USERNAME'].'</td>
					<td>'.$row['GENDER'].'</td>
					<td>'.$row['EMAIL'].'</td>
					<td>'.$row['CONTACT'].'</td>
					<td>'.$row['LOCATION'].'</td>
					
					
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
		
</body>
</html>