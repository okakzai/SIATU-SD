<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelguru extends CI_Model {
	function absensisiswa($kelas){
		return $this->db->get_where('siswa',array('kelas'=>$kelas))->result();
	}
	function carinis($nis){
		return $this->db->get_where('siswa',array('nis'=>$nis))->result();
	}
	function cekabsensi($date,$nis){
		$this->db->get_where('absensisiswa',array('date'=>$date,'nis'=>$nis))->result();
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function simpanabsensi($data){
		$this->db->insert('absensisiswa',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function cariket($nis){
		return $this->db->get_where('absensisiswa',array('nis'=>$nis))->result();
	}
	function cariguru($guruid){
		return $this->db->get_where('guru',array('guruid'=>$guruid))->result();
	}
	function carisiswakelas($matpel){
		return $this->db->get_where('siswa',array('kelas'=>$matpel))->result();
	}
	function siswa(){
		return $this->db->query('select * from siswa order by kelas asc')->result();
	}
	function ceknilai($matpel,$nis,$tabel){
		$this->db->get_where($tabel,array('matpel'=>$matpel,'nis'=>$nis))->result();
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function simpannilai($data,$tabel){
		$this->db->insert($tabel,$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function updatenilai($matpel,$nis,$data,$tabel){
		$this->db->where(array('nis'=>$nis,'matpel'=>$matpel));
		$this->db->update($tabel,$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function carisubmatpel($matpel){
		return $this->db->get_where('submatpel',array('subname'=>$matpel))->result();
	}
}
