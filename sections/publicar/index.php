<?php
if(!isset($_SESSION["user"])) {
    header("location: $URLBASE");
}
$smarty->display("publicar/index.html");
?>