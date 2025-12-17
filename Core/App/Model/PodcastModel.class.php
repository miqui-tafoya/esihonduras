<?php
namespace Model;

use Model\Database;

class PodcastModel extends Model {

    public $podcast;
    private Database $db;

    public function __construct() {
        $this->db = new Database();
        $this->setPodcast();
    }

    // GETTERS
    private function getPodcast() {
        $sql = "SELECT * FROM tb_podcast";
        $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }

    // SETTERS

    public function setPodcast() {
        $data = $this->getPodcast();
        $this->podcast = $data;
    }

    // SEND
    public function updateEntryData($data, $id) {
        $mod = $this->db->crudCall('update', 'tb_podcast', $data, $id, 'tb_podcast_id');
        return $mod;
    }
}