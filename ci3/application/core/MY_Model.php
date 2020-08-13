<?php
    class MY_Model extends CI_model {
        protected $table_name = "album";

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        // get total how many rows
        public function total_record($where=[]) {
            $this->db->select("COUNT(*) AS total");
            $this->db->where($where);
            $query = $this->db->get($this->table_name);
            $data = $query->row_array();
            return $data['total'];
        }

        // fetch particular rows
        public function fetch($where=[], $start, $item_per_page) {

            // SELECT * FROM tablename LIMIT $start, $item_per_page
            $this->db->select("*");
            $this->db->where($where);
            $this->db->limit($item_per_page, $start);

            $query = $this->db->get($this->table_name);
            return $query->result_array();
        }

        // soft delete
        public function delete($where){
            $this->db->where($where);
            $this->db->update($this->table_name,[
                'is_deleted' => 1,
                'modified_date' => date("Y-m-d H:i:s"),
            ]);
        }

        // update data
        public function update($where,$update_sql){
            $this->db->where($where);
            $this->db->update($this->table_name,$update_sql);
        }

        // insert data
        public function insert($data_sql){
           
            $this->db->insert($this->table_name,$data_sql);
        }

        // to get multiple data
        public function get_where($where=[]){
            $this->db->select("*");
            $this->db->where($where);
            $query = $this->db->get($this->table_name);
            return $query->result_array();
        }

        // to get only one data
        public function getOne($where){
            $this->db->select("*");
            $this->db->where($where);
            $query = $this->db->get($this->table_name);
            return $query->row_array();
        }
    }
?>