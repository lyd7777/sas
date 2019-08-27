<?php
session_start();

$username=get("username");
$password=get("password");
require_once '../process/dao.php';
$exists=  checkLogin($username,$password);

if($exists>0){
	$_SESSION["user"] = $exists;
    echo "success";
}else{
   
    echo "failure";
}
function get($input){
    return($_GET[$input]);
}

?>
