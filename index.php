<?php
require_once("includes/app.php");
require_once("includes/db_connection.php");
$section = "home";
if(isset($_GET["section"])) {
    $section = $_GET["section"];
}
require_once("sections/$section/index.php");
?>