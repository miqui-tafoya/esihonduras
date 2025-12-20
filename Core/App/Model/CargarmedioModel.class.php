<?php
namespace Model;

use Model\Database;

class CargarmedioModel extends Model {

    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    // GETTER

    // SETTERS

    // SEND
    public function sendData($data) {
        $new = $this->db->crudCall('create', 'tb_galeria', $data, '', '');
        return $new;
    }
}