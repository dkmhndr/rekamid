<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_pegawai");
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
        $data["pegawai"] = $this->crud_pegawai->getAll();
        $this->load->view("admin/header", $data);
        $this->load->view("admin/pegawai", $data);
        $this->load->view("admin/footer", $data);
        }
    }

    public function add()
    {
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $pegawai = $this->crud_pegawai;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/header", $data);
        $this->load->view("admin/pegawaiadd", $data);
        $this->load->view("admin/footer", $data);        

    }

    public function edit($id = null)
    {
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!isset($id)) redirect('pegawai');
       
        $pegawai = $this->crud_pegawai;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pegawai"] = $pegawai->getById($id);
        if (!$data["pegawai"]) show_404();
        
        $this->load->view("admin/header", $data);
        $this->load->view("admin/pegawaiedit", $data);
        $this->load->view("admin/footer", $data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->crud_kamera->delete($id)) {
            redirect(site_url('pegawai'));
        }
    }
}