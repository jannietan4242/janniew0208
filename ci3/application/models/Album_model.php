<?php

    class Album_model extends CI_Model {
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        // soft delete
        public function delete($where){
            $this->db->where($where);
            $this->db->update("album",[
                'is_deleted' => 1,
                'modified_date' => date("Y-m-d H:i:s"),
            ]);
        }

        // update data
        public function update($where,$update_sql){
            $this->db->where($where);
            $this->db->update("album",$update_sql);
        }

        // insert data
        public function insert($data_sql){
           
            $this->db->insert('album',$data_sql);
        }

        // to get multiple data
        public function get_where($where){
            $this->db->select("*");
            $this->db->where($where);
            $query = $this->db->get("album");
            return $query->result_array();
        }

        // to get only one data
        public function getOne($where){
            $this->db->select("*");
            $this->db->where($where);
            $query = $this->db->get("album");
            return $query->row_array();
        }
    }

?>