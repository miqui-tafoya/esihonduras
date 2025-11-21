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
        $data = $this->db->dbCall('one', false, $cols, 'usuarios', ['login_email' => $post['login']]);
        return $data;
    }
    public function sendData_fetchLogin_name($post) {
        $cols = ['login_name', 'password'];
        $data = $this->db->dbCall('one', false, $cols, 'usuarios', ['login_name' => $post['login']]);
        return $data;
    }

    public function sendData_fetchUsuario($post) {
        $data['usr'] = $this->db->dbCall('one', false, 'all', 'usuarios', ['login_email' => $post]);
        if (empty($data['usr'])) {
            $data['usr'] = $this->db->dbCall('one', false, 'all', 'usuarios', ['login_name' => $post]);
        }
        $data['meta'] = $this->db->dbCall('one', false, 'all', 'usuarios_meta', ['user_id' => $data['usr']['uID']]);
        return $data;
    }
}