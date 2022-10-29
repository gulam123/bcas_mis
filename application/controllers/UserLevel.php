<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "$application_folder/core/crud.php";

class UserLevel extends crud {
	
    public function __construct()
	{
		parent::__construct();
		
		$this->title="User Level Management";
		$this->titleAdd="Add User Level";
		$this->titleEdit="Edit User Level";
		$this->titleDel="Remove User Level";
		$this->viewForm="user/userLevelForm";
		$this->urlDatatable=site_url("UserLevel/DataTable");
		$this->urlAdd=site_url("UserLevel/Add");
		$this->urlEdit=site_url("UserLevel/Edit");
		$this->urlDel=site_url("UserLevel/Del");
		$this->urlGetById=site_url("UserLevel/GetById");
		//$this->isAdd=true;
		//$this->isEdit=true;
		//$this->isDel=true;
		$this->load->model("M_userLevel");
		$this->modelTbl = $this->M_userLevel;
		$this->column = json_encode(array(
			array(
				"title"=>"NO",
				"data"=>"no",
			),
			array(
				"title"=>"Level",
				"data"=>"level_user",
			),
			array(
				"title"=>"Label",
				"data"=>"label",
			),
			array(
				"title"=>"Status",
				"data"=>"status",
			),
		));
		
	}
	
	
}