<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index(){
		$this->load->model('modelberanda');
		$data['content']='beranda';
		$data['foto']=$this->modelberanda->get('kegiatan');
		$this->load->view('mainview',$data);
	}
	function berita(){
		$beritaid=$this->input->post('beritaid');
		$this->load->view('berita/'.$beritaid);
	}
}
