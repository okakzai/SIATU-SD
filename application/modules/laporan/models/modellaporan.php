<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modellaporan extends CI_Model {
	function siswa($kelas){
		if($kelas=='1-6') return $this->db->query('select * from siswa order by kelas asc')->result();
		else return $this->db->get_where('siswa',array('kelas'=>$kelas))->result();
	}
	function carinis($nis){
		return $this->db->get_where('siswa',array('nis'=>$nis))->result();
	}
	function carinilai($tabel,$nis,$matpel){
		return $this->db->get_where($tabel,array('nis'=>$nis,'matpel'=>$matpel))->result();
	}
	function editabsensisiswa($kelas,$thn,$bln){
		return $this->db->get_where('absensisiswa',array('kelas'=>$kelas,'thn'=>$thn,'bln'=>$bln))->result();
	}
}
