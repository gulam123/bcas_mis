<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_anomali extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        check_permission();
        error_reporting(~E_NOTICE);
		$this->load->model(['M_auth','M_continous','M_cabang']);
        $this->load->helper(['form']);
	}

    public function index() {
        $data['getCabang']      = $this->M_cabang->getCabang();
        // $data['periode']        = $this->M_continous->periode();
        $this->load->view('fieldwork/anomali',$data);
    }

    public function anomali() {
        $data['getCabang']      = $this->M_cabang->getCabang();
        // $data['periode']        = $this->M_continous->periode();
        $this->load->view('continous/Anomali',$data);
    }

    public function ListDataIbu()
	{
		$post 		           = $this->input->post();
		$draw 		           = $post['draw'];
        $kd_cabang             = $post['kd_cabang'];
        $cek_tgl_input         = $post['cek_tgl_input'];
        $cek_tgl_inputakhir    = $post['cek_tgl_inputakhir'];
        $cek_periode           = date("Ymd", strtotime($post['cek_periode']));
        $cari 		           = $post['cari'];
		$mulaiHalaman          = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman          = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	           = $this->M_continous->Anomaliibu($mulaiHalaman,$akhirHalaman,$cari,$kd_cabang,$cek_tgl_input,$cek_tgl_inputakhir,$cek_periode);
        // print("<pre>".print_r($getData,true)."</pre>");die();
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}

    public function ListDataNik()
	{
		$post 		            = $this->input->post();
		$draw 		            = $post['draw'];
        $kd_cabang              = $post['kd_cabang_nik'];
        $cek_tgl_input          = $post['cek_tgl_input_nik'];
        $cek_tgl_inputakhir     = $post['cek_tgl_inputakhir_nik'];
        $cek_periode            = date("Ymd", strtotime($post['cek_periode_nik']));
        $cari 		            = $post['cari_nik'];
		$mulaiHalaman           = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman           = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	            = $this->M_continous->getDataNik($mulaiHalaman,$akhirHalaman,$cari,$kd_cabang,$cek_tgl_input,$cek_tgl_inputakhir,$cek_periode);
        // print("<pre>".print_r($getData,true)."</pre>");die();
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}


    public function ListDataNpwp()
	{
		$post 		            = $this->input->post();
		$draw 		            = $post['draw'];
        $kd_cabang              = $post['kd_cabang_npwp'];
        $cek_tgl_input          = $post['cek_tgl_input_npwp'];
        $cek_tgl_inputakhir     = $post['cek_tgl_inputakhir_npwp'];
        $cek_periode            = date("Ymd", strtotime($post['cek_periode_npwp']));
        $cari 		            = $post['cari_npwp'];
		$mulaiHalaman           = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman           = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	            = $this->M_continous->getDataNpwp($mulaiHalaman,$akhirHalaman,$cari,$kd_cabang,$cek_tgl_input,$cek_tgl_inputakhir,$cek_periode);
        // print("<pre>".print_r($getData,true)."</pre>");die();
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}

    public function ListDataUmum()
	{
		$post 		            = $this->input->post();
		$draw 		            = $post['draw'];
        $kd_cabang              = $post['kd_cabang_umum'];
        $cek_tgl_input          = $post['cek_tgl_input_umum'];
        $cek_tgl_inputakhir     = $post['cek_tgl_inputakhir_umum'];
        $cek_periode            = date("Ymd", strtotime($post['cek_periode_umum']));
        $cari 		            = $post['cari_umum'];
		$mulaiHalaman           = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman           = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	            = $this->M_continous->getDataUmum($mulaiHalaman,$akhirHalaman,$cari,$kd_cabang,$cek_tgl_input,$cek_tgl_inputakhir,$cek_periode);
        // print("<pre>".print_r($getData,true)."</pre>");die();
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}

    public function detail()
    {
        $post 	       = $this->input->post();
		$nomor_cif     = $post['NOMOR_CIF'];
		$CekAnomali    = $post['Anomali'];
        $data          = $this->M_continous->detailAll($nomor_cif);
        echo json_encode([
            'Anomali'   =>$CekAnomali,
            'data'      =>$data
        ]);
        
        // echo json_encode($data);
    }

    // TUTUP 17-10-2022
    public function ListDataNsbhIndividu()
	{
		$post 		            = $this->input->post();
		$draw 		            = $post['draw'];
        $kd_cabang              = $post['kd_cabang_nasabahind'];
        $cek_tgl_input          = $post['cek_tgl_input_nasabahind'];
        $cek_tgl_inputakhir     = $post['cek_tgl_inputakhir_nasabahind'];
        $cek_periode            = date("Ymd", strtotime($post['cek_periode_nasabahind']));
        $cari 		            = $post['cari_nasabahind'];
		$mulaiHalaman           = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman           = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	            = $this->M_continous->getDataNsbhIndividu($mulaiHalaman,$akhirHalaman,$cari,$kd_cabang,$cek_tgl_input,$cek_tgl_inputakhir,$cek_periode);
        // print("<pre>".print_r($cek_tgl_input,$cek_tgl_inputakhir,$getData,true)."</pre>");die();
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}

}