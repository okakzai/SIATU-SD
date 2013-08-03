<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelpsb extends CI_Model {
	function count(){
		return $this->db->count_all('siswa');
	}
	function simpan($data){
		$this->db->insert('siswa',$data);
		if ($this->db->affected_rows()) return '1';
		else return'0';
	}
}
