<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $data['title'] = 'Admin - Rekam.Id';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jml'] = $this->db->count_all('kamera');
        $data['disewa'] = $this->disewa();
        $data['tersedia'] = $this->tersedia();
        $data['pendapatan'] = $this->pendapatan();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer', $data);
    }
    function disewa() {
    $query = $this->db->get_where('kamera', array('status' => 'Disewa'));
    return $query->num_rows();
    }
    function tersedia() {
    $query = $this->db->get_where('kamera', array('status' => 'Tersedia'));
    return $query->num_rows();
    }
    function pendapatan() {
    $this->db->select_sum('pendapatan');
    $this->db->from('sewa');
    $query = $this->db->get();
    return $query->row()->pendapatan;
    }
}