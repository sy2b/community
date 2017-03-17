<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Power extends CI_Controller {
    /*物业在线首页*/
    public function index()
    {
        $this->load->view('power_ann');
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