<?php
defined('BASEPATH') or exit('No direct script access allowed');

class berita_agenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('dashboard/mdashboard');
    }

    public function index()
    {
        $data = array(
            'berita' => $this->mdashboard->get_all_berita(),
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/berita/news',
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
        $this->load->view("dashboard/index", $data);
    }

    public function details()
    {
        $data = array(
            'id' => $this->uri->segment(3),
            'berita' => $this->mdashboard->get_berita_by_kode(id),
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/berita/detail', berita,
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
        $this->load->view("dashboard/index", $data);
    }
}
