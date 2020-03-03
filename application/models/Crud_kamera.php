<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_kamera extends CI_Model
{
    private $_table = "kamera";
    private $_sewa = "sewa";

    public $merk;
    public $tipe;
    public $harga;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'merk',
            'label' => 'Merk',
            'rules' => 'required'],
            
            ['field' => 'tipe',
            'label' => 'Tipe',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric']
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getSewa()
    {
        return $this->db->get($this->_sewa)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kamera" => $id])->row();
    }
    public function getTersedia()
    {
        return $this->db->get_where($this->_table, ["status" => "tersedia"])->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->merk = $post["merk"];
        $this->tipe = $post["tipe"];
        $this->harga = $post["harga"];
        $this->status = "Tersedia";
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kamera = $post["id"];
        $this->merk = $post["merk"];
        $this->tipe = $post["tipe"];
        $this->status = "Tersedia";
        $this->harga = $post["harga"];
        if (!empty($_FILES["image"]["name"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id_kamera' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kamera" => $id));
    }

    private function _uploadImage(){

    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->tipe;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

}
