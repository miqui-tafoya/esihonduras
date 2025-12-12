<?php
namespace Model;

use Model\Database;

class CategoriaModel extends Model {
    private Database $db;
    public array $existe;
    public $categoria;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setCategoria($query);
        }
    }
    // GETTERS
    private function getCategoria($query) {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_categorias', ['slug_categoria' => $query]);
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
}