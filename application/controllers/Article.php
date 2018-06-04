<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

//    public function index() {
//        $this->load->model('Article_Model');
//        $data['result']=$this->Article_Model->all_article();
//        $data['result1']=$this->Article_Model->article_menu();
//        
//        $this->load->model("wordsnippet");
//                                                
//        $this->load->view('article',$data);
//    }
//    

    public function index() {
        $this->load->model('Article_Model');
        $this->load->model("wordsnippet");
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'index.php/Article/index/';
        $config['total_rows'] = $this->db->count_all('article');
        $config['per_page'] = '5';
  
        $config['full_tag_open'] = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a class='page-link' href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        
        $this->pagination->initialize($config);

        $data['result1'] = $this->Article_Model->article_menu();
        $data['result']  = $this->Article_Model->all_article($config['per_page'], $this->uri->segment(3));
        $this->load->view('article', $data);
    }

    public function ArticleDetails($id){
        $this->load->model('Article_Model');
        $this->load->model("wordsnippet");
        $data['result'] = $this->Article_Model->article_details($id);
        $data['result1'] = $this->Article_Model->article_menu();
        
        if($data['result']){
           $this->load->view('article_details', $data);
        }else{
            redirect('Article');
        }
        
    }

    public function ArticleSubject($id) {
        $this->load->model('Article_Model');
        $this->load->model("wordsnippet");
        $data['result']  = $this->Article_Model->article_subject($id);
        $data['result1'] = $this->Article_Model->article_menu();
        $data['result2'] = $this->Article_Model->article_subject_name($id);
//        print_r($data);
        $this->load->view('article_subject', $data);
    }
    
    
    public function SendMail() {
        $config = Array(        
            'mailtype'  => 'html', 
            'charset'   => 'UTF-8'
        );
        $this->load->library('email',$config);
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('Article_Model');
        
        $id = $data['id'] = $this->input->post('id');
        $data['result'] = $this->Article_Model->article_details($id);
        
        $from_email = "info@islamicalo.com";
        $to_email = $this->input->post('receiver_email');
        $subject  = $this->input->post('subject');
        $body = $this->load->view('article_email',$data,TRUE);
        
        $this->email->from($from_email, 'IslamicAlo.com');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($body);

        if ($this->email->send())
            $this->session->set_flashdata("email_sent", "Email sent successfully.");
        else
            $this->session->set_flashdata("email_sent", "Error in sending Email.");
        
        redirect('Article/index');
//        $this->load->view('Book/Home');
    }

}
