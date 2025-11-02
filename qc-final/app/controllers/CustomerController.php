<?php
require_once _DIR_ . '/../config/Database.php';
require_once _DIR_ . '/../models/customer.php';

class CustomerController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Customer($db);
    }

    public function index() {
        $data = $this->model->getAll();
        include _DIR_ . '/../views/customer_views.php';
    }
}
?>
