<?php
namespace Model;

use Model\Database;

class NuevousuarioModel extends Model {

    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }
    // GETTERS
    public function getEmails() {
        $cols = ['login_email'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_usuarios');
        $data = array_column($data, 'login_email');
        return $data;
    }
    // SETTERS

    // SEND
    public function sendData($data) {
        $new = $this->db->crudCall('create', 'tb_usuarios', $data, '', '');
        return $new;
    }
}