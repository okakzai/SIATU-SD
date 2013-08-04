<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Psb extends CI_Controller {
	public function index()
	{
		$this->load->model('modelpsb');
		$data['content']='psb';
		$data['row']=$this->modelpsb->count();
		$this->load->view('mainview',$data);
	}
	function simpan(){
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$gender=$this->input->post('gender');
			if ($gender==1)$gender='L';
			elseif($gender==2)$gender='P';
			else $gender='';
		$tempat_lahir=$this->input->post('tempat_lahir');
		$agama=$this->input->post('agama');
			if ($agama==1)$agama='Islam';
			elseif($agama==2)$agama='Kristen';
			elseif($agama==3)$agama='Katolik';
			elseif($agama==4)$agama='Hindu';
			else $agama='';
		$alamat=$this->input->post('alamat');
		$nama_ayah=$this->input->post('nama_ayah');
		$kerja_ayah=$this->input->post('kerja_ayah');
		$nama_ibu=$this->input->post('nama_ibu');
		$kerja_ibu=$this->input->post('kerja_ibu');
		$kelas=$this->input->post('kelas');
			if ($kelas==0)$kelas='';
		$ket=$this->input->post('ket');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$tgl=$this->input->post('tgl');
		$tgl_lahir=$thn.'-'.$bln.'-'.$tgl;
		$nisn=$this->input->post('nisn');
		$data=array('nis'=>$nis,'nama'=>$nama,'gender'=>$gender,'tempat_lahir'=>$tempat_lahir,'agama'=>$agama,'alamat'=>$alamat,'nama_ayah'=>$nama_ayah,'kerja_ayah'=>$kerja_ayah,'nama_ibu'=>$nama_ibu,'kerja_ibu'=>$kerja_ibu,'kelas'=>$kelas,'ket'=>$ket,'tgl_lahir'=>$tgl_lahir,'nisn'=>$nisn);
		$this->form_validation->set_rules('nisn', 'NISN', 'numeric');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');    
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|numeric'); 
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');          
		$this->form_validation->set_rules('thn', 'Tahun', 'required|numeric'); 
		$this->form_validation->set_rules('bln', 'Bulan', 'required|numeric'); 
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required|numeric'); 
		$this->form_validation->set_rules('agama', 'Agama', 'required|numeric'); 
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');          
		$this->form_validation->set_rules('kerja_ayah', 'Pekerjaan Ayah', 'required');          
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');          
		$this->form_validation->set_rules('kerja_ibu', 'Pekerjaan Ibu', 'required');          
		$this->form_validation->set_rules('alamat', 'Alamat', 'required'); 
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|numeric');          
        if ($this->form_validation->run() == FALSE){  
			$this->load->model('modelpsb');
			$data['content']='psb';
			$data['row']=$this->modelpsb->count();
			$this->load->view('mainview',$data);
		}else{
			$this->load->model('modelpsb');
			$this->modelpsb->simpan($data);   
			$data['content']='sukses';
			$this->load->view('mainview',$data); 
        }    
	}
}
