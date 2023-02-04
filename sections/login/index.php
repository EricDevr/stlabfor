<?php
require_once("includes/login.php");
$login_object = new LOGIN_CLASS($mysqli);
if(isset($_POST["email"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $res = $login_object->login($email, $pass);
    if($res != "success") {
        $smarty->assign("message", $res);
    } else {
        header("location: $URLBASE");
    }
} else {
    $smarty->assign("message","");
}

$smarty->display("login/index.html");
?>