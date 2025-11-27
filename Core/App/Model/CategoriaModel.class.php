<?php
namespace Model;

use Model\Database;

class CategoriaModel extends Model {
    private Database $db;
    public array $existe;
    public $categoria;
    public $entradas;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setCategoria($query);
            $this->setEntradas();
        }
    }
    // GETTERS
    private function getCategoria($query) {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_categorias', ['slug_categoria' => $query]);
        return $data;
    }
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getEntradas() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia', 'publicado' => 1, 'categoria' => $this->categoria['tb_categorias_id']]);
        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
        }
        return $data;
    }
    // SETTERS
    public function setIds() {
        $cols = ['slug_categoria'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_categorias');
        $temp = [];
        foreach ($data as $value) {
            array_push($temp, $value['slug_categoria']);
        }
        $this->existe = $temp;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE);
            exit;
        }
        $validation = in_array($id, $this->existe, true);
        return $validation;
    }
    private function setCategoria($query) {
        $data = $this->getCategoria($query);
        $this->categoria = $data;
    }
    private function setEntradas() {
        $data = $this->getEntradas();
        $this->entradas = $data;
    }
}