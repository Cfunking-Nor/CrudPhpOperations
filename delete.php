<!doctype html>
<html>
<head>
	<title>Add Operations</title>
</head>
<body>

<form name="Add" method="POST" action="delete_.php">

<input type="text" name="Identification" placeholder="Enter ID here"/>
<br>

<input type="submit" value="Delete"/>
<?php
include 'database.php';
$sql_query = "select uName,pWord from users";

$result = mysqli_query($conn,$sql_query);
if(!$result){
	die("Database Connection Failed".mysql_error());
}

while($row=mysqli_fetch_array($result)){
	$identif = $row['uName'];
	$UserName = $row['pWord'];

	echo "
		<table>
			<td>$identif</td>
			<td>$UserName</td>
		</table>


	";


}

?>


</form>


</body>
</html>
