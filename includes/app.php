<?php
require_once("config.php");
require_once("libs/Smarty.class.php");
$smarty = new SMARTY;
$smarty->assign("URLBASE", $URLBASE);
?>