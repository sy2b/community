<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Job_model extends CI_Model {
    public function get_all_jobs($offset, $limit){
        $sql = "select * from t_job where job_type = 0 order by date desc limit $offset, $limit";
        return $this -> db -> query($sql) -> result();
    }

    public function get_job_count(){
        $sql = "select * from t_job where job_type = 0 order by date desc";
        return $this -> db -> query($sql) -> num_rows();
    }

    public function get_all_repairs($offset, $limit){
        $sql = "select * from t_job where job_type = 1 order by date desc limit $offset, $limit";
        return $this -> db -> query($sql) -> result();
    }

    public function get_repair_count(){
        $sql = "select * from t_job where job_type = 1 order by date desc";
        return $this -> db -> query($sql) -> num_rows();
    }

    public function save_job($job_name,$job_salary,$job_contactor,$contact_tel,$job_introduce,$user_id,$job_type){
        $this -> db -> insert('t_job',array(
            'job_name' => $job_name,
            'price' => $job_salary,
            'contact_name' => $job_contactor,
            'content_tel' => $contact_tel,
            'job_introduce' => $job_introduce,
            'user_id' => $user_id,
            'job_type' => $job_type
        ));
        return $this -> db -> affected_rows();
    }

    public function save_repair($job_name,$repair_fee,$contact_name,$contact_tel,$repair_introduce,$user_id,$job_type){
        $this -> db -> insert('t_job', array(
            'job_name' => $job_name,
            'price' => $repair_fee,
            'contact_name' => $contact_name,
            'content_tel' => $contact_tel,
            'job_introduce' => $repair_introduce,
            'user_id' => $user_id,
            'job_type' => $job_type
        ));
        return $this -> db -> affected_rows();
    }







}


























?>