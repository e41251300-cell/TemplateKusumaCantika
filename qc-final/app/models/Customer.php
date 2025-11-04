<?php
require_once _DIR_ . '/../config/Database.php';
require_once _DIR_ . '/../models/costume.php';

class CostumeController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Costume($db);
    }

    public function index() {
        $data = $this->model->getAll();
        include _DIR_ . '/../views/costume_views.php';
    }
}
?>
