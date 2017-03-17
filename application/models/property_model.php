<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Property_model extends CI_Model {

    public function get_rule(){
       /* $sql =$this -> db ->get('t_property');*/
        $sql = "select * from t_property where type_name = '规定' order by date desc limit 3";
        return $this->db->query($sql)->result();
    }
    public function get_activities(){
        /* $sql =$this -> db ->get('t_property');*/
        $sql = "select * from t_property where type_name = '活动' order by date desc limit 3";
        return $this->db->query($sql)->result();
    }
    public function get_announce(){
        /* $sql =$this -> db ->get('t_property');*/
        $sql = "select * from t_property where type_name = '公告' order by date desc limit 3";
        return $this->db->query($sql)->result();
    }
    public function get_all(){
        /* $sql =$this -> db ->get('t_property');*/
        $sql = "select * from t_property order by date desc limit 6";
        return $this->db->query($sql)->result();
    }


}