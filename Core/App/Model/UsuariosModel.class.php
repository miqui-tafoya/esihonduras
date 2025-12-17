<?php
namespace Model;

use Model\Database;

class UsuariosModel extends Model {

    public array $existe;
    public $paginado;
    public $usuarios;
    private Database $db;

    public function __construct($query = null) {
        $this->db = new Database();
        $this->setIds();
        if ($query != null) {
            $this->setUsuarios($query);
        }
    }

    // GETTERS
    private function getUsuarios($query) {
        $res_pp = 10;
        $page = $query;
        $this_result = ($page - 1) * $res_pp;
        $sql = "SELECT u.tb_usuarios_id, u.nombre, u.apellido, u.login_email FROM tb_usuarios AS u ORDER BY u.tb_usuarios_id DESC LIMIT $this_result,$res_pp";
        $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }

    // SETTERS
    public function setIds() {
        $res_pp = 10;
        $sql = "SELECT u.tb_usuarios_id FROM tb_usuarios AS u";
        $result = $this->db->dbMYSQLCall_raw_ALL_NUM($sql);
        $num_pages = count($result) / $res_pp;
        $tot_pages = ceil($num_pages);
        $temp = range(1, (int) $tot_pages);
        $this->existe = $temp;
        $this->paginado = $tot_pages;
    }
    public function setUsuarios($query) {
        $data = $this->getUsuarios($query);
        $this->usuarios = $data;
    }
    public function validateId($id) {
        if (empty($id)) {
            header('Location:' . URL_BASE . 'usuarios/1');
            exit;
        }
        $validation = in_array((int) $id, $this->existe, true);
        return $validation;
    }

    // SEND
    public function deleteEntryData($id) {
        $del = $this->db->crudCall('delete', 'tb_usuarios', '', ['tb_usuarios_id' => $id], '');
        return $del;
    }
}