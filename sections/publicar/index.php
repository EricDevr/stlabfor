<?php
require_once("includes/categories.php");
$cate_object = new CATEGORIES($mysqli);

$categories = $cate_object->ob_categories();


$smarty->assign("categories", $categories);
$smarty->display("publicar/index.html");
?>