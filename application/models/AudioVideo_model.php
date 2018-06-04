<?php

class AudioVideo_model extends CI_Model {

    public function all_video_lists() {
        $this->db->select('*');
        $this->db->from('lecturer_name');
        $this->db->where('status', 1);
        $this->db->order_by('lacturer_position', "ASC");
        $query = $this->db->get();
        return $query->result();
    }

    public function all_audio_lists() {
        $this->db->select('*');
        $this->db->from('lecturer_name');
        $this->db->where('status', 1);
        $this->db->order_by('lacturer_position', "ASC");
        $query = $this->db->get();
        return $query->result();
    }

    public function lecturer_video_lists($id) {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.lacturer_id', $id);
        $this->db->where('audio_video_file.type_id', 2);
        $this->db->where('audio_video_file.status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function lecturer_audio_lists($id) {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.lacturer_id', $id);
        $this->db->where('audio_video_file.type_id', 1);
        $this->db->where('audio_video_file.status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function lecturer_info($id) {
        $this->db->select('*');
        $this->db->from('lecturer_name');
        $this->db->where('lecturer_id', $id);
        $query = $this->db->get();
        $result=$query->row();
        if($result){
            return $result;
        }else{
            return FALSE;
        }
    }

    public function live_video($id) {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.file_id', $id);
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $query = $this->db->get();
        return $query->row();
    }

    public function live_audio($id) {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.file_id', $id);
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $query = $this->db->get();
        return $query->row();
    }

//    $sql = "SELECT lecturer_id,lecturer_name,bangla_name,lecturer_img FROM `lecturer_name` WHERE `status`=1 ORDER BY `lacturer_position` ASC";

    public function home_latest_video() {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.type_id', 2);
        $this->db->where('audio_video_file.status', 1);
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $this->db->order_by("file_id", "DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }

}
