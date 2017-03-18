<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Property_model extends CI_Model {

    public function get_rule(){
        $sql = "select * from t_property where type_name = '规定' order by date desc limit 3";
        return $this->db->query($sql)->result();
    }
    public function get_activities(){
        $sql = "select * from t_property where type_name = '活动' order by date desc limit 3";
        return $this->db->query($sql)->result();
    }
    public function get_announce(){
        $sql = "select * from t_property where type_name = '公告' order by date desc limit 3";
        return $this->db->query($sql)->result();
    }
    public function get_all(){
        $sql = "select * from t_property order by date desc limit 6";
        return $this->db->query($sql)->result();
    }
    public function get_rule_all(){
        $sql = "select t_property.*,t_user.name from t_property,t_user where type_name='规定' and t_property.user_id=t_user.user_id order by date DESC";
        return $this->db->query($sql)->result();
    }
    public function get_activities_all(){
        $sql = "select t_property.*,t_user.name from t_property,t_user where type_name='活动' and t_property.user_id=t_user.user_id order by date DESC";
        return $this->db->query($sql)->result();
    }
    public function get_announce_all(){
        $sql = "select t_property.*,t_user.name from t_property,t_user where type_name='公告' and t_property.user_id=t_user.user_id order by date DESC";
        return $this->db->query($sql)->result();
    }
    public function get_suggest_all(){
        $sql = "select t_suggest.*,t_user.name from t_suggest,t_user where t_suggest.user_id=t_user.user_id order by date DESC";
        return $this->db->query($sql)->result();
    }
    public  function save_suggest($suggest,$uid){
        $this->db->insert('t_suggest', array(
            'sug_content' => $suggest,
            'user_id' => $uid,
        ));
        return $this->db->affected_rows();
    }
    public function delete_rule($rule_id){
        $sql = "delete from t_property where pro_id in($rule_id)";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
    public function delete_activity($rule_id){
        $sql = "delete from t_property where pro_id in($rule_id)";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
    public function delete_announce($rule_id){
        $sql = "delete from t_property where pro_id in($rule_id)";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function push_rule($title,$content,$type,$uid){
        $this->db->insert('t_property', array(
            'pro_content' => $content,
            'pro_title' => $title,
            'type_name' => $type,
            'user_id' => $uid
        ));
        return $this->db->affected_rows();
    }

    public function push_activity($title,$content,$type,$uid){
        $this->db->insert('t_property', array(
            'pro_content' => $content,
            'pro_title' => $title,
            'type_name' => $type,
            'user_id' => $uid
        ));
        return $this->db->affected_rows();
    }

    public function push_announce($title,$content,$type,$uid){
        $this->db->insert('t_property', array(
            'pro_content' => $content,
            'pro_title' => $title,
            'type_name' => $type,
            'user_id' => $uid
        ));
        return $this->db->affected_rows();
    }


}