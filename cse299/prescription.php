
<?php
if (isset($_POST['submit'])) {
include_once "connection.php";

$PUSER_ID=$_POST['patient_id'];
echo $PUSER_ID;
$DEMAIL =$_POST['email'];
$MEDICINE1 =$_POST['medicine1'];
$MEDICINE2 =$_POST['medicine2'];
$MEDICINE3 =$_POST['medicine3'];
$MEDICINE4 =$_POST['medicine4'];
$MEDICINE5 =$_POST['medicine5'];
$MEDICINE6 =$_POST['medicine6'];
$REMARK1 =$_POST['remark1'];
$REMARK2 =$_POST['remark2'];
$REMARK3 =$_POST['remark3'];
$REMARK4 =$_POST['remark4'];
$REMARK5 =$_POST['remark5'];
$REMARK6 =$_POST['remark6'];
$CC1 =$_POST['cc1'];
$CC2 =$_POST['cc2'];
$CC3 =$_POST['cc3'];
$CC4 =$_POST['cc4'];
$TEST1 = $_POST['test1'];
$TEST2 = $_POST['test2'];
$TEST3 = $_POST['test3'];
$TEST4 = $_POST['test4'];

$tin= "INSERT INTO PRESCRIPTIONS(DOCTOR_EMAIL, PATIENT_USER_ID, MEDICINE1, MEDICINE2,MEDICINE3, MEDICINE4,MEDICINE5,MEDICINE6,REMARK1,REMARK2,REMARK3,REMARK4,REMARK5,REMARK6,TEST1,TEST2,TEST3,TEST4,CC1,CC2,CC3,CC4,PRESCRIPTION_DATE)

VALUES ('".$DEMAIL."', '".$PUSER_ID."', '".$MEDICINE1."', '".$MEDICINE2."' , '".$MEDICINE3."','".$MEDICINE4."','".$MEDICINE5."','".$MEDICINE6."','".$REMARK1."','".$REMARK2."','".$REMARK3."','".$REMARK4."','".$REMARK5."','".$REMARK6."','".$TEST1."','".$TEST2."','".$TEST3."','".$TEST4."','".$CC1."','".$CC2."','".$CC3."','".$CC4."', NOW())";



if ($conn->query($tin) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: ";
}
$conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<style>

.button {  

  background-color: #34495E;
  border: none;
  color: white;
  padding: 15px 404px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;


}




#header {
    background-color:#34495E;

    color:white;
    text-align:center;
    padding:10px;
}

#nav {
    width: 1331px;
    border: 1px solid black;
    background-color:#eeeeee;
}




#nav1 {
    line-height:40px;
    background-color:#eeeeee;
    height:600px;
    width:200px;
    float:left;
    padding:5px;          
}

#section {
    width:950px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	


}




</style>
</head>
<body>

<div id="header">
 <img src="z.jpg" alt="Smiley face" align="left"; height="80" width="120">
<h1>Online Doctor Prescription </h1>
<h3src="a.png" alt="Smiley face" align="center"; height="100" width="100"> 
</div>

<div id="nav">

<form method="POST" action="">
  &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  
  Doctor Email: <input type="email" placeholder="Email" name="email">&nbsp; &nbsp;  &nbsp;
Patient User ID: <input type="text" placeholder="patient User Id" name="patient_id"> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   Gendar: <input type="text" placeholder="Gender" name="gen"> 
  

</div>
<div id="nav1">
<h2>C/C:</h2>
i.: <input type="text" name="cc1" ><br>
ii.: <input type="text" name="cc2"><br>
iii.: <input type="text" name="cc3" =""><br>
iv.: <input type="text" name="cc4"><br>

<h2><u>TEST</u></h2>
i.: <input type="text" name="test1" value=""><br>
ii.: <input type="text" name="test2" value=""><br>
iii.: <input type="text" name="test3" value=""><br>
iv.: <input type="text" name="test4" value=""><br>
</div>  

<div id="wrapper">
    <div id="first"></div>
    <div id="second">  </div>
</div>
<div id="section">
<h2>Medicine 1:</h2>
Name of medicine: <input type="text" name="medicine1" value=""> 

   remark: <input type="text" name="remark1" >

  <br>
  
  
<h2>Medicine 2:</h2>

Name of medicine: <input type="text" name="medicine2" value=""> 

  remark: <input type="text" name="remark2" value="">
  

 <h2>Medicine 3:</h2>
Name of medicine: <input type="text" name="medicine3" value=""> 
remark: <input type="text" name="remark3" value="">
<br>

  
<h2>Medicine 4:</h2>
Name of medicine: <input type="text" name="medicine4" value=""> 
remark: <input type="text" name="remark4" value="">


  <h2>Medicine 5:</h2>
Name of medicine: <input type="text" name="medicine5" value=""> 
remark: <input type="text" name="remark5" value="">
<br>

<h2>Medicine 6:</h2>
Name of medicine: <input type="text" name="medicine6" value=""> 
remark: <input type="text" name="remark6" value="">
</br>
<button type="submit" name="submit">SUBMIT</button>
 </form>
</div>

<div id="footer">
Online Doctor solution
</div>

</body>
</html>
