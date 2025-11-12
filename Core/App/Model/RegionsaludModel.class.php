<?php
namespace Model;

use Model\Database;

class RegionsaludModel extends Model {

    private Database $db;
    public array $existe;
    //    public $propiedad;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            // $this->setPropiedad($query);
        }
    }
    // GETTERS
    private function getPropiedad($query) {
        // return $data;
    }

    // SETTERS
    public function setIds() {
        $data = [1,2,3,4,5];
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

    private function setPropiedad($query) {
        // $data = $this->getPropiedad($query);
        // $this->propiedad = $data;
    }
}