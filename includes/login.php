<?php
class LOGIN_CLASS {
    private $conx;
    public function __construct($conx) {
        $this->conx = $conx;
    }
    public function login($email,$password) {
        if(empty($email) or empty($password)) {
            return "campos vacíos";
        } else {
            $stmt = $this->conx->prepare("SELECT name FROM users WHERE email=? AND password=PASSWORD(?)");
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            if($user = $result->fetch_array()) {
                $name = $user["name"];
                $_SESSION["user"] = $name;
                return "success";
            } else {
                return "email o contraseña incorrecta";
            }
        }
    }
}
?>