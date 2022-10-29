<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cabang extends CI_Model {
    private $db;
    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('local', TRUE);
    }

    public function getCabang()
    {
        $queryCabang = $this->db->query("SELECT FKDCAB AS KODE,
		                FNMCAB AS NAMA_CABANG
                        FROM CABANG")->result();
        return $queryCabang;
    }

    public function CabangDesc($cabang)
    {
        $CabangDesc = $this->db->query("SELECT
		                FNMCAB AS NAMA_CABANG
                        FROM CABANG
                        WHERE FKDCAB='$cabang'")->row();
        return $CabangDesc;
    }
}