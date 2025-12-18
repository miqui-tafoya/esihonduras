<?php
namespace Model;

use Model\Database;

class NuevanoticiaModel extends Model {

    private Database $db;
    public $categorias;

    public function __construct() {
        $this->db = new Database();
        $this->setCategoria();
    }
    // GETTERS
    private function getCategoria() {
        $columnas = ['tb_categorias_id', 'nombre_categoria'];
        $data = $this->db->dbCall('all', false, $columnas, 'tb_categorias', ['tipo' => 'noticia'], ['DESC' => 'tb_categorias_id']);
        return $data;
    }
    public function getTitulo() {
        $cols = ['entradas_titulo'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas');
        $data = array_column($data, 'entradas_titulo');
        $data = array_map('htmlspecialchars_decode', $data);
        return $data;
    }

    // SETTERS
    private function setCategoria() {
        $data = $this->getCategoria();
        $this->categorias = $data;
    }

    // SEND
    public function sendData($tipo, $data) {
        switch ($tipo) {
            case 'galeria':
                $new = $this->db->crudCall('create', 'tb_galeria', $data, '', '');
                break;
            default:
                $new = $this->db->crudCall('create', 'tb_entradas', $data, '', '');
                break;
        }
        return $new;
    }
}