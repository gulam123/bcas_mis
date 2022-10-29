<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ltlha extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        check_permission();
        error_reporting(~E_ALL);
		// $this->load->model(['M_auth']);
        // $this->load->library(['form_validation']);
        $this->load->helper(['form']);
	}

    public function index()
    {
        $this->load->view('followup/form_tindaklanjut');
    }

    public function save()
    {
        $post 		            = $this->input->post();
        $pemeriksa              = $post['pemeriksa'];
        $tahun                  = $post['tahun'];
        $periode                = date("Ymd", strtotime($post['periode']));
        $no_lha                 = $post['no_lha'];

        
        $newperiode = date("Ymd", strtotime($periode));
        print("<pre>".print_r([$pemeriksa,$tahun,$periode,$newperiode],true)."</pre>");die();
    }

}