<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Job_model extends CI_Model {
    public function get_all_jobs(){
        $sql = "select * from t_job where job_type in ('月嫂','钟点工') order by date desc";
        return $this -> db -> query($sql) -> result();
    }

    public function get_all_repairs(){
        $sql = "select * from t_job where job_type in ('招修') order by date desc";
        return $this -> db -> query($sql) -> result();
    }





}


























?>