<?php
// database connection code
if(isset($_POST['txtFName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','hitapp');

// get the post records

$txtFName = $_POST['txtFName'];
$txtMName = $_POST['txtMName'];
$txtSName = $_POST['txtSName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtReg = $_POST['txtReg'];
$txtProgramme = $_POST['txtProgramme'];
$txtGender = $_POST['txtGender'];
$txtDOB = $_POST['txtDOB'];

// database insert SQL code
$sql = "INSERT INTO `students` (`ID`, `Firstname`, `Middle_Name`,`Surname`,`Email`,`Phone`,`Registration_Number`,`Programme`,`Gender`,`Date_of_Birth`)
 VALUES ('0', '$txtFName','$txtMName','$txtSName', '$txtEmail','$txtPhone','$txtReg','$txtProgramme','$txtGender','$txtDOB')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Student Details Inserted";
}
}
else
{
	echo "Unable to add student";
	
}
?>
