<?php
class Book_Model extends CI_Model{
        public function details($id){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.ebooks_id',$id);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->join('ebook_publisher','ebooks.publisher_id = ebook_publisher.publisher_id');
        $query = $this->db->get();
        return $query->row(); 
        
        
        
        
        
//        $this->db->select('*');
//        $this->db->from('ebooks');
//        $this->db->where('category_id',$id);
//        $this->db->where('ebooks.status',1);
//        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
//        $this->db->join('ebook_publisher','ebooks.publisher_id = ebook_publisher.publisher_id');
//        $this->db->order_by('ebooks.ebooks_id',"DESC");
//        $this->db->limit(8);
//        $query = $this->db->get();
//        return $query->result();
    }
    
    public function GetAllCategory(){
        $this->db->select('*');
        $this->db->from('ebook_categories');
//        $this->db->join('ebooks','ebook_categories.category_id = ebooks.category_id');
//        $this->db->order_by('ebooks_id',"DESC");
//        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result(); 
    }
    
    public function GetAllCategoryInfo($id){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('category_id',$id);
        $this->db->order_by('ebooks_id',"DESC");
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();   
    }
    
//    public function category_book_list($pagination_number,$per_page, $offset,$id){
//        $this->db->select('*');
//        $this->db->from('ebooks');
//        $this->db->where('category_id',$id);
//        $this->db->where('ebooks.status',1);
//        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
//        $this->db->join('ebook_publisher','ebooks.publisher_id = ebook_publisher.publisher_id');
//        $this->db->order_by('ebooks.ebooks_id',"DESC");
////        $this->db->limit(8);
////        $query = $this->db->get();
//        $query = $this->db->get('', $per_page, $offset);
//        //echo $this->db->last_query();
//        return $query->result();
//    }
//    
    
   public function category_book_list($id){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('category_id',$id);
        $this->db->where('ebooks.status',1);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->join('ebook_publisher','ebooks.publisher_id = ebook_publisher.publisher_id');
        $this->db->order_by('ebooks.ebooks_id',"DESC");
//        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();

    }
    
    public function author_list(){
        $this->db->select('*');
        $this->db->from('ebook_author');
        $this->db->where('status',1);
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function all_author_list($per_page, $offset){
        $this->db->select('*');
        $this->db->from('ebook_author');
        $this->db->where('status',1);
        $query = $this->db->get('', $per_page, $offset);
        return $query->result();
    }
    
    public function publisher_list(){
        $this->db->select('*');
        $this->db->from('ebook_publisher');
        $this->db->where('status',1);
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function all_publisher_list($per_page, $offset){
        $this->db->select('*');
        $this->db->from('ebook_publisher');
        $this->db->where('status',1);
        $query = $this->db->get('', $per_page, $offset);
        return $query->result();
    }
    
    
    public function topic_list(){
        $this->db->select('*');
        $this->db->from('ebook_categories');
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function author_book_lists($id){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.author_id',$id);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->join('ebook_publisher','ebooks.publisher_id = ebook_publisher.publisher_id');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();   
    }
    
    public function author_name($id){
        $this->db->select('author_name');
        $this->db->from('ebook_author');
        $this->db->where('ebook_author_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    
    public function publisher_book_lists($id){
        $this->db->select('*');
        $this->db->from('ebooks');
        $this->db->where('ebooks.publisher_id',$id);
        $this->db->join('ebook_author', 'ebooks.author_id = ebook_author.ebook_author_id');
        $this->db->join('ebook_publisher','ebooks.publisher_id = ebook_publisher.publisher_id');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();   
    }
    
    public function publisher_name($id){
        $this->db->select('publisher_name');
        $this->db->from('ebook_publisher');
        $this->db->where('publisher_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

}
