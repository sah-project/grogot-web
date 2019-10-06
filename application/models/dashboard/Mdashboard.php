<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_Model
{
    private $_table = "berita";
    private $_gallery="gallery";


    public function getById_berita($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getById_gallery($id)
    {
        return $this->db->get_where($this->_gallery, ["id" => $id])->row();
    }

    public function gallery_landing()  
      {  
           $query = $this->db->query("select * from gallery order by tanggal desc limit 10");
           return $query; 
      }  

}   
?>