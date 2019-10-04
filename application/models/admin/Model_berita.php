<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    private $_table = "berita";
    private $_gallery="gallery";


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getById_gallery($id)
    {
        return $this->db->get_where($this->_gallery, ["id" => $id])->row();
    }

    public function fetch_data()  
      {  
           $query = $this->db->query("select * from berita");
           return $query; 
      }  

  public  function simpan_berita($data)
     {
        $this->db->set($data);  
        $this->db->insert($this->_table, $data);
        return true;
     }

   public function hps_berita($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _deleteImage($id)
    {

        $berita = $this->getById($id);
        // echo $berita->image;
        // exit();
        if ($berita->image != "default.jpg") {
            $filename = $berita->image;
            return array_map('unlink', glob(FCPATH."upload/berita/$filename"));
        }
    }



    private function _deleteImagegal($id)
    {

        $gallery = $this->getById_gallery($id);
        // echo $berita->image;
        // exit();
        
            $filename = $gallery->image;
            return array_map('unlink', glob(FCPATH."upload/gallery/$filename"));
        
    }

      public  function upd_berita($data, $id)
     {
      if (!empty($data["image"]))
        {
          $this->_deleteImage($id);
          $this->db->set($data);  
          $this->db->update($this->_table, $this, array('id' => $id));
          return true_upd_gambar;
      }
      else {
        $this->db->set($data);  
        $this->db->query("update berita set tanggal='$data[tanggal]', judul='$data[judul]', konten='$data[konten]' where id='$id'");
        return true_no_upd_gambar;
      }
    
     }

     public  function simpan_gallery($data)
     {
        $this->db->set($data);  
        $this->db->insert('gallery', $data);
        return true;
     }

       public function fetch_gallery()  
      {  
           $query = $this->db->query("select * from gallery");
           return $query; 
      }  
      
       public  function upd_gallery($data, $id)
         {
          if (!empty($data["image"]))
            {
              $this->_deleteImagegal($id);
              $this->db->set($data);  
              $this->db->update($this->_gallery, $this, array('id' => $id));
              return true;
          }
          else {
            $this->db->set($data);  
            $this->db->query("update gallery set tanggal='$data[tanggal]', caption='$data[caption]' where id='$id'");
            return false;
          }
        
         }  


   public function hps_gallery($id)
    {
        $this->_deleteImagegal($id);
        return $this->db->delete($this->_gallery, array("id" => $id));
    }
}   
?>