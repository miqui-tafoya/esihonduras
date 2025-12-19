<?php
namespace Model;

use Model\Database;

class NuevacategoriaModel extends Model {

    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }
    // GETTERS
    public function getSlugs() {
        $cols = ['slug_categoria'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_categorias');
        $data = array_column($data, 'slug');
        return $data;
    }
    // SETTERS

    // SEND
    public function sendData($data) {
        $new = $this->db->crudCall('create', 'tb_categorias', $data, '', '');
        return $new;
    }
}