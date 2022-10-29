<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_role extends CI_Model {
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }
	
	public function getRoleMenu($user_level_id)
    {
        $dataUmum = $this->db->query("
			select 
				tbl_menu.id menu_id,
				tbl_menu.label menu_label, 
				tbl_menu.url menu_url, 
				tbl_menu.urutan menu_urutan, 
				tbl_menu.parent_id menu_parent_id, 
				tbl_menu.status menu_status,
				
				tbl_user_role.id role_id,
				tbl_user_role.user_level_id role_user_level_id,
				tbl_user_role.menu_id role_menu_id,
				tbl_user_role.is_create role_is_create,
				tbl_user_role.is_edit role_is_edit,
				tbl_user_role.is_delete role_is_delete,
				tbl_user_role.is_print role_is_print
			from 
				tbl_menu 
			left join tbl_user_role on tbl_user_role.menu_id = tbl_menu.id and tbl_user_role.user_level_id=$user_level_id
			where 
				tbl_menu.status='active'
		")->result();
        return [
            'data' => $dataUmum,
        ];
    }

}