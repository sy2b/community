<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Suggest_model extends CI_Model {
    public function save_response($suggest_id,$resname,$content){
            $this->db->insert('t_response', array(
                'res_name' => $resname,
                'suggest_id' => $suggest_id,
                'res_content' => $content
            ));
            return $this->db->affected_rows();
        }
    public function update_state($suggest_id,$state){
        $this -> db -> set('state',$state);
        $this -> db -> where('suggest_id',$suggest_id);
        $this -> db -> update('t_suggest');
        return $this -> db -> affected_rows();
    }



    }

