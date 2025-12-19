<?php
namespace Model;

use Model\Database;

class EditarmapaModel extends Model {

    private Database $db;
    public array $existe;
    public $centro;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setCentro($query);
        }
    }
    // GETTERS
    private function getCentro($query) {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_centros', ['tb_centros_id' => $query]);
        return $data;
    }

    // SETTERS
    public function setIds() {
        $cols = ['tb_centros_id'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_centros');
        $temp = [];
        foreach ($data as $value) {
            array_push($temp, $value['tb_centros_id']);
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
    private function setCentro($query) {
        $data = $this->getCentro($query);
        $this->centro = $data;
    }
    // SEND
    public function updateEntryData($data, $id) {
        $mod = $this->db->crudCall('update', 'tb_centros', $data, $id, 'tb_centros_id');
        return $mod;
    }
}