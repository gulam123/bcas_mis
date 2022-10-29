<?php 
function check_permission(){
    $CI     = get_instance();
    $user   = $CI->session->userdata('userid');

    // print("<pre>".print_r($token->token,true)."</pre>");die();
    if($user == ''){
        redirect(base_url());
    }
}


function check_permission_act($col){
    $ci = get_instance();
	//$url = $ci->uri->segment(1);
	$urlBar = explode(base_url(), current_url());
	$url = ( isset($urlBar[1]) ? $urlBar[1] : $urlBar[0] );
	
	$q = $ci->db->query("select 
		count(a.id) as jml
		from tbl_menu a 
		join tbl_user_role b on b.menu_id=a.id and b.$col=1
		where a.url='$url'
	")->row()->jml;
	
	return ( $q ? true : false);
}
