<?php
    class AllData extends CI_MODEL{
        public function __construct(){
            $this->load->database();
        }
        public function getAll(){
            return $this->db->get('movie')->result_array();
        }public function getById($id){
            $res=$this->db->query('select * from movie where id="'.$id.'"')->result();
            return $res[0];
        }
    }