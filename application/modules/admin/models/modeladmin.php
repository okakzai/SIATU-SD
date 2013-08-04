<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modeladmin extends CI_Model {
	function cariid($usernamelama,$passwordlama){
		return $this->db->get_where('admin',array('username'=>$usernamelama,'userpass'=>$passwordlama))->result();
	}
	function update($adminid,$usernamebaru,$passwordbaru){
		$data=array('username'=>$usernamebaru,'userpass'=>$passwordbaru);
		$this->db->where('adminid',$adminid);
		$this->db->update('admin',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function updatefoto($adminid,$foto){
		$data=array('foto'=>$foto);
		$this->db->where('adminid',$adminid);
		$this->db->update('admin',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function insertfoto($tabel,$data){
		$this->db->insert($tabel,$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function carifoto($admin){
		return $this->db->get_where('admin',array('username'=>$admin))->result();
	}
	function siswa($kelas){
		return $this->db->get_where('siswa',array('kelas'=>$kelas))->result();
	}
	function carinis($nis,$table){
		return $this->db->get_where($table,array('nis'=>$nis))->result();
	}
	function updatesiswa($nis,$data){
		$this->db->where('nis',$nis);
		$this->db->update('siswa',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function editabsensidate($nis,$date){
		return $this->db->get_where('absensisiswa',array('nis'=>$nis,'date'=>$date))->result();
	}
	function updateabsensisiswa($nis,$date,$data){
		$this->db->where(array('nis'=>$nis,'date'=>$date));
		$this->db->update('absensisiswa',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function insert($data,$tabel){
		$this->db->insert($tabel,$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function get($tabel){
		return $this->db->get($tabel)->result();
	}
	function get_where($guruid,$tabel){
		return $this->db->get_where($tabel,array('guruid'=>$guruid))->result();
	}
	function updateguru($guruid,$data){
		$this->db->where('guruid',$guruid);
		$this->db->update('guru',$data);
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function cekabsensiguru($date,$guruid){
		$this->db->get_where('absensiguru',array('date'=>$date,'guruid'=>$guruid))->result();
		if ($this->db->affected_rows()) return 1;
		else return 0;
	}
	function L($kelas){
		$sql= "SELECT COUNT(*) FROM siswa WHERE kelas=$kelas AND gender='L'";
		$query = mysql_query($sql);
		while($row = $this->db->call_function('fetch_row', $query)) {
        	$return[] = $row;
    	}
      	return $return;
	}
	function P($kelas){
		$sql= "SELECT COUNT(*) FROM siswa WHERE kelas=$kelas AND gender='P'";
		$query = mysql_query($sql);
		while($row = $this->db->call_function('fetch_row', $query)) {
        	$return[] = $row;
    	}
      	return $return;
	}
	function sakit($id,$bln,$thn,$tabel){
		if($tabel=='absensisiswa'){	
			$sql= "SELECT COUNT(*) FROM $tabel WHERE ket='sakit' AND kelas=$id AND bln=$bln AND thn=$thn";
		}elseif($tabel=='absensiguru'){
			$sql= "SELECT COUNT(*) FROM $tabel WHERE ket='1' AND guruid=$id AND bln=$bln AND thn=$thn";
		}
		$query = mysql_query($sql);
		while($row = $this->db->call_function('fetch_row', $query)) {
        	$return[] = $row;
    	}
      	return $return;
	}	
	function izin($id,$bln,$thn,$tabel){
		if($tabel=='absensisiswa'){	
			$sql= "SELECT COUNT(*) FROM $tabel WHERE ket='sakit' AND kelas=$id AND bln=$bln AND thn=$thn";
		}elseif($tabel=='absensiguru'){
			$sql= "SELECT COUNT(*) FROM $tabel WHERE ket='2' AND guruid=$id AND bln=$bln AND thn=$thn";
		}
		$query = mysql_query($sql);
		while($row = $this->db->call_function('fetch_row', $query)) {
        	$return[] = $row;
    	}
      	return $return;
	}
	function alpha($id,$bln,$thn,$tabel){
		if($tabel=='absensisiswa'){	
			$sql= "SELECT COUNT(*) FROM $tabel WHERE ket='sakit' AND kelas=$id AND bln=$bln AND thn=$thn";
		}elseif($tabel=='absensiguru'){
			$sql= "SELECT COUNT(*) FROM $tabel WHERE ket='3' AND guruid=$id AND bln=$bln AND thn=$thn";
		}
		$query = mysql_query($sql);
		while($row = $this->db->call_function('fetch_row', $query)) {
        	$return[] = $row;
    	}
      	return $return;
	}
	function count($tabel){
		return $this->db->count_all($tabel);
	}
}
