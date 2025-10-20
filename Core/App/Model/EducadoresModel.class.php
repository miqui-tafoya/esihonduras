<?php
namespace Model;

use Model\Database;

class EducadoresModel extends Model {

    private Database $db;
//    public $propiedad;

    public function __construct() {
        $this->db = new Database();
//        $this->setPropiedad();
    }
// GETTERS
//  private function getPropiedad() {
//  return $data;
//  }

    // SETTERS

    // private function setPropiedad() {
    //    $data = $this->getPropiedad();
    //    $this->propiedad = $data;
    // }

    // SEND

}