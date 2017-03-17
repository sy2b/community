<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$loginedUser = $this -> session -> userdata('loginedUser');
		$this -> load -> model('property_model');
		$rules = $this -> property_model -> get_rule();
		$activities = $this -> property_model -> get_activities();
		$announces = $this -> property_model -> get_announce();
		$all = $this -> property_model -> get_all();
	/*	$nowrow = $this -> property_model -> get_nowproperty();*/
	/*	if($row){
			echo $row;
		}*/
		$this->load->view('index',array(
				'rules' => $rules,
				'activities' => $activities,
				'announces' => $announces,
				'all' => $all
				));
	}
	public function reg()
	{
		$this->load->view('reg');
	}





	public function login()
	{

		$this->load->view('login');
	}

	public function check_login(){
        $username = $this -> input -> post('username');
        $pass = $this ->input -> post('pass');
//        echo $username . '|' . $pass;
//        die();
        $this -> load -> model('user_model');
        $row = $this -> user_model -> check_login($username,$pass);
		if($row){
			$this -> session -> set_userdata('loginedUser', $row);
			redirect('welcome/index');
		}
	}
	public function outlogin(){
		$this -> session -> unset_userdata('loginedUser');
		redirect('welcome/login');
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

