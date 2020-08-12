<?php

    class Album_model extends CI_Model {
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function delete($where){
            $this->db->where($where);
            $this->db->update("album",[
                'is_deleted' => 1,
                'modified_date' => date("Y-m-d H:i:s"),
            ]);
        }

        public function update($where,$update_sql){
            $this->db->where($where);
            $this->db->update("album",$update_sql);
        }

        public function insert($data_sql){
            $this->db->where($where);
            $this->db->update("album",$update_sql);
        }

        public function get_where(){
            $this->db->select("*");
            $this->db->where([]);
            $query = $this->db->get("album");
            return $query->result_array();
        }
    }

?>