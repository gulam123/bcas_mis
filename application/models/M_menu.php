<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function getAllActive()
    {
        $q = $this->db->query("SELECT * from tbl_menu where status='active'")->result();
        return $q;
    }


}