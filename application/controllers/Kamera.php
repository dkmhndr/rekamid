<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_kamera");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (!$this->session->userdata('email'))
        {
          redirect('auth');
        }
        else
        {
               $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data["kamera"] = $this->crud_kamera->getAll();
        $data['sewa'] = $this->crud_kamera->getSewa();
        $this->load->view("admin/header", $data);
        $this->load->view("admin/kamera", $data);
        $this->load->view("admin/footer", $data);
        }  


    }
    
    function json(){
        $this->load->library('datatables');
        $this->datatables->select('*');
        $this->datatables->from('kamera');
        return print_r($this->datatables->generate());
    }

    public function add()
    {
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $kamera = $this->crud_kamera;
        $validation = $this->form_validation;

        if ($validation->run()) {
            $kamera->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/header", $data);
        $this->load->view("admin/kameraadd", $data);
        $this->load->view("admin/footer", $data);        

    }

    public function edit($id = null)
    {
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if (!isset($id)) redirect('kamera');
       
        $kamera = $this->crud_kamera;
        $validation = $this->form_validation;
        $validation->set_rules($kamera->rules());

        if ($validation->run()) {
            $kamera->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kamera"] = $kamera->getById($id);
        if (!$data["kamera"]) show_404();
        
        $this->load->view("admin/header", $data);
        $this->load->view("admin/kameraedit", $data);
        $this->load->view("admin/footer", $data);

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->crud_kamera->delete($id)) {
            redirect(site_url('kamera'));
        }
    }
}
