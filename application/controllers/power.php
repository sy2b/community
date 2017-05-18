<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power extends CI_Controller {
    /*物业在线首页*/
    public function index()
    {
        $loginedUser = $this -> session -> userdata('loginedUser');
        $this -> load -> model('property_model');
        $this -> load -> model('suggest_model');

        //分页
        $offset = $this -> uri -> segment(3);
        if($offset == ''){
            $offset = 0;
        }
        $this->load->library('pagination');
        $config['base_url'] = 'power/index';

        $config['total_rows'] = $this -> suggest_model -> get_suggests_count();

        $config['per_page'] = 4;
        $config['uri_segment'] = 3;

        $config['prev_link'] = '&lt;&lt;';
        $config['prev_tag_open'] = '<span>';
        $config['prev_tag_close'] = '</span>';
        $config['next_link'] = '&gt;&gt;';
        $config['next_tag_open'] = '<span>';
        $config['next_tag_close'] = '</span>';
        $config['cur_tag_open'] = '<span class="am-active"><a href="'. $config['base_url'] .'">';
        $config['cur_tag_close'] = '</a></span>';
        $config['num_tag_open'] = '<span>';
        $config['num_tag_close'] = '</span>';
        $this -> pagination -> initialize($config);

        $rules = $this -> property_model -> get_rule_all();
        $activities = $this -> property_model -> get_activities_all();
        $announces = $this -> property_model -> get_announce_all();
        $suggests = $this -> suggest_model ->get_suggests_all_by_page($offset, $config['per_page']);

        $this->load->view('power_ann',array(
            'rules' => $rules,
            'activities' => $activities,
            'announces' => $announces,
            'suggests' => $suggests,
            'total_rows' => $config['total_rows']
        ));
    }
    public function  delete_rule(){
        $rule_id = $this -> input -> get('id');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> delete_rule($rule_id);
        if($row){
            /*redirect('power/index');*/
            echo "1";
        }else{
            echo "0";
        }
    }

    public function  delete_activity(){
        $activity_id = $this -> input -> get('id');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> delete_rule($activity_id);
        if($row){
            /*redirect('power/index');*/
            echo "1";
        }else{
            echo "0";
        }
    }

    public function  delete_announce(){
        $announce_id = $this -> input -> get('id');
        $this -> load -> model('property_model');
        $row = $this -> property_model -> delete_rule($announce_id);
        if($row){
            /*redirect('power/index');*/
            echo "1";
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

    public function res_suggest(){
        $this -> load -> view('res_suggest');
    }


    //对建议回复
    public function save_res(){
        $loginedUser = $this -> session -> userdata('loginedUser');
        $suggest_id = $this -> input -> post('suggest_id');
        $res_content = $this -> input -> post('content');
        $this -> load -> model('response_model');
        $this -> load -> model('suggest_model');
        $row = $this -> response_model -> save_res($loginedUser -> name,$suggest_id,$res_content);
        if($row > 0){
            $state = 1;
            $result = $this -> suggest_model -> update_state($suggest_id,$state);
            if($result > 0){
                redirect('property/index');
            }
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