<?php
require_once _DIR_ . '/../config/Database.php';
require_once _DIR_ . '/../models/owner.php';

class OwnerController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new Owner($db);
    }

    public function index() {
        $data = $this->model->getAll();  // ambil semua data dari tabel owner
        include _DIR_ . '/../views/owner_views.php';
    }
}
?>
