<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {
    /*物业在线首页*/
    public function index()
    {
        $this->load->view('property');
    }

    /*小区实景*/
    public function scenery()
    {
        $this->load->view('scenery');
    }
    public function free()
    {
        $this->load->view('free');
    }
    public function suggest_publish()
    {
        $this->load->view('suggest_publish');
    }

    public function rule_details()
    {
        $this->load->view('rule_details');
    }

    public function activities_details()
    {
        $this->load->view('activities_details');
    }

    public function announce_details()
    {
        $this->load->view('announce_details');
    }

}