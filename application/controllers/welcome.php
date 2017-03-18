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

	//验证用户名是否已存在
	public function check_username(){
	    $val = $this -> input -> get('val');
        $this -> load -> model('user_model');
        $row = $this -> user_model -> check_username($val);
        if($row){
            echo 'success';
        }else{
            echo 'fail';
        }
    }


    //验证注册
	public function check_reg(){
	    $username = $this -> input -> post('username');
        $name = $this -> input -> post('name');
        $password = $this -> input -> post('password');
        $password2 = $this -> input -> post('password2');
        $address = $this -> input -> post('address');
        $telephone = $this -> input -> post('telephone');
        $this -> load -> model('user_model');
        $row = $this -> user_model -> save_user($username,$name,$password,$address,$telephone);
        if($row > 0){
            redirect('welcome/login');
        }
    }

	public function login()
	{
		$this->load->view('login');
	}
    //验证登录
	public function check_login(){
        $username = $this -> input -> post('username');
        $pass = $this ->input -> post('pass');
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







	public function life_talk(){
		$this->load->view('life_talk');
	}



	public function person(){
		$this->load->view('person');
	}

	public function update_user(){
	    $loginedUser = $this -> session -> userdata('loginedUser');
        $name = $this -> input -> post('name');
        $pass = $this -> input -> post('pass');
        $address = $this -> input -> post('address');
        $telephone = $this -> input -> post('telephone');
        $this -> load -> model('user_model');
        $row = $this -> user_model -> update_user($name,$pass,$address,$telephone,$loginedUser -> user_id);
        if($row > 0){
            $user = $this -> session -> userdata('loginedUser');
            $user -> name = $name;
            $user -> password = $pass;
            $user -> address = $address;
            $user-> telephone = $telephone;
            $this -> session -> set_userdata('loginedUser', $user);
            echo '<script>alert("修改信息成功")</script>';
            redirect('welcome/person');
        }
    }


}

