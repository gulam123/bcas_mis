<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "$application_folder/core/crud.php";

class UserRole extends crud {
	
    public function __construct()
	{
		parent::__construct();
		
		$this->title="User Role Management";
		$this->titleAdd="Add Role";
		$this->titleEdit="Edit Role";
		$this->titleDel="Remove Role";
		$this->viewForm="user/userRoleForm";
		$this->urlDatatable=site_url("UserRole/DataTable");
		$this->urlAdd=site_url("UserRole/Add");
		$this->urlEdit=site_url("UserRole/Edit");
		$this->urlDel=site_url("UserRole/Del");
		$this->urlSave=site_url("UserRole/Save");
		$this->urlGetById=site_url("UserRole/GetById");
		$this->isAdd=false;
		$this->isEdit=false;
		$this->isDel=false;
		$this->isDetail=false;
		$this->load->model("M_userRole");
		$this->modelTbl = $this->M_userRole;
		$this->column = json_encode(array(
			array(
				"title"=>"NO",
				"data"=>"no",
			),
			array(
				"title"=>"Menu",
				"data"=>"menu",
			),
			array(
				"title"=>"Is View",
				"data"=>"is_view",
			),
			array(
				"title"=>"Is Create",
				"data"=>"is_create",
			),
			array(
				"title"=>"Is Edit",
				"data"=>"is_edit",
			),
			array(
				"title"=>"Is Delete",
				"data"=>"is_delete",
			),
			array(
				"title"=>"Is Print",
				"data"=>"is_print",
			),
		));
		$this->load->model("M_UserLevel");
		$dataLevel=$this->M_UserLevel->GetLookUp();
		$this->lookUpLevelUser = "";
		foreach($dataLevel["data"] as $row){
			$this->lookUpLevelUser .= "<option value='".$row["level_user"]."'>".$row["label"]."</option>";
		}
	}
	
    public function index()
    {
        $this->load->view('user/UserRoleForm');
    }
	
    public function DataTable()
	{
		$post 		            = $this->input->post();
		$draw 		            = $post['draw'];
        $cari 		            = $post['cari'];
        $level_user 		    = $post['level_user'];
		$mulaiHalaman           = $post['start'] <= 0 ? $post['start'] : $post['start']+1;
        $akhirHalaman           = $mulaiHalaman <= 0 ? $post['length'] : $mulaiHalaman+$post['length']-1;
		$getData	            = $this->modelTbl->DataTable($mulaiHalaman,$akhirHalaman,$cari,$level_user);
		
		$data = $getData['data'];
        $recordsTotal = count($getData['data']);
        $recordsFiltered = $getData['jumlah'];

        $output["draw"]             = $draw ?: 1;
        $output["recordsTotal"]     = $recordsTotal ?: 1;
        $output["recordsFiltered"]  = $recordsFiltered ?: 1;
        $output["data"]             = $data ?: [];
        echo json_encode($output);
	}
	
	public function Save()
	{
		$post = $this->input->post("post");
		echo "<pre>";var_dump($post);echo "</pre>";
		
		foreach($post as $arr){
			
			if($arr["role_id"]==""){
				$this->modelTbl->Add($arr);
			}
			else{
				$this->modelTbl->Edit($arr);
			}
		}
		
		
	}
	
}