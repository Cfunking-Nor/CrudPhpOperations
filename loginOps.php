<?php

include 'database.php';

$userName = $_POST['userName'];
$passWord = $_POST['pWord'];


$sqlQuery = "SELECT * FROM books WHERE username = '$userName' and pWord = '$passWord'";


$results = mysqli_query($conn,$sqlQuery);

if(!$results){
    die("Database Connection Failed".mysql_error());
}

if(mysqli_num_rows($results)){
    
    header('location:home.php');

}

else{

    header('location:home.php');
}
