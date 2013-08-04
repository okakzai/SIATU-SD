<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function index(){
		$data['content']='laporan';
		$data['subcontent']='kosong';	
		$this->load->view('mainview',$data);
	}
	function siswa(){
		$data['content']='laporan';
		$data['subcontent']='siswa';	
		$this->load->view('mainview',$data);
	}
	function tabelsiswa(){
		$this->load->model('modellaporan');
		$kelas=$this->input->post('kelas');
		$data['tabelsiswa']=$this->modellaporan->siswa($kelas);
		$this->load->view('tabelsiswa',$data);
	}
	function absensi(){
		$data['content']='laporan';
		$data['subcontent']='absensi';	
		$this->load->view('mainview',$data);
	}
	function tabelabsensi(){
		$this->load->model('modellaporan');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$kelas=$this->input->post('kelas');
		if($bln==1)$bulan='Januari';
		elseif($bln==2)$bulan='Februari';
		elseif($bln==3)$bulan='Maret';
		elseif($bln==4)$bulan='April';
		elseif($bln==5)$bulan='Mei';
		elseif($bln==6)$bulan='Juni';
		elseif($bln==7)$bulan='Juli';
		elseif($bln==8)$bulan='Agustus';
		elseif($bln==9)$bulan='September';
		elseif($bln==10)$bulan='Oktober';
		elseif($bln==11)$bulan='November';
		elseif($bln==12)$bulan='Desember';
		$data['thn1']=$thn-1;
		$data['thn2']=$thn;
		$data['bulan']=$bulan;
		$data['kelas']=$kelas;
		$data['edit']=$this->modellaporan->editabsensisiswa($kelas,$thn,$bln);
		$this->load->view('tabelabsensi',$data);
	}
	function nilai(){
		$data['content']='laporan';
		$data['subcontent']='nilai';	
		$this->load->view('mainview',$data);
	}
	function tabelnilai(){
		$nis=$this->input->post('nis');	
		$jenis1=$this->input->post('jenis1');
		$jenis2=$this->input->post('jenis2');
		$kelas=$this->input->post('kelas');
		if($jenis2==1)$jenis2='mid1'; elseif($jenis2==2)$jenis2='sem1'; elseif($jenis2==3)$jenis2='mid2'; elseif($jenis2==4)$jenis2='sem2';
		if($jenis1==1)$jenis1='pr'; elseif($jenis1==2)$jenis1='tugas'; elseif($jenis1==3)$jenis1='ujian';
		$tabel=$jenis2.$jenis1;
		$this->load->model('modellaporan');
		$siswa=$this->modellaporan->carinis($nis);
		foreach($siswa as $dat){
			$nis=$dat->nis;	
			$data['nis']=$nis;
			$data['nama']=$dat->nama;
			$data['kelas']=$dat->kelas;
		}
		for($matpel=1; $matpel<=12; $matpel++){
			$pkn=$this->modellaporan->carinilai($tabel,$nis,$matpel);
			foreach ($pkn as $dat){$nilai[$matpel]=$dat->nilai;}
		}
		if(isset($nilai[2])) $data['pkn']=$nilai[2]; else $nilai[2]=0;
		if(isset($nilai[4])) $data['mat']=$nilai[4]; else $nilai[4]=0;
		if(isset($nilai[5])) $data['ipa']=$nilai[5]; else $nilai[5]=0;
		if(isset($nilai[6])) $data['ips']=$nilai[6]; else $nilai[6]=0;
		if(isset($nilai[7])) $data['sbk']=$nilai[7]; else $nilai[7]=0;
		if(isset($nilai[8])) $data['pjk']=$nilai[8]; else $nilai[8]=0;
		if(isset($nilai[9])) $data['bjw']=$nilai[9]; else $nilai[9]=0;
		if(isset($nilai[3])) $data['bin']=$nilai[3]; else $nilai[3]=0;
		if(isset($nilai[11])) $data['pram']=$nilai[11]; else $nilai[11]=0;
		if(isset($nilai[12])) $data['tik']=$nilai[12]; else $nilai[12]=0;
		if(isset($nilai[10])) $data['bing']=$nilai[10]; else $nilai[10]=0;
		if(isset($nilai[1])) $data['pa']=$nilai[1]; else $nilai[1]=0;
		$jumlah=$nilai[1]+$nilai[2]+$nilai[3]+$nilai[4]+$nilai[5]+$nilai[6]+$nilai[7]+$nilai[8]+$nilai[9]+$nilai[10];
		$data['jumlah']=$jumlah;
		$rata2=$jumlah/10;
		$rata2=round($rata2,1);
		$data['rata2']=$rata2;
		$this->load->view('tabelnilai',$data);
	}
}
