<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_apm extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        check_permission();
        error_reporting(~E_ALL);
		// $this->load->model(['M_auth']);
        // $this->load->library(['form_validation']);
        $this->load->helper(['form']);
	}

    public function Apm()
    {
        $this->load->view('planning/apm');
    }

}