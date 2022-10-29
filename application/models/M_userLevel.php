<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userLevel extends CI_Model {
	
	var $tblName = "tbl_user_level";
	
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function Datatable($mulaiHalaman,$akhirHalaman,$cari)
    {
		
		$sqlCari = (isset($cari) && !empty($cari) ? " where id like '%$cari%' "
													." or level_user like '%$cari%' or label like '%$cari%' "
													." or status like '%$cari%' " 
					: "" );
		
        $dataUmum = $this->db->query("SELECT * FROM (
                                        SELECT ROW_NUMBER() OVER(order by id) as no,
										id,level_user,label,status
										from ".$this->tblName."
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
			'level_user'=>$post["level_user"],
			'label'=>$post["label"],
			'status'=>$post["status"],
		);

		$this->db->insert($this->tblName,$data);		
        return [
            'data' => true,
        ];
    }
	
	public function Edit($post)
    {
		$data = array(
			'level_user'=>$post["level_user"],
			'label'=>$post["label"],
			'status'=>$post["status"],
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
	
	public function GetLookUp()
    {
		$data  = $this->db->get($this->tblName)->result_array();		
        return [
            'data' => $data,
        ];
    }

}