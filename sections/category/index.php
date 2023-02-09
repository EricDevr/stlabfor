<?php

$category = $_GET["name"];
$posts = $posts_object->ob_posts_all($category);


$smarty->assign("TITLE", $category);
$smarty->assign("POSTS", $posts);
$smarty->display("category/index.html");
?>