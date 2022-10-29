<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        error_reporting(~E_ALL);
		$this->load->model(['M_auth']);
        $this->load->library(['form_validation']);
        $this->load->helper(['form']);
	}

    public function index() {
        if (isset($this->session->userid)) { 
            $this->load->view('dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function dashboard() {
        if (isset($this->session->userid)) {
            $this->load->view('dashboard');
        } else {
            $this->load->view('login');
        }
    }

    public function getLogin() {
        $post     = $this->input->post();
        $username = $post['UserName'];
        $Password = $post['PassWord'];
        // print("<pre>".print_r([$username,$Password],true)."</pre>");die();
        $this->form_validation->set_rules('UserName', 'User Login', 'required'); //field js/name  || label out  || function
        $this->form_validation->set_rules('PassWord', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status'=>'failed',
                'msg'=>'Kesalahan input',
                'rules'=>$this->form_validation->error_array()
            ]);
        } else {
            $ceklogin = $this->M_auth->ValidasiLogin($username);
            // var_dump($ceklogin);die;
            if ($ceklogin){
                $result = $this->M_auth->login($username, $Password);
                if ($result) {
                    $data = array(
                        // 'posko' => $result->posko,
                        // 'cabang' => $result->cabang,
                        'level' => $result->level_user,
                        'userid' => $result->user_id
                    );
                    $this->session->set_userdata($data);
                    echo json_encode([
                        'status'=>'success',
                        'msg'=>'Berhasil Login'
                    ]);
                } else {
                    echo json_encode([
                        'status'=>'failed',
                        'msg'=>'Username atau Password Salah!'
                    ]);
                }
            }
            else {
                echo json_encode([
                    'status'=>'failed',
                    'msg'=>'User Sudah Melakukan Login di Perangkat Lain !'
                ]);
            }
        }
    }

    public function logout()
    {
        $username   = $this->session->userid;
        $logout     = $this->M_auth->log_out($username);
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function registration()
    {
        $post = $this->input->post();
        $username   = $post['username'];
        $email      = $post['email']; 
        $level      = $post['level']; 
        $password   = $post['password'];

        $this->form_validation->set_rules('username', 'USERNAME', 'required|trim|is_unique[TBL_USER.USERNAME]',[
            'is_unique' => 'Username Sudah Terdaftar'
        ]);
        $this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email|trim|is_unique[TBL_USER.EMAIL]', [
            'is_unique' => 'Email Sudah Terdaftar'
        ]);
        $this->form_validation->set_rules('level', 'LEVEL', 'required|trim');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required|trim|min_length[3]|matches[password_conf]',[
            'matches' => 'Password Tidak Valid'
        ]);
        $this->form_validation->set_rules('password_conf', 'PASSWORD', 'required|trim|min_length[3]|matches[password]',[
            'matches' => 'Konfirmasi Password Tidak Valid'
        ]);
        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status'=>'failed',
                'msg'=>'Kesalahan input',
                'rules'=>$this->form_validation->error_array()
            ]);
        } else {
            $result = $this->M_auth->register($username,$email,$level,$password);
            if ($result) {
                echo json_encode([
                    'status'=>'success',
                    'msg'=>'Berhasil Mendaftar Akun'
                ]);
            } else {
                echo json_encode([
                    'status'=>'failed',
                    'msg'=>'Gagal, Mohon Coba Ulang'
                ]);
            }
        }
    }
}
