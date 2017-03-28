<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
    /*小区服务首页*/
    public function index(){
        $this -> load -> model('house_model');
        $this -> load -> model('job_model');
        $houses = $this -> house_model -> get_all_house();
        $jobs = $this -> job_model -> get_all_jobs();
        $repairs = $this -> job_model -> get_all_repairs();

        $this->load->view('district_service', array(
            'houses' => $houses,
            'jobs' => $jobs,
            'repairs' => $repairs
        ));

    }



    public function house_publish()
    {
        $this->load->view('house_publish');
    }

    public function add_jobs(){
        $loginedUser = $this -> session -> userdata('loginedUser');
        $job_type = $this -> input -> post('job_type');
        $job_salary = $this -> input -> post('job_salary');
        $job_contactor = $this -> input -> post('job_contactor');
        $contact_tel = $this -> input -> post('contact_tel');
        $job_introduce = $this -> input -> post('job_introduce');
        $this -> load -> model('job_model');



    }

    public function house_details(){
        $house_id = $this -> input -> get('house_id');
        $this -> load -> model('house_model');
        $house = $this -> house_model -> get_house_by_house_id($house_id);
        $this -> load -> view('house_details', array(
            'house' => $house
        ));
    }


    public function job_publish(){
        $this->load->view('job_publish');
    }

    public function repair_publish()
    {
        $this->load->view('repair_publish');
    }


}