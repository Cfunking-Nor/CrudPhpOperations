<?php

include 'database.php';


$userID = $_POST['Identification'];
$userName = $_POST['UserName'];
$passWord = $_POST['PassWord'];

$sql_query = " insert into books VALUES($userID, '$userName', '$passWord')  ";

$result = mysqli_query($conn,$sql_query);
if(!$result){
	die("Database Connection Failed".mysql_error());
}
else{
	echo "<script>alert('Record Saved')</script>";
	header("location:home.php");
}
