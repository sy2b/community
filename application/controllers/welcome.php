<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
	public function reg()
	{
		$this->load->view('reg');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function life_talk()
	{
		$this->load->view('life_talk');
	}
	public function person()
	{
		$this->load->view('person');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */