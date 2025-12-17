<?php
namespace Model;

use Model\Database;

class MediosModel extends Model {

    public array $existe;
    public $paginado;
    public $medios;
    private Database $db;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setMedios($query);
        }
    }

    // GETTERS
    private function getMedios($query) {
        $res_pp = 20;
        $page = $query;
        $this_result = ($page - 1) * $res_pp;
        $sql = "SELECT * FROM tb_galeria AS g WHERE metaParent != 'perfil' ORDER BY tb_galeria_id DESC LIMIT $this_result,$res_pp";
        $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }

    public function getMediosExplorador($query, $imagenes_pp) {
        $db = new Database();
        $res_pp = $imagenes_pp;
        $page = $query;
        $this_result = ($page - 1) * $res_pp;
        $sql = "SELECT * FROM tb_galeria AS g WHERE metaParent = 'entrada' ORDER BY tb_galeria_id DESC LIMIT $this_result,$res_pp";
        $data = $db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }

    public function getTotalMediosCount() {
        $db = new Database();
        $sql = "SELECT COUNT(*) as total FROM tb_galeria AS g WHERE metaParent = 'entrada'";
        $result = $db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $result[0]['total'];
    }

    // SETTERS
    public function setIds() {
        $res_pp = 20;
        $sql = "SELECT g.tb_galeria_id FROM tb_galeria AS g WHERE metaParent != 'perfil'";
        $result = $this->db->dbMYSQLCall_raw_ALL_NUM($sql);
        $num_pages = count($result) / $res_pp;
        $tot_pages = ceil($num_pages);
        $temp = range(1, (int) $tot_pages);
        $this->existe = $temp;
        $this->paginado = $tot_pages;
    }
    public function setMedios($query) {
        $data = $this->getMedios($query);
        $this->medios = $data;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE . 'medios/1');
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    // SEND
    public function deleteEntryData($id) {
        $col = ['metaParent', 'galeria_url'];
        $data = $this->db->dbCall('one', false, $col, 'tb_galeria', ['tb_galeria_id' => $id]);
        $base_dir = APP_ROOT . DIRECTORY_SEPARATOR . "Public" . DIRECTORY_SEPARATOR . "recursos" . DIRECTORY_SEPARATOR;
        switch ($data['metaParent']) {
            case 'portada':
                $target_dir = $base_dir . 'portadas';
                break;
            default:
                $target_dir = $base_dir . 'entradas';
                break;
        }
        unlink($target_dir . DIRECTORY_SEPARATOR . $data['url']);
        $del = $this->db->crudCall('delete', 'tb_galeria', '', ['tb_galeria_id' => $id], '');
        return $del;
    }
}