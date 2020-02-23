<?php
Class Laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model("crud_penyewaan");
        $this->load->model("crud_kamera");
        $this->load->library('pdf');
    }
    
    function index(){
                if (!$this->session->userdata('email'))
        {
          redirect('auth');
        }
        else{
        $sewa = $this->crud_penyewaan->getAll();
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'LAPORAN PENYEWAAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Rekam.Id',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Tgl Sewa',1,0);
        $pdf->Cell(85,6,'Merk',1,0);
        $pdf->Cell(27,6,'Tipe',1,0);
        $pdf->Cell(25,6,'Pendapatan',1,1);
        $pdf->SetFont('Arial','',10);
        foreach ($sewa as $row){
            $pdf->Cell(20,6,$row->tglsewa,1,0);
            $pdf->Cell(85,6,$row->merk,1,0);
            $pdf->Cell(27,6,$row->tipe,1,0);
            $pdf->Cell(25,6,'Rp '.number_format($row->pendapatan, 0, ".", "."),1,1); 
        }
        $pdf->Output();
        }
    }
}