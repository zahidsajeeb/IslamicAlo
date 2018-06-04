<?php

class Home_Model extends CI_Model {

    public function home_latest_video() {
        $this->db->select('*');
        $this->db->from('audio_video_file');
        $this->db->where('audio_video_file.type_id', 2);
        $this->db->where('audio_video_file.status', 1);
        $this->db->join('lecturer_name', 'audio_video_file.lacturer_id = lecturer_name.lecturer_id');
        $this->db->order_by("file_id", "DESC");
        $this->db->limit(9);
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
    
    public function home_latest_article(){
        $this->db->select('*');
        $this->db->from('article');
        $this->db->where('status',1);
        $this->db->order_by('article_id',"DESC");
        $this->db->limit(9);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function GetNewBooks(){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.status',1);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->order_by('ebooks_id',"DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();  
    }
    
    public function GetBestSellBooks(){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.status',1);
        $this->db->where('ebooks.type_id',1);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->order_by('ebooks_id',"DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result(); 
    }
    
    public function GetImportentBooks(){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.status',1);
        $this->db->where('ebooks.type_id',2);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->order_by('ebooks_id',"DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result(); 
    }
    
    public function GetQuranBooks(){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.status',1);
        $this->db->where('ebooks.type_id',3);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->order_by('ebooks_id',"DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result(); 
    }
    
    public function GetHadisBooks(){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.status',1);
        $this->db->where('ebooks.type_id',4);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->order_by('ebooks_id',"DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result(); 
    }

}
