<?php
require_once("includes/app.php");
require_once("includes/db_connection.php");
require_once("includes/posts.php");
if(isset($_GET["logout"])) {
    session_destroy();
    header("location: $URLBASE");
}
$posts_object = new POSTS($mysqli);
$noticias = $posts_object->ob_posts_cate("noticias");
$consolas = $posts_object->ob_posts_cate("consolas");
$smarty->assign("noticias", $noticias);
$smarty->assign("consolas", $consolas);

$section = "home";
if(isset($_GET["section"])) {
    $section = $_GET["section"];
}
require_once("sections/$section/index.php");
?>