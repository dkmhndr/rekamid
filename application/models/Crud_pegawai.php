<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_pegawai extends CI_Model
{
    private $_table = "pegawai";
 
    public $id_pegawai;
    public $namapegawai;
    public $alamatpegawai;
    public $nohppegawai;

    public function rules()
    {
        return [
            ['field' => 'namapegawai',
            'label' => 'Nama Pegawai',
            'rules' => 'required'],

            ['field' => 'alamatpegawai',
            'label' => 'Alamat Pegawai',
            'rules' => 'required'],

            ['field' => 'nohppegawai',
            'label' => 'No HP Pegawai',
            'rules' => 'numeric'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();

    }

    // public function getKamera()
    // {
    //     return $this->db->get_where($this->_t)
    // }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pegawai = "";
        $this->namapegawai = $post["namapegawai"];
        $this->alamatpegawai = $post["alamatpegawai"];
        $this->nohppegawai = $post["nohppegawai"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pegawai = "";
        $this->namapegawai = $post["namapegawai"];
        $this->alamatpegawai = $post["alamatpegawai"];
        $this->nohppegawai = $post["nohppegawai"];

        $this->db->update($this->_table, $this, array('id_pegawai' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pegawai" => $id));
    }
}
