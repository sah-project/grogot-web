<?php
defined('BASEPATH') or exit('No direct script access allowed');

class berita_agenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('dashboard/mdashboard', 'mdashboard');
    }

    public function index()
    {

        
        // config
        $config['base_url'] = 'http://localhost:8080/hermaya-project/berita/berita_agenda/index';
        $config['total_rows'] = $this->mdashboard->countberita();
        $config['per_page'] = 5;
        $config['num_links'] = 4;

        // styling
        $config['full_tag_open']= '<nav><ul class="pagination">';
        $config['full_tag_close']= '  </ul></nav>';

        $config['fisrt_link'] = "Fisrt";
        $config['first_tag_open']= '<li class="page-item">';
        $config['first_tag_close']= '</li">';


        $config['last_link'] = "Last";
        $config['last_tag_open']= '<li class="page-item">';
        $config['last_tag_close']= '</li">';

        $config['next_link'] = "&raquo";
        $config['next_tag_open']= '<li class="page-item">';
        $config['next_tag_close']= '</li">';

         $config['prev_link'] = "&laquo";
        $config['prev_tag_open']= '<li class="page-item">';
        $config['prev_tag_close']= '</li">';

        $config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']= '</a></li">';

        $config['num_tag_open']= '<li class="page-item">';
        $config['num_tag_close']= '</li">';

        $config['attributes'] = array('class' => 'page-link ');
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4);
        
        $data['judul'] = 'List of Peoples';
        $data = array (
            'berita'=> $this->mdashboard->getberita($config['per_page'], $start),
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/berita/news',
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
         $this->load->view("dashboard/index", $data);

    }


    public function details($id){
        $data = array (
            'berita' => $this->mdashboard->getById_berita($id),
            'sheader' => 'dashboard/ext/sheader',
            'header' => 'dashboard/vmenu/header',
            'content' => 'dashboard/pages/berita/detail',
            'footer' => 'dashboard/vfooter/footer',
            'sfooter' => 'dashboard/ext/sfooter',
        );
         $this->load->view("dashboard/index", $data);
    }

}
