<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Response_model extends CI_Model {
    public function save_res($res_name, $suggest_id, $res_content){
        $this -> db -> insert('t_response', array(
            'res_name' => $res_name,
            'suggest_id' => $suggest_id,
            'res_content' => $res_content
        ));
        return $this -> db -> affected_rows();
    }



}
?>