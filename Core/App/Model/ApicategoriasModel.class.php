<?php
namespace Model;

use Model\Database;

class ApicategoriasModel extends Model {

    private Database $db;

    public $page;
    public $perPage;
    public $categoria;

    public function __construct() {
        $this->db = new Database();
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    public function getNoticiasPaginadas($page, $perPage, $categoria) {
        $page = max(1, (int) $page);
        $perPage = max(1, (int) $perPage);

        $offset = ($page - 1) * $perPage;

        $sqlCount = "SELECT COUNT(*) as total FROM tb_entradas WHERE tipo = ? AND publicado = ? AND categoria = ?";
        $cond = ['noticia', 1, $categoria];
        $stmtCount = $this->db->exeQuery($sqlCount, $cond);
        $resultCount = $stmtCount->get_result()->fetch_assoc();
        $total = (int) $resultCount['total'];

        $sql = "SELECT * FROM tb_entradas 
            WHERE tipo = 'noticia' AND publicado = 1 AND categoria = ?
            ORDER BY entradas_timestamp DESC 
            LIMIT ? OFFSET ?";
        $cond = [$categoria, $perPage, $offset];
        $stmt = $this->db->exeQuery($sql, $cond);
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
        }

        return [
            'entries' => $data,
            'total' => (int) $total,
            'page' => $page,
            'per_page' => $perPage,
            'totalPages' => $perPage > 0 ? (int) ceil($total / $perPage) : 1,
        ];
    }
    // QUERY STRING
    public function queryStringHandler($querystrings) {
        $this->page = $querystrings['page'];
        $this->perPage = $querystrings['per_page'];
        $this->categoria = $querystrings['categoria'];
        $result = $this->getNoticiasPaginadas($this->page, $this->perPage, $this->categoria);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit;
    }
}