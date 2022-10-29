<?php 

function menu($parent_id=0){
	$ret = "";
    $ci     = get_instance();
    $level   = $ci->session->userdata('level');
	
	$q=$ci->db->query("select 
		a.*
		from tbl_menu a
		join tbl_user_role b on b.menu_id = a.id and b.user_level_id = (select id from tbl_user_level where level_user='$level')
			and b.is_view=1
		where a.status='active'
		and a.parent_id=$parent_id
		order by a.urutan asc 
	")->result_array();
	
	foreach( $q as $row ){
		$has_child = has_child($row["id"]);
		
		$urlBar = explode(base_url(), current_url());
		$activeUrl = ( isset($urlBar[1]) ? $urlBar[1] : $urlBar[0] );
		
		if( $has_child < 1 ){
			$ret.='
            <div class="menu-item" >
                <a href="'.site_url($row["url"]).'" '. ($activeUrl == $row["url"] ? 'class="menu-link menu-active-bg active"' : '') .' class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
						'.$row["icon"].'
                        </span>
                    </span>
                    <span class="menu-title">'.$row["label"].'</span>
                </a>
            </div>
			';
		}
		else{
			$ret.='
            <div data-kt-menu-trigger="click" '.( in_array($activeUrl, in_sub_menu_url($row["id"]) ) ? 'class="menu-item menu-accordion hover show"' : '').' 
				class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <span class="svg-icon svg-icon-2">
						'.$row["icon"].'
                        </span>
                    </span>
                    <span class="menu-title">'.$row["label"].'</span>
                    <span class="menu-arrow"></span>
                </span>
                <!-- <div class="menu-sub menu-sub-accordion menu-active-bg show"> -->
                <div  class="menu-sub menu-sub-accordion">
					'.menu_child($row["id"]).'
                </div>
            </div>
			
			';
		}
	}
	
	return $ret;
}

function has_child($parent_id=0){
    $ci     = get_instance();
    $level   = $ci->session->userdata('level');
	
	$q=$ci->db->query("select 
		count(a.id) as jml
		from tbl_menu a
		join tbl_user_role b on b.menu_id = a.id and b.user_level_id = (select id from tbl_user_level where level_user='$level')
			and b.is_view=1
		where a.status='active'
		and a.parent_id=$parent_id
		order by a.urutan asc 
	")->row()->jml;
	
	return $q;
}


function menu_child($parent_id=0){
	$ret = "";
    $ci     = get_instance();
    $level   = $ci->session->userdata('level');
	
	$q=$ci->db->query("select 
		a.*
		from tbl_menu a
		join tbl_user_role b on b.menu_id = a.id and b.user_level_id = (select id from tbl_user_level where level_user='$level')
			and b.is_view=1
		where a.status='active'
		and a.parent_id=$parent_id
		order by a.urutan asc 
	")->result_array();
	
	foreach( $q as $row ){
		
		$urlBar = explode(base_url(), current_url());
		$activeUrl = ( isset($urlBar[1]) ? $urlBar[1] : $urlBar[0] );
		
		$ret.='<div '. ($activeUrl == $row["url"] ? 'class="menu-link menu-active-bg active"' : '') .' class="menu-item">
                        <a class="menu-link" href="'.site_url($row["url"]).'">
                            <span class="menu-bullet">
                                '.$row["icon"].'
                            </span>
                            <span class="menu-title">'.$row["label"].'</span>
                        </a>
                    </div>		
		';
	}
	
	return $ret;
}

function in_sub_menu_url($parent_id){
    $ci     = get_instance();
    $level   = $ci->session->userdata('level');
	
	$q=$ci->db->query("select 
		a.url 
		from tbl_menu a
		join tbl_user_role b on b.menu_id = a.id and b.user_level_id = (select id from tbl_user_level where level_user='$level')
			and b.is_view=1
		where a.status='active'
		and a.parent_id=$parent_id
		order by a.urutan asc 
	")->result_array();
	
	$ret = array();
	foreach( $q as $row ){
		$ret[] = $row["url"];
	}
	
	return $ret;
}


