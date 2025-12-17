<?php

namespace Model;

use Model\Database;

class LoginModel extends Model {

    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    // GETTERS
    public function sendData_fetchLogin_email($post) {
        $cols = ['login_email', 'password'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_usuarios', ['login_email' => $post['login_email']]);
        return $data;
    }

    public function sendData_fetchUsuario($post) {
        $data = $this->db->dbCall('one', false, 'all', 'tb_usuarios', ['login_email' => $post]);
        return $data;
    }
}