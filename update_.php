<?php

include 'database.php';

$Identi = $_POST['Identification'];
$userName = $_POST['UserName'];
$passWord = $_POST['PassWord'];


$sql_query = "  update books set uName='$userName',pWord='$passWord' where Ident  = $Identi  ";

$result=mysqli_query($conn,$sql_query);

if(!$result){
	die("Database Connection Failed".mysql_error());
}

header("location:home.php");
