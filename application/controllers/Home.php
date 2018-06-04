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

}
