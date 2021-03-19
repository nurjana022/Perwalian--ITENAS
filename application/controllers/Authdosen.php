<?php

class Authdosen extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {

        $this->form_validation->set_rules('npp', 'npp', 'required|trim');
        $this->form_validation->set_rules('pin', 'pin', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/logindsn');
            // redirect('superadmin');
        } else {
            $this->_login();
        }
    }

   

    private function _login()
    {
        $usernames = $this->input->post('npp');
        $passwords = $this->input->post('pin');
		
        $user = $this->db->get_where('dosen', ['npp' => $usernames])->row_array();

        if ($usernames == $user['npp']) {
            if ($passwords == $user['pin']) {
                $data = [
					'npp' => $user['npp'],
					'nama_dsn' => $user['nama_dsn'],
					'email' => $user['email'],
					'no_telp' => $user['no_telp'],
					'alamat' => $user['alamat'],
					'foto' => $user['foto'],
					'status' => $user['status'],
                ];
				$this->session->set_userdata($data);
				redirect('dosen');
            } else {
                $this->session->set_flashdata('errorPassword', 'PIN salah');
                redirect('Authdosen');
            }
        } else {
            $this->session->set_flashdata('errorUsername', 'NPP Tidak Terdaftar');
            redirect('Authdosen');
        }
    }

     public function forgot()
    {

        $this->form_validation->set_rules('email', 'email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/forgotdsn');
            // redirect('superadmin');
        } else {
            $this->_forgotdosen();
        }
    }
     private function _forgotdosen()
    {
        $email = $this->input->post('email');
		
        $user = $this->db->get_where('dosen', ['email' => $email])->row_array();

        if ($email == $user['email']) {
                $data = [
					'email' => $user['email'],
                ];
				$this->session->set_userdata($data);
				redirect('Authdosen/change');
            } else {
                $this->session->set_flashdata('errorEmail', 'Email Tidak Terdaftar');
                redirect('Authdosen/forgot');
        }
    }

    public function change()
	{
		        $this->form_validation->set_rules('pin', 'pin', 'required|trim');
                $this->form_validation->set_rules('confpin', 'confpin', 'required|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/changedsn');
            // redirect('superadmin');
        } else {
            $this->_changedosen();
        }
       function _changedosen()
    {
        $pin = $this->input->post('pin');
        $confpin = $this->input->post('confpin');
		
        // $user = $this->db->get_where('dosen', ['email' => $email])->row_array();
$email= $this->session->userdata('email');
        if ($pin == $confpin) {
                $this->db->where('email',$email)
		  ->update('dosen',['pin'=>$pin]);
		  redirect('Authdosen');
            } else {
                $this->session->set_flashdata('errorEmail', 'PIN Tidak sesuai');
                redirect('Authdosen/changedosen');
        }
    }
}
	 public function logoutdosen()
    {
        $this->session->unset_userdata('npp');
        $this->session->unset_userdata('nama_dsn');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('alamat');
		$this->session->unset_userdata('no_telp');
		$this->session->unset_userdata('foto');
		
        $this->session->set_flashdata('logout', 'berhasil');
        redirect('Authdosen');
    }
}
