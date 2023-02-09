<?php
class CATEGORIES {
    private $conx;
    public function __construct($mysqli) {
        $this->conx = $mysqli;
    }
    public function ob_categories() {
        $stmt = $this->conx->prepare("SELECT name FROM categories");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    public function __destruct() {
        $this->conx->close();
    }
}
?>