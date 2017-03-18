<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class House_model extends CI_Model {
    public function get_all_house(){
        $sql = "select * from t_house order by post_date desc";
        return $this ->db -> query($sql) -> result();
    }

    public function get_house_by_house_id($house_id){
        return $this -> db -> get_where('t_house', array(
            'house_id' => $house_id
        )) -> row();
    }


}





























?>