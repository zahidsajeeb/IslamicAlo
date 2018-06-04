<?php

class Article_Model extends CI_Model {

//    public function all_article() {
//        $this->db->select('*');
//        $this->db->from('article');
//        $this->db->where('status',1);
//        $this->db->order_by('article_id',"DESC");
//        $query = $this->db->get();
//        return $query->result();
//    }
    
    public function all_article($per_page, $offset){
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('status',1);
        $this->db->order_by('article_id',"DESC");
        $query = $this->db->get('', $per_page, $offset);
        
        foreach ($query->result() as $row){
            $data[] = $row;
        }
        return $data;
    }
    
    public function article_menu(){
        $this->db->select('*');
        $this->db->from('article_subject');
        $this->db->where('status',1);
        $this->db->order_by('subjet_name',"ASC");
        $this->db->limit(15);
        $query = $this->db->get();
        return $query->result();   
    }
    
    public function home_latest_audio() {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.type_id', 1);
        $this->db->where('audio_video_file.status', 1);
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $this->db->order_by("file_id", "DESC");
        $this->db->limit(9);
        $query = $this->db->get();
        return $query->result();
    }
    
   
    public function article_details($id){
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('article_id',$id);
        $query = $this->db->get();
//        return $query->row();
        $result=$query->row();
        if($result){
            return $result;
        }else{
            return FALSE;
        }
    }
    
    public function article_subject($id){
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('subject_id', $id);
        $this->db->where('status',1);
        $this->db->order_by('article_id',"DESC");
        $query = $this->db->get();
        return $query->result();
    }
    
    public function article_subject_name($id){
        $this->db->select('bangla_name');
        $this->db->from('article_subject');
        $this->db->where('subject_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

}
