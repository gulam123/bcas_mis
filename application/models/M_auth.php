<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function ValidasiLogin($username)
    {
        $cek = $this->db->query("SELECT token FROM TBL_USER WHERE username='$username'")->row();
        // var_dump($cek->token);die();
        if($cek->token == 'expired'){
            $next = 'false';
        }else{
            $next = 'true';
        }
        return $next;
    }

    public function login($username, $Password){
        $user_password = md5($Password);
        $sql = $this->db->query("SELECT username as user_id,
                                        level_user,
                                        password 
                                    FROM TBL_USER
                                    WHERE username='$username' and password='$user_password'");
        $login_by       = $sql->row();
        // print("<pre>".print_r([$login_by],true)."</pre>");die();
        $updateLogin    = $this->updateLogin($username);
        return $login_by;
    }

    private function updateLogin($username){
        $date       = date('Y/m/d h/i/s');
        $verifikasi = str_replace(" ","",$date).$username;
        $token      = password_hash($verifikasi, PASSWORD_DEFAULT);
        //$sql = $this->db->query("UPDATE TBL_USER SET date_login=GETDATE(), login_by='AMS', token='$token' WHERE username='$username'");
        $sql = $this->db->query("UPDATE TBL_USER SET date_login=NOW(), login_by='AMS', token='$token' WHERE username='$username'");
        return $sql;
    }

    public function log_out($username){
        //$sql = $this->db->query("UPDATE TBL_USER SET date_login=GETDATE(), login_by='Logout', token='expired' WHERE username='$username'");
        $sql = $this->db->query("UPDATE TBL_USER SET date_login=NOW(), login_by='Logout', token='expired' WHERE username='$username'");
        return $sql;
    }

    public function register($username,$email,$level,$password)
    {
        $password_md5 = md5($password);
        $user_name    = $username;
        //$query        = $this->db->query("INSERT INTO TBL_USER(name,username,password,pass_desc,level_user,date_created,email,token)
          //                      VALUES ('$username','$user_name','$password_md5','$password','$level',GETDATE(),'$email','expired')");
								
        $query        = $this->db->query("INSERT INTO TBL_USER(name,username,password,pass_desc,level_user,date_created,email,token)
                                VALUES ('$username','$user_name','$password_md5','$password','$level',NOW(),'$email','expired')");
        return $query;
    }
}