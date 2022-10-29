<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
	var $tblName = "tbl_user";
	
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function Datatable($mulaiHalaman,$akhirHalaman,$cari)
    {
		
		$sqlCari = (isset($cari) && !empty($cari) ? " where a.id like '%$cari%' "
													." or a.username like '%$cari%' " 
					: "" );
		
        $dataUmum = $this->db->query("SELECT * FROM (
                                        SELECT ROW_NUMBER() OVER(order by a.id) as no,
										a.id,a.username,a.email,a.status,a.level_user,a.date_created,
										(select b.label from tbl_user_level b where b.level_user=a.level_user) label_level 
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
			'username'=>$post["username"],
			'email'=>$post["email"],
		);

		$this->db->insert($this->tblName,$data);		
        return [
            'data' => true,
        ];
    }
	
	public function Edit($post)
    {
		$data = array(
			'username'=>$post["username"],
			'email'=>$post["email"],
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
	
}