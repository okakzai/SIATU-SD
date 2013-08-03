<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resolusi extends CI_Controller {
	public function index(){
		$data['content']='resolusi';
		$this->load->view('mainview',$data);
	}
}
