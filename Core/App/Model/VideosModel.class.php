<?php
namespace Model;

use Model\Database;

class VideosModel extends Model {

    public $videos;
    private Database $db;

    public function __construct() {
        $this->db = new Database();
        $this->setVideos();
    }

    // GETTERS
    private function getVideos() {
        $sql = "SELECT * FROM tb_videos";
        $data = $this->db->dbMYSQLCall_raw_ALL_ASSOC($sql);
        return $data;
    }

    // SETTERS

    public function setVideos() {
        $data = $this->getVideos();
        $this->videos = $data;
    }

    // SEND
    public function updateEntryData($data, $id) {
        $mod = $this->db->crudCall('update', 'tb_videos', $data, $id, 'tb_videos_id');
        return $mod;
    }
}