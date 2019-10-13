<?php
defined('BASEPATH') or exit('No direct script access allowed');

class struktur_organisasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') = "login") {
            redirect(base_url("admin"));
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/profil/struktur_org',
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
        $this->load->view("dashboard/index", $data);
    }
}
