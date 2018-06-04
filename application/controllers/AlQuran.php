<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlQuran extends CI_Controller  {
    public function index(){
        $this->load->view('al_quran');
    }
}
