<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_GanttChart extends CI_Model {
	
	var $tblName = "tbl_ganttchart";
	
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function Datatable($mulaiHalaman,$akhirHalaman,$cari)
    {
		
		$sqlCari = (isset($cari) && !empty($cari) ? " where a.projek like '%$cari%' or a.deskripsi like '%$cari%'" : "" );
		
        $dataUmum = $this->db->query("SELECT * FROM (
                                        SELECT ROW_NUMBER() OVER(order by a.id) as no,
										a.*
										from ".$this->tblName." a 
										".$sqlCari." 
                                    ) as a 
                                    WHERE no between $mulaiHalaman and $akhirHalaman ORDER BY no ASC")->result();

        $jumlahUmum = $this->db->query("SELECT COUNT(id) as jml from ".$this->tblName)->row()->jml;

        return [
            'data' => $dataUmum,
            'jumlah'=> $jumlahUmum
        ];
    }
    
	public function GetById($post)
    {
        $dataUmum = $this->db->query("SELECT * from ".$this->tblName." where id='$post[id]'")->result()[0];
        return [
            'data' => $dataUmum,
        ];
    }
	
	public function Add($post)
    {
		$data = array(
			'projek'=>$post["projek"],
			'deskripsi'=>$post["deskripsi"],
		);

		$this->db->insert($this->tblName,$data);		
        return [
            'data' => true,
        ];
    }
	
	public function Edit($post)
    {
		$data = array(
			'projek'=>$post["projek"],
			'deskripsi'=>$post["deskripsi"],
		);

		$this->db->set($data);		
		$this->db->where('id',$post["id"]);		
		$this->db->update($this->tblName);		
        return [
            'data' => true,
        ];
    }
	
	public function Del($post)
    {
		$this->db->where('id',$post["id"]);		
		$this->db->delete($this->tblName);		
        return [
            'data' => true,
        ];
    }
	
	public function getItem($projekId)
    {
		$this->db->where('projek_id',$projekId);		
		$data = $this->db->get("tbl_ganttchart_item")->result_array();		
		
		$ret = array();
		foreach($data as $row){
			$row["start_date"] = date("d-m-Y",strtotime($row["start_date"]));
			$ret[] = $row;
		}
		
        return [
            'data' => $ret,
        ];
    }

	public function AddItem($post)
    {
		$data = $post;
		$this->db->insert('tbl_ganttchart_item',array(
			"projek_id"=>$post["projek_id"],
			"text"=>$post["text"],
			"start_date"=>date("Y-m-d",strtotime($post["start_date"])),
			"duration"=>$post["duration"],
			"progress"=>$post["progress"],
			"open"=>( isset($post["open"]) ? $post["open"] : "" ),
			"parent"=>$post["parent"],
		));		
        return [
            'data' => true,
        ];
    }
	
	public function EditItem($post)
    {
		$data = $post;
		$this->db->set(array(
			"projek_id"=>$post["projek_id"],
			"text"=>$post["text"],
			"start_date"=>date("Y-m-d",strtotime($post["start_date"])),
			"duration"=>$post["duration"],
			"progress"=>$post["progress"],
			"open"=>( isset($post["open"]) ? $post["open"] : "" ),
			"parent"=>$post["parent"],
		));		
		$this->db->where('id',$post["id"]);
		$this->db->update('tbl_ganttchart_item');
        return [
            'data' => true,
        ];
    }

	public function DelItem($post)
    {
		$this->db->where('id',$post["id"]);		
		$this->db->delete('tbl_ganttchart_item');		
        return [
            'data' => true,
        ];
    }

}