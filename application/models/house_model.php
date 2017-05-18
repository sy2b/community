<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class House_model extends CI_Model {
    public function get_all_houses($offset, $limit){
        $sql = "select * from t_house order by post_date desc limit $offset, $limit";
        return $this ->db -> query($sql) -> result();
    }

    public function get_house_count(){
        $sql = "select * from t_house order by post_date desc";
        return $this ->db -> query($sql) -> num_rows();
    }

    public function get_all_house_by_page($offset, $limit){
        $sql = "select * from t_house order by post_date desc limit $offset, $limit";
        return $this ->db -> query($sql) -> result();
    }



    public function get_house_by_id($house_id){
        $sql = "select h.*, u.name from t_house h, t_user u where u.user_id = h.user_id and h.house_id = $house_id";
        return $this ->db -> query($sql) -> row();
    }




    public function save_house($house_title,$rent_sell,$house_size,$price,$contact_name,$contact_tel,$photo_url,$house_introduce,$user_id){
        $this -> db -> insert('t_house', array(
            'house_title' => $house_title,
            'rent_sell' => $rent_sell,
            'house_size' => $house_size,
            'price' => $price,
            'contact_name' => $contact_name,
            'contact_tel' => $contact_tel,
            'house_img' => $photo_url,
            'house_introduce' => $house_introduce,
            'user_id' => $user_id
        ));
        return $this -> db -> affected_rows();
    }








}





























?>