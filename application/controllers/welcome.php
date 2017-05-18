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
        $building = $this -> input -> post('building');
        $layer = $this -> input -> post('layer');
        $family = $this -> input -> post('family');
        $address = $building. '栋' .$layer. '层第' .$family. '单元';
        $telephone = $this -> input -> post('telephone');
        $this -> load -> model('user_model');
        $user_type = 0;
        $row = $this -> user_model -> save_user($username,$name,$password,$address,$telephone,$user_type);
        if($row > 0){
            redirect('welcome/login');
        }
    }

	public function login(){
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
			echo 'success';
		}else{
		    echo 'fail';
        }
	}

	//退出
	public function outlogin(){
		$this -> session -> unset_userdata('loginedUser');
		redirect('welcome/login');
	}



	public function life_talk(){
	    $loginedUser = $this -> session -> userdata('loginedUser');
        $this -> load -> model('talk_model');

        //分页
        $offset = $this -> uri -> segment(3);
        if($offset == ''){
            $offset = 0;
        }
        $this->load->library('pagination');
        $config['base_url'] = 'welcome/life_talk';

        $config['total_rows'] = $this -> talk_model -> get_talks_count();

        $config['per_page'] = 5;
        $config['uri_segment'] = 3;

//        你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
        $config['first_link'] = '';
        $config['last_link'] = '';
//        你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。

        $config['prev_link'] = '&lt;&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="am-active"><a href="'. $config['base_url'] .'">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this -> pagination -> initialize($config);



        //$talks = $this -> talk_model -> get_talk();
        $talks = $this -> talk_model -> get_talk_by_page($offset, $config['per_page']);
        $this->load->view('life_talk', array(
		    'talks' => $talks,
            'total_rows' => $config['total_rows']
        ));
	}

	public function add_talk(){
	    $user_id = $this -> input -> post('hid');
        $talk_content = $this -> input -> post('talk_content');
        $this -> load -> model('talk_model');
        $row = $this -> talk_model -> save_talk($user_id, $talk_content);
        if($row){
            redirect('welcome/life_talk');
        }
	}


	public function person(){
		$this->load->view('person');
	}

	public function update_user(){
	    $loginedUser = $this -> session -> userdata('loginedUser');
        $name = $this -> input -> get('name');
        $pass = $this -> input -> get('pass');
        $address = $this -> input -> get('address');
        $telephone = $this -> input -> get('telephone');
        $this -> load -> model('user_model');
        $row = $this -> user_model -> update_user($name,$pass,$address,$telephone,$loginedUser -> user_id);
        if($row > 0){
            $user = $this -> session -> userdata('loginedUser');
            $user -> name = $name;
            $user -> password = $pass;
            $user -> address = $address;
            $user-> telephone = $telephone;
            $this -> session -> set_userdata('loginedUser', $user);
            echo 'success';
        }else{
            echo 'fail';
        }
    }


}

