<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userRole extends CI_Model {
	
	var $tblName = "tbl_user_role";
	
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function Datatable($mulaiHalaman,$akhirHalaman,$cari,$level_user)
    {
		
		$sqlCari = (isset($cari) && !empty($cari) ? " and a.label like '%$cari%' " : "" );
		
        $dataUmum = $this->db->query("SELECT * FROM (
                                        SELECT ROW_NUMBER() OVER(order by a.urutan) as no,
										d.id, c.id user_level_id , a.id menu_id, d.is_view ,d.is_create, d.is_edit, d.is_delete, d.is_print,
										a.label menu,d.id role_id,
										(select count(e.id) from tbl_menu e where e.parent_id=a.id) has_child
										from tbl_menu a 
											left join tbl_user_level c on c.level_user='$level_user'
											left join tbl_user_role d on d.user_level_id=c.id and d.menu_id=a.id
										where a.status='active'										
										".$sqlCari." 
                                    ) as a 
                                    WHERE no between $mulaiHalaman and $akhirHalaman ORDER BY no ASC")->result();

        $jumlahUmum = $this->db->query("SELECT COUNT(id) as jml from tbl_menu")->row()->jml;

        return [
            'data' => ( !empty($level_user) ? $dataUmum : array()),
            'jumlah'=> ( !empty($level_user) ? $jumlahUmum: 0) 
        ];
    }
    
	public function Add($post)
    {
		$data = array(
			'user_level_id'=>$post["user_level_id"],
			'menu_id'=>$post["menu_id"],
			'is_view'=>$post["is_view"],
			'is_create'=>$post["is_create"],
			'is_edit'=>$post["is_edit"],
			'is_delete'=>$post["is_delete"],
			'is_print'=>$post["is_print"],
		);

		$this->db->insert($this->tblName,$data);		
        return [
            'data' => true,
        ];
    }
	
	public function Edit($post)
    {
		$data = array(
			'user_level_id'=>$post["user_level_id"],
			'menu_id'=>$post["menu_id"],
			'is_view'=>$post["is_view"],
			'is_create'=>$post["is_create"],
			'is_edit'=>$post["is_edit"],
			'is_delete'=>$post["is_delete"],
			'is_print'=>$post["is_print"],
		);

		$this->db->set($data);		
		$this->db->where('id',$post["role_id"]);		
		$this->db->update($this->tblName);		
        return [
            'data' => true,
        ];
    }
	
	

}