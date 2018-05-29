<?php

include 'database.php';

$username=$_POST['ID'];
$userpass=$_POST['userpass'];

$sql="SELECT * FROM customertable WHERE CUSTID='$username' and PASSWORD='$userpass'";
$sql_1="SELECT * FROM useraccount WHERE username='$username' and password='$userpass'";
$result=mysqli_query($conn,$sql);
$result_2=mysqli_query($conn,$sql_1);
if(!$result || !$result_2){
	die("Database Connection Failed".mysql_error());
}

if(mysqli_num_rows($result)){
	session_start();
	$SID=$_SESSION['SID']=$username;
	echo "$SID <br>";
	header('location:home.php');
}
else if(mysqli_num_rows($result_2)){
	session_start();
	$SID=$_SESSION['SID']=$username;
	echo "$SID <br>";
	header('location:admin.php');
}
else{
	echo "Wrong Credentials!<br>";
	echo "<a href='unlogin-home.php'>Click here to Continue</a>";
}

?>
