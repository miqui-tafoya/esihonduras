<?php
namespace Model;

use Model\Database;

class ArchivoModel extends Model {

    private Database $db;
    public $noticias;

    public function __construct() {
        $this->db = new Database();
        $this->setNoticias();
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getNoticias() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1], ['DESC' => 'entradas_timestamp']);
        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
        }
        return $data;
    }
    public function getBusqueda() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_busca_index');
        return $data;
    }
    // SETTERS
    private function setNoticias() {
        $data = $this->getNoticias();
        $this->noticias = $data;
    }
}