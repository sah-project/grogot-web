<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class syslanding extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == "login") {
            redirect(base_url("admin"));
        }
        $this->load->library('form_validation');
        $this->load->model('dashboard/mdashboard');
    }

   public function index(){
        $data = array (
            'berita' => $this->mdashboard->get_all_berita(),
            'gallery' => $this->mdashboard->gallery_landing(),
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/index',
            'footer'=> 'dashboard/vfooter/footer',
            'sfooter'=> 'dashboard/ext/sfooter',     
        );
        $this->load->view("dashboard/index", $data);
    }


       public function summernote(){
        $this->load->view("admin/summernote");
    }
}
