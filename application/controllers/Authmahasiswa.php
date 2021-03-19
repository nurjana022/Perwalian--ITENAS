<?php

class Authmahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {

        $this->form_validation->set_rules('nrp', 'nrp', 'required|trim');
        $this->form_validation->set_rules('pin', 'pin', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/loginmhs');
            // redirect('superadmin');
        } else {
            $this->_login();
        }
    }

   

    private function _login()
    {
        $usernames = $this->input->post('nrp');
        $passwords = $this->input->post('pin');
		
        $user = $this->db->get_where('mahasiswa', ['nrp' => $usernames])->row_array();

        if ($usernames == $user['nrp']) {
            if ($passwords == $user['pin']) {
                $data = [
					'nrp' => $user['nrp'],
					'nama_mhs' => $user['nama_mhs'],
					'email' => $user['email'],
					'no_telp' => $user['no_telp'],
					'batas_studi' => $user['batas_studi'],
					'jurusan' => $user['jurusan'],
					'fakultas' => $user['fakultas'],
					'nama_dsn' => $user['nama_dsn'],
					'foto' => $user['foto'],
					'semester' => $user['semester'],
                ];
				$this->session->set_userdata($data);
				redirect('mahasiswa');
            } else {
                $this->session->set_flashdata('errorPassword', 'PIN salah');
                redirect('Authmahasiswa');
            }
        } else {
            $this->session->set_flashdata('errorUsername', 'NRP Tidak Terdaftar');
            redirect('Authmahasiswa');
        }
    }

    public function forgot()
    {

        $this->form_validation->set_rules('email', 'email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/forgotmhs');
            // redirect('superadmin');
        } else {
            $this->_forgotmahasiswa();
        }
    }
     private function _forgotmahasiswa()
    {
        $email = $this->input->post('email');
		
        $user = $this->db->get_where('mahasiswa', ['email' => $email])->row_array();

        if ($email == $user['email']) {
                $data = [
					'email' => $user['email'],
                ];
				$this->session->set_userdata($data);
				redirect('Authmahasiswa/change');
            } else {
                $this->session->set_flashdata('errorEmail', 'Email Tidak Terdaftar');
                redirect('Authmahasiswa/forgot');
        }
    }
     public function change()
	{
		        $this->form_validation->set_rules('pin', 'pin', 'required|trim');
                $this->form_validation->set_rules('confpin', 'confpin', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/changemhs');
            // redirect('superadmin');
        } else {
            $this->_changemahasiswa();
        }
       function _changemahasiswa()
    {
        $pin = $this->input->post('pin');
        $confpin = $this->input->post('confpin');
		
        // $user = $this->db->get_where('dosen', ['email' => $email])->row_array();
$email= $this->session->userdata('email');
        if ($pin == $confpin) {
                $this->db->where('email',$email)
		  ->update('mahasiswa',['pin'=>$pin]);
		  redirect('Authmahasiswa');
            } else {
                $this->session->set_flashdata('errorEmail', 'PIN Tidak sesuai');
                redirect('Authmahasiswa/changemahasiswa');
        }
    }
}
	 public function logout()
    {
        $this->session->unset_userdata('nrp');
        $this->session->unset_userdata('nama_mhs');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('no_telp');
        $this->session->unset_userdata('batas_studi');
        $this->session->unset_userdata('jurusan');
        $this->session->unset_userdata('fakultas');
        $this->session->unset_userdata('nama_dsn');
        $this->session->unset_userdata('foto');
        $this->session->unset_userdata('semester');
        $this->session->set_flashdata('logout', 'berhasil');
        redirect('Authmahasiswa');
    }
	
}
