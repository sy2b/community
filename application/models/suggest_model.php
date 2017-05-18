<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Suggest_model extends CI_Model {

    public function update_state($suggest_id,$state){
        $this -> db -> set('state',$state);
        $this -> db -> where('suggest_id',$suggest_id);
        $this -> db -> update('t_suggest');
        return $this -> db -> affected_rows();
    }


    public function get_suggests_all_by_page($offset, $limit){
        $sql = "select s.*, u.name 
                from t_suggest s, t_user u 
                where u.user_id = s.user_id order by s.date desc limit $offset, $limit";
        return $this -> db -> query($sql) -> result();
    }

    public function get_suggests_count(){
        $sql = "select s.*, u.name 
                from t_suggest s, t_user u 
                where u.user_id = s.user_id";
        return $this -> db -> query($sql) -> num_rows();
    }


    public function get_suggest_res_no($offset, $limit){
        $sql = "select s.*, u.name from t_suggest s, t_user u 
                where u.user_id = s.user_id and s.state = 0 
                order by date desc limit $offset, $limit";
        return $this -> db -> query($sql) -> result();
    }

    public function get_suggest_res_no_count(){
        $sql = "select s.*, u.name from t_suggest s, t_user u 
                where u.user_id = s.user_id and s.state = 0 
                order by date desc";
        return $this -> db -> query($sql) -> num_rows();
    }


    public function save_suggest($suggest,$uid){
        $this -> db -> insert('t_suggest', array(
            'sug_content' => $suggest,
            'user_id' => $uid
        ));
        return $this -> db -> affected_rows();
    }



}

