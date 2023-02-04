<?php

$file_type = $_GET["type"];
switch($file_type) {
    case "image":
        $img = $_FILES["file"]["name"];
        $title = $_POST["title"];
        if(empty($img) or empty($title)) {
            echo "err2";
        } else {
            upload_image();
        }
        break;
    case "video":
        $video = $_FILES["file"]["name"];
        $title = $_POST["title"];
        if(empty($video) or empty($title)) {
            echo "err2";
        } else {
            upload_video();
        }
        break;
    default:
        echo "err1";
}

function upload_image() {
    $image = $_FILES["file"];
    $title = str_replace(" ", "-",$_POST["title"]);
    $type = str_replace("image/",".",$image["type"]);
    $name_image = $title.$type;
    $tmp_name = $image["tmp_name"];
    $folder = "../static/images/";
    if(move_uploaded_file($tmp_name, $folder.$name_image)) {
        echo $name_image;
    } else {
        echo "err3";
    }
}
function upload_video() {
    $video = $_FILES["file"];
    $title = str_replace(" ", "-",$_POST["title"]);
    $type = str_replace("video/",".",$video["type"]);
    $name_video = $title.$type;
    $tmp_name = $video["tmp_name"];
    $folder = "../static/videos/";
    if(move_uploaded_file($tmp_name, $folder.$name_video)) {
        echo $name_video;
    } else {
        echo "err3";
    }
}

?>