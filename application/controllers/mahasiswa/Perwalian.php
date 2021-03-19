<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perwalian extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Modelperwalian');
    }

	public function index()
	{
		$data['daftar'] = $this->Modelperwalian->getdataperwalian();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian', $data);
	}
	public function insertperwalian()
	{
		$p = $this->input->post();
		$nrp = $this->session->userdata('nrp');
		foreach ($p['kode'] as  $value) {
			 if(array_key_exists("kode_mk", $value)){
			
            $kode_mk = $value['kode_mk'];
            $kelas = $value['kelas'];
			$approval = "pending";
			$dataperwalian = [
				'nrp'=>$nrp,
				'kode_mk'=>$kode_mk,
				'kelas' => $kelas,
				'approval' => $approval
			];
				$this->Modelperwalian->insertdataperwalian($dataperwalian);
            }
		  }
		  $this->db->where('nrp',$nrp)
		  ->update('mahasiswa',['status'=>'Perwalian']);
		  redirect('mahasiswa');
	}
	
	public function perwalian1()
	{
		$data['daftar1'] = $this->Modelperwalian->getdataperwalian1();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian1', $data);
	}


	public function perwalian2()
	{
		$data['daftar2'] = $this->Modelperwalian->getdataperwalian2();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian2', $data);
	}

	public function perwalian3()
	{
		$data['daftar3'] = $this->Modelperwalian->getdataperwalian3();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian3', $data);
	}

	public function perwalian4()
	{
		$data['daftar4'] = $this->Modelperwalian->getdataperwalian4();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian4', $data);
	}

	public function perwalian5()
	{
		$data['daftar5'] = $this->Modelperwalian->getdataperwalian5();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian5', $data);
	}

	public function perwalian6()
	{
		$data['daftar6'] = $this->Modelperwalian->getdataperwalian6();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian6', $data);
	}

	public function perwalian7()
	{
		$data['daftar7'] = $this->Modelperwalian->getdataperwalian7();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian7', $data);
	}

	public function perwalian8()
	{
		$data['daftar8'] = $this->Modelperwalian->getdataperwalian8();
		
		$this->template->load('layout/template', 'mahasiswa/perwalian8', $data);
	}

	public function perwaliansemua()
	{
		$data['daftarsemua'] = $this->Modelperwalian->getdataperwaliansemua();
		
		$this->template->load('layout/template', 'mahasiswa/perwaliansemua', $data);
	}
    public function jadwal()
	{
		$data['daftarjadwal'] = $this->Modelperwalian->getdatajadwal();
		$this->template->load('layout/template', 'mahasiswa/jadwal',$data);
	}
	
	public function jadwal1()
	{
		$data['daftarjadwal1'] = $this->Modelperwalian->getdatajadwal1();
		$this->template->load('layout/template', 'mahasiswa/jadwal1',$data);
	}
	public function jadwal2()
	{
		$data['daftarjadwal2'] = $this->Modelperwalian->getdatajadwal2();
		$this->template->load('layout/template', 'mahasiswa/jadwal2',$data);
	}
	public function jadwal3()
	{
		$data['daftarjadwal3'] = $this->Modelperwalian->getdatajadwal3();
		$this->template->load('layout/template', 'mahasiswa/jadwal3',$data);
	}
	public function jadwal4()
	{
		$data['daftarjadwal4'] = $this->Modelperwalian->getdatajadwal4();
		$this->template->load('layout/template', 'mahasiswa/jadwal4',$data);
	}
	public function jadwal5()
	{
		$data['daftarjadwal5'] = $this->Modelperwalian->getdatajadwal5();
		$this->template->load('layout/template', 'mahasiswa/jadwal5',$data);
	}
	public function jadwal6()
	{
		$data['daftarjadwal6'] = $this->Modelperwalian->getdatajadwal6();
		$this->template->load('layout/template', 'mahasiswa/jadwal6',$data);
	}
	public function jadwal7()
	{
		$data['daftarjadwal7'] = $this->Modelperwalian->getdatajadwal7();
		$this->template->load('layout/template', 'mahasiswa/jadwal7',$data);
	}
	public function jadwal8()
	{
		$data['daftarjadwal8'] = $this->Modelperwalian->getdatajadwal8();
		$this->template->load('layout/template', 'mahasiswa/jadwal8',$data);
	}
	public function jadwalsemua()
	{
		$data['daftarjadwalsemua'] = $this->Modelperwalian->getdatajadwalsemua();
		$this->template->load('layout/template', 'mahasiswa/jadwalsemua',$data);
    }
    public function bdatm()
	{
		$data['daftarkrs'] = $this->Modelperwalian->getdatakrs();
		$this->template->load('layout/template', 'mahasiswa/bdatm',$data);
	}
	
	public function batal()
	{
		$p = $this->input->post();
		foreach ($p['batal'] as $value) {
			$this->db->where('id_krsbaru',$value)
			->delete('krsbaru');
		}
		redirect('bdatm');
	}

    public function krs()
	{
		$data['daftarkrs'] = $this->Modelperwalian->getdatakrs();
		$this->template->load('layout/template', 'mahasiswa/krs', $data);
	}
	
	public function cetak(){
		$data['daftarkrs'] = $this->Modelperwalian->getdatakrs();
		$this->template->load('layout/template', 'mahasiswa/cetak',$data);
	}
}