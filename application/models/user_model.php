<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

    public function check_username($val){
        return $this -> db -> get_where('t_user', array(
            'user_name' => $val
        )) -> row();
    }

    public function check_login($username,$pass){
        return $this -> db -> get_where('t_user', array(
            'user_name' => $username,
            'password' => $pass
        )) -> row();
    }


}




































?>