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
    
    public function email_subscrtiption($email) {
        $sql = "INSERT INTO subscription(sub_email)VALUES('$email')";
        $query = $this->db->query($sql);
    }

    public function getUsername($username) {
        $this->db->where('sub_email', $username);
        $query = $this->db->get('subscription');

//        if ($query->num_rows() > 0) {
//            return true;
//        } else {
//            return false;
//        }
        
        if ($query->num_rows() > 0) {
            echo "<font style='margin:10px;color: #B70404;'>Already Exists, Please Enter New E-Mail....</font>";
        } else {
            echo "Please proceed...";
        }
        
    }
    
    
    

//$cs = $_POST['course_syllabus'];
//$sql = "SELECT * FROM form where course_syllabus = '$cs' and ins_id='23989'";
//$result = mysql_query($sql);
//$num_rows = mysql_num_rows($result);
//if ($num_rows > 0) {
//echo "<font style='margin:10px;color: #B70404;'>Already Exists, Select Again.</font>";
//} else {
//echo "Please proceed...";
//}

}
