<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		if ($this->session->userdata('tipe')=='admin'){
			$data['content']='admin';
			$data['subcontent']='kosong';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$this->load->model('modeladmin');
			$data['content']='log';
			$admin='arif';
			$carifoto=$this->modeladmin->carifoto($admin);
			foreach ($carifoto as $dat){
				$foto=$dat->foto;
			}
			$data['foto']=$foto;
			$this->load->view('mainview',$data);
		}
	}
	function idadmin(){
		$data['content']='admin';
		$data['subcontent']='idadmin';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	function fotoadmin(){
		$data['content']='admin';
		$data['subcontent']='fotoadmin';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);
	}
	function simpanidadmin(){
		$usernamelama=$this->input->post('usernamelama');
		$passwordlama=$this->input->post('passwordlama');
		$passwordlama=md5($passwordlama);
		$usernamebaru=$this->input->post('usernamebaru');
		$passwordbaru=$this->input->post('passwordbaru');
		$passwordbaru=md5($passwordbaru);
		$query=$this->db->query("SELECT * FROM admin WHERE username='$usernamelama' AND userpass='$passwordlama'");
		$this->form_validation->set_rules('usernamelama', 'Username Lama', 'trim|required|xss'); 
		$this->form_validation->set_rules('passwordlama', 'Password Lama', 'trim|required|xss'); 
		$this->form_validation->set_rules('usernamebaru', 'Username Baru', 'trim|required|alpha|min_length[3]|max_length[7]|xss'); 
		$this->form_validation->set_rules('passwordbaru', 'Password Baru', 'trim|required|min_length[5]|max_length[7]|xss');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|matches[passwordbaru]|xss');  
		if (($this->form_validation->run() == FALSE)||($query->num_rows()==0)){  
			$data['content']='admin';
			$data['subcontent']='idadmin';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$this->load->model('modeladmin');
			$cariid=$this->modeladmin->cariid($usernamelama,$passwordlama);
			foreach ($cariid as $db){
				$adminid=$db->adminid;
			}
			$update=$this->modeladmin->update($adminid,$usernamebaru,$passwordbaru);
			if($update==1){
				$data['content']='admin';
				$data['subcontent']='kosong';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
				echo '<script>alert("UPDATE ID ADMIN: SUKSES");</script>';	
			}else{
				redirect('admin');
			}
		}
	}
	function simpanfotoadmin(){
		$config['upload_path'] = './asset/img';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()){
			$data['error']=$this->upload->display_errors();
			$data['content']='admin';
			$data['subcontent']='fotoadmin';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$adminid=$this->session->userdata('id');
			$this->load->model('modeladmin');
			$this->modeladmin->updatefoto($adminid,$foto);
			$data['upload_data']=$upload_data;
			$data['content']='admin';
			$data['subcontent']='suksesfoto';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}
	}
	function simpanfotokegiatan(){
		$config['upload_path'] = './asset/img/galeri';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()){
			$data['error']=$this->upload->display_errors();
			$data['content']='admin';
			$data['subcontent']='fotoadmin';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}else{
			$upload_data=$this->upload->data();
			foreach ($upload_data as $item=>$val){
				$dat[$item]=$val;
			}
			$foto=$dat['file_name'];
			$data=array('nama'=>$foto);
			$adminid=$this->session->userdata('id');
			$this->load->model('modeladmin');
			$this->modeladmin->insertfoto('kegiatan',$data);
			$data['upload_data']=$upload_data;
			$data['content']='admin';
			$data['subcontent']='suksesfoto';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}
	}
	function siswa($kelas){
		$this->load->model('modeladmin');			
		$data['siswa']=$this->modeladmin->siswa($kelas);
		$data['content']='admin';
		$data['subcontent']='siswa';
		$data['tipe']=$this->session->userdata('tipe');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function editsiswa($nis,$kelas){
		$this->load->model('modeladmin');			
		$data['editsiswa']=$this->modeladmin->carinis($nis,'siswa');
		$data['content']='admin';
		$data['subcontent']='editsiswa';
		$data['tipe']=$this->session->userdata('tipe');
		$data['kelas']=$kelas;
		$this->load->view('mainview',$data);
	}
	function updatesiswa(){
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
		$data=array('nama'=>$nama,'gender'=>$gender,'tempat_lahir'=>$tempat_lahir,'agama'=>$agama,'alamat'=>$alamat,'nama_ayah'=>$nama_ayah,'kerja_ayah'=>$kerja_ayah,'nama_ibu'=>$nama_ibu,'kerja_ibu'=>$kerja_ibu,'kelas'=>$kelas,'ket'=>$ket,'tgl_lahir'=>$tgl_lahir,'nisn'=>$nisn);
		$this->load->model('modeladmin');
		$update=$this->modeladmin->updatesiswa($nis,$data);   
		if($update==1){
			redirect('admin/siswa/'.$kelas);
		}else{
			redirect('admin/editsiswa/'.$nis.'/'.$kelas);
		}     
	}
	function absensisiswa(){
		$data['content']='admin';
		$data['subcontent']='absensisiswa';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function laporanguru(){
		$data['content']='admin';
		$data['subcontent']='laporanguru';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function tabelabsensi(){
		$this->load->model('modeladmin');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$search=array('1','2','3','4','5','6','7','8','9','10','11','12');
		$replace=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$bulan=str_replace($search, $replace, $bln);
		$data['thn1']=$thn-1;
		$data['thn2']=$thn;
		$data['bulan']=$bulan;
		for($kelas=1; $kelas<=6; $kelas++){
			$qL=$this->modeladmin->L($kelas);
			$qP=$this->modeladmin->P($kelas);
			$qsakit=$this->modeladmin->sakit($kelas,$bln,$thn,'absensisiswa');	
			$qizin=$this->modeladmin->izin($kelas,$bln,$thn,'absensisiswa');
			$qalpha=$this->modeladmin->alpha($kelas,$bln,$thn,'absensisiswa');
			foreach ($qL as $row){$L[$kelas]=$row[0];}
			foreach ($qP as $row){$P[$kelas]=$row[0];}
			foreach ($qsakit as $row){$sakit[$kelas]=$row[0];}
			foreach ($qizin as $row){$izin[$kelas]=$row[0];}
			foreach ($qalpha as $row){$alpha[$kelas]=$row[0];}
		}
		$data['sakit']=array('1'=>$sakit[1],'2'=>$sakit[2],'3'=>$sakit[3],'4'=>$sakit[4],'5'=>$sakit[5],'6'=>$sakit[6]);
		$data['izin']=array('1'=>$izin[1],'2'=>$izin[2],'3'=>$izin[3],'4'=>$izin[4],'5'=>$izin[5],'6'=>$izin[6]);
		$data['alpha']=array('1'=>$alpha[1],'2'=>$alpha[2],'3'=>$alpha[3],'4'=>$alpha[4],'5'=>$alpha[5],'6'=>$alpha[6]);
		$data['L']=array('1'=>$L[1],'2'=>$L[2],'3'=>$L[3],'4'=>$L[4],'5'=>$L[5],'6'=>$L[6]);
		$data['P']=array('1'=>$P[1],'2'=>$P[2],'3'=>$P[3],'4'=>$P[4],'5'=>$P[5],'6'=>$P[6]);
		$this->load->view('tabelabsensi',$data);
	}
	function editabsensisiswa($nis,$date,$kelas){
		$this->load->model('modeladmin');
		$edit=$this->modeladmin->editabsensidate($nis,$date);	
		foreach($edit as $dat){
			$data['nama']=$dat->nama;
			$data['nis']=$dat->nis;
			$data['ket']=$dat->ket;
			$data['bulan']=$dat->bln;
		}
		$data['kelas']=$kelas;
		$data['date']=$date;
		$date=explode('-',$date);
		$data['tgl']=$date[2];
		$search=array('01','02','03','04','05','06','07','08','09','10','11','12');
		$replace=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$date[1]=str_replace($search,$replace,$date[1]);
		$data['bln']=$date[1];
		$data['thn']=$date[0];	
		$data['content']='admin';
		$data['subcontent']='tabeleditabsensi';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function updateabsensisiswa(){
		$nis=$this->input->post('nis');
		$kelas=$this->input->post('kelas');
		$date=$this->input->post('date');
		$ket=$this->input->post('ket');
		$this->load->model('modeladmin');
		$search=array('1','2','3');
		$replace=array('Sakit','Izin','Alpha');
		$ket=str_replace($search, $replace, $ket);
		$data=array('ket'=>$ket);
		$update=$this->modeladmin->updateabsensisiswa($nis,$date,$data);
		if($update==1){
			echo '<script>alert("UPDATE ABSENSI SISWA: SUKSES");</script>';
			$data['content']='admin';
			$data['subcontent']='absensisiswa';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);	
		}elseif($update==0){
			redirect('admin/editabsensisiswa/'.$nis.'/'.$date.'/'.$kelas);	
		}
	}
	function inputguru(){
		$data['content']='admin';
		$data['subcontent']='inputguru';
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function simpaninputguru(){
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$konfirmasi=$this->input->post('konfirmasi');
		$matpel=$this->input->post('matpel');
		$gender=$this->input->post('gender');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
		$this->form_validation->set_rules('nip','','required'); 
		$this->form_validation->set_rules('nama','','required');
		$this->form_validation->set_rules('username','','required|alpha|min_length[5]|max_length[9]');
		$this->form_validation->set_rules('password','','required|min_length[5]|max_length[9]|matches[konfirmasi]');
		$this->form_validation->set_rules('konfirmasi','','required');
		$this->form_validation->set_rules('matpel','','required');
		$userpass=md5($password);
		$data=array('matpel'=>$matpel,'nip'=>$nip,'nama'=>$nama,'gender'=>$gender,'agama'=>$agama,'alamat'=>$alamat,'username'=>$username,'userpass'=>$userpass,'password'=>$password);
		if ($this->form_validation->run() == TRUE){
			$this->load->model('modeladmin');
			$insert=$this->modeladmin->insert($data,'guru');
			if($insert==1){
				$data['content']='admin';
				$data['subcontent']='sukses';
				$data['proses']='INPUT';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}else{
				$data['content']='admin';
				$data['subcontent']='gagal';
				$data['proses']='INPUT';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}
		}else{
			$data['content']='admin';
			$data['subcontent']='inputguru';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}	
	}
	function listguru(){
		$data['content']='admin';
		$data['subcontent']='listguru';
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get('guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function editguru($guruid){
		$data['content']='admin';
		$data['subcontent']='editguru';
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get_where($guruid,'guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function simpaneditguru(){
		$guruid=$this->input->post('guruid');
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$konfirmasi=$this->input->post('konfirmasi');
		$matpel=$this->input->post('matpel');
		$gender=$this->input->post('gender');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
		$this->form_validation->set_rules('nip','','required'); 
		$this->form_validation->set_rules('nama','','required');
		$this->form_validation->set_rules('username','','required|alpha|min_length[5]|max_length[9]');
		$this->form_validation->set_rules('password','','matches[konfirmasi]');
		$userpass=md5($password);
		$data=array('matpel'=>$matpel,'nip'=>$nip,'nama'=>$nama,'gender'=>$gender,'agama'=>$agama,'alamat'=>$alamat,'username'=>$username,'userpass'=>$userpass,'password'=>$password);
		if ($this->form_validation->run() == TRUE){
			$this->load->model('modeladmin');
			$insert=$this->modeladmin->updateguru($guruid,$data);
			if($insert==1){
				$data['content']='admin';
				$data['subcontent']='sukses';
				$data['proses']='UPDATE';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}else{
				$data['content']='admin';
				$data['subcontent']='gagal';
				$data['proses']='UPDATE';
				$data['tipe']=$this->session->userdata('tipe');
				$this->load->view('mainview',$data);
			}
		}else{
			$data['content']='admin';
			$data['subcontent']='gagal';
			$data['proses']='UPDATE';
			$data['tipe']=$this->session->userdata('tipe');
			$this->load->view('mainview',$data);
		}
	}
	function absensiguru(){
		$data['content']='admin';
		$data['subcontent']='absensiguru';
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get('guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('mainview',$data);	
	}
	function viewabsensiguru($guruid){
		$data['content']='admin';
		$data['subcontent']='viewabsensiguru';
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get_where($guruid,'guru');
		$this->load->view('mainview',$data);	
	}
	function ajaxabsensiguru(){
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$data['hari']=$this->inadate->indonesian_date($wib,'l','');
		$data['tgl']=$this->inadate->indonesian_date($wib,'j F Y','');
		$this->load->model('modeladmin');
		$data['guru']=$this->modeladmin->get('guru');
		$data['tipe']=$this->session->userdata('tipe');
		$this->load->view('absensiguru',$data);	
	}
	function simpanabsenguru(){
		$ket=$this->input->post('ket');
		$guruid=$this->input->post('id');
		$str1=explode(" ",date('r'));
		$str2=explode("0",$str1[5]);
		if ($str2[1]==null) $dif=0;
		else $dif=$str2[1];
		$gmt=time()+($dif*60*60);
		$wib=$gmt+(7*60*60);
		$hari=$this->inadate->indonesian_date($wib,'l','');
		$date=date('Y-m-d');
		$bln=date('m');
		$thn=date('Y');
		$data=array('guruid'=>$guruid,'date'=>$date,'hari'=>$hari,'ket'=>$ket,'bln'=>$bln,'thn'=>$thn);
		$this->load->model('modeladmin');
		$cek=$this->modeladmin->cekabsensiguru($date,$guruid);
		if($cek==1){
			$data['tipe']=$this->session->userdata('tipe');
			$data['content']='admin';
			$data['subcontent']='gagal';
			$data['proses']='ABSENSI';
			$this->load->view('mainview',$data);
		}else{
			$insert=$this->modeladmin->insert($data,'absensiguru');
			if($insert==1){	
				$data['tipe']=$this->session->userdata('tipe');
				$data['content']='admin';
				$data['subcontent']='sukses';
				$data['proses']='ABSENSI';
				$this->load->view('mainview',$data);
			}else{
				$data['tipe']=$this->session->userdata('tipe');
				$data['content']='admin';
				$data['subcontent']='gagal';
				$data['proses']='ABSENSI';
				$this->load->view('mainview',$data);
			}
		}
	}
	function tabelguru(){
		$this->load->model('modeladmin');
		$thn=$this->input->post('thn');
		$bln=$this->input->post('bln');
		$search=array('1','2','3','4','5','6','7','8','9','10','11','12');
		$replace=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$bulan=str_replace($search, $replace, $bln);
		$data['thn1']=$thn-1;
		$data['thn2']=$thn;
		$data['bulan']=$bulan;
		$data['guru']=$this->modeladmin->get('guru');
		$count=$this->modeladmin->count('guru');
		for($guruid=0; $guruid<=$count+1; $guruid++){
			$qsakit=$this->modeladmin->sakit($guruid,$bln,$thn,'absensiguru');	
			$qizin=$this->modeladmin->izin($guruid,$bln,$thn,'absensiguru');
			$qalpha=$this->modeladmin->alpha($guruid,$bln,$thn,'absensiguru');
			foreach ($qsakit as $row){$s[$guruid]=$row[0];}
			foreach ($qizin as $row){$i[$guruid]=$row[0];}
			foreach ($qalpha as $row){$a[$guruid]=$row[0];}
			$arrsakit[]=$s[$guruid];
			$arrizin[]=$i[$guruid];
			$arralpha[]=$a[$guruid];
		}
		$data['sakit']=$arrsakit;
		$data['izin']=$arrizin;
		$data['alpha']=$arralpha;
		$data['jsakit']=array_sum($arrsakit);
		$data['jizin']=array_sum($arrizin);
		$data['jalpha']=array_sum($arralpha);
		$this->load->view('tabelguru',$data);
	}
}
