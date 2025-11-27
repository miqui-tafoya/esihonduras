<?php
namespace Model;

use Model\Database;

class RegionsaludModel extends Model {

    private Database $db;
    public array $existe;
    public $centros;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setCentros($query);
        }
    }
    // GETTERS
    private function getCentros($query) {
        $col = 'all';
        $data = $this->db->dbCall('all', false, $col, 'tb_centros', ['region' => $query]);
        return $data;
    }

    // SETTERS
    public function setIds() {
        $data = range(1,20);
        $this->existe = $data;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE);
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    private function setCentros($query) {
        $data = $this->getCentros($query);
        $this->centros = $data;
    }
}