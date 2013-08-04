<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function index(){
		if ($this->session->userdata('tipe')=='guru'){
			$data['content']='guru';
			$data['subcontent']='kosong';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$data['content']='log';
			$this->load->view('mainview',$data);
		}
	}
	function ajaxabsensi($kelas){
		$this->load->model('modelguru');			
		$data['absensi']=$this->modelguru->absensisiswa($kelas);
		$data['tipe']=$this->session->userdata('tipe');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$data['kelas']=$kelas;
		$this->load->view('absensi',$data);
	}
	function absensi($kelas){
		$this->load->model('modelguru');			
		$data['absensi']=$this->modelguru->absensisiswa($kelas);
		$data['content']='guru';
		$data['subcontent']='absensi';
		$data['tipe']=$this->session->userdata('tipe');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function viewabsensi($nis,$kelas){
		$this->load->model('modelguru');
		$data['content']='guru';	
		$data['subcontent']='absensipersiswa';
		$data['carinis']=$this->modelguru->carinis($nis);
		$data['tipe']=$this->session->userdata('tipe');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j M Y','');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function cekabsensi(){
		$this->load->model('modelguru');
		$tgl=$this->input->post('tgl');
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');	
		$date=$thn.'-'.$bln.'-'.$tgl;	
		$nis=$this->input->post('nis');
		$cekabsensi=$this->modelguru->cekabsensi($date,$nis);
		echo $cekabsensi;
	}
	function simpanabsensi(){
		$this->load->model('modelguru');
		$nis=$this->input->post('nis');
		$nama=$this->input->post('nama');
		$kelas=$this->input->post('kelas');
		$ket=$this->input->post('ket');
		$hari=$this->input->post('hari');
		$tgl=$this->input->post('tgl');
		$bln=$this->input->post('bln');
		$thn=$this->input->post('thn');
		$date=$thn.'-'.$bln.'-'.$tgl;
		$data=array('nis'=>$nis,'kelas'=>$kelas,'ket'=>$ket,'nama'=>$nama,'hari'=>$hari,'date'=>$date,'tgl'=>$tgl,'bln'=>$bln,'thn'=>$thn);
		$status=$this->modelguru->simpanabsensi($data);
		if ($status==1) echo 'ABSEN SISWA: SUKSES';
		else if($status==0) echo 'ABSEN SISWA: GAGAL';
	}
	
	function ajaxnilai(){
		$tipe=$this->session->userdata('tipe');
		$id=$this->session->userdata('id');
		$this->load->model('modelguru');
		$matpel=$this->modelguru->cariguru($id);
		foreach($matpel as $dat){
			$matpel=$dat->matpel;
		}
		if(($matpel=='Kelas 1')||($matpel=='Kelas 2')||($matpel=='Kelas 3')||($matpel=='Kelas 4')||($matpel=='Kelas 5')||($matpel=='Kelas 6')){
			$data['matpel']=$matpel;		
			$data['tipe']=$this->session->userdata('tipe');
			$mat=explode(' ',$matpel);
			$kelas=$mat[1];
			$data['siswa']=$this->modelguru->carisiswakelas($kelas);
			$this->load->view('nilai/kelas',$data);
		}
		elseif(($matpel=='PA')||($matpel=='PJK')||($matpel=='BING')||($matpel=='TIK')){
			$data['matpel']=$matpel;	
			$data['tipe']=$this->session->userdata('tipe');
			$data['siswa']=$this->modelguru->siswa();
			$this->load->view('nilai/khusus',$data);
		}
		else{
			redirect('guru');
		}
	}
	
	function nilai(){
		$tipe=$this->session->userdata('tipe');
		$id=$this->session->userdata('id');
		$this->load->model('modelguru');
		$matpel=$this->modelguru->cariguru($id);
		foreach($matpel as $dat){
			$matpel=$dat->matpel;
		}
		if(($matpel=='Kelas 1')||($matpel=='Kelas 2')||($matpel=='Kelas 3')||($matpel=='Kelas 4')||($matpel=='Kelas 5')||($matpel=='Kelas 6')){
			$data['content']='guru';
			$data['matpel']=$matpel;	
			$data['subcontent']='nilai/kelas';	
			$data['tipe']=$this->session->userdata('tipe');
			$mat=explode(' ',$matpel);
			$kelas=$mat[1];
			$data['siswa']=$this->modelguru->carisiswakelas($kelas);
			$this->load->view('mainview',$data);
		}
		elseif(($matpel=='PA')||($matpel=='PJK')||($matpel=='BING')||($matpel=='TIK')){
			$data['content']='guru';
			$data['matpel']=$matpel;	
			$data['subcontent']='nilai/khusus';	
			$data['tipe']=$this->session->userdata('tipe');
			$data['siswa']=$this->modelguru->siswa();
			$this->load->view('mainview',$data);
		}
		else{
			redirect('guru');
		
		}
	}
	function inputnilai($nis,$guruid){
		$this->load->model('modelguru');	
		$data['content']='guru';
		$matpel=$this->modelguru->cariguru($guruid);
		foreach($matpel as $dat){
			$matpel=$dat->matpel;
		}
		
		$matpelname=$this->modelguru->carisubmatpel($matpel);
		foreach($matpelname as $dat){
			$subname=$dat->subname;
			$subid=$dat->subid;
		}

		if(($matpel=='Kelas 1')||($matpel=='Kelas 2')||($matpel=='Kelas 3')||($matpel=='Kelas 4')||($matpel=='Kelas 5')||($matpel=='Kelas 6')){
			$data['subcontent']='nilai/kelaspersiswa';
		}
		elseif(($matpel=='PA')||($matpel=='PJK')||($matpel=='BING')||($matpel=='TIK')){
			$data['subcontent']='nilai/khususpersiswa';
			$data['matpelname']=$matpelname;
			$data['matpel']=$subid;
			$data['subname']=$subname;
		}
		else{
			redirect('guru');
		}	
		$data['tipe']=$this->session->userdata('tipe');
		$data['siswa']=$this->modelguru->carinis($nis);
		$this->load->view('mainview',$data);
	}

	function ajaxsimpannilai(){
		$this->load->model('modelguru');
		$nis=$this->input->post('nis');	
		$kelas=$this->modelguru->carinis($nis);
		foreach($kelas as $dat){
			$kelas=$dat->kelas;
		}
		$nilai=$this->input->post('nilai');
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		$matpel=$this->input->post('matpel');
		$this->form_validation->set_rules('nilai', '', 'required');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$tabel=$jenis2.$jenis1;
		$data=array('kelas'=>$kelas,'nis'=>$nis,'nilai'=>$nilai,'matpel'=>$matpel);
		if($this->form_validation->run() == TRUE){
			$ceknilai=$this->modelguru->simpannilai($data,$tabel);
			if($ceknilai==1){
				echo 'PROSES SIMPAN DATA: SUKSES';
			}else{
				echo 'PROSES SIMPAN DATA: GAGAL';
			}
		}else{
			echo 'DATA BELUM LENGKAP';
		}
	} 
	function ajaxupdatenilai(){
		$this->load->model('modelguru');
		$nis=$this->input->post('nis');	
		$kelas=$this->modelguru->carinis($nis);
		foreach($kelas as $dat){
			$kelas=$dat->kelas;
		}
		$nilai=$this->input->post('nilai');
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		$matpel=$this->input->post('matpel');
		$this->form_validation->set_rules('nilai', '', 'required');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$tabel=$jenis2.$jenis1;
		$data=array('kelas'=>$kelas,'nis'=>$nis,'nilai'=>$nilai,'matpel'=>$matpel);
		if($this->form_validation->run() == TRUE){
			$ceknilai=$this->modelguru->updatenilai($matpel,$nis,$data,$tabel);
			if($ceknilai==1){
				echo 'PROSES UPDATE DATA: SUKSES';
			}else{
				echo 'PROSES UPDATE DATA: GAGAL';
			}
		}else{
			echo 'DATA BELUM LENGKAP';
		}
	}
	function ajaxceknilai(){
		$matpel=$this->input->post('matpel');
		$nis=$this->input->post('nis');
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$tabel=$jenis2.$jenis1;
		$this->load->model('modelguru');
		$ceknilai=$this->modelguru->ceknilai($matpel,$nis,$tabel);
		echo $ceknilai;
	}
}
