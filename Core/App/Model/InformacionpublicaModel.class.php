<?php
namespace Model;

use Model\Database;

class InformacionpublicaModel extends Model {

    private Database $db;
    public $categorias;
    public $publicaciones;

    public function __construct() {
        $this->db = new Database();
        $this->setCategorias();
        $this->setPublicaciones();
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getCategorias() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_categorias', ['tipo' => 'publica']);
        foreach ($data as $key => &$value) {
            html_entity_decode($value['nombre_categoria'], ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    private function getPublicaciones() {
        $cols = ['all'];
        $data = $this->db->dbCall(6, false, $cols, 'tb_entradas', ['tipo' => 'publica', 'publicado' => 1], ['DESC' => 'entradas_timestamp']);
        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
            $value['entradas_titulo'] = html_entity_decode($value['entradas_titulo'], ENT_QUOTES, 'UTF-8');
            $value['resumen'] = html_entity_decode($value['resumen'], ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    // SETTERS
    private function setCategorias() {
        $data = $this->getCategorias();
        $this->categorias = $data;
    }
    private function setPublicaciones() {
        $data = $this->getPublicaciones();
        $this->publicaciones = $data;
    }
}