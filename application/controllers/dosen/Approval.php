<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Modelapproval');
    }
	public function index()
	{
		$data['daftarmahasiswa'] = $this->Modelapproval->getdatamahasiswa();
		$this->template->load('layout/templatedosen', 'dosen/approval', $data);
	}
	public function approve($nrp)
	{
		$data['detail'] = $this->Modelapproval->getdataapprove($nrp);
		$this->template->load('layout/templatedosen', 'dosen/approval2',$data);
	}
	public function insertapproval()
	{
		
		$p = $this->input->post();
		$nrp = $p['nrp'];
		foreach ($p['approval'] as $key => $value) {
			$id_krsbaru = $key;
            $approval = $value;
		  $this->db->where('id_krsbaru',$id_krsbaru)
		  ->update('krsbaru',['approval'=>$approval]);

		  $this->db->where('nrp',$nrp)
		  ->update('mahasiswa',['status'=>'Selesai']);
		} 
		  redirect('daftarmhs'); 
    }
}