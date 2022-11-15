<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include "$application_folder/core/crud.php";

class GanttChart extends crud {
	
    public function __construct()
	{
		parent::__construct();
		
		$this->title="Gantt Chart Management";
		$this->titleAdd="Projek";
		$this->titleEdit="Edit";
		$this->titleDel="Remove";
		$this->viewForm="ganttchart/form";
		$this->urlDatatable=site_url("GanttChart/DataTable");
		$this->urlAdd=site_url("GanttChart/Add");
		$this->urlEdit=site_url("GanttChart/Edit");
		$this->urlDel=site_url("GanttChart/Del");
		$this->urlSave=site_url("GanttChart/Save");
		$this->urlGetById=site_url("GanttChart/GetById");
		$this->urlDetail=site_url("GanttChart/View");
		//$this->isAdd=false;
		//$this->isEdit=false;
		//$this->isDel=false;
		$this->load->model("M_GanttChart");
		$this->modelTbl = $this->M_GanttChart;
		$this->column = json_encode(array(
			array(
				"title"=>"NO",
				"data"=>"no",
			),
			array(
				"title"=>"Projek",
				"data"=>"projek",
			),
			array(
				"title"=>"Deskripsi",
				"data"=>"deskripsi",
			),

		));
		$this->addView=array(
			"ganttchart/detail"
		);
		
	}
	
	function View(){
		
		$id = $this->input->get("id");
		
		if(!$id){
			redirect(site_url("GanttChart"));
		}
		
		$this->projek = $this->modelTbl->getById($id)["data"];
		
		//var_dump($projek);die();
		
		$this->title="Gantt Chart ".$this->projek->projek;
		$this->titleAdd="Save";
		$this->isAdd=true;
		$this->urlGanttChartItem=site_url("GanttChart/Item?projek_id=$id");
		$this->urlAdd=site_url("GanttChart/AddItem");
		$this->urlEdit=site_url("GanttChart/EditItem");
		$this->urlDel=site_url("GanttChart/DelItem");
        $this->load->view('ganttchart/view');
		
	}
	
	function Item(){
		$projekId = $this->input->get("projek_id");
		$output = $this->modelTbl->getItem($projekId);
		//var_dump($projek);die();
		header('Content-Type: application/json; charset=utf-8');
        echo json_encode($output);
	}
	
	function AddItem(){
		$post = $this->input->post();
		$this->modelTbl->AddItem($post);
	}
	
	function EditItem(){
		$post = $this->input->post();
		$this->modelTbl->EditItem($post);
	}
	
	function DelItem(){
		$post = $this->input->post();
		$this->modelTbl->DelItem($post);
	}
	
}