<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "$application_folder/core/crud.php";

class User extends crud {
	
    public function __construct()
	{
		parent::__construct();
		
		$this->title="User Management";
		$this->titleAdd="Add User";
		$this->titleEdit="Edit User";
		$this->titleDel="Remove User";
		$this->viewForm="user/userForm";
		$this->urlDatatable=site_url("User/DataTable");
		$this->urlAdd=site_url("User/Add");
		$this->urlEdit=site_url("User/Edit");
		$this->urlDel=site_url("User/Del");
		$this->urlGetById=site_url("User/GetById");
		//$this->isAdd=true;
		//$this->isEdit=true;
		//$this->isDel=true;
		$this->load->model("M_user");
		$this->modelTbl = $this->M_user;
		$this->column = json_encode(array(
			array(
				"title"=>"NO",
				"data"=>"no",
			),
			array(
				"title"=>"Username",
				"data"=>"username",
			),
			array(
				"title"=>"Email",
				"data"=>"email",
			),
			array(
				"title"=>"Level",
				"data"=>"label_level",
			),
			array(
				"title"=>"Created",
				"data"=>"date_created",
			),
		));
		$this->load->model("M_userLevel");
		$dataLevel=$this->M_userLevel->GetLookUp();
		$this->lookUpLevelUser = "";
		foreach($dataLevel["data"] as $row){
			$this->lookUpLevelUser .= "<option value='".$row["level_user"]."'>".$row["label"]."</option>";
		}
		
	}
	
	
}