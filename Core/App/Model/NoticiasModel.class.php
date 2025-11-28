<?php
namespace Model;

use Model\Database;

class NoticiasModel extends Model {

    private Database $db;
    public $categorias;
    public $hoy;
    public $destacados;
    public $noticias;

    public function __construct() {
        $this->db = new Database();
        $this->setCategorias();
        $this->setHoy();
        $this->setDestacados();
        $this->setNoticias();
    }
    // GETTERS
    private function getCategorias() {
        $cols = ['nombre_categoria', 'slug_categoria'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_categorias' , ['tipo' => 'noticia']);
        return $data;
    }
    private function getHoy() {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1], ['DESC' => 'entradas_timestamp']);
        return $data;
    }
    private function getDestacados() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1, 'destacado' => 1], ['DESC' => 'entradas_timestamp']);
        return $data;
    }
    private function getNoticias() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1, 'destacado' => 0], ['DESC' => 'entradas_timestamp']);
        return $data;
    }

    // SETTERS
    private function setCategorias() {
        $data = $this->getCategorias();
        $this->categorias = $data;
    }
    private function setDestacados() {
        $data = $this->getDestacados();
        $this->destacados = $data;
    }
    private function setNoticias() {
        $data = $this->getNoticias();
        $this->noticias = $data;
    }
    private function setHoy() {
        $data = $this->getHoy();
        $this->hoy = $data;
    }
}