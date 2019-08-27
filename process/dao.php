<?php

/**
* 
* @param type $conn
*/

function checkLogin($username,$password) {
include '../helpers/database.php';
$obj = 0;
$query = "call check_login('$username','$password')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if ($row = mysqli_fetch_array($result)) {
$obj = $row['id'];
}

mysqli_close($conn);
return($obj);
}

// echo json_encode(checkLogin("admin","admin"));

function insertContent($content) {
include '../helpers/database.php';
$sql = "call insert_content('$content')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}
