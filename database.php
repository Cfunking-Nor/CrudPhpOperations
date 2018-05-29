<?php

$conn=mysqli_connect("localhost","root","");

if(!$conn){
	die("Database Connection Failed".mysql_error());
}


$db_conn=mysqli_select_db($conn,"crudOperations");

if(!$db_conn){
	die("Database Connection Failed".mysql_error());
}
