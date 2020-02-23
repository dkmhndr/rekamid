<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_penyewaan");
        $this->load->model("crud_kamera");
        $this->load->library('form_validation');
    }

    public function index()
    {
                if (!$this->session->userdata('email'))
        {
          redirect('auth');
        }
        else{
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["sewa"] = $this->crud_penyewaan->getAll();
        $this->load->view("admin/header", $data);
        $this->load->view("admin/sewa", $data);
        $this->load->view("admin/footersewa", $data);
        }
    }

    public function add()
    {
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["kamera"] = $this->crud_kamera->getAll();
        $sewa = $this->crud_penyewaan;
        $validation = $this->form_validation;
        $validation->set_rules($sewa->rules());

        if ($validation->run()) {
            $sewa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/header", $data);
        $this->load->view("admin/sewaadd", $data);
        $this->load->view("admin/footer", $data);        

    }

    public function edit($id = null)
    {
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
              $data["kamera"] = $this->crud_kamera->getAll();
        if (!isset($id)) redirect('penyewaan');
       
        $sewa = $this->crud_penyewaan;
        $validation = $this->form_validation;
        $validation->set_rules($sewa->rules());

        if ($validation->run()) {
            $sewa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sewa"] = $sewa->getById($id);
        if (!$data["sewa"]) show_404();
        
        $this->load->view("admin/header", $data);
        $this->load->view("admin/sewaedit", $data);
        $this->load->view("admin/footer", $data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->crud_penyewaan->delete($id)) {
            redirect(site_url('penyewaan'));
        }
    }
}
