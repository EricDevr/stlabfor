<?php
require_once("includes/app.php");
require_once("includes/db_connection.php");
require_once("includes/posts.php");
require_once("includes/categories.class.php");
if(isset($_GET["logout"])) {
    session_destroy();
    header("location: $URLBASE");
}
$posts_object = new POSTS($mysqli);
$internet = $posts_object->ob_posts_cate("internet");
$entretenimiento = $posts_object->ob_posts_cate("entretenimiento");
$smarty->assign("internet", $internet);
$smarty->assign("entretenimiento", $entretenimiento);

$categories_object = new CATEGORIES($mysqli);
$categories = $categories_object->ob_categories();
$smarty->assign("CATEGORIES", $categories);

$section = "home";
if(isset($_GET["section"])) {
    $section = $_GET["section"];
}
require_once("sections/$section/index.php");
?>