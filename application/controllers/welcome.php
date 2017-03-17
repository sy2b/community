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



    public function check_username(){
        $val = $this -> input -> get('val');
        $this -> load -> model('user_model');
        $row = $this -> user_model -> check_username($val);
        if($row){
            $this -> session -> set_userdata('loginedUser', $row);
            redirect('welcome/index');
        }else{
            echo 'fail';
        }
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
            echo 'success';
        }
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

