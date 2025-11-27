<?php
namespace Model;

use Model\Database;

class EntradaModel extends Model {

    private Database $db;
    public array $existe;
    public $entrada;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setEntradas($query);
        }
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getEntradas($query) {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_entradas', ['publicado' => 1, 'tb_entradas_id' => $query]);
        $portada = $this->getPortada($data['tb_galeria_id']);
        $data['portada'] = $portada['galeria_url'];
        return $data;
    }
    // SETTERS
    public function setIds() {
        $cols = ['tb_entradas_id'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['publicado' => 1]);
        $temp = [];
        foreach ($data as $value) {
            array_push($temp, $value['tb_entradas_id']);
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
    private function setEntradas($query) {
        $data = $this->getEntradas($query);
        $this->entrada = $data;
    }
}