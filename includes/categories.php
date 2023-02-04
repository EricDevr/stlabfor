<?php
class CATEGORIES {
    private $conx;
    public function __construct($conx) {
        $this->conx = $conx;
    }
    public function ob_categories() {
        $stmt = $this->conx->prepare("SELECT name FROM categories");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
?>