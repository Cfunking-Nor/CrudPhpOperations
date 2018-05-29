<!doctype html>
<html>
<head>
	<title>Home of CRUD operations</title>
</head>
<body>

<form name="categories">

<a href="add.php">Add a User</a>
<a href="update.php">Update a User</a>
<a href="delete.php">Delete a User</a>

<?php include 'database.php'; ?>


<?php

$sql_query = "select userID,username,pWord from books";

$result = mysqli_query($conn,$sql_query);
if(!$result){
	die("Database Connection Failed".mysql_error());
}

while($row=mysqli_fetch_array($result)){
	$userID = $row['userID'];
	$userName = $row['username'];
	$pWord = $row['pWord'];

	echo "<table align='center'>";

		echo "<td>$userID</td>";
		echo "<td>$userName</td>";
		echo "<td>$pWord</td>";
	echo "</table>";

}


?>

</form>

</body>
</html>
