<?php
require_once("includes/posts.php");
$posts_object = new POSTS($mysqli);
$id = $_GET["id"];
$post = $posts_object->ob_post($id);
$smarty->assign("post", $post);

$aside_posts = $posts_object->ob_aside_posts();
$smarty->assign("aside_posts", $aside_posts);

$smarty->display("post/index.html");
?>