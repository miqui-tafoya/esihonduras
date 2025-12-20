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
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getCategorias() {
        $cols = ['nombre_categoria', 'slug_categoria'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_categorias', ['tipo' => 'noticia']);
        foreach ($data as $key => &$value) {
            html_entity_decode($value['nombre_categoria'], ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    private function getHoy() {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1], ['DESC' => 'entradas_timestamp']);
        $portada = $this->getPortada($data['tb_galeria_id']);
        $data['portada'] = $portada['galeria_url'];
        $data['entradas_titulo'] = html_entity_decode($data['entradas_titulo'], ENT_QUOTES, 'UTF-8');
        $data['cuerpo'] = html_entity_decode($data['cuerpo'], ENT_QUOTES, 'UTF-8');
        return $data;
    }
    private function getDestacados() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1, 'destacado' => 1], ['DESC' => 'entradas_timestamp']);
        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
            $value['entradas_titulo'] = html_entity_decode($value['entradas_titulo'], ENT_QUOTES, 'UTF-8');
            $value['cuerpo'] = html_entity_decode($value['cuerpo'], ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    private function getNoticias() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1, 'destacado' => 0], ['DESC' => 'entradas_timestamp']);
        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
            $value['entradas_titulo'] = html_entity_decode($value['entradas_titulo'], ENT_QUOTES, 'UTF-8');
            $value['cuerpo'] = html_entity_decode($value['cuerpo'], ENT_QUOTES, 'UTF-8');
        }
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