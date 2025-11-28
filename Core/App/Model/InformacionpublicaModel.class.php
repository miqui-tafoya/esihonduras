<?php
namespace Model;

use Model\Database;

class InformacionpublicaModel extends Model {

    private Database $db;
    public $categorias;
    public $publicaciones;

    public function __construct() {
        $this->db = new Database();
        $this->setCategorias();
        $this->setPublicaciones();
    }
    // GETTERS
    private function getCategorias() {
        $cols = ['nombre_categoria', 'slug_categoria'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_categorias', ['tipo' => 'publica']);
        return $data;
    }
    private function getPublicaciones() {
        $cols = ['all'];
        $data = $this->db->dbCall('all', false, $cols, 'tb_entradas', ['tipo' => 'publica', 'publicado' => 1], ['DESC' => 'entradas_timestamp']);
        return $data;
    }
    // SETTERS
    private function setCategorias() {
        $data = $this->getCategorias();
        $this->categorias = $data;
    }
    private function setPublicaciones() {
        $data = $this->getPublicaciones();
        $this->publicaciones = $data;
    }
    // QUERYSTRING
    public function tema($param) {
        $sql = "SELECT * FROM taxonomia WHERE slug=?";
        $cond = [$param];
        $stmt = $this->db->exeQuery($sql, $cond);
        $info = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);

        $posts = [];
        $sql = 'SELECT pt.post_id FROM post_taxonomia AS pt JOIN taxonomia AS t ON t.tID=pt.taxonomia_id WHERE t.slug=?';
        $cond = [$param];
        $stmt = $this->db->exeQuery($sql, $cond);
        $post_id = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $i = 0;
        foreach ($post_id as $post) {
            $sql = "SELECT p.ID, p.titulo, p.timestamp, p.user_id, p.extracto,g.url FROM post AS p JOIN post_meta AS pm ON pm.post_id=p.ID JOIN galeria AS g ON pm.portada_id=g.gID WHERE p.ID=? AND p.publicado=1 AND pm.es_podcast=0";
            $cond = [$post['post_id']];
            $stmt = $this->db->exeQuery($sql, $cond);
            $data = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
            if (!empty($data)) {
                $posts[$i] = $data;
                $result = $this->adjuntaUser([$data['user_id']]);
                $posts[$i]['nicename'] = $result['nicename'];
                $posts[$i]['user'] = $result['login_name'];
                $data['user'] = $result['login_name'];
                $categorias = $this->adjuntaCategorias([$data['ID']]);
                $result = $this->superUnique($categorias);
                $posts[$i]['categorias'] = $result;
            }
            $i++;
        }
        return ['info' => $info, 'post' => $posts];
    }
    public function autor($param) {
        $posts = [];
        $sql = "SELECT u.nicename,u.uID,um.email,um.userlink FROM usuarios AS u JOIN usuarios_meta AS um ON u.uID=um.user_id WHERE u.login_name=?";
        $cond = [$param];
        $stmt = $this->db->exeQuery($sql, $cond);
        $info = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
        if (!empty($info)) {
            $sql = "SELECT p.ID, p.titulo, p.timestamp, p.user_id, p.extracto,g.url FROM post AS p JOIN post_meta AS pm ON pm.post_id=p.ID JOIN galeria AS g ON pm.portada_id=g.gID WHERE p.user_id=? AND p.publicado=1 AND pm.es_podcast=0";
            $cond = [$info['uID']];
            $stmt = $this->db->exeQuery($sql, $cond);
            $posts = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $i = 0;
            if (!empty($posts)) {
                foreach ($posts as $post) {
                    $posts[$i] = $post;
                    $result = $this->adjuntaUser([$post['user_id']]);
                    $posts[$i]['nicename'] = $result['nicename'];
                    $posts[$i]['user'] = $result['login_name'];
                    $post['user'] = $result['login_name'];
                    $categorias = $this->adjuntaCategorias([$post['ID']]);
                    $result = $this->superUnique($categorias);
                    $posts[$i]['categorias'] = $result;
                    $i++;
                }
            }
        }
        return ['info' => $info, 'post' => $posts];
    }
}