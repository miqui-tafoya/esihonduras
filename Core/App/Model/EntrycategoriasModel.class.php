<?php
namespace Model;

use Model\Database;

class EntrycategoriasModel extends Model {
   public array $existe;
    public $paginado;
    public $categorias;
    private Database $db;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setCategorias($query);
        }
    }

    // GETTERS
    private function getCategorias($query) {
        $res_pp = 10;
        $page = $query;
        $this_result = ($page - 1) * $res_pp;
        $sql = "SELECT * FROM tb_categorias ORDER BY tipo ASC LIMIT $this_result,$res_pp";
        $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }

    // SETTERS
    public function setIds() {
        $res_pp = 10;
        $sql = "SELECT tb_categorias_id FROM tb_categorias";
        $result = $this->db->dbMYSQLCall_raw_ALL_NUM($sql);
        $num_pages = count($result) / $res_pp;
        $tot_pages = ceil($num_pages);
        $temp = range(1, (int) $tot_pages);
        $this->existe = $temp;
        $this->paginado = $tot_pages;
    }
    public function setCategorias($query) {
        $data = $this->getCategorias($query);
        $this->categorias = $data;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE . 'entrycategorias/1');
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    // SEND
    public function deleteEntryData($id) {
        $del = $this->db->crudCall('delete', 'tb_categorias', '', ['tb_categorias_id' => $id], '');
        return $del;
    }
}