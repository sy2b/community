<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {
    /*物业在线首页*/
    public function index(){
        $loginedUser = $this -> session -> userdata('loginedUser');
        $this -> load -> model('property_model');
        $this -> load -> model('suggest_model');

        //分页
        $offset = $this -> uri -> segment(3);
        if($offset == ''){
            $offset = 0;
        }
        $this->load->library('pagination');
        $config['base_url'] = 'property/index';

        $count = $this -> property_model -> get_suggests_response_count();

        $number = (integer)$count -> num;

        $config['total_rows'] = $number;
//        你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
        $config['first_link'] = '';
        $config['last_link'] = '';
//        你希望在分页的左边显示“第一页”链接的名字。如果你不希望显示，可以把它的值设为 FALSE 。
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
        $suggests = $this -> property_model ->get_suggests_response_by_page($offset,$config['per_page']);

        $this->load->view('property',array(
            'rules' => $rules,
            'activities' => $activities,
            'announces' => $announces,
            'suggests' => $suggests,
            'total_rows' => $config['total_rows']
        ));

    }
    public function save_suggest(){
        $user_id = $this -> input -> post('hid');
        $suggest = $this -> input -> post('suggest');
        $this -> load -> model('property_model');
        $this -> load -> model('suggest_model');
        $result = $this -> suggest_model -> save_suggest($suggest,$user_id);
        if($result > 0){
            redirect("property/suggest_res_no");
        }else{
            echo "0";
        }
    }

    // 未回复建议
    public function suggest_res_no(){
        $this -> load -> model('suggest_model');
        //分页
        $offset = $this -> uri -> segment(3);
        if($offset == ''){
            $offset = 0;
        }
        $this->load->library('pagination');
        $config['base_url'] = 'property/suggest_res_no';

        $config['total_rows'] = $this -> suggest_model -> get_suggest_res_no_count();
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
        $suggests_no = $this -> suggest_model -> get_suggest_res_no($offset, $config['per_page']);
        $this -> load -> view('suggest_res_no', array(
            'suggests_no' => $suggests_no,
            'total_rows' => $config['total_rows']
        ));
    }


    /*小区实景*/
    public function scenery()
    {
        $this->load->view('scenery');
    }
    /*用户缴费*/
    public function free()
    {
        $this->load->view('free');
    }
    /*投诉建议*/
    public function suggest_publish()
    {
        $this->load->view('suggest_publish');
    }
      /*规定详情*/


    public function details(){
        $pro_id = $this -> uri -> segment(3);
        $this -> load -> model('property_model');
        $detail = $this -> property_model -> get_detail($pro_id);
        if($detail){
            $this->load->view('details', array(
                'detail' => $detail
            ));
        }

    }
    /*活动详情*/
    public function activities_details()
    {
        $this->load->view('activities_details');
    }
    /*公告详情*/
    public function announce_details()
    {
        $this->load->view('announce_details');
    }

}