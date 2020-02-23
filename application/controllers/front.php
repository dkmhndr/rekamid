<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class front extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_kamera");
    }
    public function index(){
        $data["kamera"] = $this->crud_kamera->getTersedia();
        $this->load->view('front/index', $data);
    }
}