<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sysadmin extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

   public function index(){
        $data = array (
            'sheader' => 'admin/ext/sheader',
            'header' => 'admin/vmenu/header',
            'content' => 'admin/pages/index',
            'footer'=> 'admin/vfooter/footer',
            'sfooter'=> 'admin/ext/sfooter',     
        );
        $this->load->view("dashboard/index", $data);
    }
}
