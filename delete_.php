<?php

include 'database.php';

$ID = $_POST['Identification'];

$sql_query = "delete from books where Ident=$ID";

$results=mysqli_query($conn,$sql_query);
if(!$results){
	die("Database Connection Failed".mysql_error());
}

header("location:home.php");
