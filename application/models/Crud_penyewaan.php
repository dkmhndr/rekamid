<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_penyewaan extends CI_Model
{
    private $_table = "sewa";
    private $_kamera = "kamera";

    public $id_sewa;
    public $id_kam;
    public $tglsewa;
    public $tglkembali;
    public $namaklien;
    public $alamatklien;
    public $nohpklien;
    public $status;
    public $pendapatan;

    public function rules()
    {
        return [
            ['field' => 'namaklien',
            'label' => 'Nama Penyewa',
            'rules' => 'required'],

            ['field' => 'alamatklien',
            'label' => 'Alamat Penyewa',
            'rules' => 'required'],

            ['field' => 'nohpklien',
            'label' => 'No HP Penyewa',
            'rules' => 'numeric'],
            
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('kamera');
        $this->db->join('sewa','id_kamera=id_kam');
        $query = $this->db->get();
        return $query->result();
    }

    // public function getKamera()
    // {
    //     return $this->db->get_where($this->_t)
    // }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_sewa" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_sewa = "";
        $this->id_kam = $post["kamera"];
        $this->tglsewa = $post["tglsewa"];
        $this->tglkembali = $post["tglkembali"];
        $this->namaklien = $post["namaklien"];
        $this->alamatklien = $post["alamatklien"];
        $this->nohpklien = $post["nohpklien"];
        $this->status = "Disewa";
                $harga = $this->db->get_where($this->_kamera, ["id_kamera" => $post["kamera"]])->row_array();
        $hargaku = $harga["harga"];
        $tglsewaku = new DateTime(date('Y-m-d', strtotime($post["tglsewa"])));
        $tglkembaliku = new DateTime(date('Y-m-d', strtotime($post["tglkembali"])));
        $seltgl = $tglkembaliku->diff($tglsewaku);
        $pdpt = $hargaku*($seltgl->d);
        $this->pendapatan = $pdpt;
        $this->db->insert($this->_table, $this);
        $this->db->update($this->_kamera,array('status' => $this->status),array('id_kamera' => $post['kamera']));
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_sewa = "";
        $this->id_kam = $post["kamera"];
        $this->tglsewa = $post["tglsewa"];
        $this->tglkembali = $post["tglkembali"];
        $this->namaklien = $post["namaklien"];
        $this->alamatklien = $post["alamatklien"];
        $this->nohpklien = $post["nohpklien"];
        $this->status = "Disewa";
                $harga = $this->db->get_where($this->_kamera, ["id_kamera" => $post["kamera"]])->row_array();
        $hargaku = $harga["harga"];
        $tglsewaku = new DateTime(date('Y-m-d', strtotime($post["tglsewa"])));
        $tglkembaliku = new DateTime(date('Y-m-d', strtotime($post["tglkembali"])));
        $seltgl = $tglkembaliku->diff($tglsewaku);
        $pdpt = $hargaku*($seltgl->d);
        $this->pendapatan = $pdpt;
        $this->db->update($this->_table, $this, array('id_sewa' => $post['id']));
        $this->db->update($this->_kamera,array('status' => $this->status),array('id_kamera' => $post['kamera']));
    }

    public function delete($id)
    {
         $idkam = $this->db->get_where($this->_table, ["id_sewa" => $id])->row_array();
         $this->db->update($this->_kamera,array('status' => 'Tersedia'), array("id_kamera" => $idkam['id_kam']));
        return $this->db->update($this->_table,array('status' => 'Selesai'), array("id_sewa" => $id));
    
        }
}
