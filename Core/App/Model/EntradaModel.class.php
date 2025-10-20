<?php
namespace Model;

use Model\Database;

class EntradaModel extends Model {

    private Database $db;
    public array $existe;
//    public $propiedad;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
//         $this->setPropiedad($query);
        }
    }
// GETTERS
//  private function getPropiedad($query) {
//  return $data;
//  }

    // SETTERS
    public function setIds() {
        $col = ['columna_id'];
        $data = $this->db->dbCall('all', false, $col, 'tabla_db');
        $temp = [];
        foreach ($data as $value) {
            array_push($temp, $value['columna_id']);
        }
        $this->existe = $temp;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE);
            exit;
        }
    //    $validation = in_array($id, $this->existe, true);
    //    $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    // private function setPropiedad($query) {
    //    $data = $this->getPropiedad($query);
    //    $this->propiedad = $data;
    // }

    // SEND

}