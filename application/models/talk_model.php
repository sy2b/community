<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Talk_model extends CI_Model {
        public function get_talk(){
            $sql = "select t.*, u.name from t_user u, t_talk t where t.user_id = u.user_id order by date desc";
            return $this -> db -> query($sql) -> result();
        }


        public function get_talk_by_page($offset, $limit){
            $sql = "select t.*, u.name from t_user u, t_talk t where t.user_id = u.user_id order by date desc limit $offset, $limit";
            return $this -> db -> query($sql) -> result();
        }

        public function get_talks_count(){
            return $this -> db -> count_all('t_talk');
        }

        public function save_talk($user_id, $talk_content){
            $this -> db -> insert('t_talk', array(
                'user_id' => $user_id,
                'talk_content' => $talk_content
            ));
            return $this -> db -> affected_rows();
        }







    }
?>