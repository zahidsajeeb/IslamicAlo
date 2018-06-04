<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AudioVideo extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function AllVideos(){
        $this->load->model('AudioVideo_model');
        $data['result'] = $this->AudioVideo_model->all_video_lists();
        $this->load->view('view_all_video', $data);
    }

    public function AllAudios(){
        $this->load->model('AudioVideo_model');
        $data['result'] = $this->AudioVideo_model->all_audio_lists();
        $this->load->view('view_all_audio', $data);
    }

    public function LecturerVideoLists($id) {
        $this->load->model('AudioVideo_model');
        $data['result'] = $this->AudioVideo_model->lecturer_video_lists($id);
        $data['result1'] = $this->AudioVideo_model->lecturer_info($id);
        if($data['result1']){
            $this->load->view('video_lecture', $data);
        }else{
            redirect('AudioVideo/AllVideos');
        }
        
    }

    public function LecturerAaudioLists($id) {
        $this->load->model('AudioVideo_model');
        $data['result'] = $this->AudioVideo_model->lecturer_audio_lists($id);
        $data['result1'] = $this->AudioVideo_model->lecturer_info($id);
        if ($data['result1']) {
            $this->load->view('audio_lecture', $data);
        } else {
            redirect('AudioVideo/AllAudios');
        }
        
    }

    public function VideoLive($id) {
        $this->load->model('AudioVideo_model');
        $data['result'] = $this->AudioVideo_model->live_video($id);
        $this->load->view('live_video', $data);
    }

    public function AudioLive($id) {
        $this->load->model('AudioVideo_model');
        $data['result'] = $this->AudioVideo_model->live_audio($id);
        $this->load->view('live_audio', $data);
    }
    
    public function extractLink($iframe){
        $arr = explode('//', htmlspecialchars($iframe));
        $arr = explode(' ', $arr[1]);
        return substr($arr[0], 0, -6);
    }

}
