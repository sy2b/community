<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
    /*小区服务首页*/
    public function index(){
        $this->load->view('district_service');
    }


    public function get_houses(){
        $page = $this -> input -> get('page');
        $pageSize = $this -> input -> get('pageSize');
        $this -> load -> model('house_model');
        $house_count = $this -> house_model -> get_house_count();
        $houses = $this -> house_model -> get_all_houses(($page-1)*$pageSize, $pageSize);
        $house_info = array(
            'house_count' => $house_count,
            'houses' => $houses
        );
        echo json_encode($house_info);
    }

    public function get_jobs(){
        $page = $this -> input -> get('page');
        $pageSize = $this -> input -> get('pageSize');
        $this -> load -> model('job_model');
        $job_count = $this -> job_model -> get_job_count();
        $jobs = $this -> job_model -> get_all_jobs(($page-1)*$pageSize, $pageSize);
        $job_info = array(
            'job_count' => $job_count,
            'jobs' => $jobs
        );
        echo json_encode($job_info);
    }

    public function get_repairs(){
        $page = $this -> input -> get('page');
        $pageSize = $this -> input -> get('pageSize');
        $this -> load -> model('job_model');
        $repair_count = $this -> job_model -> get_repair_count();
        $repairs = $this -> job_model -> get_all_repairs(($page-1)*$pageSize, $pageSize);
        $repair_info = array(
            'repair_count' => $repair_count,
            'repairs' => $repairs
        );
        echo json_encode($repair_info);
    }

    public function house_publish()
    {
        $this->load->view('house_publish');
    }
    //发布租房
    public function add_house(){
        $user_id = $this -> input -> post('hid');
        $house_title = htmlspecialchars($this -> input -> post('house_title'));
        $rent_sell = htmlspecialchars($this -> input -> post('rent_sell'));
        $house_size = htmlspecialchars($this -> input -> post('house_size'));
        $price = htmlspecialchars($this -> input -> post('price'));
        $contact_name = htmlspecialchars($this -> input -> post('contact_name'));
        $contact_tel = htmlspecialchars($this -> input -> post('contact_tel'));
        $house_introduce = htmlspecialchars($this -> input -> post('house_introduce'));
        $this -> load -> model('house_model');
        //上传图片
        $config['upload_path'] = './uploads/';//设置上传路径
        $config['allowed_types'] = 'gif|jpg|png';//设置上传文件的格式
        $config['max_size'] = '3072';//设置文件的大小
        $config['file_name'] = date("YmdHis") . '_' . rand(10000,99999);//设置文件的文件名
        $this->load->library('upload', $config);
        $this -> upload -> do_upload('house_img');//表单里的name属性值
        $upload_data = $this -> upload -> data();

        if($upload_data['file_size'] > 0){
            $photo_url = 'uploads/' . $upload_data['file_name'];
            $row = $this -> house_model -> save_house($house_title,$rent_sell,$house_size,$price,$contact_name,$contact_tel,$photo_url,$house_introduce,$user_id);
            if($row > 0){
                echo 'success';
                redirect("service/index");
            }
        }
    }


    //发布兼职
    public function add_jobs(){
        $user_id = $this -> input -> post('hid');
        $job_name = $this -> input -> post('job_name');
        $job_salary = $this -> input -> post('job_salary');
        $job_contactor = $this -> input -> post('job_contactor');
        $contact_tel = $this -> input -> post('contact_tel');
        $job_introduce = $this -> input -> post('job_introduce');
        $job_type = 0;
        $this -> load -> model('job_model');
        $row = $this -> job_model -> save_job($job_name,$job_salary,$job_contactor,$contact_tel,$job_introduce,$user_id,$job_type);
        if($row > 0){
            redirect('service/index');
        }


    }

    public function house_details(){
        $loginedUser = $this -> session -> userdata('loginedUser');
        $house_id = $this -> input -> get('house_id');
        $this -> load -> model('house_model');
        $house = $this -> house_model -> get_house_by_id($house_id);
        if($house){
            $this -> load -> view('house_details', array(
                'house' => $house
            ));
        }

    }


    public function job_publish(){
        $this->load->view('job_publish');
    }

    public function repair_publish()
    {
        $this->load->view('repair_publish');
    }

    //发布报修
    public function add_repair(){
        $user_id = $this -> input -> post('user_id');
        $job_name = $this -> input -> post('hid');
        $repair_fee = $this -> input -> post('repair_fee');
        $contact_name = $this -> input -> post('contact_name');
        $contact_tel = $this -> input -> post('contact_tel');
        $repair_introduce = $this -> input -> post('repair_introduce');
        $this -> load -> model('job_model');
        $job_type = 1;
        $row = $this -> job_model -> save_repair($job_name,$repair_fee,$contact_name,$contact_tel,$repair_introduce,$user_id,$job_type);
        if($row > 0){
            redirect('service/index');
        }
    }




}