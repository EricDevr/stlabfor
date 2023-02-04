<?php
require_once("db_connection.php");

class POSTS {
    private $conx;
    public function __construct($conx) {
        $this->conx = $conx;
    }
    public function ob_portada() {
        $stmt = $this->conx->prepare("SELECT id,image,title,content,date FROM posts ORDER BY date DESC LIMIT 1");
        $stmt->execute();
        $result = $stmt->get_result();
        $post = $result->fetch_array();
        if($stmt->affected_rows >= 1) {
            $post["date"] = ob_tiempo_transcurrido($post["date"]);
            return $post;
        }
    }
    
    public function ob_post($id) {
        $stmt = $this->conx->prepare("SELECT * FROM posts WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $post = $result->fetch_array();
        $post["date"] = ob_tiempo_transcurrido($post["date"]);
        return $post;
    }

    public function ob_new_posts() {
        $stmt = $this->conx->prepare("SELECT id,image,title,date FROM posts ORDER BY date DESC LIMIT 1,10");
        $stmt->execute();
        $result = $stmt->get_result();
        $posts = array();
        while ($post = $result->fetch_array()) {
            $post["date"] = ob_tiempo_transcurrido($post["date"]);
            $posts[] = $post;
        }
        return $posts;
    }
    public function ob_aside_posts() {
        $stmt = $this->conx->prepare("SELECT id,image,title,date FROM posts ORDER BY views DESC LIMIT 10");
        $stmt->execute();
        $result = $stmt->get_result();
        $posts = array();
        while($post = $result->fetch_array()) {
            $post["date"] = ob_tiempo_transcurrido($post["date"]);
            $posts[] = $post;
        }
        return $posts;
    }
}

function ob_tiempo_transcurrido($post_date) {
    $tiempo_post = new DateTime($post_date);
    $tiempo_ac = new DateTime(date("Y-m-d H:i:s"));
    $diff = $tiempo_post->diff($tiempo_ac);
    switch ($diff) {
        case $diff->y >= 1:
            return ($diff->y == 1) ? "hace 1 año":"hace ".$diff->y." años";
            break;
        case $diff->m >= 1:
            return ($diff->m == 1) ? "hace 1 mes":"hace ".$diff->m." meses";
            break;
        case $diff->d >= 1:
            return ($diff->d == 1) ? "hace 1 dia":"hace ".$diff->d." dias";
            break;
        case $diff->h >= 1:
            return ($diff->h == 1) ? "hace 1 hora":"hace ".$diff->h." horas";
            break;
        case $diff->i >= 1:
            return ($diff->i == 1) ? "hace 1 minuto":"hace ".$diff->i." minutos";
            break;
        default:
            return "hace unos instantes";
    }
}
?>