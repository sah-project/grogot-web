<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class syslanding extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

   public function index(){
        $data = array (
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
