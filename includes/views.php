<?php
require_once("db_connection.php");
$url = $_POST["url"];

$array = explode("/", $url);
$id = $array[4];
if(empty($id)) {
    return "success";
} else {
    $mysqli->query("UPDATE posts SET views=views+1 WHERE id=$id");
    return "success";
}
?>