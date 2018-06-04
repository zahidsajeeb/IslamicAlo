<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Home_Model');
    }

    public function index() {
        $this->load->model('Home_Model');
        $this->load->model("wordsnippet");
        $data['result']  = $this->Home_Model->home_latest_video();
        $data['result1'] = $this->Home_Model->home_latest_audio();
        $data['result2'] = $this->Home_Model->home_latest_article();
        $data['result3'] = $this->Home_Model->GetNewBooks();
        $data['result4'] = $this->Home_Model->GetBestSellBooks();
        $data['result5'] = $this->Home_Model->GetImportentBooks();
        $data['result6'] = $this->Home_Model->GetQuranBooks();
        $data['result7'] = $this->Home_Model->GetHadisBooks();
        $this->load->view('index', $data);
    }
    
    public function subscription(){
        $this->load->model('Home_Model');
        $email = $this->input->post('email');
        $this->Home_Model->email_subscrtiption($email);
        redirect('Home/index');
    }
    
//    public function checkUsername() {
//        $this->load->model('Home_Model');
//        if ($this->Home_Model->getUsername($_POST['email'])) {
//            echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true"></i> This user is already registered</span></label>';
//        } else {
//            echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i> Username is available</span></label>';
//        }
//    }
    
    
        public function checkUsername() {
        $this->load->model('Home_Model');
        $this->Home_Model->getUsername($_POST['email']);
        
    }

}
