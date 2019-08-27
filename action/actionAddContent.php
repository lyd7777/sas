<?php
if (!isset($_SESSION)) {
    session_start();
}   
    $content=get("content");

    require_once '../process/dao.php';

    insertContent($content);
    echo "success";

    function get($input){
        return($_GET[$input]);
    }

?>
