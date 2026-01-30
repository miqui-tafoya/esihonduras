<?php
namespace Model;

use Model\Database;
use Middleware;

class ApientradasModel extends Model {

    private Database $db;

    public $page;
    public $perPage;

    public function __construct() {
        $this->db = new Database();
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    public function getNoticiasPaginadas($page, $perPage) {
        $cors = new Middleware;
        header("Access-Control-Allow-Origin: " . $cors->getCorsOrigin());
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");
        $page = max(1, (int) $page);
        $perPage = max(1, (int) $perPage);
        $offset = ($page - 1) * $perPage;

        $total = $this->db->dbCount('tb_entradas', ['tipo' => 'noticia', 'publicado' => 1]);

        $cols = ['all'];
        $data = ['tipo' => 'noticia', 'publicado' => 1];
        $order = ['DESC' => 'entradas_timestamp'];
        $limits = ['limit' => $perPage, 'offset' => $offset];
        $data = $this->db->dbCall('limit', false, $cols, 'tb_entradas', $data, $order, $limits);

        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
            $value['entradas_titulo'] = html_entity_decode($value['entradas_titulo'], ENT_QUOTES, 'UTF-8');
            $value['cuerpo'] = html_entity_decode($value['cuerpo'], ENT_QUOTES, 'UTF-8');
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
        $result = $this->getNoticiasPaginadas($this->page, $this->perPage);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit;
    }
}