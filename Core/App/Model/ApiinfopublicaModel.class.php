<?php
namespace Model;

use Model\Database;
use Middleware;

class ApiinfopublicaModel extends Model {

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
            $value['cuerpo'] = html_entity_decode($value['cuerpo'], ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    public function getEntradas($id) {
        $cors = new Middleware;
        header("Access-Control-Allow-Origin: " . $cors->getCorsOrigin());
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_entradas', ['tipo' => 'publica', 'publicado' => 1, 'tb_entradas_id' => $id]);
        $portada = $this->getPortada($data['tb_galeria_id']);
        $data['portada'] = $portada['galeria_url'];
        $data['entradas_titulo'] = html_entity_decode($data['entradas_titulo'], ENT_QUOTES, 'UTF-8');
        $data['cuerpo'] = html_entity_decode($data['cuerpo'], ENT_QUOTES, 'UTF-8');
        return $data;
    }
    public function getEntradasFiltradas($filtros, $id) {
        $cors = new Middleware;
        header("Access-Control-Allow-Origin: " . $cors->getCorsOrigin());
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
        $cols = ['all'];
        $data = [];
        foreach ($filtros as $key => $value) {
            $temp = $this->db->dbCall('one', false, $cols, 'tb_entradas', ['tipo' => 'publica', 'publicado' => 1, 'categoria' => $key, 'tb_entradas_id' => $id]);
            if (!empty($temp)) {
                $portada = $this->getPortada($temp['tb_galeria_id']);
                $temp['portada'] = $portada['galeria_url'];
                $temp['entradas_titulo'] = html_entity_decode($temp['entradas_titulo'], ENT_QUOTES, 'UTF-8');
                $temp['cuerpo'] = html_entity_decode($temp['cuerpo'], ENT_QUOTES, 'UTF-8');
                array_push($data, $temp);
            }
        }
        return $data;
    }
    public function getBusqueda() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_busca_index');
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