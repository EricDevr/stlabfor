<?php
require_once("includes/posts.php");
$posts_object = new POSTS($mysqli);
$portada = $posts_object->ob_portada();
$smarty->assign("portada", $portada);

$new_posts = $posts_object->ob_new_posts();
$smarty->assign("new_posts", $new_posts);

$aside_posts = $posts_object->ob_aside_posts();
$smarty->assign("aside_posts", $aside_posts);

$smarty->display("home/index.html");
?>