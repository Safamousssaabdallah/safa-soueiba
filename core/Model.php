<?php
// core/Model.php
class Model {
    protected $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
}
