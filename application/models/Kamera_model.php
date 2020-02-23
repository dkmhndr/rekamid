<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera_model extends CI_Model
{
    private $_table = "kamera";

    public $id_kamera;
    public $merk;
    public $tipe;
    public $harga;
    public $status = "Tersedia";
    public $image = "default.jpg";
    
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
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kamera" => $id_kamera])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->merk = $post["merk"];
        $this->tipe = $post["tipe"];
        $this->harga = $post["harga"];
        $this->gambar = $post["gambar"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kamera = $post["id_kamera"];
        $this->merk = $post["merk"];
        $this->harga = $post["harga"];
        $this->status = $post["status"];
        $this->gambar = $post["gambar"];
        $this->db->update($this->_table, $this, array('id_kamera' => $post['id_kamera']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kamera" => $id_kamera));
    }
}