<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlHadis extends CI_Controller {
    public function index(){
        $this->load->view('al_hadis');
    }
}
