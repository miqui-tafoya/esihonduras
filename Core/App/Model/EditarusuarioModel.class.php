<?php
namespace Model;

use Model\Database;

class EditarusuarioModel extends Model {

    private Database $db;
    public array $existe;
    public $usuario;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setUsuario($query);
        }
    }
    // GETTERS
    private function getUsuario($query) {
        $cols = ['tb_usuarios_id,login_email,nombre,apellido'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_usuarios', ['tb_usuarios_id' => $query]);
        return $data;
    }

    // SETTERS
    public function setIds() {
        $cols = ['tb_usuarios_id'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_usuarios');
        $temp = [];
        foreach ($data as $value) {
            array_push($temp, $value['tb_usuarios_id']);
        }
        $this->existe = $temp;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE);
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }
    private function setUsuario($query) {
        $data = $this->getUsuario($query);
        $this->usuario = $data;
    }
    // SEND
    public function updateEntryData($data, $id) {
        $mod = $this->db->crudCall('update', 'tb_usuarios', $data, $id, 'tb_usuarios_id');
        return $mod;
    }
}