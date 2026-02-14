<?php
namespace Model;

use Model\Database;

class MapaModel extends Model {

    public array $existe;
    public $paginado;
    public $mapa;
    private Database $db;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setMapa($query);
        }
    }

    // GETTERS
    private function getMapa($query) {
        if (empty($query)) {
            $sql = "SELECT * FROM tb_centros c
        ORDER BY c.aldea DESC";
            $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        } else {
            $sql = "SELECT * FROM tb_centros c
        WHERE c.region = $query
        ORDER BY c.aldea DESC";
            $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        }
        return $data;
    }

    // SETTERS
    public function setIds() {
        $sql = "SELECT c.region FROM tb_centros c";
        $result = $this->db->dbMYSQLCall_raw_ALL_NUM($sql);
        $temp = array_column($result, 0);
        $temp = array_unique($temp);
        $temp = array_values($temp);
        $temp = array_map('intval', $temp);
        sort($temp);
        $this->existe = !empty($temp) ? $temp : [1];
        $this->paginado = count($temp);
    }
    public function setMapa($query) {
        $data = $this->getMapa($query);
        $this->mapa = $data;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE . 'mapa/1');
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    // SEND
    public function updateEntryData($data, $id) {
        $mod = $this->db->crudCall('update', 'tb_entradas', $data, $id, 'tb_entradas_id');
        return $mod;
    }
    public function deleteEntryData($id) {
        $del = $this->db->crudCall('delete', 'tb_entradas', '', ['tb_entradas_id' => $id], '');
        return $del;
    }
}