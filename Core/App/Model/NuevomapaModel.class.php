<?php
namespace Model;

use Model\Database;

class NuevomapaModel extends Model {

    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }
    // GETTERS
    // SETTERS

    // SEND
    public function sendData($data) {
        $new = $this->db->crudCall('create', 'tb_centros', $data, '', '');
        return $new;
    }
}