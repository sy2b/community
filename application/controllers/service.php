<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {
    /*小区服务首页*/
    public function index()
    {
        $this->load->view('district_service');
    }
    public function house_publish()
    {
        $this->load->view('house_publish');
    }
    public function job_publish()
    {
        $this->load->view('job_publish');
    }

    public function repair_publish()
    {
        $this->load->view('repair_publish');
    }


}