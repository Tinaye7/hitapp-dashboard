<?php
// database connection code
if(isset($_POST['txtHead']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','hitapp');

// get the post records

$txtHead = $_POST['txtHead'];
$txtDescription = $_POST['txtDescription'];


// database insert SQL code
$sql = "INSERT INTO `news` (`id`, `Heading`, `News`) VALUES ('0', '$txtHead', '$txtDescription')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "News Inserted";
}
}
else
{
	echo "Cannot Add News";
	
}
?>
