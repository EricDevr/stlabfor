<?php
require_once("db_connection.php");

$image = $_FILES["image"];
$title = $_POST["title"];
$content = $_POST["content"];
$category = $_POST["category"];
if(empty($image["name"]) or empty($title) or empty($content) or empty($category)) {
    echo "campos vacíos";
} else {
    $image_name = upload_image($title, $image);
    if($image_name == "errui") {
        echo "error al subir la imagen";
    } else {
        $title = str_replace(" ", "-", $title);
        $content = htmlspecialchars($content);
        $upload = upload_post($image_name,$title,$content,$category);
        echo $upload;
    }
}


function upload_post($image_name,$title,$content,$category) {
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO posts(image,user,title,content,category)VALUES(?,'stlab',?,?,?)");
    $stmt->bind_param("ssss", $image_name, $title, $content, $category);
    $stmt->execute();
    $stmt->get_result();
    if($stmt->error) {
        return "error al publicar post";
    } else {
        return "success";
    }
}


function upload_image($title,$image) {
    $name = str_replace(" ","-",$title);
    $type = str_replace("image/",".",$image["type"]);
    $name_image = $name.$type;
    $tmp_name = $image["tmp_name"];
    $folder = "../static/images/";
    if(move_uploaded_file($tmp_name, $folder.$name_image)) {
        return $name_image;
    } else {
        return "errui";
    }
}
?>