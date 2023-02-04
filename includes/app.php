<?php
session_start();
require_once("config.php");
require_once("libs/Smarty.class.php");
$smarty = new SMARTY;
$smarty->assign("URLBASE", $URLBASE);
if(isset($_SESSION["user"])) {
    $smarty->assign("user", $_SESSION["user"]);
} else {
    $smarty->assign("user", "");
}
?>