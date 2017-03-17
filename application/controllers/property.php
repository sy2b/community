<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {
    /*物业在线首页*/
    public function index(){
        /*$loginedUser = $this -> session -> userdata('loginedUser');*/
        $this->load->view('property');
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
    public function rule_details()
    {
        $this->load->view('rule_details');
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