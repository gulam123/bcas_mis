<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_role extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        check_permission();
        error_reporting(~E_ALL);
		// $this->load->model(['M_auth']);
		 $this->load->model(['M_role']);
        // $this->load->library(['form_validation']);
        $this->load->helper(['form']);
	}

    public function index()
    {
        $this->load->view('role/roleList');
    }
    
    
	public function getRoleMenu()
	{
		
		$post 		            = $this->input->get();
		$user_level_id 		            = $post['user_level_id'];
		$getData	            = $this->M_role->getRoleMenu($user_level_id);
		
		$data = $getData['data'];
        $output["data"] = $data ?: [];
		//header('Content-Type: application/json; charset=utf-8');
		echo "<pre>";
        var_dump($output);
		echo "</pre>";
	}

}