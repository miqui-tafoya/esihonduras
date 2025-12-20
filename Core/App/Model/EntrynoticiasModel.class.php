<?php
namespace Model;

use Model\Database;

class EntrynoticiasModel extends Model {

    public array $existe;
    public $paginado;
    public $posts;
    private Database $db;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setPosts($query);
        }
    }

    // GETTERS
    private function getPosts($query) {
        $res_pp = 10;
        $page = $query;
        $this_result = ($page - 1) * $res_pp;
        $sql = "SELECT e.tb_entradas_id, e.entradas_timestamp, e.categoria, e.entradas_titulo, e.destacado, e.publicado, c.nombre_categoria FROM tb_entradas e
        JOIN tb_categorias c ON c.tb_categorias_id=e.categoria 
        WHERE e.tipo = 'noticia'
        ORDER BY e.entradas_timestamp DESC 
        LIMIT $this_result,$res_pp";
        $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }
    public function getDestacados() {
        $columnas = ['cantidad'];
        $data = $this->db->dbCall('all', false, $columnas, 'tb_destacados');
        return $data;
    }

    // SETTERS
    public function setIds() {
        $res_pp = 10;
        $sql = "SELECT e.tb_entradas_id FROM tb_entradas AS e WHERE e.tipo = 'noticia'";
        $result = $this->db->dbMYSQLCall_raw_ALL_NUM($sql);
        $num_pages = count($result) / $res_pp;
        $tot_pages = ceil($num_pages);
        $temp = range(1, (int) $tot_pages);
        $this->existe = $temp;
        $this->paginado = $tot_pages;
    }
    public function setPosts($query) {
        $data = $this->getPosts($query);
        $this->posts = $data;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE . 'entrynoticias/1');
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    // SEND
    public function updateEntryData($data, $id) {
        $mod = $this->db->crudCall('update', 'tb_entradas', $data, $id, 'tb_entradas_id');
        return $mod;
    }
    public function deleteEntryData($id) {
        $del = $this->db->crudCall('delete', 'tb_entradas', '', ['tb_entradas_id' => $id], '');
        return $del;
    }
}