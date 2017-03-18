<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power extends CI_Controller {
    /*物业在线首页*/
    public function index()
    {
        $loginedUser = $this -> session -> userdata('loginedUser');
        $this -> load -> model('property_model');
        $rules = $this -> property_model -> get_rule_all();
        $activities = $this -> property_model -> get_activities_all();
        $announces = $this -> property_model -> get_announce_all();
        $suggests = $this -> property_model ->get_suggest_all();

        $this->load->view('power_ann',array(
            'rules' => $rules,
            'activities' => $activities,
            'announces' => $announces,
            'suggests' => $suggests
        ));
    }
    public function  delete_rule(){
        $rule_id = $this -> input -> get('id');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> delete_rule($rule_id);
        if($row){
            redirect('power/index');
        }else{
            echo "0";
        }
    }

    public function  delete_activity(){
        $activity_id = $this -> input -> get('id');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> delete_rule($activity_id);
        if($row){
            redirect('power/index');
        }else{
            echo "0";
        }
    }

    public function  delete_announce(){
        $announce_id = $this -> input -> get('id');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> delete_rule($announce_id);
        if($row){
            redirect('power/index');
        }else{
            echo "0";
        }
    }


    public function  push_rule(){
        $uid = $this -> session -> userdata('loginedUser')->user_id;
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $type = $this -> input -> post('type');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> push_rule($title,$content,$type,$uid);
        if($row){
            redirect('power/index');
        }
    }

    public function  push_activity(){
        $uid = $this -> session -> userdata('loginedUser')->user_id;
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $type = $this -> input -> post('type');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> push_rule($title,$content,$type,$uid);
        if($row){
            redirect('power/index');
        }
    }

    public function  push_announce(){
        $uid = $this -> session -> userdata('loginedUser')->user_id;
        $title = $this -> input -> post('title');
        $content = $this -> input -> post('content');
        $type = $this -> input -> post('type');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> push_rule($title,$content,$type,$uid);
        if($row){
            redirect('power/index');
        }
    }


    public function rule()
    {
        $this->load->view('push_rule');
    }
    public function activity()
    {
        $this->load->view('push_activity');
    }
    public function announcement()
    {
        $this->load->view('push_announcement');
    }

}