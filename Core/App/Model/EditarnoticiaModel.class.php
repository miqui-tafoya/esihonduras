<?php
namespace Model;

use Model\Database;

class EditarnoticiaModel extends Model {

    private Database $db;
    public array $existe;
    public $categorias;
    public $noticia;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setEntradas($query);
        }
        $this->setCategoria();
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getCategoria() {
        $columnas = ['tb_categorias_id', 'nombre_categoria'];
        $data = $this->db->dbCall('all', false, $columnas, 'tb_categorias', ['tipo' => 'noticia'], ['DESC' => 'tb_categorias_id']);
        return $data;
    }
    private function getEntradas($query) {
        $cols = ['all'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_entradas', ['tb_entradas_id' => $query]);
        $portada = $this->getPortada($data['tb_galeria_id']);
        $data['portada'] = $portada['galeria_url'];
        $data['entradas_titulo'] = html_entity_decode($data['entradas_titulo'], ENT_QUOTES, 'UTF-8');
        $data['cuerpo'] = html_entity_decode($data['cuerpo'], ENT_QUOTES, 'UTF-8');
        return $data;
    }

    // SETTERS
    public function setIds() {
        $cols = ['tb_entradas_id'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'noticia']);
        $temp = [];
        foreach ($data as $value) {
            array_push($temp, $value['tb_entradas_id']);
        }
        $this->existe = $temp;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE);
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }
    private function setEntradas($query) {
        $data = $this->getEntradas($query);
        $this->noticia = $data;
    }
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
    public function updateEntryData($tipo, $data, $id) {
        switch ($tipo) {
            case 'galeria':
                $mod = $this->db->crudCall('update', 'tb_galeria', $data, $id, 'tb_galeria_id');
                break;
            default:
                $mod = $this->db->crudCall('update', 'tb_entradas', $data, $id, 'tb_entradas_id');
                break;
        }
        return $mod;
    }
}