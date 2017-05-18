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

    public function save_user($username,$name,$password,$address,$telephone,$user_type){
        $this -> db -> insert('t_user', array(
            'user_name' => $username,
            'name' => $name,
            'password' => $password,
            'address' => $address,
            'telephone' => $telephone,
            'user_type' => $user_type
        ));
        return $this -> db -> affected_rows();
    }

    public function get_user_by_user_id($user_id){
        return $this -> db -> get_where('t_user', array(
            'user_id' => $user_id
        )) -> row();
    }

    public function update_user($name,$pass,$address,$telephone,$user_id){
        $this -> db -> where('user_id', $user_id);
        $this -> db -> update('t_user', array(
            'name' => $name,
            'password' => $pass,
            'address' => $address,
            'telephone' => $telephone,
        ));
        return $this -> db -> affected_rows();
    }



}




































?>