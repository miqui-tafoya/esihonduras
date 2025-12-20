<?php
namespace Model;

use Model\Database;

class MultimediaModel extends Model {

    private Database $db;
    public $audio;
    public $video;
    public $publicaciones;

    public function __construct() {
        $this->db = new Database();
        $this->setPublicaciones();
        $this->setAudio();
        $this->setVideo();
    }
    // GETTERS
    private function getPortada($id) {
        $cols = ['galeria_url'];
        $data = $this->db->dbCall('one', false, $cols, 'tb_galeria', ['tb_galeria_id' => $id]);
        return $data;
    }
    private function getPublicaciones() {
        $cols = ['all'];
        $data = $this->db->dbCall(4, false, $cols, 'tb_entradas', ['tipo' => 'publica', 'publicado' => 1], ['DESC' => 'entradas_timestamp']);
        foreach ($data as &$value) {
            $portada = $this->getPortada($value['tb_galeria_id']);
            $value['portada'] = $portada['galeria_url'];
            $value['entradas_titulo'] = html_entity_decode($value['entradas_titulo'], ENT_QUOTES, 'UTF-8');
            $value['cuerpo'] = html_entity_decode($value['cuerpo'], ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    private function getAudio() {
        $cols = ['all'];
        $data = $this->db->dbCall(6, false, $cols, 'tb_podcast', [], ['DESC' => 'tb_podcast_id']);
        return $data;
    }
    private function getVideo() {
        $cols = ['all'];
        $data = $this->db->dbCall(6, false, $cols, 'tb_videos', [], ['DESC' => 'tb_videos_id']);
        return $data;
    }

    // SETTERS
    private function setPublicaciones() {
        $data = $this->getPublicaciones();
        $this->publicaciones = $data;
    }
    private function setAudio() {
        $data = $this->getAudio();
        $this->audio = $data;
    }
    private function setVideo() {
        $data = $this->getVideo();
        $this->video = $data;
    }

}