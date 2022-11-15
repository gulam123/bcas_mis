<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {
	
	var $title="Crud";
	var $titleAdd="Add";
	var $titleEdit="Edit";
	var $titleDel="Delete";
	var $viewForm=false;
	var $urlDatatable="";
	var $urlAdd="";
	var $urlEdit="";
	var $urlDel="";
	var $urlGetById="";
	var $modelTbl="";
	var $column=array();
	var $isView=false;
	var $isAdd=false;
	var $isEdit=false;
	var $isDel=false;
	var $isPrint=false;
	
	var $addView=array();
	
    public function __construct()
	{
		parent::__construct();
        check_permission();
        error_reporting(~E_ALL);
        $this->load->helper(['form']);
		
		
		$this->isView=check_permission_act('is_view');
		$this->isAdd=check_permission_act('is_create');
		$this->isEdit=check_permission_act('is_edit');
		$this->isDel=check_permission_act('is_delete');
		$this->isPrint=check_permission_act('is_print');
		
	}

    public function index()
    {
		if( !$this->isView ){
			redirect(base_url("404_override"));
		}
        $this->load->view('crud/crudList');
    }
	
    public function DataTable()
	{
		$post 		            = $this->input->post();
		$draw 		            = $post['draw'];
        $cari 		            = $post['cari'];
		$mulaiHalaman           = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman           = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	            = $this->modelTbl->DataTable($mulaiHalaman,$akhirHalaman,$cari);
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}
    
	public function GetById()
	{
		$post = $this->input->post();
		$getData = $this->modelTbl->GetById($post);
		
		$data = $getData['data'];
        $output["data"] = $data ?: [];
		header('Content-Type: application/json; charset=utf-8');
        echo json_encode($output);
	}
	
	public function Add()
	{
		$post = $this->input->post();
		$this->modelTbl->Add($post);
	}

	public function Edit()
	{
		$post = $this->input->post();
		$this->modelTbl->Edit($post);
	}
	
	public function Del()
	{
		$post = $this->input->post();
		$this->modelTbl->Del($post);
	}


}