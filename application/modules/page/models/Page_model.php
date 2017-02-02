<?php
if (!defined('BASEPATH'))
	exit('No direct access is allowed');

class Page_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        function checklogin($username,$password){
		$this->db->select('id');
		$this->db->from('accounts');
		$this->db->where('username', $username );
		$this->db->where('password', $password );
		$this->db->where('status', 'active' );

		$result = $this->db->get()->result();

		if(empty($result)){
			return 0;
		} else {
			return $result[0]->id;
		}
            }

        function home_achievers_1($id_1){
            $home_achievers_1="SELECT * FROM `achievers` WHERE `id`='".$id_1."' LIMIT 1";
                $the_achievers=$this->db->query($home_achievers_1);/*
                $achievers=$this->db->get('achievers');*/
                return $the_achievers->result();
            }
        function home_achievers_2($id_2){
            $home_achievers_2="SELECT * FROM `achievers` WHERE `id`='".$id_2."' LIMIT 1";
                $the_achievers=$this->db->query($home_achievers_2);/*
                $achievers=$this->db->get('achievers');*/
                return $the_achievers->result();
            }
        function home_achievers_3($id_3){
            $home_achievers_3="SELECT * FROM `achievers` WHERE `id`='".$id_3."' LIMIT 1";
                $the_achievers=$this->db->query($home_achievers_3);/*
                $achievers=$this->db->get('achievers');*/
                return $the_achievers->result();
            }

        function checkregistration($fields){
            $this->db->insert('employerinfo',$fields);
            return $this->db->insert_id();
        }

        function get_achievers() {
            $achievers=$this->db->get('achievers');
            return $achievers->result();
        }
}
