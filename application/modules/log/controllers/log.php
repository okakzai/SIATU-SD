<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Log extends CI_Controller {
	function in(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$submit=$this->input->post('submit');
		$submit=explode(' ',$submit);
		$tipe=$submit[2];
		$enkripsi=md5($password);
		$query=$this->db->query("SELECT * FROM $tipe WHERE username='$username' AND userpass='$enkripsi'");
		if($query->num_rows()==1){
			$username=$query->row()->username;
			if($tipe=='admin'){
				$id=$query->row()->adminid;
			}elseif($tipe=='guru'){
				$id=$query->row()->guruid;
			}
			$data=array('tipe'=>$tipe,'id'=>$id);
			$this->session->set_userdata($data);
			redirect($tipe);
		}else{
			redirect($tipe);
		}
	}
	function out($tipe){
		$this->session->sess_destroy();
		redirect($tipe);
	}
}
