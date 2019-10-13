<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cdashberita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == "login") {
            redirect(base_url("admin"));
        }
        $this->load->library('form_validation');
        $this->load->model('dashboard/mdashboard');
    }

    public function index()
    {
        $data = array(
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/lembaga/bpd',
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
        $this->load->view("dashboard/index", $data);
    }
        public function gallery()
    {
        $data = array(
            'gallery' => $this->mdashboard->gallery_landing(),
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/berita/vgallery',
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
        $this->load->view("dashboard/index", $data);
    }
}
