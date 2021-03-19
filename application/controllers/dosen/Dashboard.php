<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// var_dump('kontol');
		// die;
		$this->template->load('layout/templatedosen', 'dosen/index');
	}
}
